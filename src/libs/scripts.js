import gsap from 'gsap';
import burgerMenu from '../libs/modules/burger-menu';
import modal from '../libs/modules/modal';
import tabs from '../libs/modules/tabs';
import sliderMain from '../libs/modules/slider-main';
import sliderTeam from '../libs/modules/slider-team';
import sliderCards from '../libs/modules/slider-cards';
import sliderVideo from '../libs/modules/slider-video';
import sliderPhoto from '../libs/modules/slider-photo';
document.addEventListener('DOMContentLoaded', function(e) {

    gsap.config({
        nullTargetWarn: true,
        force3D: true
    });

    burgerMenu.init();
    modal.init();

    const sliderMainSliderTrue = document.querySelector('.js-slider-main-init');
    const sliderTeamSliderTrue = document.querySelector('.js-slider-team-init');
    sliderMainSliderTrue ? sliderMain.init() : false;
    sliderTeamSliderTrue ? sliderTeam.init() : false;

    const tabsTrue = document.querySelector('.js-tabs-init');
    tabsTrue ? tabs.init() : false;

    const sliderCardsSliderTrue = document.querySelector('.js-slider-cards-init');
    const sliderVideoSliderTrue = document.querySelector('.js-slider-video-init');
    const sliderPhotoSliderTrue = document.querySelector('.js-slider-photo-init');
    sliderCardsSliderTrue ? sliderCards.init() : false;
    sliderVideoSliderTrue ? sliderVideo.init() : false;
    sliderPhotoSliderTrue ? sliderPhoto.init() : false;
});