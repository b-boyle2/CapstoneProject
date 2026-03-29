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

    if (page == 'paymentInfo'){
        phpPath = 'savePaymentInfo.php';
    }
    else if (page == 'shippingInfo'){
        phpPath = 'saveShippingInfo.php';
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
    
    form.addEventListener("submit", function(event){
        event.preventDefault(); // prevent page reload
        console.log(`checkbox: ${checkBox.checked}`);

        if(checkBox.checked) {
            const formData = new FormData(form);  
            formData.append("userID", userID);

            fetch(`${phpPath}`, {
                method: "POST",
                body: formData
            })
            .then(res => res.json())
            .then(data => {
                console.log('saved');
            })
            /*.then(res => res.text())
            .then(data => {
            console.log(data);        // logs raw PHP output
            document.body.innerHTML = data; // optional: display it in page
            })*/
            .catch(err => console.error(err));
        }
        
    });
})