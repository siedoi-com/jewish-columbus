<?php
$fields = $args['fields'] ?? get_fields();
?>
<section class="content-button pd-b--M">
    <div class="container content-button__container flex-row">
        <div class="content-button__content">
            <h1 class="content-button__title text--size_72 text--w_800"><?= $fields['title'] ?? ''?></h1>
            <div class="content-button__text text--w_300 text--size_32">
                <p class="m-0"><?= $fields['text'] ?? '' ?></p>
            </div>
        </div>
        <?php $btn = $fields['button'] ?? []; if(!empty($btn['url']) && !empty($btn['title'])): ?>
        <a class="btn btn--double-border btn--double-border_toxic-blue text--upp text--size_24 content-button__btn"
           href="<?= $btn['url'] ?>"><?= $btn['title'] ?></a>
        <?php endif; ?>
    </div>
</section>
