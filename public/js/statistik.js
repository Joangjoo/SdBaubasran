document.addEventListener('DOMContentLoaded', function () {
    const counters = [{
        id: 'counter-internasional',
        end: 317,
        color: 'text-orange-400'
    },
    {
        id: 'counter-nasional',
        end: 245,
        color: 'text-pink-400'
    },
    {
        id: 'counter-provinsi',
        end: 189,
        color: 'text-lime-300'
    },
    {
        id: 'counter-kota',
        end: 156,
        color: 'text-cyan-300'
    }
    ];

    const duration = 3000;
    const frameRate = 30;

    function animateCounter(element, start, end, duration, colorClass) {
        const range = end - start;
        const stepTime = Math.abs(Math.floor(duration / (range / (1000 / frameRate))));
        let current = start;
        const counterElement = document.getElementById(element);

        function formatNumber(num) {
            return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        }

        const timer = setInterval(function () {
            current += Math.ceil(range / (duration / stepTime));
            if (current >= end) {
                clearInterval(timer);
                current = end;
            }
            counterElement.textContent = formatNumber(current);
            counterElement.classList.add('scale-110');
            setTimeout(() => {
                counterElement.classList.remove('scale-110');
            }, 100);

        }, stepTime);
    }

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                counters.forEach(counter => {
                    animateCounter(counter.id, 0, counter.end, duration, counter
                        .color);
                });
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.5
    });

    const statsSection = document.getElementById('stats-section');
    if (statsSection) {
        observer.observe(statsSection);
    }

    if (!('IntersectionObserver' in window)) {
        setTimeout(() => {
            counters.forEach(counter => {
                animateCounter(counter.id, 0, counter.end, duration, counter.color);
            });
        }, 1000);
    }
});

