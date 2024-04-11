<?php $this->layout("_theme", ["title" => "Indicação de Modelo - ".CONF_SITE_NAME]); ?>

<h2>Olá, <?= $first_name; ?></h2>
<p>Você está recebendo este e-mail pois <?= $name_friend ?> está te indicando uma de nossas modelos do site <?= CONF_SITE_NAME ?>.</p>
<p><a title='Pefil da Modelo' href='<?= $forget_link; ?>'>CLIQUE AQUI PARA VISUALIZAR O PERFIL DA MODELO</a></p>