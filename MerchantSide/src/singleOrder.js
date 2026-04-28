document.addEventListener('DOMContentLoaded', () => {
    const itemsTable = document.querySelector(".orderItems");
    const tableBody = document.querySelector("#orderItemsList");
    const orderNumLabel = document.querySelector("#orderNum");
    const statusDropdown = document.querySelector("#statusDropdown");
    const dropdownOptions = document.querySelector(".options");
    const dropdownSelected = document.querySelector(".selected");
    const saveButton = document.querySelector('#saveButton');
    const backButton = document.querySelector('#backButton');

    const urlParams = new URLSearchParams(window.location.search);
    const orderID = parseInt(urlParams.get('orderID'));
    let originalStatus = "";
    let updatedStatus = "";

    itemsTable.addEventListener("click", (e) => {
        const summaryRow = e.target.closest("tr");
        
        if (!summaryRow || !summaryRow.classList.contains("summary")) return;
        
        const detailsRow = summaryRow.nextElementSibling;
        detailsRow.classList.toggle("open");
    })

    function loadItems() {
        fetch(`src/getSingleOrderData.php?orderID=${orderID}`, {
            method: "POST",
        })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                originalStatus = data.status;
                updatedStatus = originalStatus;
                dropdownSelected.textContent = originalStatus.charAt(0).toUpperCase() + originalStatus.slice(1);

                displayItemDetails(data.items);
                displayShippingInfo(data);
                console.log("data retrived");
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
    }
    
    function displayItemDetails(data){
        orderNumLabel.innerHTML = `<h4>Order ${orderID}`;
        tableBody.innerHTML = "";

        data.forEach(item => {
            const summaryRow = document.createElement('tr');
            summaryRow.classList.add("summary");
            tableBody.appendChild(summaryRow);

            const id = document.createElement('td');
            id.classList.add('alignLeft')
            id.innerHTML = item.summary.ProductID;

            const name = document.createElement('td');
            name.classList.add('alignLeft')
            name.innerHTML = item.summary.Name;

            const keySpecs = document.createElement('td');
            keySpecs.classList.add('alignLeft')
            keySpecs.innerHTML = `
                ${item.details.BladeEdge ? item.details.BladeMaterial : item.details.HeadMaterial} 
                • ${item.details.HiltMaterial ? `${item.details.HiltMaterial} hilt` : `${item.details.ShaftMaterial} shaft`}
                • ${item.details.Pommel ? `${item.details.Pommel} pommel` : (item.details.ButtCap ? `${item.details.ButtCap} butt cap` : `${item.details.Grip} grip`)}
                `;

            const quantity = document.createElement('td');
            quantity.classList.add('alignRight')
            quantity.innerHTML = item.summary.Quantity;

            const price = document.createElement('td');
            price.classList.add('alignRight')
            price.innerHTML = item.summary.Price;
            
            const subtotal = document.createElement('td');
            subtotal.classList.add('alignRight')
            subtotal.innerHTML = (item.summary.Quantity * item.summary.Price);

            summaryRow.appendChild(id);
            summaryRow.appendChild(name);
            summaryRow.appendChild(keySpecs);
            summaryRow.appendChild(quantity);
            summaryRow.appendChild(price);
            summaryRow.appendChild(subtotal);

            //FOR DETAILS
            const detailsRow = document.createElement('tr');
            detailsRow.classList.add("details");
            tableBody.appendChild(detailsRow);
            detailsRow.appendChild(document.createElement('td')); //for alignment

            const detailsCell = document.createElement('td');
            detailsCell.colspan = 5;

            const details = document.createElement('div');
            details.classList.add('detailCell');
            detailsCell.appendChild(details);
            
            detailsRow.appendChild(detailsCell);

            let detailHTML = "";

                if (item.details.BladeMaterial) {
                    detailHTML += `<ul>
                        <h4>Blade</h4>
                        ${item.details.BladeMaterial ? `<li>Material: ${item.details.BladeMaterial}</li>` : ""}
                        ${item.details.BladeShape ? `<li>Shape: ${item.details.BladeShape}</li>` : ""}
                        ${item.details.BladeEdge ? `<li>Edge: ${item.details.BladeEdge}</li>` : ""}
                    </ul>`;
                }

                if (item.details.HeadMaterial) {
                    detailHTML += `<ul>
                        <h4>Head</h4>
                        ${item.details.HeadMaterial ? `<li>Material: ${item.details.HeadMaterial}</li>` : ""}
                        ${item.details.SpikesNum ? `<li>Spikes: ${item.details.SpikesNum}</li>` : ""}
                    </ul>`;
                }

                if (item.details.HiltMaterial) {
                    detailHTML += `<ul>
                        <h4>Hilt</h4>
                        ${item.details.HiltMaterial ? `<li>Material: ${item.details.HiltMaterial}</li>` : ""}
                        ${item.details.Grip ? `<li>Grip: ${item.details.Grip}</li>` : ""}
                    </ul>`;
                }

                if (item.details.ShaftMaterial) {
                    detailHTML += `<ul>
                        <h4>Shaft</h4>
                        ${item.details.ShaftMaterial ? `<li>Material: ${item.details.ShaftMaterial}</li>` : ""}
                        ${item.details.Grip ? `<li>Grip: ${item.details.Grip}</li>` : ""}
                    </ul>`;
                }

                if (item.details.PommelMaterial) {
                    detailHTML += `<ul>
                        <h4>Pommel</h4>
                        ${item.details.Pommel ? `<li>Shape: ${item.details.Pommel}</li>` : ""}
                        ${item.details.PommelMaterial ? `<li>Material: ${item.details.PommelMaterial}</li>` : ""}
                        ${item.details.PommelAccent ? `<li>Accent: ${item.details.PommelAccent}</li>` : ""}
                        ${item.details.PommelGem ? `<li>Gem: ${item.details.PommelGem}</li>` : ""}
                    </ul>`;
                }

                if (item.details.ButtCapMaterial) {
                    detailHTML += `<ul>
                        <h4>Butt Cap</h4>
                        ${item.details.ButtCap ? `<li>Shape: ${item.details.ButtCap}</li>` : ""}
                        ${item.details.ButtCapMaterial ? `<li>Material: ${item.details.ButtCapMaterial}</li>` : ""}
                    </ul>`;
                }

                if (item.details.SheathType) {
                    detailHTML += `<ul>
                        <h4>Sheath</h4>
                        ${item.details.SheathType ? `<li>Type: ${item.details.SheathType}</li>` : ""}
                        ${item.details.SheathMaterial ? `<li>Material: ${item.details.SheathMaterial}</li>` : ""}
                        ${item.details.SheathColor ? `<li>Color: ${item.details.SheathColor}</li>` : ""}
                    </ul>`;
                }

                if (item.details.SheathType) {
                    detailHTML += `<ul>
                        <h4>Sheath</h4>
                        ${item.details.SheathType ? `<li>Type: ${item.details.SheathType}</li>` : ""}
                        ${item.details.SheathMaterial ? `<li>Material: ${item.details.SheathMaterial}</li>` : ""}
                        ${item.details.SheathColor ? `<li>Color: ${item.details.SheathColor}</li>` : ""}
                    </ul>`;
                }

                if (item.details.Engravings) {
                    detailHTML += `<ul>
                        <h4>Sheath</h4>
                        <li>Type: ${item.details.Engravings}</li>
                    </ul>`;
                }

                if (item.details.Inscriptions) {
                    detailHTML += `<ul>
                        <h4>Inscriptions</h4>
                        <li>Type: ${item.details.SheathType}</li>
                    </ul>`;
                }

                
                detailHTML += `<ul>
                    <h4>Size</h4>
                    ${item.details.BladeLength_cm ? `<li>Blade Length: ${item.details.BladeLength_cm} cm</li>` : ""}
                    ${item.details.ChainLength ? `<li>Chain Length: ${item.details.ChainLength} cm</li>` : ""}
                    ${item.details.Length_cm ? `<li>Total Length: ${item.details.Length_cm} cm</li>` : ""}
                    ${item.details.Weight_kg ? `<li>Total Weight: ${item.details.Weight_kg} kg</li>` : ""}
                </ul>`;

                details.innerHTML = detailHTML;
        })
    }
    
    function displayShippingInfo(data) {
        const shippingInfoDiv = document.querySelector("#shippingInfo");
        shippingInfoDiv.innerHTML = `<ul>
            <li><strong>${data.shipping.ShippingName} |</strong> ${data.shipping.Username}</li>
            <li>${data.shipping.ShippingStreetAddress} ${data.shipping.ShippingAptAddress ? `${data.shipping.ShippingAptAddress}` : ""} </li>
            <li>${data.shipping.ShippingCity}, ${data.shipping.ShippingState} ${data.shipping.ShippingZIP}</li>
            <li>${data.shipping.ShippingCountry}</li>
            <li>Phone Number: ${data.shipping.ShippingPhoneNum}</li>
            </ul>`;
    }

    statusDropdown.onclick = (e) => {
            e.stopPropagation(); // Prevent event from bubbling up
            dropdownOptions.style.display = dropdownOptions.style.display === "block" ? "none" : "block";
        }

    // Attach click listeners for the options
    dropdownOptions.querySelectorAll("div").forEach(opt => {
        opt.onclick = (e) => {
            e.stopPropagation(); // Prevent parent click from firing
            dropdownSelected.textContent = opt.textContent;
            dropdownOptions.style.display = "none";
            updatedStatus = opt.dataset.value;
            saveButton.innerHTML='Save';
            saveButton.style.color = 'black';
        }
    });

    // Close dropdown if click is outside this filter
    document.addEventListener('click', (e) => {
        if (!statusDropdown.contains(e.target)) {
            dropdownOptions.style.display = "none";
        }
    });

    saveButton.addEventListener('click', () => {
        if(originalStatus != updatedStatus){
            console.log(`Original Status pre: ${originalStatus}`);
            console.log(`Updated Status pre: ${updatedStatus}`);
            updateOrderStatus();
        }
    })

    backButton.addEventListener('click', () => {
        if (originalStatus != updatedStatus) {
            if (confirm(`Would you like to save your changes?`) == true) {
                updateOrderStatus();
                
            }
        }
        window.location.href = 'orders.php';
    })

    function updateOrderStatus(){
        console.log("Updated Status");
        let formData = new FormData();
        formData.append("orderID", orderID);
        formData.append("newStatus", updatedStatus);

        fetch(`src/editOrderStatus.php`, {
            method: "POST",
            body: formData
            
        })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                originalStatus = updatedStatus;
                console.log("data edited");
                
                console.log(`Original Status post: ${originalStatus}`);
                console.log(`Updated Status post: ${updatedStatus}`);

                saveButton.innerHTML='Saved';
                saveButton.style.color = 'var(--gray)';
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
    }

    loadItems();
})      