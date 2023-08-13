<?php /* Template Name: Eco Club */?>
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
        <!-- Slider-cards -->
        <section class="slider-cards js-slider-cards-init block-padding-small">
            <div class="slider-cards__body">
                <div class="slider-cards__outer js-slider-cards-outer">
                    <div class="slider-cards__swiper-container swiper-container js-slider-cards">
                        <div class="slider-cards__swiper-wrapper swiper-wrapper">

                            <div class="slider-cards__swiper-slide swiper-slide">
                                <article class="plunk">
                                    <div class="plunk__icon">
                                        <img src="<?= STANDART_DIR; ?>img/plunks/plunk-1.svg" alt="" class="plunk__img-icon">
                                    </div>
                                    <p class="plunk__text text text--normal text--black text--w-light center">
                                        Экскурсии на мусороперерабатывающие комплексы и предприятия
                                    </p>
                                </article>
                            </div>
                            <div class="slider-cards__swiper-slide swiper-slide">
                                <article class="plunk">
                                    <div class="plunk__icon">
                                        <img src="<?= STANDART_DIR; ?>img/plunks/plunk-2.svg" alt="" class="plunk__img-icon">
                                    </div>
                                    <p class="plunk__text text text--normal text--black text--w-light center">
                                        Посещение тематических выставок
                                    </p>
                                </article>
                            </div>
                            <div class="slider-cards__swiper-slide swiper-slide">
                                <article class="plunk">
                                    <div class="plunk__icon">
                                        <img src="<?= STANDART_DIR; ?>img/plunks/plunk-3.svg" alt="" class="plunk__img-icon">
                                    </div>
                                    <p class="plunk__text text text--normal text--black text--w-light center">
                                        Участие в конференциях и форумах по всей России
                                    </p>
                                </article>
                            </div>
                            <div class="slider-cards__swiper-slide swiper-slide">
                                <article class="plunk">
                                    <div class="plunk__icon">
                                        <img src="<?= STANDART_DIR; ?>img/plunks/plunk-4.svg" alt="" class="plunk__img-icon">
                                    </div>
                                    <p class="plunk__text text text--normal text--black text--w-light center">
                                        Мастер-классы по кастомизации одежды, изготовлению открыток и др.
                                    </p>
                                </article>
                            </div>
                            <div class="slider-cards__swiper-slide swiper-slide">
                                <article class="plunk">
                                    <div class="plunk__icon">
                                        <img src="<?= STANDART_DIR; ?>img/plunks/plunk-5.svg" alt="" class="plunk__img-icon">
                                    </div>
                                    <p class="plunk__text text text--normal text--black text--w-light center">
                                        Обучение по системе наставничества
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

<!-- Calendar -->
<section class="calendar block-padding-small bg--light-blue">
    <div class="calendar__body container">
        <h2 class="calendar__heading title title--medium title--black title--w-bold center">
            Календарь мероприятий
        </h2>
        <div class="calendar__plugin">
            <?= do_shortcode('[events-calendar-templates category="all" template="default" style="style-2" date_format="default" start_date="" end_date="" limit="-1" order="ASC" hide-venue="no" socialshare="no" time="all"]'); ?>
        </div>
    </div>
</section>
<!-- /. Calendar-->

<?php get_template_part( 'template-parts/template', 'another'); ?>

<!-- Invite -->
<section class="invite block-padding-small  bg--light-blue ">
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

<?php get_footer(); ?>
