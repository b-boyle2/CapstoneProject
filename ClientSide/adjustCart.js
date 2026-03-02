document.addEventListener("DOMContentLoaded", () => {
    //FOR TESTING PURPOSES
    const userID = 'user123';
    const cartItemList = document.querySelector(".cartContainer")
    
    function loadWeapons() {
        fetch(`getCartItems.php?userID=${userID}`)
            .then(res=> res.json())
            .then(data => {
                displayCartItems(data);
            })
            /*.then(res => res.text())
            .then(data => {
            console.log(data);        // logs raw PHP output
            document.body.innerHTML = data; // optional: display it in page
            })*/
        .catch(err => console.error(err));
    }
    
    function displayCartItems(data) {
        data.forEach(weapon => {
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
            inputRange.dataset.min = "1";
            inputRange.dataset.max = "100";
            inputRange.dataset.value = weapon.Quantity;

            const input = document.createElement("div");
            input.classList.add("input");

            const minusButton = document.createElement("button");
            minusButton.classList.add("minusButton");
            minusButton.innerHTML = "-";

            const range = document.createElement("div");
            range.classList.add("range");
            const list = document.createElement("div");
            list.classList.add("list");
            for (let i = inputRange.dataset.min; i <= inputRange.dataset.max; i++) {
                list.innerHTML += `<span>${i}</span>`;
            }
            list.style.marginTop = `-${(inputRange.dataset.value - inputRange.dataset.min)*40}px`;
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
            cartItem.dataset.productID = weapon.ProductID;

            cartItemList.appendChild(cartItem);
        });
    }

    loadWeapons();

    // Adjust Quantity
    cartItemList.addEventListener("click", e => {
        const stepper = e.target.closest(".stepperInput");
        if (!stepper){
            return;
        }
        const inputRange = stepper.querySelector("input");
        const list = stepper.querySelector(".list");
        let value = parseInt(inputRange.dataset.value);
        const min = parseInt(inputRange.dataset.min);
        const max = parseInt(inputRange.dataset.max);

        if (e.target.classList.contains("plusButton") && value < max) {
            value++;
        }
        else if (e.target.classList.contains("minusButton") && value > min) {
            value--;
        }
        else {
            return;
        }

        inputRange.dataset.value = value;
        list.style.marginTop = `-${(value - min)*40}px`;

        product = stepper.closest(".cartItem");
        console.log(`ProductID: ${product.dataset.productID}`);
        console.log(`Value: ${inputRange.dataset.value}`);
        console.log(`UserID: ${userID}`);

        fetch(`adjustCartItemQuantity.php`, {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded"
            },
            body: `productID=${product.dataset.productID}&quantity=${inputRange.dataset.value}&userID=${userID}`
        })
        .then(res => res.json())
        .then(data => {
            if (data.error) return console.error(data.error);
        })
        /*.then(res => res.text())
        .then(data => {
            console.log(data);        // logs raw PHP output
            document.body.innerHTML = data; // optional: display it in page
        })*/
    })

    // Remove from Cart
    cartItemList.addEventListener("click", e => {
        const deleteButton = e.target.closest(".deleteButton");
        if (!deleteButton) {
            return;
        }
        product = deleteButton.closest(".cartItem");

        fetch(`removeFromCart.php?productID=${product.dataset.productID}`, {
            method: 'DELETE'
        })
        .then(res => res.json())
        .then(data => {
            if (data.error) return console.error(data.error);
            if (product) {
                product.remove();
            }
        })
        /*.then(res => res.text())
        .then(data => {
            console.log(data);        // logs raw PHP output
            document.body.innerHTML = data; // optional: display it in page
        })*/
    })

})