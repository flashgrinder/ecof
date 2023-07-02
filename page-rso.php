<?php /* Template Name: РСО */?>
<?php get_header(); ?>

<?php the_post(); ?>
<!-- Top-screen -->
<section class="top-screen block-padding-large">
    <div class="top-screen__body container">
        <div class="top-screen__inner">
            <div class="top-screen__text">
                <h1 class="top-screen__heading title title--big title--black title--w-bold">
                    <?php the_title(); ?>
                </h1>
                <h2 class="top-screen__subheading title title--large title--black title--w-bold">
                    <?php the_field('subtitle'); ?>
                </h2>
                <p class="top-screen__descr text text--large text--black text--w-light">
                    <?php the_excerpt(); ?>
                </p>
                <div class="top-screen__actions">
                    <a href="javascript:;" class="top-screen__btn button button--primary" data-modal="#feedback">
                        Присоединиться
                    </a>
                </div>
            </div>
            <div class="top-screen__pic">
                <?php
                    $default_attr = [
                        'class'	=> "top-screen__img",
                        'alt'   => get_the_title()
                    ];

                    echo get_the_post_thumbnail( $post->ID, 'full', $default_attr );
                ?>
            </div>
        </div>
    </div>
</section>
<!-- /. Top-screen-->

<!-- Plunks -->
<section class="plunks block-padding-small">
    <div class="plunks__body container">
        <?php get_template_part( 'template-parts/template', 'wysiwyg'); ?>
    </div>
</section>
<!-- /. Plunks-->

<!-- Plunks -->
<section class="plunks block-padding-small bg--light-blue">
    <div class="plunks__body container">
        <h2 class="plunks__heading title title--medium title--black title--w-bold title--indent center">
            Курс ЭКОуроков включает в себя 4 основные темы:
        </h2>
        <div class="plunks__items">
            <!-- Plunk -->
            <article class="plunk">
                <div class="plunk__icon">
                    <img src="<?= STANDART_DIR; ?>img/plunks/plunk-rso-1.svg" alt="" class="plunk__img-icon">
                </div>
                <p class="plunk__text text text--normal text--black text--w-light center">
                    Проведение уроков
                </p>
            </article>
            <!-- /. Plunk -->
            <!-- Plunk -->
            <article class="plunk">
                <div class="plunk__icon">
                    <img src="<?= STANDART_DIR; ?>img/plunks/plunk-rso-2.svg" alt="" class="plunk__img-icon">
                </div>
                <p class="plunk__text text text--normal text--black text--w-light center">
                    Установка урн и сеток на территории образовательного учреждения
                </p>
            </article>
            <!-- /. Plunk -->
            <!-- Plunk -->
            <article class="plunk">
                <div class="plunk__icon">
                    <img src="<?= STANDART_DIR; ?>img/plunks/plunk-rso-3.svg" alt="" class="plunk__img-icon">
                </div>
                <p class="plunk__text text text--normal text--black text--w-light center">
                    Размещение информационных табличек
                </p>
            </article>
            <!-- /. Plunk -->
            <!-- Plunk -->
            <article class="plunk">
                <div class="plunk__icon">
                    <img src="<?= STANDART_DIR; ?>img/plunks/plunk-rso-4.svg" alt="" class="plunk__img-icon">
                </div>
                <p class="plunk__text text text--normal text--black text--w-light center">
                    Заключение договора на вывоз отходов нашими партнерами
                </p>
            </article>
            <!-- /. Plunk -->
        </div>
        <div class="plunks__action center">
            <a href="javascript:;" class="plunks__btn button button--primary button--small" data-modal="#feedback">
                Оставить заявку
            </a>
        </div>
    </div>
</section>
<!-- /. Plunks-->

<!-- Plunks -->
<section class="plunks block-padding-small">
    <div class="plunks__body container">
        <h2 class="plunks__heading title title--medium title--black title--w-bold title--indent center">
            Для бизнеса
        </h2>
        <!-- Wysiwyg -->
        <div class="plunks__wysiwyg wysiwyg center">
            <p>
                ЭКОофис – часть корпоративной политики, основанной на социальной и экологической ответственности.
            </p>
        </div>
        <!-- /. Wysiwyg -->
    </div>
</section>
<!-- /. Plunks-->

