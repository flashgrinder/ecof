</main>
<!-- /. MAIN -->

<?php wp_footer(); ?>
<footer class="footer <?= ( is_home() ) ? 'bg--light-blue' : 'bg--white'; ?>">
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
                <a href="tel:89536383516" class="footer__phone text text--medium text--black text--w-light link">
                    8 953 638 35 16
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
</body>
</html>