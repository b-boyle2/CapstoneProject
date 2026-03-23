function updateCartCounter(userID, cartCounter) {
    fetch(`getCartItems.php?userID=${userID}`)
        .then(res=> res.json())
        .then(data => {
            let cartTotal = 0;
            if (!data) {
                cartTotal = 0;
            }
            else {
                data.forEach(item => {
                    cartTotal += item.Quantity;
                    console.log(`${item.Name}: ${item.Quantity}`);
                });

                if (cartTotal >= 100) {
                    cartTotal = '99+';
                }
                
                cartCounter.innerHTML = cartTotal;
            }
        })
        /*.then(res => res.text())
        .then(data => {
        console.log(data);        // logs raw PHP output
        document.body.innerHTML = data; // optional: display it in page
        })*/
    .catch(err => console.error(err));
}
document.addEventListener("DOMContentLoaded", () => {

    // FOR DROPDOWN ACCESSIBILITY WITH KEYBOARD CONTROL
    const navLinks = document.querySelectorAll('.navLink');
    const cartCounter = document.querySelector('#cartItemCounter');

    //FOR TESTING PURPOSES
    const userID = 'user123';

    navLinks.forEach(link => {
        const dropdown = link.nextElementSibling; // the <ul>

        // Open dropdown with ArrowDown
        link.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowDown') {
                e.preventDefault(); // stop default navigation
                dropdown.style.display = 'block';
                link.setAttribute('aria-expanded', 'true');
                // Focus the first item in the dropdown
                const firstItem = dropdown.querySelector('a');
                firstItem.focus();
            }
        });

        // Close dropdown with Escape
        dropdown.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                e.preventDefault();
                dropdown.style.display = 'none';
                link.setAttribute('aria-expanded', 'false');
                link.focus();
            }
        });
    });

    

    updateCartCounter(userID, cartCounter);

    
})
export{updateCartCounter}