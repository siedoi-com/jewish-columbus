<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package neutech-columbus
 */

get_header();

the_content();
?>
    <section class="posts bg--main-blue text--color_white pd-b--M">
        <div class="container posts__container">
            <div class="section-title section-title--shadow section-title--shadow_white text--color_main-blue rel posts__title text--center text--size_32">
                <h2 class="section-title__inner bg--toxic-blue rel z1 text--w_700 w-full">Reflections on the 614 JewishColumbus Mission to Israel</h2>
            </div>
            <div class="splide posts__splide">
                <div class="splide__track posts__track">
                    <div class="splide__list">
                        <div class="splide__slide post-card flex-col posts__post">
                            <div class="post-card__img rel w-full">
                                <picture> <img class="cover-image rel z1" src="<?= get_template_directory_uri() ?>/assets/post.jpg" alt="Post image alt" loading="lazy" width="398" height="281"/></picture><a class="post-card__hidden-link abs wh-full inset z1" href="/">Gratitude is not only a feeling. It is a practice.</a>
                            </div>
                            <div class="post-card__body flex-col">
                                <div class="post-card__top-content">
                                    <div class="cat post-card__cat text--upp text--color_toxic-blue text--size_22"> PARTICIPANT REFLECTIONs</div><a class="post-card__title text--size_28" href="/">Gratitude is not only a feeling. It is a practice.</a>
                                </div><a class="btn btn--double-border btn--double-border_white text--upp text--size_20 post-card__btn d-block" href="/" aria-label="Read full article">Read more</a>
                            </div>
                        </div>
                        <div class="splide__slide post-card flex-col posts__post">
                            <div class="post-card__img rel w-full">
                                <picture> <img class="cover-image rel z1" src="<?= get_template_directory_uri() ?>/assets/post.jpg" alt="Post image alt" loading="lazy" width="398" height="281"/></picture><a class="post-card__hidden-link abs wh-full inset z1" href="/">Gratitude is not only a feeling. It is a practice.</a>
                            </div>
                            <div class="post-card__body flex-col">
                                <div class="post-card__top-content">
                                    <div class="cat post-card__cat text--upp text--color_toxic-blue text--size_22"> PARTICIPANT REFLECTIONs</div><a class="post-card__title text--size_28" href="/">Gratitude is not only a feeling. It is a practice.</a>
                                </div><a class="btn btn--double-border btn--double-border_white text--upp text--size_20 post-card__btn d-block" href="/" aria-label="Read full article">Read more</a>
                            </div>
                        </div>
                        <div class="splide__slide post-card flex-col posts__post">
                            <div class="post-card__img rel w-full">
                                <picture> <img class="cover-image rel z1" src="<?= get_template_directory_uri() ?>/assets/post.jpg" alt="Post image alt" loading="lazy" width="398" height="281"/></picture><a class="post-card__hidden-link abs wh-full inset z1" href="/">Gratitude is not only a feeling. It is a practice.</a>
                            </div>
                            <div class="post-card__body flex-col">
                                <div class="post-card__top-content">
                                    <div class="cat post-card__cat text--upp text--color_toxic-blue text--size_22"> PARTICIPANT REFLECTIONs</div><a class="post-card__title text--size_28" href="/">Gratitude is not only a feeling. It is a practice.</a>
                                </div><a class="btn btn--double-border btn--double-border_white text--upp text--size_20 post-card__btn d-block" href="/" aria-label="Read full article">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="posts__disclaimer text--size_24 m-0 text--w_300 styled-links-container"><a href="/">Learn more</a> about future missions to Israel and Jewish communities around the globe.</div>
        </div>
    </section>
    <section class="content-button pd-b--M">
        <div class="container content-button__container flex-row">
            <div class="content-button__content">
                <h1 class="content-button__title text--size_72 text--w_800">Your impact, in action. </h1>
                <div class="content-button__text text--w_300 text--size_32">
                    <p class="m-0">Every day, your impact makes Columbus one of the best Jewish communities in North America. </p>
                </div>
            </div><a class="btn btn--double-border btn--double-border_toxic-blue text--upp text--size_24 content-button__btn" href="/">Make a gift</a>
        </div>
    </section>

<?php

get_footer();
