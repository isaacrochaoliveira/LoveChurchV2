<?php
@include('config/config.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $nome_fantasia ?></title>
    <link rel="shortcut icon" href="<?php echo $url_base ?>/system/imagens/logo/favicon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $url_base ?>/css/style.css">
</head>

<body>
    <?php
    @include_once('header.php');
    ?>
    <div class="container py-5 d-flex justify-content-center">
        <form class="formulario-admin">
            <div class="text-center">
                <img src="<?= $url_base ?>/system/imagens/man-157699_640.png" class="img-user-form" alt="">
            </div>
            <div class="mx-auto">
                <div class="form-group my-2">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="leitura" placeholder="E-mail">
                </div>
                <div class="form-group my-2">
                    <label for="passowrd">Senha:</label>
                    <input type="password" name="senha" id="senha" class="leitura" placeholder="Senha">
                </div>
                <div class="d-flex flex-wrap justify-content-left mt-3">
                    <div>
                        <button class="btn-logar" id="entrar">Entrar/Logar</button>
                    </div>
                </div>
                <div>
                    <div class="alert" id="msg" role="alert">

                    </div>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</body>

</html>
<script>
    $(document).ready(function() {
        $('#entrar').click(function(event) {
            event.preventDefault();
            email = $("#email").val();
            senha = $('#senha').val();
            $.ajax({
                url: 'autenticar.php',
                method: 'post',
                data: {
                    email,
                    senha
                },
                dataType: 'text',
                success: function(resp) {
                    if (!(resp.trim() == 'Senha e/ou Email Incorretos')) {
                        $('#msg').addClass('alert-success');
                        $("#msg").removeClass('alert-danger');
                        $('#msg').html(resp);
                        setTimeout(() => {
                            window.location.href = 'system/';
                        }, 2000);
                    } else {
                        $('#msg').removeClass('alert-success');
                        $('#msg').addClass('alert-danger');
                        $('#msg').html(resp);
                    }
                }
            })
        })
    })
</script>