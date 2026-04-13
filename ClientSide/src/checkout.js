document.addEventListener("DOMContentLoaded", () => {
    //FOR TESTING PURPOSES
    const userID = 1;

    const cardNumInput = document.getElementById('cardNumber');
    const expiryInput = document.getElementById('expiry');
    const phoneNumInput = document.getElementById('phoneNumber');

    //const checkBox = document.getElementById('saveAddress');
    const checkBox = document.getElementsByClassName('checkBox')[0];
    const form = document.getElementsByClassName('checkoutForm')[0];
    const page = document.querySelector('meta[name="page"]').content;
    let phpPath;
    let phpInfoPath;
    let activeForm;

    if (page == 'paymentInfo'){
        phpPath = 'src/savePaymentInfo.php';
        phpInfoPath = 'src/loadPaymentInfo.php';
        activeForm = document.querySelector('#paymentInfoForm');
    }
    else if (page == 'shippingInfo'){
        phpPath = 'src/saveShippingInfo.php';
        phpInfoPath = 'src/loadShippingInfo.php';
        activeForm = document.querySelector('#shippingInfoForm');
    }

    //masking stuff for form inputs
    if(cardNumInput) {
        const maskCard = {
            mask: '0000 0000 0000 0000'
        }
        const cardMask = IMask(cardNumInput, maskCard);
    }

    if(expiryInput) {
        const maskExpiry = {
            mask: '00 / 00'
        }

        const expiryMask = IMask(expiryInput, maskExpiry);
    }

    if(phoneNumInput) {
        const maskPhone = {
            mask: '(000) 000-0000'
        }

        const phoneMask = IMask(phoneNumInput, maskPhone);
    }

    function loadSavedData() {
        const userData = new FormData();
        userData.append("userID", userID);

        fetch(`${phpInfoPath}`, {
            method: "POST",
            body: userData
        })
        .then(res => res.json())
        .then(data => {;

            if (!data) {
                console.error("No data returned");
                return;
            }

            Object.entries(data).forEach(([key, value]) => {
                const input = activeForm.querySelector(`[name='${key}']`);
                if (input) {
                    input.value = value ?? ''; // default to empty string if null
                    
                }
            });
        })
        /*.then(res => res.text())
        .then(data => {
        console.log(data);        // logs raw PHP output
        document.body.innerHTML = data; // optional: display it in page
        })*/
        .catch(err => console.error(err));
    }
    
    form.addEventListener("submit", function(event){
        event.preventDefault(); // prevent page reload
        console.log(`checkbox: ${checkBox.checked}`);

        let cartTotal = 0;
        fetch(`src/getCartItems.php?userID=${userID}`)
            .then(res=> res.json())
            .then(data => {
                data.forEach(item => {
                    cartTotal += (parseFloat(item.Quantity) * parseFloat(item.PriceAtAdd));
                });
                console.log(`Cart Total: $${cartTotal}`);

                const formData = new FormData(form);  
                formData.append("userID", userID);
                formData.append("isChecked", checkBox.isChecked);
                formData.append("cartTotal", cartTotal);

                fetch(`${phpPath}`, {
                    method: "POST",
                    body: formData
                })
                .then(res => res.json())
                .then(data => {
                    if (page == 'shippingInfo') {
                        window.location.href = 'checkoutPayment.php';
                    }
                    console.log('saved');
                    if (page == 'paymentInfo'){
                        console.log("Payment Process Complete");
                        window.location.href='cart.php';
                    }
                    else if (page == 'shippingInfo'){
                        console.log("Payment Process Complete");
                    }
                })
                /*.then(res => res.text())
                .then(data => {
                console.log(data);        // logs raw PHP output
                document.body.innerHTML = data; // optional: display it in page
                })*/
                .catch(err => console.error(err));
                
            })
        .catch(err => console.error(err));
        
        
    });

    loadSavedData();
})