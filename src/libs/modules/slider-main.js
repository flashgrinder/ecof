import Swiper, {Pagination, EffectFade} from 'swiper';

function init() {

    Swiper.use([Pagination , EffectFade]);

    const listSlider = Array.from(document.querySelectorAll(".js-slider-main-init"));

    listSlider.forEach((item) => {
        let sliderImg = item.querySelector('.js-slider-main');

        const nextEl = item.querySelector('.js-slider-main-next');
        const prevEl = item.querySelector('.js-slider-main-prev');

        let sliderPicture = new Swiper(sliderImg, {
            slidesPerView: 1,
            speed: 1000,
            autoHeight: false,
            centeredSlides : true,
            loop: true,
            parallax: true,
            grabCursor: true,
            pagination: {
                el: '.slider-main__pagination',
                type: 'bullets',
                clickable: true,
                bulletActiveClass: 'slider-main__bullet--active',
                bulletClass: 'slider-main__bullet',
            },
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
        });

    })

}

export default { init }