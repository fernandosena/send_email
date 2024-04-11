<?php $this->layout("_theme"); ?>

<?php if(!empty($form)): ?>
    <article class="auth">
    <div class="auth_content container content">
        <header class="auth_header">
            <h1>Preencha seu perfil</h1>
        </header>

        <form class="auth_form" action="<?= url("/obrigado"); ?>" method="post" enctype="multipart/form-data">
            <div class="ajax_response"><?= flash(); ?></div>
            <?= csrf_input(); ?>
            <input type="hidden" name="email" value="<?= $data->code ?>">
            <input type="hidden" name="type" value="confirm">
            <label>
                <div><span class="icon-document">CPF:</span></div>
                <input class="mask-doc" type="text" name="document" placeholder="Informe seu CPF:" required/>
            </label>
            <label>
                <div><span class="icon-document">Data de Nascimento:</span></div>
                <input type="date" name="datebirth" required/>
            </label>
            <label>
                <div><span class="icon-document">Número de Celular:</span></div>
                <input class="mask-phone" type="text" name="phone" placeholder="Informe número de celular:" required/>
            </label>
            <label>
                <div><span class="icon-user">Nome Fantasia:</span></div>
                <input type="text" name="fantasy_name" placeholder="Nome Fantasia:" required/>
            </label>
            <button class="auth_form_btn transition gradient gradient-hover">Salvar dados</button>
        </form>
    </div>
</article>
<?php else: ?>
    <article class="optin_page">
        <div class="container content">
            <div class="optin_page_content">
                <img alt="<?= $data->title; ?>" title="<?= $data->title; ?>" src="<?= $data->image; ?>"/>
                <h1><?= $data->title; ?></h1>
                <p><?= $data->desc; ?></p>
                <?php if (!empty($data->link)): ?>
                    <a class="optin_page_btn gradient gradient-hover radius"
                    href="<?= $data->link; ?>" title="<?= $data->linkTitle; ?>"><?= $data->linkTitle; ?></a>
                <?php endif; ?>
            </div>
        </div>
    </article>
<?php endif ?>

<?php if (!empty($track)): ?>
    <?php $this->start("scripts"); ?>
    <script>
        fbq('track', '<?= $track->fb;?>');
        gtag('event', 'conversion', {'send_to': '<?= $track->aw;?>'});
    </script>
    <?php $this->end(); ?>
<?php endif; ?>
