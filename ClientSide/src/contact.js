document.addEventListener("DOMContentLoaded", () => {
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