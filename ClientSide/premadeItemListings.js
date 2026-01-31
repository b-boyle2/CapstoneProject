document.addEventListener("DOMContentLoaded", () => {
    // FOR LOADING AND DISPLAYING PREMADE WEAPONS
    const availableWeaponsDiv = document.querySelector(".availableWeapons");
    const tableName = availableWeaponsDiv.dataset.table;

    function loadWeapons(tableName) {
        fetch(`getWeapons.php?table=${tableName}`)
            .then(res=> res.json())
            .then(data => {
                allWeapons = data;
                displayWeapons(allWeapons);
            })
        .catch(err => console.error(err));
    }

    function filterBySubcategory(subcategoryID) {
        if (!subcategoryID) {
            displayWeapons(allWeapons);
            return;
        }

        const filtered = allWeapons.filter(
            weapon => weapon.Subcategory_ID == subcategoryID
        );
        displayWeapons(filtered);
    }

    function displayWeapons(data) {
        //clears previous results
        availableWeaponsDiv.innerHTML = '';
        
        data.forEach(weapon => {
            const weaponItemListing = document.createElement("div");
            weaponItemListing.classList.add("weaponItemListing")
            const imgContainer = document.createElement('div');
            imgContainer.classList.add('imgContainer');
            const img = document.createElement('img');
            img.src = weapon.Image;
            img.alt = weapon.Name;
            imgContainer.appendChild(img);
            
            const name = document.createElement("p");
            name.textContent = weapon.Name
            const price = document.createElement('p');
            price.classList.add('price');
            price.textContent = `$${Math.trunc(weapon.Price)}`

            const listingContent = document.createElement('div');
            listingContent.classList.add('listingContent');
            listingContent.appendChild(name);
            listingContent.appendChild(price);
            
            const hoverImgContainer = document.createElement('div');
            hoverImgContainer.classList.add('listingHoverBorderContainer');
            const hoverImg = document.createElement('img');
            hoverImg.src = '../Images/itemListingHoverBorder.png';
            hoverImg.classList.add('listingHoverBorder');
            hoverImgContainer.appendChild(hoverImg);
            

            weaponItemListing.appendChild(imgContainer);
            weaponItemListing.appendChild(listingContent);
            weaponItemListing.appendChild(hoverImgContainer);
            availableWeaponsDiv.appendChild(weaponItemListing);
        })
    }

    loadWeapons(tableName);

    //FOR FILTERS
    const filterSelect = document.querySelector(".filterSelect");
    const selected = filterSelect.querySelector(".subcategoryFilter");
    const options = filterSelect.querySelector(".options");

    selected.addEventListener("click", () => {
        options.style.display = options.style.display === "block" ? "none" : "block";
    })

    //checks if click is outside of filter
    document.addEventListener('click', event => {
        const isClickInside = selected.contains(event.target);
        if (!isClickInside) {
            options.style.display = "none";
        }
    })

    options.querySelectorAll("div").forEach(opt => {
        opt.addEventListener("click", () => {
            const subcategoryID = parseInt(opt.dataset.value);
            selected.childNodes[1].textContent = opt.textContent;
            options.style.display = options.style.display === "none";

            filterBySubcategory(subcategoryID);
        })
    })
})