import Swiper, {Pagination, EffectFade, Navigation} from 'swiper';

function init() {

    Swiper.use([Navigation, Pagination , EffectFade]);

    const listSlider = Array.from(document.querySelectorAll(".js-slider-team-init"));

    listSlider.forEach((item) => {
        let sliderImg = item.querySelector('.js-slider-team');

        const nextEl = item.querySelector('.js-slider-team-next');
        const prevEl = item.querySelector('.js-slider-team-prev');

        let sliderPicture = new Swiper(sliderImg, {
            slidesPerView: 1,
            speed: 1000,
            autoHeight: true,
            centeredSlides : true,
            loop: true,
            parallax: true,
            grabCursor: true,
            navigation: {
                nextEl: nextEl,
                prevEl: prevEl
            },
            pagination: {
                el: '.slider-team__pagination',
                type: 'bullets',
                clickable: true,
                bulletActiveClass: 'slider-team__bullet--active',
                bulletClass: 'slider-team__bullet',
            },
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
        });

    })

}

export default { init }