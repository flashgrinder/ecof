<?php get_header(); ?>

<!-- Slider-main -->
<section class="slider-main js-slider-main-init">
    <div class="slider-main__body container">
        <div class="slider-main__outer">
            <div class="slider-main__swiper-container swiper-container js-slider-main">
                <div class="slider-main__swiper-wrapper swiper-wrapper">

                    <div class="slider-main__swiper-slide swiper-slide">
                        <div class="slider-main__slide-card">
                            <div class="slider-main__slide-info">
                                <h2 class="slider-main__slide-title title title--huge title--black title--w-extra-bold">
                                    Волонтёрам
                                </h2>
                                <div class="slider-main__slide-descr text text--large text--black text--w-light">
                                    Сделай мир лучше, вместе с нами
                                </div>
                                <a href="javascript:;" class="slider-main__button button button--primary" data-modal="#feedback">
                                    Присоединяйся
                                </a>
                            </div>
                            <div class="slider-main__slide-pic">
                                <img src="<?= STANDART_DIR; ?>img/slider-main/slide-1.svg" alt="" class="slider-main__slide-img">
                            </div>
                        </div>
                    </div>
                    <div class="slider-main__swiper-slide swiper-slide">
                        <div class="slider-main__slide-card">
                            <div class="slider-main__slide-info">
                                <h2 class="slider-main__slide-title title title--huge title--black title--w-extra-bold">
                                    Волонтёрам
                                </h2>
                                <div class="slider-main__slide-descr text text--large text--black text--w-light">
                                    Сделай мир лучше, вместе с нами
                                </div>
                                <a href="javascript:;" class="slider-main__button button button--primary" data-modal="#feedback">
                                    Присоединяйся
                                </a>
                            </div>
                            <div class="slider-main__slide-pic">
                                <img src="<?= STANDART_DIR; ?>img/slider-main/slide-1.svg" alt="" class="slider-main__slide-img">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="slider-main__pagination swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>
<!-- /. Slider-main -->

<!-- About -->
<section class="about">
    <div class="about__body container-full">
        <div class="about__outer">
            <div class="about__pic">
                <img src="<?= STANDART_DIR; ?>img/main-page/about.svg" alt="" class="about__img">
            </div>
            <div class="about__description wysiwyg">
                <p>
                    ECOfriends - проект, в котором тебе просто и доступно расскажут об экологичном образе жизни, раздельном сборе отходов. Мы поможем тебе реализовать твой проект в сфере ЦУР и ESG.
                </p>
                <p>
                    Команда проекта активно взаимодействует с школами, вузами, органами муниципальной и региональной власти, социально ответственным бизнесом.
                </p>
            </div>
        </div>
    </div>
    <div class="about__decor">
        <img src="<?= STANDART_DIR; ?>img/main-page/wave.svg" alt="" class="about__wave about__wave--desctop">
        <img src="<?= STANDART_DIR; ?>img/main-page/wave-mobile.svg" alt="" class="about__wave about__wave--mobile">
    </div>
</section>
<!-- /. About -->

