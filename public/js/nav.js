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
    document.addEventListener('click', (e) => {
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
            // Close any open submenus when the main menu closes
            document.querySelectorAll('.dropdown-mobile-menu.submenu-open').forEach(openMenu => {
                openMenu.classList.remove('submenu-open');
                openMenu.style.maxHeight = null;
                const otherSvg = openMenu.previousElementSibling.querySelector('svg');
                if (otherSvg) otherSvg.classList.remove('rotate-180');
            });
        }, 300);
    };

    if (menuToggle) menuToggle.addEventListener('click', openMobileMenu);
    if (menuClose) menuClose.addEventListener('click', closeMobileMenu);

    // --- Mobile Dropdown Handling (LOGIKA BARU YANG LEBIH ANDAL) ---
    const mobileDropdownButtons = document.querySelectorAll('.dropdown-mobile-btn');

    mobileDropdownButtons.forEach(button => {
        const dropdownId = button.getAttribute('data-dropdown');
        const dropdownMenu = document.getElementById(dropdownId);
        const svg = button.querySelector('svg');

        button.addEventListener('click', (e) => {
            e.stopPropagation(); // Mencegah klik menyebar ke elemen lain

            const isOpen = dropdownMenu.classList.contains('submenu-open');

            // Tutup semua submenu lain terlebih dahulu
            document.querySelectorAll('.dropdown-mobile-menu.submenu-open').forEach(openMenu => {
                if (openMenu !== dropdownMenu) {
                    openMenu.classList.remove('submenu-open');
                    openMenu.style.maxHeight = null;
                    const otherSvg = openMenu.previousElementSibling.querySelector('svg');
                    if (otherSvg) otherSvg.classList.remove('rotate-180');
                }
            });

            // Toggle submenu yang diklik
            if (isOpen) {
                // Jika sedang terbuka, tutup
                dropdownMenu.classList.remove('submenu-open');
                dropdownMenu.style.maxHeight = null;
                if (svg) svg.classList.remove('rotate-180');
            } else {
                // Jika sedang tertutup, buka
                dropdownMenu.classList.remove('hidden'); // HAPUS 'hidden' SEBELUM ANIMASI
                dropdownMenu.classList.add('submenu-open');
                dropdownMenu.style.maxHeight = dropdownMenu.scrollHeight + "px";
                if (svg) svg.classList.add('rotate-180');
            }
        });
    });
});
