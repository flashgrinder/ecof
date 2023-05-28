<?php /* Template Name: ЭКО просвещение */?>
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
            Уроки
        </h2>
        <!-- Wysiwyg -->
        <div class="plunks__wysiwyg wysiwyg center">
            <p>
                ЭКОурок — занятие в игровой форме для детей школьного и дошкольного возраста, рассчитанное на один академический час (45 минут). На уроках мы совмещаем теорию с практикой, смотрим обучающие ролики, проходим тесты и викторины.
            </p>
            <p>
                Курс ЭКОуроков включает в себя 4 основные темы:
            </p>
        </div>
        <!-- /. Wysiwyg -->
        <div class="plunks__items">
            <!-- Plunk -->
            <article class="plunk">
                <div class="plunk__icon">
                    <img src="<?= STANDART_DIR; ?>img/plunks/plunk-eco-ed-1.svg" alt="" class="plunk__img-icon">
                </div>
                <p class="plunk__text text text--normal text--black text--w-light center">
                    Сортировка и переработка отходов
                </p>
            </article>
            <!-- /. Plunk -->
            <!-- Plunk -->
            <article class="plunk">
                <div class="plunk__icon">
                    <img src="<?= STANDART_DIR; ?>img/plunks/plunk-eco-ed-2.svg" alt="" class="plunk__img-icon">
                </div>
                <p class="plunk__text text text--normal text--black text--w-light center">
                    Правило 5R или Zero west
                </p>
            </article>
            <!-- /. Plunk -->
            <!-- Plunk -->
            <article class="plunk">
                <div class="plunk__icon">
                    <img src="<?= STANDART_DIR; ?>img/plunks/plunk-eco-ed-3.svg" alt="" class="plunk__img-icon">
                </div>
                <p class="plunk__text text text--normal text--black text--w-light center">
                    Осознанный образ жизни
                </p>
            </article>
            <!-- /. Plunk -->
            <!-- Plunk -->
            <article class="plunk">
                <div class="plunk__icon">
                    <img src="<?= STANDART_DIR; ?>img/plunks/plunk-eco-ed-4.svg" alt="" class="plunk__img-icon">
                </div>
                <p class="plunk__text text text--normal text--black text--w-light center">
                    Внедрение экологических привычек
                </p>
            </article>
            <!-- /. Plunk -->
        </div>
    </div>
</section>
<!-- /. Plunks-->

<!-- Slider-cards -->
<section class="slider-cards bg--light-blue js-slider-cards-init block-padding-small">
    <div class="slider-cards__body container">
        <h2 class="slider-cards__heading title title--medium title--black title--w-bold title--indent center">
            Как это работает?
        </h2>
        <div class="slider-cards__outer js-slider-cards-outer">
            <div class="slider-cards__swiper-container swiper-container js-slider-cards">
                <div class="slider-cards__swiper-wrapper swiper-wrapper">

                    <div class="slider-cards__swiper-slide swiper-slide">
                        <article class="plunk">
                            <div class="plunk__icon">
                                <img src="<?= STANDART_DIR; ?>img/slider-cards/work-1.svg" alt="" class="plunk__img-icon">
                            </div>
                            <p class="plunk__text text text--normal text--black text--w-light center">
                                Индивидуальный подход (программа строится исходя из вашего запроса и возраста участников)
                            </p>
                        </article>
                    </div>
                    <div class="slider-cards__swiper-slide swiper-slide">
                        <article class="plunk">
                            <div class="plunk__icon">
                                <img src="<?= STANDART_DIR; ?>img/slider-cards/work-2.svg" alt="" class="plunk__img-icon">
                            </div>
                            <p class="plunk__text text text--normal text--black text--w-light center">
                                Квалифицированные специалисты (эксперты проекта, предприниматели, опытные эко-волонтеры)
                            </p>
                        </article>
                    </div>
                    <div class="slider-cards__swiper-slide swiper-slide">
                        <article class="plunk">
                            <div class="plunk__icon">
                                <img src="<?= STANDART_DIR; ?>img/slider-cards/work-3.svg" alt="" class="plunk__img-icon">
                            </div>
                            <p class="plunk__text text text--normal text--black text--w-light center">
                                Интерактивный подход (обучающие материалы и игры, видеоролики)
                            </p>
                        </article>
                    </div>
                    <div class="slider-cards__swiper-slide swiper-slide">
                        <article class="plunk">
                            <div class="plunk__icon">
                                <img src="<?= STANDART_DIR; ?>img/slider-cards/work-4.svg" alt="" class="plunk__img-icon">
                            </div>
                            <p class="plunk__text text text--normal text--black text--w-light center">
                                Мобильность (выезды в школу/садик/университет и на другие площадки)
                            </p>
                        </article>
                    </div>
                    <div class="slider-cards__swiper-slide swiper-slide">
                        <article class="plunk">
                            <div class="plunk__icon">
                                <img src="<?= STANDART_DIR; ?>img/slider-cards/work-5.svg" alt="" class="plunk__img-icon">
                            </div>
                            <p class="plunk__text text text--normal text--black text--w-light center">
                                Нестандартный формат занятий (в теплое время года уроки проводятся на свежем воздухе)
                            </p>
                        </article>
                    </div>
                    <div class="slider-cards__swiper-slide swiper-slide">
                        <article class="plunk">
                            <div class="plunk__icon">
                                <img src="<?= STANDART_DIR; ?>img/slider-cards/work-6.svg" alt="" class="plunk__img-icon">
                            </div>
                            <p class="plunk__text text text--normal text--black text--w-light center">
                                Развитие hard и soft skills
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

