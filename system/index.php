<?php
$pag = "index";
@include_once('../config/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $nome_fantasia ?></title>
</head>

<body>
    <?php
    @include_once('../header.php');
    ?>
    <div class="container">
        <form action="<?php $url_base ?>/system/autenticar.php" method="post">
            Olá, Mundo!
        </form>
    </div>
</body>

</html>