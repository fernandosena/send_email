<?php $this->layout("_theme"); ?>

<article class="auth">
    <div class="auth_content container content">
        <header class="auth_header">
            <h1>Recuperar senha</h1>
            <p>Informe seu e-mail para receber um link de recuperação.</p>
        </header>

        <form class="auth_form" data-reset="true" action="<?= url("/"); ?>" method="post"
              enctype="multipart/form-data">

            <div class="ajax_response"><?= flash(); ?></div>
            <?= csrf_input(); ?>
            
            <label>
                <div>
                    <span class="icon-envelope">Email: <a title="cadastrar" href="<?= url("/cadastrar"); ?>">se cadastrar!</a></span>
                </div>
                <input type="email" name="email" placeholder="Informe seu e-mail:" required/>
            </label>

            <button class="auth_form_btn transition gradient gradient-hover">Recuperar</button>
        </form>
    </div>
</article>