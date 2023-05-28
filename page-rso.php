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
        <h2 class="plunks__heading title title--medium title--black title--w-bold title--indent center">
            Для учебных заведений
        </h2>
        <!-- Wysiwyg -->
        <div class="plunks__wysiwyg wysiwyg center">
            <p>
                В 2022 году при поддержке Фонда президентских грантов мы установили трехсекционные урны и металлические сетки для раздельного сбора отходов в 8 школах Саратова. Наши партнеры организовали вывоз пластика, макулатуры, металла.
            </p>
            <p>
                Для того чтобы система работала на практике, мы проводим курс ЭКОуроков по раздельному сбору отходов и учим школьников правильно сортировать отходы, которые образуются в процессе обучения. Наш опыт показал, что учащиеся начинают внедрять сортировку отходов
                и дома, передают знания своим родителям и знакомым!
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
        </div>
        <!-- /. Wysiwyg -->
        <div class="plunks__items">
            <!-- Plunk -->
            <article class="plunk">
                <div class="plunk__icon">
                    <img src="<?= STANDART_DIR; ?>img/plunks/plunk-rso-h-1.svg" alt="" class="plunk__img-icon">
                </div>
                <p class="plunk__text text text--normal text--black text--w-light center">
                    Курс лекций
                </p>
            </article>
            <!-- /. Plunk -->
            <!-- Plunk -->
            <article class="plunk">
                <div class="plunk__icon">
                    <img src="<?= STANDART_DIR; ?>img/plunks/plunk-rso-h-2.svg" alt="" class="plunk__img-icon">
                </div>
                <p class="plunk__text text text--normal text--black text--w-light center">
                    Корпоративную рассылку с материалами для закрепления теории
                </p>
            </article>
            <!-- /. Plunk -->
            <!-- Plunk -->
            <article class="plunk">
                <div class="plunk__icon">
                    <img src="<?= STANDART_DIR; ?>img/plunks/plunk-rso-h-3.svg" alt="" class="plunk__img-icon">
                </div>
                <p class="plunk__text text text--normal text--black text--w-light center">
                    Установку урн на территории офиса
                </p>
            </article>
            <!-- /. Plunk -->
            <!-- Plunk -->
            <article class="plunk">
                <div class="plunk__icon">
                    <img src="<?= STANDART_DIR; ?>img/plunks/plunk-rso-h-4.svg" alt="" class="plunk__img-icon">
                </div>
                <p class="plunk__text text text--normal text--black text--w-light center">
                    Разбор кейсов по вашему направлению
                </p>
            </article>
            <!-- /. Plunk -->
            <!-- Plunk -->
            <article class="plunk">
                <div class="plunk__icon">
                    <img src="<?= STANDART_DIR; ?>img/plunks/plunk-rso-h-5.svg" alt="" class="plunk__img-icon">
                </div>
                <p class="plunk__text text text--normal text--black text--w-light center">
                    Вывоз сортированных отходов нашими партнерами
                </p>
            </article>
            <!-- /. Plunk -->
        </div>
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
