import Swiper, { Navigation } from 'swiper';

function init() {

    Swiper.use([Navigation]);

    const listSlider = Array.from(document.querySelectorAll(".js-slider-cards-init"));

    listSlider.forEach((item) => {
        let slider = item.querySelector('.js-slider-cards');
        let sliderOneCard = item.querySelector('.js-slider-cards-one');

        const nextEl = item.querySelector('.js-slider-cards-next');
        const prevEl = item.querySelector('.js-slider-cards-prev');

        if ( slider) {
            let sliderCards = new Swiper(slider, {
                slidesPerView: 1,
                autoHeight: true,
                loop: false,
                navigation: {
                    nextEl: nextEl,
                    prevEl: prevEl
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 5
                    },
                    576: {
                        slidesPerView: 2,
                    },
                    768: {
                        slidesPerView: 3,
                    },
                    1024: {
                        slidesPerView: 4,
                        slidesPerColumn: 1
                    }
                }
            });
        }
        if ( sliderOneCard) {
            let sliderCardsOne = new Swiper(sliderOneCard, {
                slidesPerView: 1,
                autoHeight: true,
                loop: true,
                navigation: {
                    nextEl: nextEl,
                    prevEl: prevEl
                },
            });
        }

    })

}

export default { init }