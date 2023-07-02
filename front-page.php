<?php get_header(); ?>

<!-- Slider-main -->
<section class="slider-main js-slider-main-init">
    <div class="slider-main__body container">
        <div class="slider-main__outer">
            <div class="slider-main__swiper-container swiper-container js-slider-main">
                <div class="slider-main__swiper-wrapper swiper-wrapper">
                <?php if (have_rows('main-slider')) : ?>
                    <?php while (have_rows('main-slider')) : the_row();

                        $main_slider_title = get_sub_field('main_slider_title');
                        $main_slider_excerpt = get_sub_field('main_slider_excerpt');
                        $main_slider_img = get_sub_field('main_slider_img');

                        ?>
                        <div class="slider-main__swiper-slide swiper-slide">
                            <div class="slider-main__slide-card">
                                <div class="slider-main__slide-info">
                                    <?php if (!empty($main_slider_title)) : ?>
                                        <h2 class="slider-main__slide-title title title--huge title--black title--w-bold">
                                            <?= $main_slider_title; ?>
                                        </h2>
                                    <?php endif; ?>
                                    <?php if (!empty($main_slider_title)) : ?>
                                        <div class="slider-main__slide-descr text text--large text--black text--w-light">
                                            <?= $main_slider_excerpt; ?>
                                        </div>
                                    <?php endif; ?>
                                    <a href="javascript:;" class="slider-main__button button button--primary" data-modal="#feedback">
                                        Присоединяйся
                                    </a>
                                </div>
                                <?php if (!empty($main_slider_img)) : ?>
                                    <div class="slider-main__slide-pic">
                                        <img src="<?= esc_url($main_slider_img['url']); ?>" class="slider-main__slide-img" alt="<?= esc_url($main_slider_img['alt']); ?>">
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
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
                <?php the_field('about_wysiwyg'); ?>
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
<section class="projects" id="projects">
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
                                    <a href="https://eco-friends.info/ecoprof/" class="projects__button button button--primary button--small">
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
                                    <a href="https://eco-friends.info/vnedrenie-rso/" class="projects__button button button--primary button--small">
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
                                    <a href="https://eco-friends.info/ekoklub/" class="projects__button button button--primary button--small">
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
                                    <a href="https://eco-friends.info/eko-prosveshhenie/" class="projects__button button button--primary button--small">
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
                                    <a href="https://eco-friends.info/volonterskij-korpus/" class="projects__button button button--primary button--small">
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
                                    <a href="https://eco-friends.info/ekokvest-i-ekopiknik/" class="projects__button button button--primary button--small">
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
                    <?php
                        $project_list = new WP_Query(array(
                            'post_type'   => 'page',
                            'post_status' => 'publish',
                            'category_name'    => 'proekty',
                            'posts_per_page' => -1,
                            'orderby'     => 'date',
                            'order'       => 'DESC',
                            'suppress_filters' => true
                        ));
                    ?>
                    <?php if( $project_list->have_posts() ) :
                        while( $project_list->have_posts() ) : $project_list->the_post(); ?>
                            <a href="<?php the_permalink(); ?>" class="another__item">
                                <div class="another__icon">
                                    <?php
                                    $page_icon = get_field('page_icon', $post->ID);
                                    if( !empty( $page_icon ) ): ?>
                                        <img class="another__img-icon" src="<?= esc_url($page_icon['url']); ?>" alt="<?php echo esc_attr($page_icon['alt']); ?>" />
                                    <?php endif; ?>
                                </div>
                                <h3 class="another__title text text--large text--black text--w-light">
                                    <?php the_field('page_title'); ?>
                                </h3>
                            </a>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php  endif; ?>
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
                    <?php if (have_rows('team-slider')) : ?>
                        <?php while (have_rows('team-slider')) : the_row();

                            $team_slider_name = get_sub_field('team_slider_name');
                            $team_slider_position = get_sub_field('team_slider_position');
                            $team_slider_img = get_sub_field('team_slider_img');

                            ?>
                            <div class="slider-team__swiper-slide swiper-slide">
                                <div class="slider-team__card">
                                    <?php if (!empty($team_slider_img)) : ?>
                                        <div class="slider-team__card-pic">
                                            <img src="<?= esc_url($team_slider_img['url']); ?>" class="slider-team__card-img" alt="<?= esc_url($team_slider_img['alt']); ?>">
                                        </div>
                                    <?php endif; ?>
                                    <div class="slider-team__card-title title title--medium title--white title--w-extra-bold center">
                                        <?= $team_slider_name; ?>
                                    </div>
                                    <div class="slider-team__card-description text text--medium text--white text--w-light center">
                                        <?= $team_slider_position; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
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
</section>
<!-- /. Slider-team -->

<!-- News-main -->
<section class="news-main">
    <div class="news-main__body container">
        <h2 class="news-main__heading title title--big title--white title--w-extra-bold title--indent center">
            Новости
        </h2>
        <div class="news-main__list">
            <?php

            $main_list = new WP_Query(array(
                'post_type'   => 'post',
                'post_status' => 'publish',
                'category_name'    => 'news',
                'posts_per_page' => 2,
                'paged'       => get_query_var('paged') ?: 1,
                'orderby'     => 'date',
                'order'       => 'DESC',
                'suppress_filters' => true
            ));

            ?>
            <?php if( $main_list->have_posts() ) :
                while( $main_list->have_posts() ) : $main_list->the_post(); ?>
                    <article class="news-main__item">
                        <a href="<?php the_permalink(); ?>" class="news-main__link">
                            <div class="news-main__pic">
                                <?php
                                $default_attr = [
                                    'class'	=> "news-main__img",
                                    'alt'   => get_the_title()
                                ];
                                echo get_the_post_thumbnail( $post->ID, 'large', $default_attr ); ?>
                            </div>
                        </a>
                        <h3 class="news-main__title title title--small title--white title--w-medium">
                            <?php the_title(); ?>
                        </h3>
                    </article>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php  endif; ?>
        </div>
        <div class="news-main__action center">
            <a href="https://eco-friends.info/novosti/" class="news-main__btn button button--secondary">
                Еще
            </a>
        </div>
    </div>
</section>
<!-- /. News-main -->

<!-- Partners-->
<section class="partners partners--home">
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