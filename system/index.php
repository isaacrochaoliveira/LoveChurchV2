<?php
$pag = "index";
@include_once('../config/config.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $nome_fantasia ?></title>
</head>

<body>
    <?php
    @include_once('../header.php');
    ?>
    <div class="bg-dark">
        <div class="container py-5">
            <form action="<?php $url_base ?>autenticar.php" method="post" class="w-25">
                <div class="text-center">
                    <img src="imagens/man-157699_640.png" class="img-user-form" alt="">
                </div>
                <div class="mx-auto">
                    <div class="my-3">
                        <label for="email">E-mail:</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="my-3">
                        <label for="senha">Senha:</label>
                        <input type="password" name="senha" id="senha" class="form-control">
                    </div>
                    <div class="mt-3">
                        <button class="btn btn-primary">Entrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>