<!-- Projects -->
<section class="projects">
    <div class="projects__body container">
        <h2 class="projects__heading title title--big title--white title--w-extra-bold title--indent-large center">
            Проекты
        </h2>
        <div class="projects__tabs tabs js-tabs-init">
            <div class="projects__tabs-wrapper tabs__wrapper">
                <div class="projects__tabs-content tabs__content is-open" data-tab-content="1">
                    <div class="projects__card">
                        <div class="projects__wrap-info">
                            <div class="projects__title title title--large title--black title--w-bold">
                                ECOprof
                            </div>
                            <div class="projects__info">
                                <div class="projects__excerpt text text--big text--black text--w-light">
                                    Будущее экологического предпринимательства за сегодняшними школьниками!
                                </div>
                                <div class="projects__action">
                                    <a href="" class="projects__button button button--primary button--small">
                                        Перейти
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="projects__pic">
                            <img src="<?= STANDART_DIR; ?>img/pages/ecoprof.svg" alt="" class="projects__img">
                        </div>
                    </div>
                </div>
                <div class="projects__tabs-content tabs__content" data-tab-content="2">
                    <div class="projects__card">
                        <div class="projects__wrap-info">
                            <div class="projects__title title title--large title--black title--w-bold">
                                Внедрение РСО
                            </div>
                            <div class="projects__info">
                                <div class="projects__excerpt text text--big text--black text--w-light">
                                    Наша команда комплексно внедряет систему раздельного сбора отходов на территориях учебных заведений и офисов.
                                </div>
                                <div class="projects__action">
                                    <a href="" class="projects__button button button--primary button--small">
                                        Перейти
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="projects__pic">
                            <img src="<?= STANDART_DIR; ?>img/pages/rso.svg" alt="" class="projects__img">
                        </div>
                    </div>
                </div>
                <div class="projects__tabs-content tabs__content" data-tab-content="3">
                    <div class="projects__card">
                        <div class="projects__wrap-info">
                            <div class="projects__title title title--large title--black title--w-bold">
                                ЭКОклуб
                            </div>
                            <div class="projects__info">
                                <div class="projects__excerpt text text--big text--black text--w-light">
                                    Реализуйте свои навыки, воплощайте идеи и узнавайте новое!
                                </div>
                                <div class="projects__action">
                                    <a href="" class="projects__button button button--primary button--small">
                                        Перейти
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="projects__pic">
                            <img src="<?= STANDART_DIR; ?>img/pages/eco-club.svg" alt="" class="projects__img">
                        </div>
                    </div>
                </div>
                <div class="projects__tabs-content tabs__content" data-tab-content="4">
                    <div class="projects__card">
                        <div class="projects__wrap-info">
                            <div class="projects__title title title--large title--black title--w-bold">
                                ЭКО просвещение
                            </div>
                            <div class="projects__info">
                                <div class="projects__excerpt text text--big text--black text--w-light">
                                    Участники узнают, как правильно разделять отходы, научатся вести осознанный образ жизни и приобретут ЭКОпривычки!
                                </div>
                                <div class="projects__action">
                                    <a href="" class="projects__button button button--primary button--small">
                                        Перейти
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="projects__pic">
                            <img src="<?= STANDART_DIR; ?>img/pages/eco-education.svg" alt="" class="projects__img">
                        </div>
                    </div>
                </div>
                <div class="projects__tabs-content tabs__content" data-tab-content="5">
                    <div class="projects__card">
                        <div class="projects__wrap-info">
                            <div class="projects__title title title--large title--black title--w-bold">
                                Волонтерский корпус
                            </div>
                            <div class="projects__info">
                                <div class="projects__excerpt text text--big text--black text--w-light">
                                    Проект ECOfriends объединяет экоактивистов, которые принимают участие в жизни своего региона и продвигают экологическую повестку.
                                </div>
                                <div class="projects__action">
                                    <a href="" class="projects__button button button--primary button--small">
                                        Перейти
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="projects__pic">
                            <img src="<?= STANDART_DIR; ?>img/pages/eco-volonteers.svg" alt="" class="projects__img">
                        </div>
                    </div>
                </div>
                <div class="projects__tabs-content tabs__content" data-tab-content="6">
                    <div class="projects__card">
                        <div class="projects__wrap-info">
                            <div class="projects__title title title--large title--black title--w-bold">
                                ЭКОквест и ЭКОпикник
                            </div>
                            <div class="projects__info">
                                <div class="projects__excerpt text text--big text--black text--w-light">
                                    ЭКОквест – уборка территории с раздельным сбором отходов и прохождением логических, познавательных, творческих заданий, а также тематических интерактивных станций на время.
                                </div>
                                <div class="projects__action">
                                    <a href="" class="projects__button button button--primary button--small">
                                        Перейти
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="projects__pic">
                            <img src="<?= STANDART_DIR; ?>img/pages/eco-quest.svg" alt="" class="projects__img">
                        </div>
                    </div>
                </div>
                <!-- Another -->
                <section class="another another--main-page">
                    <div class="another__body">
                        <div class="another__items tabs__buttons">
                            <a href="javascript:;" class="another__item is-active tabs__button" data-tab-trigger="1">
                                <div class="another__icon">
                                    <img src="<?= STANDART_DIR; ?>img/another/icon-1.svg" alt="" class="another__img-icon">
                                </div>
                            </a>
                            <a href="javascript:;" class="another__item tabs__button" data-tab-trigger="2">
                                <div class="another__icon">
                                    <img src="<?= STANDART_DIR; ?>img/another/icon-2.svg" alt="" class="another__img-icon">
                                </div>
                            </a>
                            <a href="javascript:;" class="another__item tabs__button" data-tab-trigger="3">
                                <div class="another__icon">
                                    <img src="<?= STANDART_DIR; ?>img/another/icon-3.svg" alt="" class="another__img-icon">
                                </div>
                            </a>
                            <a href="javascript:;" class="another__item tabs__button" data-tab-trigger="4">
                                <div class="another__icon">
                                    <img src="<?= STANDART_DIR; ?>img/another/icon-4.svg" alt="" class="another__img-icon">
                                </div>
                            </a>
                            <a href="javascript:;" class="another__item tabs__button" data-tab-trigger="5">
                                <div class="another__icon">
                                    <img src="<?= STANDART_DIR; ?>img/another/icon-5.svg" alt="" class="another__img-icon">
                                </div>
                            </a>
                            <a href="javascript:;" class="another__item tabs__button" data-tab-trigger="6">
                                <div class="another__icon">
                                    <img src="<?= STANDART_DIR; ?>img/another/icon-6.svg" alt="" class="another__img-icon">
                                </div>
                            </a>
                        </div>
                    </div>
                </section>
                <!-- /. Another -->
            </div>
        </div>
        <!-- Another -->
        <section class="another another--mobile">
            <div class="another__body">
                <div class="another__items">
                    <a href="<?= STANDART_DIR; ?>img/another/icon-1.svg" class="another__item">
                        <div class="another__icon">
                            <img src="<?= STANDART_DIR; ?>img/another/icon-1.svg" alt="" class="another__img-icon">
                        </div>
                        <h3 class="another__title text text--large text--black text--w-light">
                            ECOprof
                        </h3>
                    </a>
                    <a href="<?= STANDART_DIR; ?>img/another/icon-2.svg" class="another__item">
                        <div class="another__icon">
                            <img src="<?= STANDART_DIR; ?>img/another/icon-2.svg" alt="" class="another__img-icon">
                        </div>
                        <h3 class="another__title text text--large text--black text--w-light">
                            Установска РСО
                        </h3>
                    </a>
                    <a href="<?= STANDART_DIR; ?>img/another/icon-3.svg" class="another__item">
                        <div class="another__icon">
                            <img src="<?= STANDART_DIR; ?>img/another/icon-3.svg" alt="" class="another__img-icon">
                        </div>
                        <h3 class="another__title text text--large text--black text--w-light">
                            ЭКОклуб
                        </h3>
                    </a>
                    <a href="<?= STANDART_DIR; ?>img/another/icon-4.svg" class="another__item">
                        <div class="another__icon">
                            <img src="<?= STANDART_DIR; ?>img/another/icon-4.svg" alt="" class="another__img-icon">
                        </div>
                        <h3 class="another__title text text--large text--black text--w-light">
                            Просвещение
                        </h3>
                    </a>
                    <a href="<?= STANDART_DIR; ?>img/another/icon-5.svg" class="another__item">
                        <div class="another__icon">
                            <img src="<?= STANDART_DIR; ?>img/another/icon-5.svg" alt="" class="another__img-icon">
                        </div>
                        <h3 class="another__title text text--large text--black text--w-light">
                            Волонтёры
                        </h3>
                    </a>
                    <a href="<?= STANDART_DIR; ?>img/another/icon-6.svg" class="another__item">
                        <div class="another__icon">
                            <img src="<?= STANDART_DIR; ?>img/another/icon-6.svg" alt="" class="another__img-icon">
                        </div>
                        <h3 class="another__title text text--large text--black text--w-light">
                            ЭКОквест
                        </h3>
                    </a>
                </div>
            </div>
        </section>
        <!-- /. Another -->
    </div>
