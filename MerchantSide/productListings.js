document.addEventListener("DOMContentLoaded", () => {
    const weaponTypeSelection = document.querySelector("#weaponTypeSelection");
    const tableName = weaponTypeSelection.value;

    const productsTableBody = document.querySelector(".listedItems tbody");
    const filters = document.getElementsByClassName("subcategoryFilter");
    
    let allWeapons = [];

    function loadWeapons(tableName) {
        fetch(`getProducts.php?table=${tableName}`)
            .then(res=> res.json())
            .then(data => {
                allWeapons = data;
                displayWeapons(allWeapons);
            })
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
    
    function displayWeapons(data) {
        //clears previous results
        if (productsTableBody) {
            productsTableBody.innerHTML = '';
        }
        
        data.forEach(weapon => {
            const row = document.createElement("tr");

            const iconCell = document.createElement("td");
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
            price.classList.add("price");
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
    const tableName = weaponTypeSelection.value;
    loadWeapons(tableName);
    })

    // For the addWeaponForm
    const form = document.getElementById("addWeaponForm")

    const weaponTypeSelect = document.getElementById("weaponTypeSelect");

    // map weapon types to which divs should be visible
    const weaponFormDivs = {
        swords: document.getElementById("swordsForm"),
        daggers: document.getElementById("daggersForm"),
        blunthandweapons: document.getElementById("bluntHandsForm"),
        polearms: document.getElementById("polearmsForm"),
        ranged: document.getElementById("rangedForm")
    };

    function updateWeaponForms() {
        const selectedType = weaponTypeSelect.value;
        //hide all weaponFormDivs first
        Object.values(weaponFormDivs).forEach(div => div.style.display = "none");
        //only show the relevant weaponFormDiv and disable all other entry forms
        Object.entries(weaponFormDivs).forEach(([key, div]) => {
            if (key === selectedType) {
                div.style.display = "flex";
                div.querySelectorAll("input, select").forEach(el => el.disabled = false);
            } else {
                div.style.display = "none";
                div.querySelectorAll("input, select").forEach(el => el.disabled = true);
            }
        });
    }

    updateWeaponForms();

    // show uploaded image name
    const imageUpload = document.querySelector(".customFileUpload")
    const uploadedImg = document.getElementById("fileUpload");
    uploadedImg.addEventListener("change", function(event) {
        if (uploadedImg.files.length > 0) {
            imageUpload.textContent = uploadedImg.files[0].name;
        } 
        else {
            imageUpload.textContent = "Upload Image";
        }
    })

    weaponTypeSelect.addEventListener("change", updateWeaponForms);

    form.addEventListener("submit", function(event){
        event.preventDefault(); // prevent page reload
        
        const formData = new FormData(form);
        
        const weaponType = formData.get('weaponTypeSelect');

        let tableToAddTo = '';
        if (weaponType == "swords") {
            tableToAddTo = "addNewSword.php";
        }
        else if (weaponType=="daggers"){
            tableToAddTo = "addNewDagger.php";
        }
        else if (weaponType=="blunthandweapons"){
            tableToAddTo = "addNewBluntHandWeapon.php";
        }
        else if (weaponType=="polearms"){
            tableToAddTo = "addNewPolearm.php";
        }
        else if (weaponType=="ranged"){
            tableToAddTo = "addNewRanged.php";
        }
        
        
        fetch(tableToAddTo, {
            method: "POST",
            body: formData
        })
        /*.then(res => res.json()) // only if PHP returns JSON
        .then(data => console.log(data))*/
        .then(res => res.text())
        .then(text => console.log(text))
        .catch(err => console.error(err));
    });


})