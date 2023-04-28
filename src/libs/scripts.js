import gsap from 'gsap';
import sliderCards from '../libs/modules/slider-cards';
import sliderVideo from '../libs/modules/slider-video';
document.addEventListener('DOMContentLoaded', function(e) {

    gsap.config({
        nullTargetWarn: true,
        force3D: true
    });

    const sliderCardsSliderTrue = document.querySelector('.js-slider-cards-init');
    const sliderVideoSliderTrue = document.querySelector('.js-slider-video-init');
    sliderCardsSliderTrue ? sliderCards.init() : false;
    sliderVideoSliderTrue ? sliderVideo.init() : false;
});