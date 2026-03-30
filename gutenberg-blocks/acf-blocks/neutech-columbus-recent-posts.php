<?php
$fields = $args['fields'] ?? get_fields();
?>
<section class="posts bg--main-blue text--color_white pd-b--M o-hid">
    <div class="container posts__container">
        <div
            class="section-title section-title--shadow section-title--shadow_white text--color_main-blue rel posts__title text--center text--size_32">
            <h2 class="section-title__inner bg--toxic-blue rel z1 text--w_700 w-full">
                <?= $fields['title'] ?? '' ?>
            </h2>
        </div>
        <div class="splide posts__splide">
            <div class="splide__track posts__track">
                <div class="splide__list">
                    <?php if(!empty($fields['posts'])): foreach($fields['posts'] as $p): $ts = wp_get_post_terms($p->ID, 'category')[0] ?? null; ?>
                        <div class="splide__slide post-card flex-col posts__post">
                            <div class="post-card__img rel w-full">
                                <picture><img class="cover-image rel z1" src="<?= get_the_post_thumbnail_url($p) ?>" alt="<?= esc_attr($p->post_title) ?>"
                                              loading="lazy" width="398" height="281" /></picture>
                                <a class="post-card__hidden-link abs wh-full inset z1" href="<?= get_permalink($p) ?>">
                                    <?= $p->post_title ?>
                                </a>
                            </div>
                            <div class="post-card__body flex-col">
                                <div class="post-card__top-content">
                                    <div class="cat post-card__cat text--upp text--color_toxic-blue text--size_22">
                                        <?= $ts ? $ts->name : '' ?>
                                    </div>
                                    <a class="post-card__title text--size_28" href="<?= get_permalink($p) ?>">
                                        <?= $p->post_title ?>
                                    </a>
                                </div>
                                <a class="btn btn--double-border btn--double-border_white text--upp text--size_20 post-card__btn d-block"
                                   href="<?= get_permalink($p) ?>" aria-label="Read full article">Read more</a>
                            </div>
                        </div>
                    <?php endforeach; endif; ?>
                </div>
            </div>
        </div>
        <div class="posts__disclaimer text--size_24 m-0 text--w_300 styled-links-container">
           <?= $fields['text'] ?? '' ?>
        </div>
    </div>
</section>
