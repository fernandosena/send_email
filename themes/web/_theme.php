<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="mit" content="2019-09-05T13:58:49-03:00+28440">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Redefinir senha</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/png" href="<?= theme("/assets/images/favicon.png"); ?>"/>
    <link rel="stylesheet" href="<?= url("/shared/styles/boot.css"); ?>"/>
    <link rel="stylesheet" href="<?= theme("/assets/css/message.css"); ?>"/>
    <link rel="stylesheet" href="<?= theme("/assets/css/style.css"); ?>"/>
</head>
<body>
    <div class="ajax_load">
        <div class="ajax_load_box">
            <div class="ajax_load_box_circle"></div>
            <p class="ajax_load_box_title">Aguarde, carregando...</p>
        </div>
    </div>
    <main class="main_content">
        <div class="content">
            <?= $this->section("content"); ?>
        </div>
    </main>
    <script src="<?= url("/shared/scripts/jquery.min.js"); ?>"></script>
    <script src="<?= url("/shared/scripts/jquery.form.js"); ?>"></script>
    <script src="<?= url("/shared/scripts/jquery.mask.js"); ?>"></script>
    <script src="<?= url("/shared/scripts/jquery-ui.js"); ?>"></script>
    <script src="<?= theme("/assets/js/scripts.js"); ?>"></script>
    <?= $this->section("scripts"); ?>
</body>
</html>