$(document).ready(function () {
    $("#tariff-slider").owlCarousel({
        loop: false,
        margin: 28,
        nav: false,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 2
            }
        }
    });
});

window.addEventListener('DOMContentLoaded', () => {
    // mob-menu
    const burgerBtn = document.getElementById('burger-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuItems = Array.from(document.querySelectorAll('#main-menu__body>li'));

    function openMenu() {
        burgerBtn.classList.add('opened');
        mobileMenu.classList.add('show');
    }

    function closeMenu() {
        burgerBtn.classList.remove('opened');
        mobileMenu.classList.remove('show');
    }

    if (burgerBtn && mobileMenu) {
        burgerBtn.addEventListener('click', () => {
            if (burgerBtn.classList.contains('opened')) {
                closeMenu();
            } else {
                openMenu();
            }
        })
    }

    if (mobileMenu && (menuItems.length > 0)) {
        menuItems.forEach((item) => {
            item.addEventListener('click', (evt) => {
                let scrollTo = item.querySelector('a').title;
                window.scrollTo({
                    top: document.getElementById(scrollTo).offsetTop,
                    behavior: "smooth",
                });
                closeMenu();
            })
        })
    }
    // mob-menu
})