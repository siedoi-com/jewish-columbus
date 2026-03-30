<?php
$contacts = get_field('contacts', 'options');
?>
<footer class="footer text--size_14">
    <div class="container footer__container d-flex j-between">
        <div class="logo footer__logo logo--type_footer">
            <picture>
                <img src="<?= get_footer_logo_uri() ?>" alt="<?= esc_attr(get_bloginfo('name')) ?> Logo" loading="lazy" width="84" height="86" class="contain-image"/>
            </picture>
        </div>
        <div class="footer__content">
            <div class="footer__nav d-grid text--w_300 j-between">
                <div class="footer__col">
                    <h5 class="footer__menu-title text--upp text--size_18 text--w_400">
                        <?= get_menu_name( 'footer-menu-1') ?>
                    </h5>
                    <div class="footer__menu">
                        <?= wp_nav_menu(array(
                            'theme_location' => 'footer-menu-1',
                        )) ?>
                    </div>
                </div>
                <div class="footer__col">
                    <h5 class="footer__menu-title text--upp text--size_18 text--w_400">
                        <?= get_menu_name( 'footer-menu-2') ?>
                    </h5>
                    <div class="footer__menu">
                        <?= wp_nav_menu(array(
                            'theme_location' => 'footer-menu-2',
                        )) ?>
                    </div>
                </div>
                <div class="footer__col">
                    <h5 class="footer__menu-title text--upp text--size_18 text--w_400">
                        <?= get_menu_name( 'footer-menu-3') ?>
                    </h5>
                    <div class="footer__menu">
                        <?= wp_nav_menu(array(
                            'theme_location' => 'footer-menu-3',
                        )) ?>
                    </div>
                </div>
                <div class="footer__col">
                    <h5 class="footer__menu-title text--upp text--size_18 text--w_400">
                        <?= get_menu_name( 'footer-menu-4') ?>
                    </h5>
                    <div class="footer__menu">
                        <?= wp_nav_menu(array(
                            'theme_location' => 'footer-menu-4',
                        )) ?>
                    </div>
                </div>
            </div>
            <div class="copyright footer__copyright text--w_300 flex-row j-between">
                <div class="copyright__menu">
                    <?= wp_nav_menu(array(
                        'theme_location' => 'copyright-menu',
                    )) ?>
                </div>
                <ul class="social-links flex-row copyright__socials">
                    <?php if(!empty($contacts['facebook'])): ?>
                    <li class="social-links__item">
                        <a class="social-links__link d-block" href="<?= $contacts['facebook'] ?>" target="_blank" rel="noopener noreferrer">
                            <?= icon('facebook', 'wh-full anim') ?>
                        </a>
                    </li>
                    <?php endif; ?>
                    <?php if(!empty($contacts['instagram'])): ?>
                    <li class="social-links__item">
                        <a class="social-links__link d-block" href="<?= $contacts['instagram'] ?>" target="_blank" rel="noopener noreferrer">
                            <?= icon('instagram', 'wh-full anim') ?>
                        </a>
                    </li>
                    <?php endif; ?>
                    <?php if(!empty($contacts['tiktok'])): ?>
                    <li class="social-links__item">
                        <a class="social-links__link d-block" href="<?= $contacts['tiktok'] ?>" target="_blank" rel="noopener noreferrer">
                            <?= icon('tiktok', 'wh-full anim') ?>
                        </a>
                    </li>
                    <?php endif; ?>
                    <?php if(!empty($contacts['x'])): ?>
                    <li class="social-links__item">
                        <a class="social-links__link d-block" href="<?= $contacts['x'] ?>" target="_blank" rel="noopener noreferrer">
                            <?= icon('twitter', 'wh-full anim') ?>
                        </a>
                    </li>
                    <?php endif; ?>
                    <?php if(!empty($contacts['youtube'])): ?>
                    <li class="social-links__item">
                        <a class="social-links__link d-block" href="<?= $contacts['youtube'] ?>" target="_blank" rel="noopener noreferrer">
                            <?= icon('youtube', 'wh-full anim') ?>
                        </a>
                    </li>
                    <?php endif; ?>
                    <?php if(!empty($contacts['linkedin'])): ?>
                    <li class="social-links__item">
                        <a class="social-links__link d-block" href="<?= $contacts['linkedin'] ?>" target="_blank" rel="noopener noreferrer">
                            <?= icon('linkedin', 'wh-full anim') ?>
                        </a>
                    </li>
                    <?php endif; ?>
                </ul>
                <p class="m-0 copytight__txt">&#169; JewishColumbus 2026.</p>
            </div>
        </div>
    </div>
</footer>