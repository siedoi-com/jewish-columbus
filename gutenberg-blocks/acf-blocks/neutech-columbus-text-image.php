<?php
$fields = $args['fields'] ?? get_fields();
$image_pos = $fields['image_position'] ?? 'right';
?>
<section class="image-content pd-b--M <?= $image_pos == 'left' ? 'image-content--dir_reverse' : 'image-content--dir_straight' ?>">
    <div class="image-content__row bg--toxic-blue w-full"></div>
    <div class="image-content__container d-flex j-between">
        <div class="image-content__content">
            <h2 class="image-content__title text--size_36 text--color_white bg--pale-blue text--w_700">
                <?= $fields['title'] ?? '' ?>
            </h2>
            <div class="image-content__txt-content">
                <div class="image-content__text text--size_28">
                    <?= $fields['text'] ?? '' ?>
                </div>
                <?php $btn = $fields['button'] ?? []; if(!empty($btn['url']) && !empty($btn['title'])): ?>
                <a class="btn flex-row text--size_28 btn-arrow text--color_toxic-blue image-content__btn text--cap text--w_700"
                   href="<?= $btn['url'] ?>">
                    <span><?= $btn['title'] ?></span>
                    <span class="btn-arrow__arrow anim">>></span>
                </a>
                <?php endif; ?>
            </div>
        </div>
        <div class="image-content__img rel">
            <picture><img class="cover-image" src="<?= $fields['image']['url'] ?? '' ?>" alt="" loading="lazy" width="682" height="455" />
            </picture>
        </div>
    </div>
</section>
