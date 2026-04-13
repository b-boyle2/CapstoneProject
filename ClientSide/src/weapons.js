document.addEventListener("DOMContentLoaded", () => {
    const swordsDiv = document.querySelector('#availableSwords');
    const daggersDiv = document.querySelector('#availableDaggers');
    const bluntWeaponsDiv = document.querySelector('#availableBluntWeapons');
    const polearmsDiv = document.querySelector('#availablePolearms');
    const rangedDiv = document.querySelector('#availableRanged');

    fetch(`src/getSomeWeapons.php`)
        .then(res=> res.json())
        .then(data => {
            displayWeapons(data.swords, swordsDiv);
            displayWeapons(data.daggers, daggersDiv);
            displayWeapons(data.bluntWeapons, bluntWeaponsDiv);
            displayWeapons(data.polearms, polearmsDiv);
            displayWeapons(data.ranged, rangedDiv);
        })
        /*.then(res => res.text())
        .then(data => {
        console.log(data);        // logs raw PHP output
        document.body.innerHTML = data; // optional: display it in page
        })*/
    .catch(err => console.error(err));


    function displayWeapons(data, sectionDiv) {
        sectionDiv.innerHTML = '';
        data.forEach(weapon => {
            const weaponLink = document.createElement("a");
            weaponLink.href = `singleProduct.php?productId=${weapon.ID}`;

            const weaponItemListing = document.createElement("div");
            weaponItemListing.classList.add("weaponItemListing");

            weaponItemListing.innerHTML = `
                <div class="imgContainer">
                    <img src="${weapon.Image}" alt="${weapon.Name}">
                </div>
                <div class="listingContent" >
                    <p>${weapon.Name}</p>
                    <p class="price">$${Math.trunc(weapon.Price)}</p>
                </div>
                <div class="listingHoverBorderContainer">
                    <img src="../Images/itemListingHoverBorder.png" class="listingHoverBorder">
                </div>
            `;
            weaponLink.appendChild(weaponItemListing);
            sectionDiv.appendChild(weaponLink);
        });
    }
})