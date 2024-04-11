<?php $this->layout("_theme"); ?>

<article class="auth">
    <div class="auth_content container content">
        <header class="auth_header">
            <h1>Cadastre-se</h1>
        </header>

        <form class="auth_form" action="<?= url("/cadastrar"); ?>" method="post" enctype="multipart/form-data">
            <div class="ajax_response"><?= flash(); ?></div>
            <?= csrf_input(); ?>

            <label>
                <div><span class="icon-user">Nome:</span></div>
                <input type="text" name="first_name" placeholder="Nome:" required/>
            </label>
            <label>
                <div><span class="icon-user">Sobrenome:</span></div>
                <input type="text" name="last_name" placeholder="Sobrenome:" required/>
            </label>
            <label>
                <div><span class="icon-envelope">E-mail:</span></div>
                <input type="email" name="email" placeholder="Informe seu e-mail:" required/>
            </label>
            <label>
                <div class="unlock-alt"><span class="icon-unlock-alt">Senha:</span></div>
                <input type="password" name="password" placeholder="Informe sua senha:" required/>
            </label>

            <button class="auth_form_btn transition gradient gradient-hover">Criar conta</button>
        </form>
    </div>
</article>