</main>
<!-- /. MAIN -->

<?php wp_footer(); ?>
<footer class="footer <?= ( is_front_page() || is_home() || is_page('ЭКОклуб') || is_single() ) ? 'bg--light-blue' : 'bg--white'; ?>">
    <div class="footer__body container">
        <div class="footer__inner">
            <div class="footer__logo-wrapper">
                <a href="<?= home_url(); ?>" class="footer__logo logo">
                    <img src="<?= STANDART_DIR; ?>img/logo.svg" alt="" class="footer__logo-img logo__img">
                </a>
                <div class="footer__logo-text text text--normal text--black text--w-light center">
                    НКО «Фонд регионального экономического развития «Инвестиции и регионы»
                </div>
            </div>
            <div class="footer__menu-outer">
                <?php
                    wp_nav_menu([
                        'theme_location'  => 'footer-menu',
                        'container'       => 'nav',
                        'container_class' => 'footer__menu menu',
                        'menu_class'      => '',
                        'items_wrap'      => '<ul class="%2$s footer__menu-list menu__list">%3$s</ul>'
                    ]);
                ?>
                <p class="footer__copy text text--normal text--black text--w-light center">
                    © 2018-<?= date('Y'); ?>, ECOfriends. Все права защищены
                </p>
            </div>
            <div class="footer__info">
                <a href="tel:+7(917)2104781" class="footer__phone text text--medium text--black text--w-light link">
                    +7(917)210-47-81
                </a>
                <div class="footer__socials">
                    <a href="https://vk.com/ecofriends_project" class="footer__social-item">
                        <img src="<?= STANDART_DIR; ?>img/social/vk.svg" alt="" class="footer__social-img">
                    </a>
                    <a href="https://vk.com/ecofriends_project" class="footer__social-item">
                        <img src="<?= STANDART_DIR; ?>img/social/tg.svg" alt="" class="footer__social-img">
                    </a>
                    <a href="https://wa.me/+79536383516" class="footer__social-item">
                        <img src="<?= STANDART_DIR; ?>img/social/wt.svg" alt="" class="footer__social-img">
                    </a>
                    <a href="viber://chat?number=%2B79536383516" class="footer__social-item">
                        <img src="<?= STANDART_DIR; ?>img/social/vb.svg" alt="" class="footer__social-img">
                    </a>
                </div>
            </div>
        </div>
        <p class="footer__copy text text--normal text--black text--w-light center footer__copy--mobile">
            © 2018-<?= date('Y'); ?>, ECOfriends. Все права защищены
        </p>
    </div>
</footer>

<!-- Modal -->
<div class="modal hystmodal" id="feedback" aria-hidden="true">
    <div class="hystmodal__wrap">
        <div class="modal__body hystmodal__window" role="modal window feedback" aria-modal="true">
            <div class="modal__close" data-hystclose>
                <svg class="modal__close-svg" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L12 12M12 1L1 12" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
            </div>
            <h3 class="modal__title title title--small title--dark title--w-medium center">
                Оставить заявку
            </h3>
            <?php echo do_shortcode('[contact-form-7 id="48" title="Форма обратной связи" html_class="modal__form"]'); ?>
        </div>
    </div>
</div>
<!-- /. Modal -->

<!-- Success -->
<div class="modal modal--success hystmodal js-modal-success" id="success" aria-hidden="true">
    <div class="modal__wrap hystmodal__wrap">
        <div class="modal__body hystmodal__window" role="modal window feedback" aria-modal="true">
            <div class="modal__close" data-hystclose>
                <svg class="modal__close-svg" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L12 12M12 1L1 12" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
            </div>
            <div class="modal__wrapper-success">
                <div class="modal__success-icon">
                    <img src="<?= STANDART_DIR; ?>img/an-pic/check-success.svg" alt="Заявка принята" class="modal__success-img">
                </div>
                <div class="modal__success-text text text--large text--black text--w-light">
                    Спасибо, ваша заявка принята!
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /. Success -->

</body>
</html>