<!-- Format -->
<section class="format block-padding-small">
    <div class="format__body container">
        <div class="format__items">
            <div class="format__item">
                <div class="format__icon">
                    <img src="<?= STANDART_DIR; ?>img/an-pic/fpg-logo.png" alt="" class="format__img-icon">
                </div>
                <p class="format__text text text--large text--black text--w-light center">
                    В 2022 году направление “ЭКОуроки” получило поддержку Фонда президентских грантов.
                    <br>
                    За год команда проекта проделала большую работу:
                    <br>
                    <br>
                </p>
                <div class="format__item-cards">
                    <!-- Result-card -->
                    <div class="result-card">
                        <p class="result-card__text text text--normal text--black text--w-light center">
                            Проведено 190 ЭКОуроков
                        </p>
                    </div>
                    <!-- /. Result-card -->
                    <!-- Result-card -->
                    <div class="result-card">
                        <p class="result-card__text text text--normal text--black text--w-light center">
                            Организовано 3 акции по раздельному сбору отходов
                        </p>
                    </div>
                    <!-- /. Result-card -->
                    <!-- Result-card -->
                    <div class="result-card">
                        <p class="result-card__text text text--normal text--black text--w-light center">
                            Собрано 50 тонн вторсырья
                        </p>
                    </div>
                    <!-- /. Result-card -->
                    <!-- Result-card -->
                    <div class="result-card">
                        <p class="result-card__text text text--normal text--black text--w-light center">
                            В 8 школах г. Саратова установлены урны и сетки для раздельного сбора отходов
                        </p>
                    </div>
                    <!-- /. Result-card -->
                    <!-- Result-card -->
                    <div class="result-card">
                        <p class="result-card__text text text--normal text--black text--w-light center">
                            Более 7000 школьников приняли участие в наших мероприятиях
                        </p>
                    </div>
                    <!-- /. Result-card -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /. Format -->

<!-- Partners-->
<section class="partners block-padding-small bg--light-blue">
    <div class="partners__body container">
        <h2 class="partners__heading title title--medium title--black title--w-bold title--indent center">
            Нашу деятельность отметили:
        </h2>
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

<!-- Format -->
<section class="format block-padding-small bg--light-blue">
    <div class="format__body container">
        <h2 class="format__heading title title--medium title--black title--w-bold title--indent center">
            Лекции
        </h2>
        <div class="format__items">
            <div class="format__item">
                <div class="format__icon">
                    <img src="<?= STANDART_DIR; ?>img/an-pic/les-1.svg" alt="" class="format__img-icon">
                </div>
                <div class="format__text text text--large text--black text--w-light center">
                    Лекции — формат обучения для студентов, сотрудников, больших групп учащихся (более 35 человек).
                    <br>
                    <br>
                    За 1,5 часа эксперты проведут лекцию и с помощью интерактивных тестов, кроссвордов и заданий закрепят материал на практике. На занятиях возможен разбор кейсов и ситуаций, исходя из интересов компании или направления обучения.
                </div>
            </div>
            <div class="format__item">
                <div class="format__icon">
                    <img src="<?= STANDART_DIR; ?>img/an-pic/les-2.svg" alt="" class="format__img-icon">
                </div>
                <p class="format__text text text--large text--black text--w-light center">
                    Почему стоит выбрать нас?
                </p>
                <div class="format__icon format__icon--root">
                    <img src="<?= STANDART_DIR; ?>img/an-pic/format-root.svg" alt="" class="format__img-icon">
                </div>
                <div class="format__item-cards">
                    <!-- Result-card -->
                    <div class="result-card">
                        <p class="result-card__text text text--normal text--black text--w-light center">
                            Эксперты в сфере устойчивого развития поделятся не только теорией, но и дадут вам практические кейсы
                        </p>
                    </div>
                    <!-- /. Result-card -->
                    <!-- Result-card -->
                    <div class="result-card">
                        <p class="result-card__text text text--normal text--black text--w-light center">
                            Лекции помогут вам организовать экологический процесс на работе и вдохновят на экологические подвиги
                        </p>
                    </div>
                    <!-- /. Result-card -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /. Format -->

