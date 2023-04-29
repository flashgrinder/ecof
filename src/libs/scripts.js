import gsap from 'gsap';
import sliderCards from '../libs/modules/slider-cards';
import sliderVideo from '../libs/modules/slider-video';
import sliderPhoto from '../libs/modules/slider-photo';
document.addEventListener('DOMContentLoaded', function(e) {

    gsap.config({
        nullTargetWarn: true,
        force3D: true
    });

    const sliderCardsSliderTrue = document.querySelector('.js-slider-cards-init');
    const sliderVideoSliderTrue = document.querySelector('.js-slider-video-init');
    const sliderPhotoSliderTrue = document.querySelector('.js-slider-photo-init');
    sliderCardsSliderTrue ? sliderCards.init() : false;
    sliderVideoSliderTrue ? sliderVideo.init() : false;
    sliderPhotoSliderTrue ? sliderPhoto.init() : false;
});