import Swiper, {Thumbs, Navigation, EffectFade, EffectCoverflow, Controller} from 'swiper/core';

function init() {

    Swiper.use([Thumbs, Navigation, EffectFade, EffectCoverflow, Controller]);

    const listSlider = Array.from(document.querySelectorAll(".js-slider-photo-init"));

    listSlider.forEach((item) => {
        // let sliderName = item.querySelector('.js-slider-photo-name');
        let sliderImg = item.querySelector('.js-slider-photo-img');

        const nextEl = item.querySelector('.js-slider-photo-next');
        const prevEl = item.querySelector('.js-slider-photo-prev');

        // let thumbsText = new Swiper(sliderName, {
        //     slidesPerView: 2,
        //     // watchSlidesVisibility: true,
        //     // watchSlidesProgress: true,
        //     speed: 1000,
        //     autoHeight: true,
        //     centeredSlides : true,
        //     loop: true,
        //     grabCursor: true,
        //     effect: 'coverflow',
        //     coverflowEffect: {
        //         rotate: 0,
        //         stretch: 0,
        //         depth: 200,
        //         modifier: 2,
        //         slideShadows: false,
        //     },
        //     navigation: {
        //         nextEl: nextEl,
        //         prevEl: prevEl
        //     },
        // });

        let sliderPicture = new Swiper(sliderImg, {
            slidesPerView: 2,
            autoHeight: true,
            centeredSlides : true,
            loop: true,
            // spaceBetween: 0,
            // effect: 'coverflow', // 'cube', 'fade', 'coverflow',
            // coverflowEffect: {
            //     rotate: 0,
            //     stretch: 124,
            //     depth: 400,
            //     modifier: 1,
            //     slideShadows: false,
            // },
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

        // sliderPicture.controller.control = thumbsText;
        // thumbsText.controller.control = sliderPicture;

    })

}

export default { init }