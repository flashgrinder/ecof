<?php /* Template Name: ЭКОквест и ЭКОпикник */?>
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
            Этапы ЭКОквеста
        </h2>
        <div class="plunks__items">
            <!-- Plunk -->
            <article class="plunk">
                <div class="plunk__icon">
                    <img src="<?= STANDART_DIR; ?>img/plunks/qv-1.svg" alt="" class="plunk__img-icon">
                </div>
                <p class="plunk__text text text--normal text--black text--w-light center">
                    Команды-участники собирают и разделяют отходы в зеленой зоне в течение 40 минут
                </p>
            </article>
            <!-- /. Plunk -->
            <!-- Plunk -->
            <article class="plunk">
                <div class="plunk__icon">
                    <img src="<?= STANDART_DIR; ?>img/plunks/qv-2.svg" alt="" class="plunk__img-icon">
                </div>
                <p class="plunk__text text text--normal text--black text--w-light center">
                    Решают экологические загадки и ребусы, получают баллы за выполненные задания
                </p>
            </article>
            <!-- /. Plunk -->
            <!-- Plunk -->
            <article class="plunk">
                <div class="plunk__icon">
                    <img src="<?= STANDART_DIR; ?>img/plunks/qv-3.svg" alt="" class="plunk__img-icon">
                </div>
                <p class="plunk__text text text--normal text--black text--w-light center">
                    Эксперты подводят итоги и определяют победителей
                </p>
            </article>
            <!-- /. Plunk -->
            <!-- Plunk -->
            <article class="plunk">
                <div class="plunk__icon">
                    <img src="<?= STANDART_DIR; ?>img/plunks/qv-4.svg" alt="" class="plunk__img-icon">
                </div>
                <p class="plunk__text text text--normal text--black text--w-light center">
                    Всех участников ждет ЭКОпикник
                </p>
            </article>
            <!-- /. Plunk -->
        </div>
    </div>
</section>
<!-- /. Plunks-->

<!-- Plunks -->
<section class="plunks block-padding-small">
    <div class="plunks__body container">
        <h2 class="plunks__heading title title--medium title--black title--w-bold title--indent center">
            ЭКОпикник
        </h2>
        <!-- Wysiwyg -->
        <div class="plunks__wysiwyg wysiwyg center">
            <p>
                Это экологическая вариация пикника на природе, идею которого придумали ребята с ECOprof. Авторы проекта вместе с волонтерами выявили 10 правил экологичного отдыха на природе и рассказывают о них всем участникам квеста.
            </p>
        </div>
        <!-- /. Wysiwyg -->
    </div>
</section>
<!-- /. Plunks-->

<!-- Format -->
<section class="format block-padding-small bg--light-blue">
    <div class="format__body container">
        <h2 class="format__heading title title--medium title--black title--w-bold title--indent center">
            Форматы ЭКОквеста
        </h2>
        <div class="format__items">
            <div class="format__item">
                <div class="format__icon">
                    <img src="<?= STANDART_DIR; ?>img/an-pic/qv-ft-1.svg" alt="" class="format__img-icon">
                </div>
                <div class="format__icon format__icon--root">
                    <img src="<?= STANDART_DIR; ?>img/an-pic/format-root.svg" alt="" class="format__img-icon">
                </div>
                <div class="format__item-cards">
                    <!-- Result-card -->
                    <div class="result-card">
                        <p class="result-card__text text text--normal text--black text--w-light center">
                            Городской ЭКОквест
                        </p>
                    </div>
                    <!-- /. Result-card -->
                    <!-- Result-card -->
                    <div class="result-card">
                        <p class="result-card__text text text--normal text--black text--w-light center">
                            Корпоративный ЭКОквест для ваших сотрудников
                        </p>
                    </div>
                    <!-- /. Result-card -->
                </div>
            </div>
            <div class="format__item">
                <p class="format__text text text--large text--black text--w-light center">
                    Городской ЭКОквест проводится совместно с Региональным оператором АО “Ситиматик”, участие в квесте бесплатное
                </p>
            </div>
            <div class="format__item">
                <div class="format__icon">
                    <img src="<?= STANDART_DIR; ?>img/an-pic/eco-logo.png" alt="" class="format__img-icon">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /. Format -->

<!-- Slider-photo-->
<section class="slider-photo block-padding-small js-slider-photo-init">
    <div class="slider-photo__body container">
        <h2 class="slider-photo__heading title title--medium title--black title--w-bold title--indent center">
            Как это было?
        </h2>
        <div class="slider-photo__outer">
            <div class="slider-photo__inner">
                <div class="slider-photo__swiper-container slider-photo--picture swiper-container js-slider-photo-img">
                    <div class="swiper-photo__swiper-wrapper swiper-wrapper">

                        <?php if (have_rows('photo-slider')) : ?>
                            <?php while (have_rows('photo-slider')) : the_row();

                                $photo_slider_title = get_sub_field('photo_slider_title');
                                $photo_slider_excerpt = get_sub_field('photo_slider_excerpt');
                                $photo_slider_img = get_sub_field('photo_slider_img');
                                $photo_slider_img_scd = get_sub_field('photo_slider_img_scd');

                            ?>
                                <div class="slider-photo__swiper-slide swiper-slide">
                                    <div class="slider-photo__slide-inner">
                                        <div class="slider-photo__name text text--large text--black text--w-light center">
                                            <?= $photo_slider_title; ?>
                                        </div>
                                        <div class="slider-photo__descr text text--large text--black text--w-light center">
                                            <?= $photo_slider_excerpt; ?>
                                        </div>
                                        <div class="slider-photo__wrap">
                                            <?php if (!empty($photo_slider_img)) : ?>
                                                <div class="slider-photo__pic">
                                                    <img src="<?= esc_url($photo_slider_img['url']); ?>" alt="<?= esc_url($photo_slider_img['alt']); ?>" class="slider-photo__img">
                                                </div>
                                            <?php endif; ?>
                                            <?php if (!empty($photo_slider_img_scd)) : ?>
                                                <div class="slider-photo__pic">
                                                    <img src="<?= esc_url($photo_slider_img_scd['url']); ?>" alt="<?= esc_url($photo_slider_img_scd['alt']); ?>" class="slider-photo__img">
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>

                    </div>
                </div>
                <div class="slider-photo__nav slider-nav">
                    <div class="slider-photo__swiper-button-prev slider-photo__slider-arrow js-slider-photo-prev slider-nav__arrow slider-nav__arrow--prev">
                        <svg class="slider-photo__slider-arrow-svg slider-nav__arrow-svg" width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 1L1.82588 4.75671C1.3845 5.15395 1.3845 5.84605 1.82588 6.24329L6 10" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <div class="slider-photo__swiper-button-next slider-photo__slider-arrow js-slider-photo-next slider-nav__arrow slider-nav__arrow--next">
                        <svg class="slider-photo__slider-arrow-svg slider-nav__arrow-svg" width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L5.17412 4.75671C5.6155 5.15395 5.6155 5.84605 5.17412 6.24329L1 10" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-photo__post-text text text--large text--black text--w-light center">
            Оставить заявку на участие в ЭКОквесте
        </div>
        <div class="slider-photo__action center">
            <a href="javascript:;" class="slider-photo__btn button button--primary" data-modal="#feedback">
                Присоединиться
            </a>
        </div>
    </div>
</section>
<!-- /. Slider-photo -->

<?php get_template_part( 'template-parts/template', 'another'); ?>

<?php get_footer(); ?>
