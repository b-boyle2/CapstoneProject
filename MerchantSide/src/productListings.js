document.addEventListener("DOMContentLoaded", () => {
    const weaponTypeSelection = document.querySelector("#weaponTypeSelection");
    let tableName = weaponTypeSelection.value;

    const productsTableBody = document.querySelector(".listedItems tbody");
    const filters = document.getElementsByClassName("subcategoryFilter");
    
    let allWeapons = [];

    function loadWeapons(tableName) {
        fetch(`src/getProducts.php?table=${tableName}`)
            .then(res=> res.json())
            .then(data => {
                allWeapons = data;
                displayWeapons(allWeapons, tableName);
            })
           /*.then(res => res.text())
            .then(data => {
            console.log(data);        // logs raw PHP output
            document.body.innerHTML = data; // optional: display it in page
            })*/
        .catch(err => console.error(err));

        for (const filter of filters) {
            filter.style.display = "none";
        }

        showFilter(tableName);
    }

    function filterBySubcategory(subcategoryID) {
        if (!subcategoryID) {
            displayWeapons(allWeapons);
            return;
        }

        const filtered = allWeapons.filter(
            weapon => weapon.Subcategory_ID == subcategoryID
        );

        displayWeapons(filtered);
    }
    
    function displayWeapons(data, tableName) {
        //clears previous results
        if (productsTableBody) {
            productsTableBody.innerHTML = '';
        }
        
        data.forEach(weapon => {
            const row = document.createElement("tr");
            row.dataset.weaponID = weapon.ID;
            row.dataset.weaponType = tableName;

            const iconCell = document.createElement("td");
            iconCell.classList.add("editButton");
            const editIcon = document.createElement("img");
            editIcon.classList.add("editIcon");
            editIcon.src = "Images/pencilIcon.svg";
            iconCell.appendChild(editIcon);

            const name = document.createElement("td");
            name.textContent = weapon.Name;

            const imgLink = document.createElement("td");
            imgLink.textContent = weapon.Image;

            const subcategory = document.createElement("td");
            subcategory.textContent = weapon.Subcategory;

            const price = document.createElement("td");
            price.classList.add("alignRight");
            price.textContent = weapon.Price;

            row.appendChild(iconCell);
            row.appendChild(name);
            row.appendChild(imgLink);
            row.appendChild(subcategory);
            row.appendChild(price);

            productsTableBody.appendChild(row);
        })
    }
    
    
    // Show the correct filter for the selected table
    function showFilter(tableName) {
        const filters = Array.from(document.getElementsByClassName("subcategoryFilter")
    
    );

        // Hide all filters
        filters.forEach(f => {
            f.style.display = "none";

            // reset displayed text to "All"
            const selected = f.querySelector(".selected");
            if (selected) selected.textContent = "All";
        });

        const currentFilter = document.getElementById(tableName);
        if (!currentFilter) return;

        currentFilter.style.display = "flex"; // show current filter

        const options = currentFilter.querySelector(".options");
        const selected = currentFilter.querySelector(".selected");

        if (!options || !selected) return;

        // Click listener to toggle options (only on the "selected" element)
        currentFilter.onclick = (e) => {
            e.stopPropagation(); // Prevent event from bubbling up
            options.style.display = options.style.display === "block" ? "none" : "block";
        }

        // Attach click listeners for the options
        options.querySelectorAll("div").forEach(opt => {
            opt.onclick = (e) => {
                e.stopPropagation(); // Prevent parent click from firing
                const subcategoryID = parseInt(opt.dataset.value);
                selected.textContent = opt.textContent;
                options.style.display = "none";
                filterBySubcategory(subcategoryID);
            }
        });

        // Close dropdown if click is outside this filter
        document.addEventListener('click', (e) => {
            if (!currentFilter.contains(e.target)) {
                options.style.display = "none";
            }
        });
    }

    // When weapon table changes
    weaponTypeSelection.addEventListener("change", () => {
        const tableName = weaponTypeSelection.value;
        loadWeapons(tableName);
    });

    loadWeapons(tableName);

    weaponTypeSelection.addEventListener("change", () => {
    tableName = weaponTypeSelection.value;
    loadWeapons(tableName);
    })

    // For the addWeaponForm
    const form = document.getElementById("addWeaponForm")

    const weaponTypeSelect = document.getElementById("weaponTypeSelect");

    // map weapon types to which divs should be visible
    const addWeaponFormDivs = {
        swords: document.getElementById("swordsForm"),
        daggers: document.getElementById("daggersForm"),
        blunthandweapons: document.getElementById("bluntHandsForm"),
        polearms: document.getElementById("polearmsForm"),
        ranged: document.getElementById("rangedForm")
    };

    function updateWeaponForms(divCollection, selectedType) {
        //hide all addWeaponFormDivs first
        Object.values(divCollection).forEach(div => div.style.display = "none");
        //only show the relevant addWeaponFormDiv and disable all other entry forms
        Object.entries(divCollection).forEach(([key, div]) => {
            if (key === selectedType) {
                div.style.display = "flex";
                div.querySelectorAll("input, select").forEach(el => el.disabled = false);
            } else {
                div.style.display = "none";
                div.querySelectorAll("input, select").forEach(el => el.disabled = true);
            }
        });
    }

    updateWeaponForms(addWeaponFormDivs, weaponTypeSelect.value);

    document.querySelectorAll("#addWeaponForm input[type='file']").forEach(input => {
        const label = document.querySelector(`label[for='${input.id}']`);
        if (!label) return;

        label.textContent = input.dataset.placeholder || "Upload Image";

        input.addEventListener("change", function () {
            label.textContent = this.files.length
                ? this.files[0].name
                : (input.dataset.placeholder || "Upload Image");
        });
    });

    weaponTypeSelect.addEventListener("change", () => updateWeaponForms(addWeaponFormDivs, weaponTypeSelect.value));

    form.addEventListener("submit", function(event){
        event.preventDefault(); // prevent page reload
        document.querySelectorAll(".weaponSpecificForm").forEach(form => {
            const isVisible = form.offsetParent !== null; // visible check

            form.querySelectorAll("input, select, textarea").forEach(el => {
                el.disabled = !isVisible;
            });
        });
        
        const formData = new FormData(form);
        const weaponType = formData.get('weaponTypeSelect');

        let tableToAddTo = '';
        if (weaponType == "swords") {
            tableToAddTo = "src/addNewSword.php";
        }
        else if (weaponType=="daggers"){
            tableToAddTo = "src/addNewDagger.php";
        }
        else if (weaponType=="blunthandweapons"){
            tableToAddTo = "src/addNewBluntHandWeapon.php";
        }
        else if (weaponType=="polearms"){
            tableToAddTo = "src/addNewPolearm.php";
        }
        else if (weaponType=="ranged"){
            tableToAddTo = "src/addNewRanged.php";
        }
        
        
        fetch(tableToAddTo, {
            method: "POST",
            body: formData
        })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                weaponTypeSelection.value = weaponType;
                backToMainSection(weaponType);
            } else {
                console.error("Update failed:", data.error);
            }
        })
        /*.then(res => res.text())
        .then(data => {
            console.log(data);        // logs raw PHP output
            document.body.innerHTML = data; // optional: display it in page
        })*/
        .catch(err => console.error(err));
    });

    const backButton = document.getElementById("backButton");
    const addWeaponButton = document.getElementById("addWeaponButton");
    const weaponList = document.getElementById("weaponList");
    const formSection = document.getElementById("productForm");

    addWeaponButton.onclick = (e) => {
        addWeaponButton.style.display = "none";
        weaponList.style.display = "none";

        formSection.style.display = "flex";
        backButton.style.display = "flex";

        form.querySelectorAll("input, select, textarea").forEach(el => {
            el.disabled = false;
        });

        // optional but recommended: reset values too
        form.reset();

        // re-apply correct weapon section visibility
        updateWeaponForms(addWeaponFormDivs, weaponTypeSelect.value);

    }

    backButton.onclick = (e) => {
        backToMainSection();
    }

    function backToMainSection(tableToView = tableName) {
        formSection.style.display = "none";
        backButton.style.display = "none";
        editProductForm.style.display = "none";

        addWeaponButton.style.display = "flex";
        weaponList.style.display = "flex";
        loadWeapons(tableToView);
    }

    //FOR EDITING A PRODUCT
    const editProductForm = document.getElementById("editProductForm");
    const editForm = document.getElementById("editWeaponForm");
    
    const editWeaponFormDivs = {
        swords: document.getElementById("editSwordsForm"),
        daggers: document.getElementById("editDaggersForm"),
        blunthandweapons: document.getElementById("editBluntHandsForm"),
        polearms: document.getElementById("editPolearmsForm"),
        ranged: document.getElementById("editRangedForm")
    };

    let weaponID = 0;
    let originalWeaponName = '';
    weaponList.addEventListener("click", (e) => {
        const editButton = e.target.closest(".editButton");
        if (!editButton) return;

        const row = editButton.closest("tr");
        weaponID = row.dataset.weaponID;

        const weaponIdData = new FormData();
        weaponIdData.append("weaponID", weaponID);
        weaponIdData.append("table", tableName);

        updateWeaponForms(editWeaponFormDivs, tableName);

        console.log("ID num: ", weaponID);
        console.log("Table: ",  tableName);

        fetch("src/GetSingleProductData.php", {
            method: "POST",
            body: weaponIdData
        })
        .then(res => res.json())
        .then(data => {
            const weapon = data;

            if (!weapon) {
                console.error("No weapon data returned");
                return;
            }

            let activeSection;
            if (tableName === "swords") {
                activeSection = editProductForm.querySelector("#editSwordsForm");
            } 
            else if (tableName === "daggers") {
                activeSection = editProductForm.querySelector("#editDaggersForm");
            } 
            else if (tableName === "blunthandweapons") {
                 activeSection = editProductForm.querySelector("#editBluntHandsForm");
            }
            else if (tableName === "polearms") {
                activeSection = editProductForm.querySelector("#editPolearmsForm");
            }
            else if (tableName === "ranged") {
                activeSection = editProductForm.querySelector("#editRangedForm");
            }

            Object.entries(weapon).forEach(([key, value]) => {
                const input = activeSection.querySelector(`[name='${key}']`);
                if (input) {
                    input.value = value ?? ''; // default to empty string if null
                    
                }
            });
            originalWeaponName = weapon.Name;

            const uploadedImg = document.getElementById("editFormImg");
            uploadedImg.textContent = weapon.Image;

            if (weapon.Image2){
                const uploadedImg2 = document.getElementById("editFormImg2");
                uploadedImg2.textContent = weapon.Image2;
            }

            if (weapon.Image3){
                const uploadedImg3 = document.getElementById("editFormImg3");
                uploadedImg3.textContent = weapon.Image3;
            }

            if (weapon.Image4){
                const uploadedImg4 = document.getElementById("editFormImg4");
                uploadedImg4.textContent = weapon.Image4;
            }

            //ensures no blank entry if no new image is uploaded
            let existingImageInput = editProductForm.querySelector("[name='existingImage']");

            if (!existingImageInput) {
                existingImageInput = document.createElement("input");
                existingImageInput.type = "hidden";
                existingImageInput.name = "existingImage";
                editProductForm.appendChild(existingImageInput);
            }
            existingImageInput.value = weapon.Image;
        })
        /*.then(res => res.text())
        .then(data => {
            console.log(data);        // logs raw PHP output
            document.body.innerHTML = data; // optional: display it in page
        })*/

        addWeaponButton.style.display = "none";
        weaponList.style.display = "none";

        backButton.style.display = "flex";
        editProductForm.style.display = "flex";
    })
    
    editProductForm.addEventListener("submit", function(event){
        event.preventDefault(); // prevent page reload
        document.querySelectorAll(".weaponSpecificForm").forEach(form => {
            const isVisible = form.offsetParent !== null; // visible check

            form.querySelectorAll("input, select, textarea").forEach(el => {
                el.disabled = !isVisible;
            });
        });
        
        document.querySelectorAll("input[type='file']").forEach(input => {
            console.log(input.id, "disabled:", input.disabled, "files:", input.files.length);
        });

        let formData = new FormData(editForm);
        formData.append("weaponID", weaponID);
        formData.append("table", tableName);

        fetch("src/editProduct.php", {
            method: "POST",
            body: formData
        })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                backToMainSection();
            } else {
                console.error("Update failed:", data.error);
            }
        })
        /*.then(res => res.text())
        .then(data => {
            console.log(data);        // logs raw PHP output
            document.body.innerHTML = data; // optional: display it in page
        })*/
        .catch(err => console.error(err));
    });

    document.querySelectorAll("#editWeaponForm input[type='file']").forEach(input => {
        const label = document.querySelector(`label[for='${input.id}']`);
        if (!label) return;

        label.textContent = input.dataset.placeholder || "Upload Image";

        input.addEventListener("change", function () {
            label.textContent = this.files.length
                ? this.files[0].name
                : (input.dataset.placeholder || "Upload Image");
        });
    });

    const deleteButton = document.querySelector(".deleteButton");
    deleteButton.addEventListener("click",(e) => {
        if (confirm(`Are you sure you want to delete ${originalWeaponName}?`) == true) {
            const weaponIdData = new FormData();
            weaponIdData.append("weaponID", weaponID);
            weaponIdData.append("table", tableName);

            fetch("src/deleteProduct.php", {
                method: "POST",
                body: weaponIdData
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    backToMainSection();
                } else {
                    console.error("Update failed:", data.error);
                }
            })
            .catch(err => console.error(err));
        }
    })

})