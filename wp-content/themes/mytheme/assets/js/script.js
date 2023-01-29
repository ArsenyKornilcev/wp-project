window.addEventListener('DOMContentLoaded', function() {
    const links = this.document.querySelectorAll('a[href^="#"]');
    links.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            
            if (this.parentElement.getAttribute('class') == 'menu__list-item')
            {
                document.querySelector('.menu__list-item.active').classList.remove('active');
                this.parentElement.classList.add('active');
            }
                

            const id = this.getAttribute('href');

            document.querySelector(id).scrollIntoView({
                'behavior': 'smooth',
                'block': 'start',
            });
        });
    });

    // MOBILE MENU
    const menu_btn = this.document.querySelector('.menu__hamburger');
    const menu_mobile = this.document.querySelector('.menu_mobile');
    const menu_exit = this.document.querySelector('.menu__exit');

    menu_btn.addEventListener('click', function () {
        this.classList.toggle('active');
        menu_mobile.classList.toggle('active');
    });

    menu_exit.addEventListener('click', function () {
        menu_btn.classList.toggle('active');
        menu_mobile.classList.toggle('active');
    });

    const menu_links = this.document.querySelectorAll('.menu_mobile .menu__list-item a');
    
    menu_links.forEach(link => {
        link.addEventListener('click', function () {
            menu_mobile.classList.toggle('active');
            menu_btn.classList.toggle('active');
        });
    });

    // SLIDER
    const swiper = new Swiper('.swiper', {
        loop: true,
        centeredSlides: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            310: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 3,
            },
        },
        
        autoplay: {
            delay: 2500,
            disableOnInteraction: true,
        },
        
    });

});