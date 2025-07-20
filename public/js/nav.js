document.addEventListener('DOMContentLoaded', () => {
    // --- Navbar Scroll Handling ---
    const navbar = document.getElementById('navbar');
    if (navbar) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.remove('top-24');
                navbar.classList.add('top-4');
            } else {
                navbar.classList.remove('top-4');
                navbar.classList.add('top-24');
            }
        });
    }

    // --- Desktop Dropdown Handling ---
    const dropdownTriggers = document.querySelectorAll('.dropdown-trigger');
    dropdownTriggers.forEach(trigger => {
        const dropdownId = trigger.getAttribute('data-dropdown');
        const dropdown = document.getElementById(dropdownId);
        const svg = trigger.querySelector('svg');

        trigger.addEventListener('click', (e) => {
            e.stopPropagation();
            const isOpen = !dropdown.classList.contains('invisible');
            
            // Close all other dropdowns
            document.querySelectorAll('.dropdown-trigger + ul').forEach(menu => {
                if (menu.id !== dropdownId) {
                    menu.classList.add('invisible', 'opacity-0', 'scale-y-90');
                    const otherSvg = menu.previousElementSibling.querySelector('svg');
                    if (otherSvg) otherSvg.classList.remove('rotate-180');
                }
            });

            // Toggle the clicked dropdown
            dropdown.classList.toggle('invisible');
            dropdown.classList.toggle('opacity-0');
            dropdown.classList.toggle('scale-y-90');
            if (svg) svg.classList.toggle('rotate-180');
        });
    });

    // Close desktop dropdowns when clicking outside
    document.addEventListener('click', () => {
        document.querySelectorAll('.dropdown-trigger + ul').forEach(menu => {
            menu.classList.add('invisible', 'opacity-0', 'scale-y-90');
            const svg = menu.previousElementSibling.querySelector('svg');
            if (svg) svg.classList.remove('rotate-180');
        });
    });

    // --- Mobile Menu Handling ---
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuClose = document.getElementById('menu-close');

    const openMobileMenu = () => {
        mobileMenu.classList.remove('hidden');
        void mobileMenu.offsetWidth; // Trigger reflow
        mobileMenu.classList.add('flex');
        mobileMenu.classList.remove('translate-x-full', 'opacity-0');
    };

    const closeMobileMenu = () => {
        mobileMenu.classList.add('translate-x-full', 'opacity-0');
        setTimeout(() => {
            mobileMenu.classList.add('hidden');
            mobileMenu.classList.remove('flex');
        }, 300);
    };

    if (menuToggle) menuToggle.addEventListener('click', openMobileMenu);
    if (menuClose) menuClose.addEventListener('click', closeMobileMenu);

    // --- Mobile Dropdown Handling (LOGIKA BARU YANG LEBIH SEDERHANA DAN ANDAL) ---
    const mobileDropdownButtons = document.querySelectorAll('.dropdown-mobile-btn');

    mobileDropdownButtons.forEach(button => {
        const dropdownId = button.getAttribute('data-dropdown');
        const dropdownMenu = document.getElementById(dropdownId);
        const svg = button.querySelector('svg');

        button.addEventListener('click', (e) => {
            e.preventDefault(); // Mencegah aksi default dari tombol

            // Toggle a class to handle visibility and animation with CSS
            const isOpen = dropdownMenu.classList.contains('open');

            // Close all other dropdowns first
            document.querySelectorAll('.dropdown-mobile-menu.open').forEach(openMenu => {
                if (openMenu !== dropdownMenu) {
                    openMenu.classList.remove('open');
                    openMenu.style.maxHeight = null;
                    const otherSvg = openMenu.previousElementSibling.querySelector('svg');
                    if (otherSvg) otherSvg.classList.remove('rotate-180');
                }
            });

            // Toggle the current dropdown
            if (isOpen) {
                dropdownMenu.classList.remove('open');
                dropdownMenu.style.maxHeight = null;
                if (svg) svg.classList.remove('rotate-180');
            } else {
                dropdownMenu.classList.remove('hidden'); // Ensure it's not hidden before calculating height
                dropdownMenu.classList.add('open');
                dropdownMenu.style.maxHeight = dropdownMenu.scrollHeight + "px";
                if (svg) svg.classList.add('rotate-180');
            }
        });
    });

    // Ensure menu closes when a direct link (not a dropdown button) is clicked
    mobileMenu.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
            // We don't prevent default here, we just close the menu
            closeMobileMenu();
        });
    });
});
