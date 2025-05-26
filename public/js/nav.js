document.addEventListener('DOMContentLoaded', function () {
    // Desktop dropdown functionality
    const triggers = document.querySelectorAll('.dropdown-trigger');

    triggers.forEach(trigger => {
        trigger.addEventListener('click', function (e) {
            e.preventDefault();
            const dropdownId = this.getAttribute('data-dropdown');
            const dropdown = document.getElementById(dropdownId);
            const arrow = this.querySelector('svg');

            const isOpen = dropdown.classList.contains('opacity-100');

            // Close all other dropdowns
            triggers.forEach(otherTrigger => {
                const otherDropdownId = otherTrigger.getAttribute('data-dropdown');
                const otherDropdown = document.getElementById(otherDropdownId);
                const otherArrow = otherTrigger.querySelector('svg');

                otherDropdown.classList.remove('opacity-100', 'visible', 'translate-y-0');
                otherDropdown.classList.add('opacity-0', 'invisible', '-translate-y-2');
                otherArrow.classList.remove('rotate-180');
            });

            // Toggle current dropdown
            if (!isOpen) {
                dropdown.classList.remove('opacity-0', 'invisible', '-translate-y-2');
                dropdown.classList.add('opacity-100', 'visible', 'translate-y-0');
                arrow.classList.add('rotate-180');
            }
        });
    });

    // Close dropdowns when clicking outside
    document.addEventListener('click', function (e) {
        if (!e.target.closest('.dropdown-trigger') && !e.target.closest('ul[id]')) {
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

    // Mobile menu toggle
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    menuToggle.addEventListener('click', function (e) {
        e.preventDefault();
        mobileMenu.classList.toggle('hidden');
    });

    // Mobile dropdown functionality
    const mobileTriggers = document.querySelectorAll('.dropdown-trigger-mobile');

    mobileTriggers.forEach(trigger => {
        trigger.addEventListener('click', function (e) {
            e.preventDefault();
            const dropdownId = this.getAttribute('data-dropdown');
            const dropdown = document.getElementById(dropdownId);
            const arrow = this.querySelector('svg');

            // Toggle dropdown visibility
            dropdown.classList.toggle('hidden');
            dropdown.classList.toggle('flex');

            // Toggle arrow rotation
            arrow.classList.toggle('rotate-180');
        });
    });

    // Close mobile menu when clicking outside
    document.addEventListener('click', function (e) {
        if (!e.target.closest('#menu-toggle') && !e.target.closest('#mobile-menu')) {
            mobileMenu.classList.add('hidden');
        }
    });
});