</section>
<!-- /. Projects -->

<!-- Slider-team -->
<section class="slider-team js-slider-team-init">
    <div class="slider-team__body container">
        <h2 class="slider-team__heading title title--big title--blue title--w-extra-bold title--indent center">
            Команда
        </h2>
        <div class="slider-team__outer">
            <div class="slider-team__swiper-container swiper-container js-slider-team">
                <div class="slider-team__swiper-wrapper swiper-wrapper">

                    <div class="slider-team__swiper-slide swiper-slide">
                        <div class="slider-team__card">
                            <div class="slider-team__card-pic">
                                <img src="<?= STANDART_DIR; ?>img/main-page/slide-team-1.jpg" alt="" class="slider-team__card-img">
                            </div>
                            <div class="slider-team__card-title title title--medium title--white title--w-extra-bold center">
                                Анна Савин-Кровякова
                            </div>
                            <div class="slider-team__card-description text text--medium text--white text--w-light center">
                                Автор проекта ECOfriends, SEO, президент Фонда регионального экономического развития "Инвестиции и регионы"
                            </div>
                        </div>
                    </div>
                    <div class="slider-team__swiper-slide swiper-slide">
                        <div class="slider-team__card">
                            <div class="slider-team__card-pic">
                                <img src="<?= STANDART_DIR; ?>img/main-page/slide-team-2.jpg" alt="" class="slider-team__card-img">
                            </div>
                            <div class="slider-team__card-title title title--medium title--white title--w-extra-bold center">
                                Ольга Гайдукова
                            </div>
                            <div class="slider-team__card-description text text--medium text--white text--w-light center">
                                Исполнительный директор Фонда регионального экономического развития "Инвестиции и регионы"
                            </div>
                        </div>
                    </div>
                    <div class="slider-team__swiper-slide swiper-slide">
                        <div class="slider-team__card">
                            <div class="slider-team__card-pic">
                                <img src="<?= STANDART_DIR; ?>img/main-page/slide-team-3.jpg" alt="" class="slider-team__card-img">
                            </div>
                            <div class="slider-team__card-title title title--medium title--white title--w-extra-bold center">
                                Юлия Агальцова
                            </div>
                            <div class="slider-team__card-description text text--medium text--white text--w-light center">
                                Директор по развитию и Pr Фонда регионального экономического развития "Инвестиции и регионы"
                            </div>
                        </div>
                    </div>
                    <div class="slider-team__swiper-slide swiper-slide">
                        <div class="slider-team__card">
                            <div class="slider-team__card-pic">
                                <img src="<?= STANDART_DIR; ?>img/main-page/slide-team-3.jpg" alt="" class="slider-team__card-img">
                            </div>
                            <div class="slider-team__card-title title title--medium title--white title--w-extra-bold center">
                                Полина Кровякова
                            </div>
                            <div class="slider-team__card-description text text--medium text--white text--w-light center">
                                Руководитель проекта ECOfriends
                            </div>
                        </div>
                    </div>
                    <div class="slider-team__swiper-slide swiper-slide">
                        <div class="slider-team__card">
                            <div class="slider-team__card-pic">
                                <img src="<?= STANDART_DIR; ?>img/main-page/slide-team-3.jpg" alt="" class="slider-team__card-img">
                            </div>
                            <div class="slider-team__card-title title title--medium title--white title--w-extra-bold center">
                                Юстина Сафронова
                            </div>
                            <div class="slider-team__card-description text text--medium text--white text--w-light center">
                                Менеджер проекта ECOfriends
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="slider-team__nav">
                <div class="slider-team__swiper-button-prev slider-team__arrow js-slider-team-prev">
                    <svg class="slider-team__slider-arrow-svg" width="34" height="63" viewBox="0 0 34 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M32.5 62L2 31.5L32.5 1" stroke="white" stroke-width="2"/>
                    </svg>
                </div>
                <div class="slider-team__swiper-button-next slider-team__arrow js-slider-team-next">
                    <svg class="slider-team__slider-arrow-svg" width="33" height="63" viewBox="0 0 33 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L31.5 31.5L1 62" stroke="black" stroke-width="2"/>
                    </svg>
                </div>
            </div>
            <div class="slider-team__pagination swiper-pagination"></div>
        </div>
    </div>
    <div class="slider-team__bg">
        <img src="<?= STANDART_DIR; ?>img/main-page/team.svg" alt="" class="slider-team__bg-img">
    </div>
