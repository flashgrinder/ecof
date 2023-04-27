import gsap from 'gsap';
import sliderCards from '../libs/modules/slider-cards';
document.addEventListener('DOMContentLoaded', function(e) {

    gsap.config({
        nullTargetWarn: true,
        force3D: true
    });

    const sliderCardsSliderTrue = document.querySelector('.js-slider-cards-init');
    sliderCardsSliderTrue ? sliderCards.init() : false;
});