<?php $this->layout("_theme", ["title" => "Indicação - ".CONF_SITE_NAME]); ?>

<h2>Olá, <?= $data["indicate"]["name"]; ?></h2>
<p>Você foi indicado por <?= $data["friend"]["name"]; ?> (<?= $data["friend"]["email"]; ?>) a investir em <?= $data["indicate"]["type"]; ?> em parceria com o grupo <?= CONF_SITE_NAME ?>. Venha conferir! clique no link abaixo e aproveite</p>
<p><a title='<?= CONF_SITE_NAME ?>' href='<?= $data["indicate"]["link"]; ?>'>CLIQUE AQUI</a></p>