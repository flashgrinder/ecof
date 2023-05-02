import Swiper, {Navigation, EffectFade} from 'swiper';

function init() {

    Swiper.use([Navigation, EffectFade]);

    const listSlider = Array.from(document.querySelectorAll(".js-slider-photo-init"));

    listSlider.forEach((item) => {
        let sliderImg = item.querySelector('.js-slider-photo-img');

        const nextEl = item.querySelector('.js-slider-photo-next');
        const prevEl = item.querySelector('.js-slider-photo-prev');

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
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
        });

    })

}

export default { init }