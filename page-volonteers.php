<?php /* Template Name: Волонтерский корпус */?>
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
        <!-- Wysiwyg -->
        <div class="plunks__wysiwyg wysiwyg center">
            <p>
                За 4 года в мероприятиях приняло участие более 300 волонтеров из 10 городов. Самые активные участники проекта получают благодарственные письма, им зачисляются волонтерские часы для портфолио, выдаются сертификаты и приглашения на мастер-классы, лекции.
                Наши волонтеры являются участниками крупнейших федеральных форумов, таких как #МЫВМЕСТЕ, ПМЭФ, Конгресс молодых ученых и др., а также их приглашают на стажировки партнеры проекта.
            </p>
        </div>
        <!-- /. Wysiwyg -->
    </div>
</section>
<!-- /. Plunks-->

<!-- Features -->
<section class="features block-padding-small">
    <div class="features__body container">
        <h2 class="features__heading title title--medium title--black title--w-bold title--indent center">

            Виды волонтерства

        </h2>
        <div class="features__items">
            <div class="features__card">
                <h4 class="features__card-title text text--medium text--white text--w-medium">

                    Волонтеры науки и техники

                </h4>
                <p class="features__text-card text text--normal text--white text--w-light">
                    Любишь изобретать, вычислять, анализировать? Являешься студентом технического вуза? Мы расскажем о твоих изобретениях не только в наших социальных сетях, но и поможем привлечь партнеров. Мы сотрудничаем с Всероссийским обществом изобретателей и рационализаторов
                    (ВОИР), РОСМОЛОДЕЖЬЮ, вузами. Наши волонтеры принимают участие в крупных форумах и с помощью формул рассчитывают углеродный след участников. Находят единомышленников, проходят стажировку у партнеров!
                </p>
            </div>
            <div class="features__card">
                <h4 class="features__card-title text text--medium text--white text--w-medium">

                    Просвещение

                </h4>
                <p class="features__text-card text text--normal text--white text--w-light">
                    Помощь волонтеров на ЭКОуроках и обучающих лекциях очень важна. Мы уделяем внимание каждому слушателю, для этого подключаем волонтеров к активному участию в ЭКОуроках. Подготовить реквизиты, настроить технику, показать материалы всему классу помогают
                    волонтеры! После обучения ты получишь опыт проведения уроков, сможешь самостоятельно презентовать проекты, а также в дальнейшем стать наставником на наших мероприятиях!
                </p>
            </div>
            <div class="features__card">
                <h4 class="features__card-title text text--medium text--white text--w-medium">

                    Творчество

                </h4>
                <p class="features__text-card text text--normal text--white text--w-light">
                    Знаешь, как подарить испорченной вещи вторую жизнь? На наших мастер-классах мы не только помогаем планете, но и развиваем творческие навыки. Из чего угодно можно сделать что угодно, если включить фантазию! Предлагай идею своего мастер-класса, зови друзей,
                    а наша команда поможет с организацией мероприятия — от поиска площадки до приглашения участников.
                </p>
            </div>
            <div class="features__card">
                <h4 class="features__card-title text text--medium text--white text--w-medium">

                    Медиа-волонтеры

                </h4>
                <p class="features__text-card text text--normal text--white text--w-light">
                    Любишь фотографировать и снимать видеоролики? Хочешь попробовать себя в блогинге и SMM? Мы ждем тебя! Наша команда поможет выбрать интересное направление в сфере экологии и подскажет, как себя реализовать в этом направлении. Выбор за тобой!
                </p>
            </div>
            <div class="features__card">
                <h4 class="features__card-title text text--medium text--white text--w-medium">

                    Помощь планете

                </h4>
                <p class="features__text-card text text--normal text--white text--w-light">
                    Применяем знания на практике! Экологические квесты, субботники, акции, сортировка и сдача отходов в экоцентры требуют подготовки. Тут ты сможешь помочь в организации процесса, прокачать soft и hard skills.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- /. Features -->

