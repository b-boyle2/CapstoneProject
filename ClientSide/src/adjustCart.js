import { updateCartCounter } from "./main.js";

document.addEventListener("DOMContentLoaded", () => {
    //FOR TESTING PURPOSES
    const userID = '1';
    const cartCounter = document.querySelector('#cartItemCounter');
    const cartItemList = document.querySelector(".cartContainer");

    const subtotalSection = document.querySelector('.rightSection');
    const itemNumSpan = document.querySelector('#itemNum');
    const subtotalSpan = document.querySelector('#subtotal');
    const shippingSpan = document.querySelector('#shipping');
    const totalSpan = document.querySelector('#total');

    const shippingFee = 9.99;
    let runningSubtotal = 0;
    let cartQuantity = 0;
    
    function loadWeapons() {
        fetch(`src/getCartItems.php?userID=${userID}`)
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
        const emptyCart = document.querySelector('#emptyCart');
        const populatedCart = document.querySelector('#populatedCart');
        let cartCount = 0;
        data.forEach(item =>{
            cartCount += 1;
        })

        if(cartCount == 0) {
            emptyCart.style.display = 'flex';
            populatedCart.style.display = 'none';
        }

        else {
            emptyCart.style.display = 'none';
            populatedCart.style.display = 'flex';
            //initialize subtotal breakdown upon initial display
            runningSubtotal = 0;
            cartQuantity = 0;

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
                cartItem.dataset.productPrice = weapon.PriceAtAdd;
                cartItem.dataset.productQuantity = weapon.Quantity;

                cartItemList.appendChild(cartItem);

                runningSubtotal += (parseFloat(weapon.Quantity) * parseFloat(weapon.PriceAtAdd));
                cartQuantity += parseInt(weapon.Quantity);


                updateSubtotal();
            });
        }
        
    }

    loadWeapons();

    // Adjust Quantity
    cartItemList.addEventListener("click", e => {
        const stepper = e.target.closest(".stepperInput");
        if (!stepper){
            return;
        }

        let product = stepper.closest(".cartItem");

        const inputRange = stepper.querySelector("input");
        const list = stepper.querySelector(".list");
        let value = parseInt(inputRange.dataset.value);
        const min = parseInt(inputRange.dataset.min);
        const max = parseInt(inputRange.dataset.max);

        if (e.target.classList.contains("plusButton") && value < max) {
            value++;
            runningSubtotal += parseFloat(product.dataset.productPrice);
            cartQuantity += 1;
        }

        else if (e.target.classList.contains("minusButton") && value > min) {
            value--;
            runningSubtotal -= parseFloat(product.dataset.productPrice);
            cartQuantity -= 1;
        }
        else {
            return;
        }
        product.dataset.productQuantity = value;
        updateSubtotal();

        inputRange.dataset.value = value;
        list.style.marginTop = `-${(value - min)*40}px`;

        console.log(`ProductID: ${product.dataset.productID}`);
        console.log(`Value: ${inputRange.dataset.value}`);
        console.log(`UserID: ${userID}`);

        fetch(`src/adjustCartItemQuantity.php`, {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded"
            },
            body: `productID=${product.dataset.productID}&quantity=${inputRange.dataset.value}&userID=${userID}`
        })
        .then(res => res.json())
        .then(data => {
            if (data.error) return console.error(data.error);

            updateCartCounter(userID, cartCounter);
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
        let product = deleteButton.closest(".cartItem");

        fetch(`src/removeFromCart.php?productID=${product.dataset.productID}`, {
            method: 'DELETE'
        })
        .then(res => res.json())
        .then(data => {
            if (data.error) return console.error(data.error);
            if (product) {
                runningSubtotal -= (parseFloat(product.dataset.productQuantity) * parseFloat(product.dataset.productPrice))
                console.log(`Quanitity: ${product.dataset.productQuantity}`);
                console.log(`Price: ${product.dataset.productPrice}`);
                console.log(`ItemTotal: ${parseFloat(product.dataset.productQuantity) * parseFloat(product.dataset.productPrice)}`)
                cartQuantity -= parseFloat(product.dataset.productQuantity);
                updateSubtotal();
                
                product.remove();
                updateCartCounter(userID, cartCounter);

                if(cartQuantity == 0) {
                    emptyCart.style.display = 'flex';
                    populatedCart.style.display = 'none';
                }
            }
        })
        /*.then(res => res.text())
        .then(data => {
            console.log(data);        // logs raw PHP output
            document.body.innerHTML = data; // optional: display it in page
        })*/
    })


    function updateSubtotal() {
        if (cartQuantity == 1) {
            itemNumSpan.innerHTML = `(1 item)`;
        }
        else {
            itemNumSpan.innerHTML = `(${cartQuantity} items)`;
        }

        subtotalSpan.innerHTML = `$${runningSubtotal}`;
        shippingSpan.innerHTML = `$${shippingFee}`;
        totalSpan.innerHTML = `$${runningSubtotal + shippingFee}`
    }
})