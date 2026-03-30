<a class="skip-link text--size_body" href="#main-content">Skip to main content</a>
<header class="header w-full abs z1 o-hid">
    <div class="container header__container flex-row j-between">
        <a class="logo logo--type_header header__logo" href="<?= get_logo_uri() ?>" aria-label="<?= esc_attr(get_bloginfo('name')) ?>">
            <picture><img class="contain-image" src="<?= get_logo_uri() ?>" alt="<?= esc_attr(get_bloginfo('name')) ?> logo" fetchpriority="high"></picture>
            <span class="visually-hidden">Home</span>
        </a>
        <?php
        wp_nav_menu([
            'theme_location' => 'main-menu',
            'container' => 'nav',
            'container_class' => 'header__nav text--upp text--color_white text--size_22',
            'menu_class' => 'menu',
            'fallback_cb' => false,
        ]);
        ?>
        <div class="header__actions flex-row"> 
            <a class="btn btn--border btn--border_white text--upp text--size_24 header__btn" href="#" aria-label="Make a gift"><span>Make a gift</span></a>
            <button class="btn flex-center flex-col hamburger d-none header__hamburger" type="button" aria-label="Open menu"> <span class="hamburger__line bg--white d-block anim"> </span><span class="hamburger__line bg--white d-block anim"> </span><span class="hamburger__line bg--white d-block anim"> </span></button>

        </div>
    </div>
</header>
