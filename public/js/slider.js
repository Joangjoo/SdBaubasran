
        document.addEventListener('DOMContentLoaded', function() {
            new Swiper('.galeri-swiper', {
                loop: true, 
                slidesPerView: 1, 
                spaceBetween: 30, 

                
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },

                
                navigation: {
                    nextEl: '.custom-swiper-button-next',
                    prevEl: '.custom-swiper-button-prev',
                },

                
                breakpoints: {
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 40,
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 50,
                    },
                },
            });
        });
    