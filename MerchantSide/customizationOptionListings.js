document.addEventListener("DOMContentLoaded", () => {
    const customizationTypeSelection = document.querySelector("#customizationTypeSelection");
    let tableName = customizationTypeSelection.value;

    const optionsTableBody = document.querySelector(".listedItems tbody");
    
    let allOptions = [];

    function loadOptions(tableName) {
        fetch(`getCustomizationOptions.php?table=${tableName}`)
            .then(res=> res.json())
            .then(data => {
                allOptions = data;
                displayCustomizationOptions(allOptions, tableName);
            })
        .catch(err => console.error(err));
    }
    
    function displayCustomizationOptions(data, tableName) {
        //clears previous results
        if (optionsTableBody) {
            optionsTableBody.innerHTML = '';
        }
        
        data.forEach(option => {
            const row = document.createElement("tr");
            row.dataset.optionID = option.ID;
            row.dataset.optionType = tableName;

            const iconCell = document.createElement("td");
            iconCell.classList.add("editButton");
            const editIcon = document.createElement("img");
            editIcon.classList.add("editIcon");
            editIcon.src = "Images/pencilIcon.svg";
            iconCell.appendChild(editIcon);

            const name = document.createElement("td");
            name.textContent = option.Name;

            const imgLink = document.createElement("td");
            imgLink.textContent = option.Image;

            const priceModifier = document.createElement("td");
            priceModifier.classList.add("price");
            priceModifier.textContent = `+ $${option.PriceModifier}`;

            row.appendChild(iconCell);
            row.appendChild(name);
            row.appendChild(imgLink);
            row.appendChild(priceModifier);

            optionsTableBody.appendChild(row);
        })
    }

    // When options table changes
    customizationTypeSelection.addEventListener("change", () => {
        const tableName = customizationTypeSelection.value;
        loadOptions(tableName);
    });

    loadOptions(tableName);

    customizationTypeSelection.addEventListener("change", () => {
    tableName = customizationTypeSelection.value;
    loadOptions(tableName);
    })

    // For the addWeaponForm
    const form = document.getElementById("addOptionForm")

    const optionTypeSelect = document.getElementById("optionTypeSelect");

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

    form.addEventListener("submit", function(event){
        event.preventDefault(); // prevent page reload
        
        const formData = new FormData(form);

        const optionType = formData.get('optionTypeSelect')    
        
        fetch("addNewCustomizationOption.php", {
            method: "POST",
            body: formData
        })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                customizationTypeSelection.value = optionType;
                backToMainSection(optionType);
            } else {
                console.error("Update failed:", data.error);
            }
        })
        .catch(err => console.error(err));
    });

    const backButton = document.getElementById("backButton");
    const addOptionButton = document.getElementById("addOptionButton");
    const customizationsList = document.getElementById("customizationsList");
    const formSection = document.getElementById("customizationOptionsForm");

    

    addOptionButton.onclick = (e) => {
        addOptionButton.style.display = "none";
        customizationsList.style.display = "none";

        formSection.style.display = "flex";
        backButton.style.display = "flex";

    }

    backButton.onclick = (e) => {
        backToMainSection();
    }

    function backToMainSection(tableToView = tableName) {
        formSection.style.display = "none";
        backButton.style.display = "none";
        editCustomizationOptionsForm.style.display = "none";

        addOptionButton.style.display = "flex";
        customizationsList.style.display = "flex";
        loadOptions(tableToView);
    }

    //FOR EDITING A PRODUCT
    const editCustomizationOptionsDiv = document.getElementById("editCustomizationOptionsForm");
    const editForm = document.getElementById("editOptionForm");
    const editUploadedImg = document.getElementById("editedFileUpload");
    const editImageLabel = document.getElementById("editFormImg");

    let existingImageInput = editForm.querySelector("[name='existingImage']");
    if (!existingImageInput) {
        existingImageInput = document.createElement("input");
        existingImageInput.type = "hidden";
        existingImageInput.name = "existingImage";
        editForm.appendChild(existingImageInput);
    }

    let weaponID = 0;
    let originalOptionName = '';

    // Open edit form
    customizationsList.addEventListener("click", (e) => {
        const editButton = e.target.closest(".editButton");
        if (!editButton) return;

        const row = editButton.closest("tr");
        optionID = row.dataset.optionID;

        // Fetch option data
        const optionIDData = new FormData();
        optionIDData.append("optionID", optionID);
        optionIDData.append("table", tableName);

        fetch("GetSingleCustomizationOptionData.php", {
            method: "POST",
            body: optionIDData
        })
        .then(res => res.json())
        .then(option => {
            if (!option) return;

            // Autofill text fields
            Object.entries(option).forEach(([key, value]) => {
                const input = editForm.querySelector(`[name='${key}']`);
                if (input) input.value = value ?? '';
            });

            // Set label and hidden input
            editImageLabel.textContent = option.Image ? option.Image.split('/').pop() : "Upload Image";
            existingImageInput.value = option.Image ?? "../Images/Placeholder.png";

            // Reset file input
            editUploadedImg.value = "";
        });

        addOptionButton.style.display = "none";
        customizationsList.style.display = "none";
        backButton.style.display = "flex";
        editCustomizationOptionsDiv.style.display = "flex";
    });

    // Update label on file select
    editUploadedImg.addEventListener("change", () => {
        if (editUploadedImg.files.length > 0) {
            editImageLabel.textContent = editUploadedImg.files[0].name;
        } else {
            editImageLabel.textContent = existingImageInput.value.split('/').pop() || "Upload Image";
        }
    });

    // Submit form
    editForm.addEventListener("submit", (event) => {
        event.preventDefault();

        // Use the actual <form> element here
        let formData = new FormData(editForm); 

        // Add optionID and table
        formData.append("optionID", optionID);
        formData.append("table", tableName);

        fetch("editCustomizationOption.php", {
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
        .catch(err => console.error(err));
    });



    const deleteButton = document.querySelector(".deleteButton");
    deleteButton.addEventListener("click",(e) => {
        if (confirm(`Are you sure you want to delete ${originalOptionName}?`) == true) {
            const optionIDData = new FormData();
            optionIDData.append("optionID", optionID);
            optionIDData.append("table", tableName);

            fetch("deleteProduct.php", {
                method: "POST",
                body: optionIDData
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