<!-- Activity -->
<section class="activity block-padding-small bg--light-blue">
    <div class="activity__body container">
        <h2 class="activity__heading title title--medium title--black title--w-bold title--indent center">

            Активность волонтёра

        </h2>
        <div class="activity__subtitle text text--large text--black text--w-light center">
            За участие и помощь в мероприятиях проекта ECOfriends самые активные волонтеры получают:
        </div>
        <div class="activity__inner">
            <div class="activity__left-col">
                <div class="activity__plunk text text--normal text--black text--w-light right">
                    Баллы на платформе Добро.ру, которые помогут при поступлении в вуз и дают возможность участия в крупных федеральных форумах
                </div>
                <div class="activity__plunk text text--normal text--black text--w-light right">
                    Приглашение на федеральные форумы и конференции, такие как #МЫВМЕСТЕ, Петербургский международный экономический форум и др.
                </div>
            </div>
            <div class="activity__pic">
                <img src="<?= STANDART_DIR; ?>img/an-pic/clock.svg" alt="" class="activity__img">
            </div>
            <div class="activity__right-col">
                <div class="activity__plunk text text--normal text--black text--w-light left">
                    Возможность проведения собственных мероприятий и встреч на площадке проекта. В офисах Саратова и Москвы организован "Волонтерский уголок" с настольными играми и другими материалами.
                </div>
                <div class="activity__plunk text text--normal text--black text--w-light left">
                    Стажировку в компаниях партнеров
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /. Activity -->

<!-- Slider-video -->
<section class="slider-video block-padding-small js-slider-video-init">
    <div class="slider-video__body container">
        <h2 class="slider-video__heading title title--medium title--black title--w-bold title--indent center">

            Волонтеры о проекте

        </h2>
        <div class="slider-video__outer">
            <div class="slider-video__swiper-container swiper-container js-slider-video">
                <div class="slider-video__swiper-wrapper swiper-wrapper">

                    <div class="slider-video__swiper-slide swiper-slide">
                        <div class="slider-video__slide-inner">
                            <div class="slider-video__wrapper">
                                <iframe src="https://www.youtube.com/embed/vX_4I16QhyA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="slider-video__swiper-slide swiper-slide">
                        <div class="slider-video__slide-inner">
                            <div class="slider-video__wrapper">
                                <iframe src="https://www.youtube.com/embed/u1XJMCamAR0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="slider-video__swiper-slide swiper-slide">
                        <div class="slider-video__slide-inner">
                            <div class="slider-video__wrapper">
                                <iframe src="https://www.youtube.com/embed/sNJxvz9KU3A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="slider-video__nav slider-nav">
                <div class="slider-video__swiper-button-prev slider-video__slider-arrow js-slider-video-prev slider-nav__arrow slider-nav__arrow--prev">
                    <svg class="slider-cards__slider-arrow-svg slider-nav__arrow-svg" width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 1L1.82588 4.75671C1.3845 5.15395 1.3845 5.84605 1.82588 6.24329L6 10" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </div>
                <div class="slider-video__swiper-button-next slider-video__slider-arrow js-slider-video-next slider-nav__arrow slider-nav__arrow--next">
                    <svg class="slider-video__slider-arrow-svg slider-nav__arrow-svg" width="7" height="11" viewBox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L5.17412 4.75671C5.6155 5.15395 5.6155 5.84605 5.17412 6.24329L1 10" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </div>
            </div>
        </div>
        <div class="slider-video__post-text text text--large text--black text--w-light center">
            Присоединяйся к нашей команде, заполнив анкету!
        </div>
        <div class="slider-video__action center">
            <a href="javascript:;" class="slider-video__btn button button--primary button--small" data-modal="#feedback">

                Подать заявку

            </a>
        </div>
    </div>
</section>
<!-- /. Slider-video -->

<?php get_template_part( 'template-parts/template', 'another'); ?>

<?php get_footer(); ?>
