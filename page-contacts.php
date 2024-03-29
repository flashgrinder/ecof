<?php /* Template Name: Контакты */?>
<?php get_header(); ?>

<!-- Contacts -->
<div class="contacts">
    <div class="contacts__body container">
        <h1 class="contacts__heading title title--medium title--black title--w-bold title--indent-large center">
            Где мы находимся?
        </h1>
        <div class="contacts__inner">
            <address class="contacts__info">
                <div class="contacts__item">
                    <a class="contact__item-wrap" href="tel:+7(917)2104781">
                        <div class="contacts__item-icon">
                            <img src="<?= STANDART_DIR; ?>img/contacts/phone.svg" alt="" class="contacts__item-img">
                        </div>
                        <div class="contacts__item-text">
                            <div class="contacts__item-title title title--small title--black title--w-normal">
                                Телефон для связи
                            </div>
                            <div class="contacts__item-subtitle text text--medium text--black text--w-light">
                                +7(917)210-47-81
                            </div>
                        </div>
                    </a>
                </div>
                <div class="contacts__item">
                    <a class="contact__item-wrap" href="https://vk.com/ecofriends_project">
                        <div class="contacts__item-icon">
                            <img src="<?= STANDART_DIR; ?>img/contacts/vk.svg" alt="" class="contacts__item-img">
                        </div>
                        <div class="contacts__item-text">
                            <div class="contacts__item-title title title--small title--black title--w-normal">
                                ВКонтакте
                            </div>
                            <div class="contacts__item-subtitle text text--medium text--black text--w-light">
                                ecofriends_project
                            </div>
                        </div>
                    </a>
                </div>
                <div class="contacts__item">
                    <a class="contact__item-wrap" href="https://t.me/ecofriends_pr">
                        <div class="contacts__item-icon">
                            <img src="<?= STANDART_DIR; ?>img/contacts/tg.svg" alt="" class="contacts__item-img">
                        </div>
                        <div class="contacts__item-text">
                            <div class="contacts__item-title title title--small title--black title--w-normal">
                                Телеграм
                            </div>
                            <div class="contacts__item-subtitle text text--medium text--black text--w-light">
                                ecofriends_project
                            </div>
                        </div>
                    </a>
                </div>
                <div class="contacts__item">
                    <a class="contact__item-wrap" href="mailto:mail@eco-friends.info">
                        <div class="contacts__item-icon">
                            <img src="<?= STANDART_DIR; ?>img/contacts/mail.svg" alt="" class="contacts__item-img">
                        </div>
                        <div class="contacts__item-text">
                            <div class="contacts__item-title title title--small title--black title--w-normal">
                                Почта
                            </div>
                            <div class="contacts__item-subtitle text text--medium text--black text--w-light">
                                mail@eco-friends.info
                            </div>
                        </div>
                    </a>
                </div>
                <div class="contacts__item">
                    <a class="contact__item-wrap" href="https://yandex.ru/maps/-/CCUcyLGKTD">
                        <div class="contacts__item-icon">
                            <img src="<?= STANDART_DIR; ?>img/contacts/address.svg" alt="" class="contacts__item-img">
                        </div>
                        <div class="contacts__item-text">
                            <div class="contacts__item-title title title--small title--black title--w-normal">
                                Адрес
                            </div>
                            <div class="contacts__item-subtitle text text--medium text--black text--w-light">
                                Москва, Бережковская набережная, д24, стр. 1
                            </div>
                        </div>
                    </a>
                </div>
            </address>
            <div class="contacts__map">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A11a6ab3b8434a838cc58e030b1d2ce69f85e28e166ee9a89a3c103d87c89ba80&amp;width=100%25&amp;height=560&amp;lang=ru_RU&amp;scroll=false"></script>
            </div>
        </div>
    </div>
</div>
<!-- /. Contacts-->

<?php get_footer(); ?>
