<?php
@include('config/config.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $nome_fantasia ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo $url_base ?>/css/style.css">
</head>

<body>
    <?php
    @include_once('header.php');
    ?>
    <div class="container py-5 d-flex justify-content-center">
        <form class="w-25">
            <div class="text-center">
                <img src="<?= $url_base ?>/system/imagens/man-157699_640.png" class="img-user-form" alt="">
            </div>
            <div class="mx-auto">
                <div class="my-3">
                    <input type="email" name="email" id="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="my-3">
                    <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha">
                </div>
                <div class="mt-3">
                    <button class="btn btn-primary" id="entrar">Entrar</button>
                </div>
                <div>
                    <div class="alert" id="msg" role="alert">

                    </div>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
<script>
    $(document).ready(function() {
        $('#entrar').click(function(event) {
            email = $("#email").val();
            senha = $('#senha').val();
            $.ajax({
                url: 'autenticar.php',
                method: 'post',
                data: {
                    email,
                    senha
                },
                success: function(resp) {
                    if (resp.trim() == 'Validado!') {
                        window.location = 'painel';
                    } else {
                        alert('oi');
                    }
                }
            })
        })
    })
</script>