</section>
<!-- /. Slider-team -->

<!-- News-main -->
<section class="news-main">
    <div class="news-main__body container">
        <h2 class="news-main__heading title title--big title--white title--w-extra-bold title--indent center">
            Новости
        </h2>
        <div class="news-main__list">
            <article class="news-main__item">
                <a href="" class="news-main__link">
                    <div class="news-main__pic">
                        <img src="https://lipsum.app/random/1500x800" alt="" class="news-main__img">
                    </div>
                </a>
                <h3 class="news-main__title title title--small title--white title--w-medium">
                    Итоги реализации детского гранта
                </h3>
            </article>
            <article class="news-main__item">
                <a href="" class="news-main__link">
                    <div class="news-main__pic">
                        <img src="https://lipsum.app/random/1500x800" alt="" class="news-main__img">
                    </div>
                </a>
                <h3 class="news-main__title title title--small title--white title--w-medium">
                    Итоги реализации детского гранта
                </h3>
            </article>
        </div>
        <div class="news-main__action center">
            <a href="/news" class="news-main__btn button button--secondary">
                Еще
            </a>
        </div>
    </div>
</section>
<!-- /. News-main -->

<!-- Partners-->
<section class="partners block-padding-small partners--home">
    <div class="partners__body container">
        <div class="partners__logos">
            <div class="partners__logo">
                <img src="<?= STANDART_DIR; ?>img/partners/voir.png" alt="" class="partners__img-logo">
            </div>
            <div class="partners__logo">
                <img src="<?= STANDART_DIR; ?>img/partners/pg.png" alt="" class="partners__img-logo">
            </div>
            <div class="partners__logo">
                <img src="<?= STANDART_DIR; ?>img/partners/owc.png" alt="" class="partners__img-logo">
            </div>
            <div class="partners__logo">
                <img src="<?= STANDART_DIR; ?>img/partners/fcd.png" alt="" class="partners__img-logo">
            </div>
            <div class="partners__logo">
                <img src="<?= STANDART_DIR; ?>img/partners/fcg.png" alt="" class="partners__img-logo">
            </div>
        </div>
    </div>
</section>
<!-- /. Partners-->

<?php get_footer(); ?>