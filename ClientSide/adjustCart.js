document.addEventListener("DOMContentLoaded", () => {
    const cartItemList = document.querySelector(".cartContainer")
    
    function loadWeapons() {
        fetch(`getCartItems.php`)
            .then(res=> res.json())
            .then(data => {
                displayWeapons(data);
            })
           /*.then(res => res.text())
            .then(data => {
            console.log(data);        // logs raw PHP output
            document.body.innerHTML = data; // optional: display it in page
            })*/
        .catch(err => console.error(err));
    }
    
    function displayCartItem(data) {
        data.array.forEach(weapon => {
            const cartItem = document.createElement("div");
            cartItem.classList.add("cartItem");

            const imgContainer = document.createElement("div");
            imgContainer.classList.add("imgContainer");
            const img = document.createElement("img");
            img.src = weapon.Image;
            imgContainer.appendChild(img);

            const details = document.createElement("div");
            details.classList.add("details");
            const topSection = document.createElement("div");
            topSection.classList.add("topSection");

            const itemName = document.createElement("h3");
            itemName.classList.add("name");
            itemName.innerHTML = weapon.Name;
            const price = document.createElement("h3");
            price.classList.add("price");
            price.innerHTML = `$${weapon.PriceAtAdd}`;
            topSection.appendChild(itemName);
            topSection.appendChild(price);

            const description = document.createElement("div");
            description.classList.add("description");
            description.innerHTML = weapon.Description;

            const buttonContainer = document.createElement("div");
            buttonContainer.classList.add("buttonContainer");

            const stepperInputTest = document.createElement("div");
            stepperInputTest.classList.add("stepperInput");
            
            const inputRange = document.createElement("input");
            inputRange.dataset.type = "range";
            inputRange.dataset.min = "0";
            inputRange.dataset.max = "100";
            inputRange.dataset.value = "1";

            const input = document.createElement("div");
            input.classList.add("input");

            const minusButton = document.createElement("button");
            minusButton.classList.add("minusButton");
            minusButton.innerHTML = "-";

            const range = document.createElement("div");
            range.classList.add("range");
            const list = document.createElement("div");
            list.classList.add("list");
            range.appendChild(list);

            const plusButton = document.createElement("button");
            plusButton.classList.add("plusButton");
            plusButton.innerHTML = "+";

            input.appendChild(minusButton);
            input.appendChild(range);
            input.appendChild(plusButton);

            stepperInputTest.appendChild(inputRange);
            stepperInputTest.appendChild(input);

            const deleteButton = document.createElement("button");
            deleteButton.classList.add("deleteButton");
            const deleteIcon = document.createElement("img");
            deleteIcon.src= "../Images/IconDelete.svg";
            deleteButton.appendChild(deleteIcon);

            buttonContainer.appendChild(stepperInputTest);
            buttonContainer.appendChild(deleteButton);

            details.appendChild(topSection);
            details.appendChild(description);
            details.appendChild(buttonContainer);

            cartItem.appendChild(imgContainer);
            cartItem.appendChild(details);

            cartItemList.appendChild(cartItem);
        });
    }

    displayCartItem();

    let stepperInput = {
        el:document.querySelector(".stepperInput input"),
        plusButton:document.querySelector(".stepperInput .input .plusButton"),
        minusButton:document.querySelector(".stepperInput .input .minusButton"),
        list:document.querySelector(".stepperInput .input .list")
    };

    stepperInput.min = parseInt(stepperInput.el.getAttribute("min"));
    stepperInput.max = parseInt(stepperInput.el.getAttribute("max"));
    stepperInput.value = parseInt(stepperInput.el.getAttribute("value"));

    for(let i=stepperInput.min; i<=stepperInput.max; i++) {
        stepperInput.list.innerHTML += `<span>${i}</span>`;
    }

    stepperInput.list.style.marginTop = `-${stepperInput.value*40}px`;
    stepperInput.list.style.transition = `all 150ms ease-in-out`;

    stepperInput.minusButton.onclick = (e) => {
        let value = parseInt(stepperInput.el.getAttribute("value"));
        if (value != 1) {
            value--
            stepperInput.el.setAttribute("value", value);
            stepperInput.list.style.marginTop = `-${value*40}px`;
        }
    }

    stepperInput.plusButton.onclick = (e) => {
        let value = parseInt(stepperInput.el.getAttribute("value"));
        if (value != stepperInput.max) {
            value++
            stepperInput.el.setAttribute("value", value);
            stepperInput.list.style.marginTop = `-${value*40}px`;
        }
    }
})