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
        <div class="plunks__items">
            <!-- Plunk -->
            <article class="plunk">
                <div class="plunk__icon">
                    <img src="<?= STANDART_DIR; ?>img/plunks/plunk-1.svg" alt="" class="plunk__img-icon">
                </div>
                <p class="plunk__text text text--normal text--black text--w-light center">
                    Экскурсии на мусороперерабатывающие комплексы и предприятия
                </p>
            </article>
            <!-- /. Plunk -->
            <!-- Plunk -->
            <article class="plunk">
                <div class="plunk__icon">
                    <img src="<?= STANDART_DIR; ?>img/plunks/plunk-2.svg" alt="" class="plunk__img-icon">
                </div>
                <p class="plunk__text text text--normal text--black text--w-light center">
                    Посещение тематических выставок
                </p>
            </article>
            <!-- /. Plunk -->
            <!-- Plunk -->
            <article class="plunk">
                <div class="plunk__icon">
                    <img src="<?= STANDART_DIR; ?>img/plunks/plunk-3.svg" alt="" class="plunk__img-icon">
                </div>
                <p class="plunk__text text text--normal text--black text--w-light center">
                    Участие в конференциях и форумах по всей России
                </p>
            </article>
            <!-- /. Plunk -->
            <!-- Plunk -->
            <article class="plunk">
                <div class="plunk__icon">
                    <img src="<?= STANDART_DIR; ?>img/plunks/plunk-4.svg" alt="" class="plunk__img-icon">
                </div>
                <p class="plunk__text text text--normal text--black text--w-light center">
                    Мастер-классы по кастомизации одежды, изготовлению открыток и др.
                </p>
            </article>
            <!-- /. Plunk -->
            <!-- Plunk -->
            <article class="plunk">
                <div class="plunk__icon">
                    <img src="<?= STANDART_DIR; ?>img/plunks/plunk-5.svg" alt="" class="plunk__img-icon">
                </div>
                <p class="plunk__text text text--normal text--black text--w-light center">
                    Обучение по системе наставничества
                </p>
            </article>
            <!-- /. Plunk -->
        </div>
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
