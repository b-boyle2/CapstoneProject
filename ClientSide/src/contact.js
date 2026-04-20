document.addEventListener("DOMContentLoaded", () => {
    const form = document.querySelector('#contactForm');
    const successMessage = document.querySelector('#successMessage');
    const closeButton = document.querySelector('#closeSuccessMessage');

    form.addEventListener('submit', (event) => {
        event.preventDefault();
        window.scrollTo({ top: 0, left: 0, behavior: 'smooth'});
        successMessage.style.display = 'block';
        successMessage.dataset.active = 'true';
    })

    document.addEventListener('click', () => {
        if(successMessage.dataset.active == 'true') {
            const isClickInsideMessage = successMessage.contains(event.target);
            const isClickInsideButton = closeButton.contains(event.target);

            if(!isClickInsideMessage || isClickInsideButton) {
                location.reload();
            }
        }
        
    })

    //show uploaded image file name
    document.querySelectorAll("input[type='file']").forEach(input => {
        const label = document.querySelector(`label[for='${input.id}']`);
        if (!label) return;

        label.textContent = input.dataset.placeholder || "Upload Image";

        input.addEventListener("change", function () {
            label.textContent = this.files.length
                ? this.files[0].name
                : (input.dataset.placeholder || "Upload Image");
        });
    });
})