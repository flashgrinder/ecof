import Swiper, { Navigation, EffectCoverflow } from 'swiper';

function init() {

    Swiper.use([Navigation, EffectCoverflow]);

    const listSlider = Array.from(document.querySelectorAll(".js-slider-video-init"));

    listSlider.forEach((item) => {
        let slider = item.querySelector('.js-slider-video');

        const nextEl = item.querySelector('.js-slider-video-next');
        const prevEl = item.querySelector('.js-slider-video-prev');

        let sliderCards = new Swiper(slider, {
            slidesPerView: 2,
            autoHeight: true,
            centeredSlides : true,
            loop: true,
            // spaceBetween: 0,
            effect: 'coverflow', // 'cube', 'fade', 'coverflow',
            coverflowEffect: {
                rotate: 0,
                stretch: 124,
                depth: 400,
                modifier: 1,
            },
            parallax: true,
            grabCursor: true,
            navigation: {
                nextEl: nextEl,
                prevEl: prevEl
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
            }
        });

    })

}

export default { init }