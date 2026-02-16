document.addEventListener("DOMContentLoaded", () => {
    const dataContainer = document.querySelector(".focusData");
    const headerInfo = dataContainer.querySelector(".topInfo");
    const descriptionContainer = dataContainer.querySelector(".focusDescription");
    const detailsContainer = dataContainer.querySelector(".focusDetails");
    const similarItemsListings = document.querySelector(".similarItemListing");
    const focusImgContainer = document.querySelector(".focusImgContainer");
    const slideshowContainer = document.querySelector("#slideshowContainer");
    const dotsContainer = slideshowContainer.querySelector(".dotsContainer");
    const prevArrow = slideshowContainer.querySelector(".prev");
    const nextArrow = slideshowContainer.querySelector(".next");

    const urlParams = new URLSearchParams(window.location.search);
    const type = urlParams.get('weaponType');
    const weaponID = urlParams.get('id');

    let slideIndex = 1;

    function loadItemData() {
        fetch(`getSingleItemData.php?weaponType=${type}&weaponID=${weaponID}`)
            .then(res => res.json())
            .then(data => {
                if (data.error) return console.error(data.error);

                // Collect image URLs
                const imageFields = [];
                for (let i = 1; i <= 4; i++) {
                    const key = i === 1 ? "Image" : `Image${i}`;
                    if (data[key]) imageFields.push(data[key]);
                }

                // Create slides
                imageFields.forEach(src => {
                    const imgSlide = document.createElement("div");
                    imgSlide.classList.add("imgSlide");
                    imgSlide.style.display = "none"; // hide initially

                    const img = document.createElement("img");
                    img.src = src;
                    img.alt = data.Name;
                    img.classList.add("focusImg");

                    imgSlide.appendChild(img);
                    focusImgContainer.appendChild(imgSlide);
                });

                // Populate dots
                dotsContainer.innerHTML = "";
                imageFields.forEach((_, i) => {
                    const dot = document.createElement("span");
                    dot.classList.add("dot");
                    dot.addEventListener("click", () => currentSlide(i + 1));
                    dotsContainer.appendChild(dot);
                });

                // Wire up prev/next arrows
                prevArrow.addEventListener("click", () => plusSlides(-1));
                nextArrow.addEventListener("click", () => plusSlides(1));

                displayItemData(data);
                fetch(`getSimilarWeapons.php?weaponType=${type}&weaponID=${weaponID}&subcategory=${data.Subcategory_ID}`)
                    .then(res => res.json())
                    .then(similarData => {
                        if (!similarData.error) displaySimilarWeapons(similarData);
                    });

                showSlides(slideIndex); // show first slide
            })
            .catch(err => console.error(err));
    }

    function displayItemData(weapon) {
        headerInfo.innerHTML = `<h3>${weapon.Name}</h3><h3>$${Math.trunc(weapon.Price)}</h3>`;
        descriptionContainer.innerHTML = `<p>${weapon.Description}</p>`;

        const details = [];

        if (weapon.Subcategory) details.push(`<p><strong>Weapon Type:</strong> ${weapon.Subcategory}</p>`);
        if (weapon.BladeMaterial) {
            let blade = `<p><strong>Blade:</strong> ${weapon.BladeMaterial}`;
            if (weapon.BladeShape) blade += `; ${weapon.BladeShape}`;
            if (weapon.BladeEdge) blade += `; ${weapon.BladeEdge}`;
            blade += `</p>`;
            details.push(blade);
        }
        if (weapon.HeadMaterial) {
            let head = `<p><strong>Head:</strong> `;
            if (weapon.SpikesNum) head += `${weapon.SpikesNum} Spike `;
            head += weapon.HeadMaterial + "</p>";
            details.push(head);
        }
        if (weapon.HiltMaterial) details.push(`<p><strong>Hilt:</strong> ${weapon.HiltMaterial}; ${weapon.Grip} Grip</p>`);
        if (weapon.ShaftMaterial) details.push(`<p><strong>Shaft:</strong> ${weapon.ShaftMaterial}; ${weapon.Grip} Grip</p>`);
        if (weapon.Pommel) {
            let pommel = `<p><strong>Pommel:</strong> ${weapon.PommelMaterial} ${weapon.Pommel}`;
            if (weapon.PommelAccent) pommel += `; ${weapon.PommelAccent} Accent`;
            if (weapon.PommelGem) pommel += `; ${weapon.PommelGem}`;
            pommel += "</p>";
            details.push(pommel);
        }
        if (weapon.ButtCap) details.push(`<p><strong>Butt Cap:</strong> ${weapon.ButtCapMaterial} ${weapon.ButtCap}</p>`);
        if (weapon.SheathType) details.push(`<p><strong>Sheath:</strong> ${weapon.SheathType} ${weapon.SheathColor} ${weapon.SheathMaterial}</p>`);
        if (weapon.Engravings) details.push(`<p><strong>Engravings:</strong> ${weapon.Engravings}</p>`);
        if (weapon.Inscriptions) details.push(`<p><strong>Inscriptions:</strong> “${weapon.Inscriptions}</p>`);

        let size = `<p><strong>Size:</strong> `;
        if (weapon.BladeLength_cm) size += `${Math.trunc(weapon.BladeLength_cm)}cm Blade; `;
        if (weapon.ChainLength) size += `${Math.trunc(weapon.ChainLength)}cm Chain; `;
        if (weapon.Length_cm) size += `${Math.trunc(weapon.Length_cm)}cm Total Length; `;
        size += `${weapon.Weight_kg}kg Total Weight</p>`;
        details.push(size);

        detailsContainer.innerHTML = details.join("");
    }

    function displaySimilarWeapons(data) {
        similarItemsListings.innerHTML = '';
        data.forEach(weapon => {
            const weaponLink = document.createElement("a");
            weaponLink.href = `singleProduct.php?weaponType=${type}&id=${weapon.ID}`;

            const weaponItemListing = document.createElement("div");
            weaponItemListing.classList.add("weaponItemListing");

            weaponItemListing.innerHTML = `
                <div class="imgContainer">
                    <img src="${weapon.Image}" alt="${weapon.Name}">
                </div>
                <div class="listingContent">
                    <p>${weapon.Name}</p>
                    <p class="price">$${Math.trunc(weapon.Price)}</p>
                </div>
                <div class="listingHoverBorderContainer">
                    <img src="../Images/itemListingHoverBorder.png" class="listingHoverBorder">
                </div>
            `;
            weaponLink.appendChild(weaponItemListing);
            similarItemsListings.appendChild(weaponLink);
        });
    }

    function plusSlides(n) { showSlides(slideIndex += n); }
    function currentSlide(n) { showSlides(slideIndex = n); }

    function showSlides(n) {
        const slides = document.getElementsByClassName("imgSlide");
        const dots = document.getElementsByClassName("dot");
        if (!slides.length) return;

        if (n > slides.length) slideIndex = 1;
        if (n < 1) slideIndex = slides.length;

        for (let i = 0; i < slides.length; i++) slides[i].style.display = "none";
        for (let i = 0; i < dots.length; i++) dots[i].className = dots[i].className.replace(" active", "");

        slides[slideIndex - 1].style.display = "block";
        if (dots[slideIndex - 1]) dots[slideIndex - 1].className += " active";
    }

    loadItemData();
});
