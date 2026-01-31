// FOR DROPDOWN ACCESSIBILITY WITH KEYBOARD CONTROL
const navLinks = document.querySelectorAll('.navLink');

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