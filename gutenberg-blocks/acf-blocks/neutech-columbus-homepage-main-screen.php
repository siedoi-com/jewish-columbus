<?php
$fields = $args['fields'] ?? get_fields();
?>
<section class="hero rel o-hid">
    <div class="hero__bg rel abs wh-full inset">
        <?= $fields['iframe_mobile'] ?? '' ?>
        <?= $fields['iframe_desktop'] ?? '' ?>
    </div>
    <div class="container hero__content rel flex-col h-full j-end">
        <h1 class="hero__title text--size_72 text--color_white text--w_700"><?= nl2br($fields['title'] ?? '') ?></h1>
        <?php $btn = $fields['button'] ?? []; if(!empty($btn['url']) && !empty($btn['title'])): ?>
        <a class="btn btn--double-border btn--double-border_white text--upp text--size_24 hero__btn" href="<?= $btn['url'] ?>">
            <span><?= $btn['title'] ?></span>
        </a>
        <?php endif; ?>
    </div>
</section>