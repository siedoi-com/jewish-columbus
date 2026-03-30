<?php
$fields = $args['fields'] ?? get_fields();
?>
<section class="text-content bg--toxic-blue text--color_white pd-b--M">
    <div class="container text-content__container text-container styled-links-container">
        <h2 style="text-align: center"><?= $fields['text'] ?? '' ?></h2>
    </div>
</section>