<!-- Plunks -->
<section class="plunks block-padding-small bg--light-blue">
    <div class="plunks__body container">
        <h2 class="plunks__heading title title--medium title--black title--w-bold title--indent center">
            Наша команда готова помочь:
        </h2>
        <!-- Wysiwyg -->
        <div class="plunks__wysiwyg wysiwyg center">
            <ul>
                <li>
                    Создать более благоприятную среду для трудовой деятельности в компании и снизить ее негативное влияние на окружающую среду
                </li>
                <li>
                    Провести лекции для сотрудников офиса
                </li>
                <li>
                    Провести лекции для сотрудников офиса
                </li>
                <li>
                    Организовать вывоз сортированных отходов
                </li>
            </ul>
            <br>
            <br>
            <br>
            <br>
            <p>
                Вы получаете:
            </p>
            <br>
        </div>
        <!-- /. Wysiwyg -->
        <!-- Slider-cards -->
        <section class="slider-cards js-slider-cards-init">
            <div class="slider-cards__body">
                <div class="slider-cards__outer js-slider-cards-outer">
                    <div class="slider-cards__swiper-container swiper-container js-slider-cards">
                        <div class="slider-cards__swiper-wrapper swiper-wrapper">

                            <div class="slider-cards__swiper-slide swiper-slide">
                                <article class="plunk">
                                    <div class="plunk__icon">
                                        <img src="<?= STANDART_DIR; ?>img/plunks/plunk-rso-h-1.svg" alt="" class="plunk__img-icon">
                                    </div>
                                    <p class="plunk__text text text--normal text--black text--w-light center">
                                        Курс лекций
                                    </p>
                                </article>
                            </div>
                            <div class="slider-cards__swiper-slide swiper-slide">
                                <article class="plunk">
                                    <div class="plunk__icon">
                                        <img src="<?= STANDART_DIR; ?>img/plunks/plunk-rso-h-2.svg" alt="" class="plunk__img-icon">
                                    </div>
                                    <p class="plunk__text text text--normal text--black text--w-light center">
                                        Корпоративную рассылку с материалами для закрепления теории
                                    </p>
                                </article>
                            </div>
                            <div class="slider-cards__swiper-slide swiper-slide">
                                <article class="plunk">
                                    <div class="plunk__icon">
                                        <img src="<?= STANDART_DIR; ?>img/plunks/plunk-rso-h-3.svg" alt="" class="plunk__img-icon">
                                    </div>
                                    <p class="plunk__text text text--normal text--black text--w-light center">
                                        Установку урн на территории офиса
                                    </p>
                                </article>
                            </div>
                            <div class="slider-cards__swiper-slide swiper-slide">
                                <article class="plunk">
                                    <div class="plunk__icon">
                                        <img src="<?= STANDART_DIR; ?>img/plunks/plunk-rso-h-4.svg" alt="" class="plunk__img-icon">
                                    </div>
                                    <p class="plunk__text text text--normal text--black text--w-light center">
                                        Разбор кейсов по вашему направлению
                                    </p>
                                </article>
                            </div>
                            <div class="slider-cards__swiper-slide swiper-slide">
                                <article class="plunk">
                                    <div class="plunk__icon">
                                        <img src="<?= STANDART_DIR; ?>img/plunks/plunk-rso-h-5.svg" alt="" class="plunk__img-icon">
                                    </div>
                                    <p class="plunk__text text text--normal text--black text--w-light center">
                                        Вывоз сортированных отходов нашими партнерами
                                    </p>
                                </article>
                            </div>

                        </div>
                    </div>
                    <div class="slider-cards__nav slider-nav">
                        <div class="slider-cards__swiper-button-prev slider-cards__slider-arrow js-slider-cards-prev slider-nav__arrow slider-nav__arrow--prev">
                            <svg class="slider-cards__slider-arrow-svg slider-nav__arrow-svg" width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 1L1.82588 4.75671C1.3845 5.15395 1.3845 5.84605 1.82588 6.24329L6 10" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>
                        <div class="slider-cards__swiper-button-next slider-cards__slider-arrow js-slider-cards-next slider-nav__arrow slider-nav__arrow--next">
                            <svg class="slider-cards__slider-arrow-svg slider-nav__arrow-svg" width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L5.17412 4.75671C5.6155 5.15395 5.6155 5.84605 5.17412 6.24329L1 10" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /. Slider-cards -->
    </div>
</section>
<!-- /. Plunks-->

<!-- Invite -->
<section class="invite block-padding-small ">
    <div class="invite__body container">
        <h2 class="invite__heading title title--medium title--black title--w-bold title--indent center">
            Хочешь к нам в команду?
        </h2>
        <p class="invite__description text text--large text--black text--w-light center">
            Заполняй заявку и участвуй в лучших мероприятиях
        </p>
        <div class="invite__action center">
            <a href="javascript:;" class="invite__btn button button--primary" data-modal="#feedback">
                Присоединиться
            </a>
        </div>
    </div>
</section>
<!-- /. Invite-->

<?php get_template_part( 'template-parts/template', 'another'); ?>

<?php get_footer(); ?>