<!-- Format -->
<section class="format block-padding-small">
    <div class="format__body container">
        <div class="format__items">
            <div class="format__item">
                <div class="format__icon">
                    <img src="<?= STANDART_DIR; ?>img/an-pic/ed-1.svg" alt="" class="format__img-icon">
                </div>
                <div class="format__text text text--large text--black text--w-light center">
                    Команда нашего проекта активно проводит лекции для всех возрастов: школьников, студентов и корпоративных работников.
                    <br>
                    <br>
                    Темы лекций:
                    <br>
                    <br>
                </div>
                <!-- Slider-cards -->
                <div class="slider-cards js-slider-cards-init">
                    <div class="slider-cards__body">
                        <div class="slider-cards__outer js-slider-cards-outer">
                            <div class="slider-cards__swiper-container swiper-container js-slider-cards-one">
                                <div class="slider-cards__swiper-wrapper swiper-wrapper">

                                    <div class="slider-cards__swiper-slide swiper-slide">
                                        <article class="plunk plunk--big">
                                            <h3 class="plunk__title text text--large text--black text--w-light center">
                                                Образовательная лекция по Целям Устойчивого развития
                                            </h3>
                                            <div class="plunk__icon">
                                                <img src="<?= STANDART_DIR; ?>img/slider-cards/lect-1.svg" alt="" class="plunk__img-icon">
                                            </div>
                                            <div class="plunk__text text text--normal text--black text--w-light center">
                                                Цели в области устойчивого развития направлены на улучшение благосостояния и защиту нашей планеты. Использование природных ресурсов не может быть бесконечным. Если лишить их возможности восстановления – глобальная экологическая катастрофа окажется неизбежной. Усилия всех стран должны быть направлены на то, чтобы функционирование экономики основывалось на использовании экологически чистых, энергосберегающих и материалосберегающих технологий, учитывающих минимизацию и рециклинг отходов. Каждый из нас может сделать нашу планету лучше и ориентироваться на ЦУР как в своей работе, так и в повседневной жизни. Об этом мы рассказываем на лекциях этого блока.
                                            </div>
                                        </article>
                                    </div>
                                    <div class="slider-cards__swiper-slide swiper-slide">
                                        <article class="plunk plunk--big">
                                            <h3 class="plunk__title text text--large text--black text--w-light center">
                                                Образовательная лекция по повестке ESG
                                            </h3>
                                            <div class="plunk__icon">
                                                <img src="<?= STANDART_DIR; ?>img/slider-cards/lect-2.svg" alt="" class="plunk__img-icon">
                                            </div>
                                            <div class="plunk__text text text--normal text--black text--w-light center">
                                                Понятие ESG впервые появилось в 2004 году и в последние годы тренд на ответственность и экологичность распространился и на сферу инвестиций. ESG: E (environment) – ответственное отношение к окружающей среде;
                                                S (social) – высокая социальная ответственность; G (governance) – высокое качество корпоративного управления; «Зеленая» повестка проделала внушительный путь — она влияет на таможенную и налоговую политику, инвесторы смотрят на ESG-рейтинги компаний не менее пристально, чем на отчёты
                                                о прибыли и убытках. На лекциях по данному направлению мы рассказываем о том, какие управленческие стратегии востребованы в реализации ESG-повестки сегодня.
                                            </div>
                                        </article>
                                    </div>
                                    <div class="slider-cards__swiper-slide swiper-slide">
                                        <article class="plunk plunk--big">
                                            <h3 class="plunk__title text text--large text--black text--w-light center">
                                                Общие лекции по осознанному образу жизни
                                            </h3>
                                            <div class="plunk__icon">
                                                <img src="<?= STANDART_DIR; ?>img/slider-cards/lect-3.svg" alt="" class="plunk__img-icon">
                                            </div>
                                            <div class="plunk__text text text--normal text--black text--w-light center">
                                                Раздельный сбор отходов;
                                                <br>
                                                Циклы переработки отходов: макулатуры, пластика, металла, стекла и другого сырья;
                                                <br>
                                                Правило ZeroWaste (ноль отходов) — это общественное движение, главная цель которого максимально уменьшить количество отходов;
                                                <br>
                                                Правило 5R: Refuse — откажись, Reduce — сократи, Reuse — используй повторно, Recycle — переработай, Rot — компостируй
                                            </div>
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
                </div>
                <!-- /. Slider-cards -->
            </div>
            <div class="format__item">
                <div class="format__text text text--large text--black text--w-light center">
                    Узнайте больше о темах лекций и времени проведения, заполняйте форму приема заявок и мы свяжемся с вами в ближайшее время
                </div>
            </div>
        </div>
        <div class="format__action center">
            <a href="javascript:;" class="format__btn button button--primary" data-modal="#feedback">
                Присоединиться
            </a>
        </div>
    </div>
</section>
<!-- /. Format -->

<?php get_template_part( 'template-parts/template', 'another'); ?>

<?php get_footer(); ?>
