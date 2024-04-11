<?php $this->layout("_theme"); ?>

<article class="not_found">
    <div class="container content">
        <div class="not_found_header">
            <p class="error">&bull;<?= $error->code; ?>&bull;</p>
            <h1><?= $error->title; ?></h1>
            <p><?= $error->message; ?></p>

            <?php if ($error->link): ?>
                <a class="not_found_btn transition gradient gradient-hover"
                   title="<?= $error->linkTitle; ?>" href="<?= $error->link; ?>"><?= $error->linkTitle; ?></a>
            <?php endif; ?>
        </div>
    </div>
</article>