document.addEventListener('DOMContentLoaded', () => {
    const navBar = document.querySelector('nav');
    const closeButton = document.querySelector('.collapseNav');
    const openButton = document.querySelector('#openNav');
    const main = document.querySelector('.mainSection');

    let navToggledOn = true;
    function closeNav() {
        navBar.style.minWidth = '0px';
        navBar.style.width = '0px';
        openButton.style.display = 'block';
        main.style.marginLeft = '40px';

        navToggledOn = false;
    }

    function openNav() {
        navBar.style.minWidth = '253px';
        openButton.style.display = 'none';
        main.style.marginLeft = '253px';

        navToggledOn = true;
    }

    closeButton.addEventListener('click', (e) => {
        closeNav();
    })

    openButton.addEventListener('click', () => {
        openNav();
    })

})