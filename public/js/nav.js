document.addEventListener('DOMContentLoaded', function () {
    const triggers = document.querySelectorAll('.dropdown-trigger'); 

    
    triggers.forEach(trigger => {
        trigger.addEventListener('click', function (e) {
            e.preventDefault(); 
            const dropdownId = this.getAttribute('data-dropdown');
            const dropdown = document.getElementById(dropdownId);
            const arrow = this.querySelector('svg');

            const isOpen = dropdown.classList.contains('opacity-100');

            triggers.forEach(otherTrigger => {
                const otherDropdownId = otherTrigger.getAttribute('data-dropdown');
                const otherDropdown = document.getElementById(otherDropdownId);
                const otherArrow = otherTrigger.querySelector('svg');

                if (otherDropdown !== dropdown) { 
                    otherDropdown.classList.remove('opacity-100', 'visible', 'translate-y-0');
                    otherDropdown.classList.add('opacity-0', 'invisible', '-translate-y-2');
                    otherArrow.classList.remove('rotate-180');
                }
            });

            if (!isOpen) {
                dropdown.classList.remove('opacity-0', 'invisible', '-translate-y-2');
                dropdown.classList.add('opacity-100', 'visible', 'translate-y-0');
                arrow.classList.add('rotate-180');
            } else {
                dropdown.classList.remove('opacity-100', 'visible', 'translate-y-0');
                dropdown.classList.add('opacity-0', 'invisible', '-translate-y-2');
                arrow.classList.remove('rotate-180');
            }
        });
    });

    document.addEventListener('click', function (e) {
        if (!e.target.closest('.dropdown-trigger') && !e.target.closest('ul.absolute')) {
            triggers.forEach(trigger => {
                const dropdownId = trigger.getAttribute('data-dropdown');
                const dropdown = document.getElementById(dropdownId);
                const arrow = trigger.querySelector('svg');

                dropdown.classList.remove('opacity-100', 'visible', 'translate-y-0');
                dropdown.classList.add('opacity-0', 'invisible', '-translate-y-2');
                arrow.classList.remove('rotate-180');
            });
        }
    });

    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    menuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
        triggers.forEach(trigger => {
            const dropdownId = trigger.getAttribute('data-dropdown');
            const dropdown = document.getElementById(dropdownId);
            const arrow = trigger.querySelector('svg');

            dropdown.classList.remove('opacity-100', 'visible', 'translate-y-0');
            dropdown.classList.add('opacity-0', 'invisible', '-translate-y-2');
            arrow.classList.remove('rotate-180');
        });
    });

    document.querySelectorAll('.dropdown-mobile-btn').forEach(button => {
        button.addEventListener('click', () => {
            const dropdown = button.nextElementSibling;
            dropdown.classList.toggle('hidden');
            const arrow = button.querySelector('svg');
            arrow.classList.toggle('rotate-180');
        });
    });

});