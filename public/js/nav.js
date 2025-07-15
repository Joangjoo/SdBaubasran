document.addEventListener('DOMContentLoaded', () => {
    const dropdownTriggers = document.querySelectorAll('.dropdown-trigger');
    dropdownTriggers.forEach(trigger => {
        const dropdownId = trigger.getAttribute('data-dropdown');
        const dropdown = document.getElementById(dropdownId);

        trigger.addEventListener('click', () => {
            const isOpen = !dropdown.classList.contains('invisible');
            document.querySelectorAll('.dropdown-trigger + ul').forEach(menu => {
                menu.classList.add('invisible', 'opacity-0', 'scale-y-90');
                menu.previousElementSibling.querySelector('svg').classList.remove('rotate-180');
            });

            if (!isOpen) {
                dropdown.classList.remove('invisible', 'opacity-0', 'scale-y-90');
                dropdown.classList.add('opacity-100', 'scale-y-100');
                trigger.querySelector('svg').classList.add('rotate-180');
            }
        });
        document.addEventListener('click', (e) => {
            if (!trigger.contains(e.target) && !dropdown.contains(e.target)) {
                dropdown.classList.add('invisible', 'opacity-0', 'scale-y-90');
                trigger.querySelector('svg').classList.remove('rotate-180');
            }
        });
    });

    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuClose = document.getElementById('menu-close');

    menuToggle.addEventListener('click', () => {
        mobileMenu.classList.remove('hidden');
        mobileMenu.classList.add('flex');
    });

    menuClose.addEventListener('click', () => {
        mobileMenu.classList.remove('flex');
        mobileMenu.classList.add('hidden');
    });

    document.querySelectorAll('.dropdown-mobile-btn').forEach(btn => {
        const targetId = btn.getAttribute('data-dropdown');
        const dropdown = document.getElementById(targetId);
        btn.addEventListener('click', () => {
            const isOpen = !dropdown.classList.contains('hidden');
            document.querySelectorAll('.dropdown-mobile-menu').forEach(menu => {
                menu.classList.add('hidden');
                menu.previousElementSibling.querySelector('svg').classList.remove('rotate-180');
            });
            if (!isOpen) {
                dropdown.classList.remove('hidden');
                btn.querySelector('svg').classList.add('rotate-180');
            }
        });
    });



    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 0) {
            navbar.classList.remove('top-24');
            navbar.classList.add('top-4');
        } else {
            navbar.classList.remove('top-4');
            navbar.classList.add('top-24');
        }
    });
});