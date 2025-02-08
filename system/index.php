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
            <form class="w-25">
                <div class="text-center">
                    <img src="imagens/man-157699_640.png" class="img-user-form" alt="">
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
                        <div class="alert" role="alert">
                            
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
<script>
    $(document).ready(function() {
        $url = "<?= $url_base ?>";
        $('#entrar').click(function(event) {
            event.preventDefault();
            var email = $('#email').val();
            var senha = $('#senha').val();
            $.ajax({
                url: 'autenticar.php',
                method: 'post',
                data: {
                    email,
                    senha
                },
                dataType: 'html',
                success: function(resp) {
                    $('.alert').removeClass();
                    if (resp == 'Validado!') {
                        $('.alert').addClass('alert-success');
                        $('.alert').append(resp);

                        location.href = $url + 'system/painel';
                   } else {
                        $('.alert').addClass('alert-danger');
                        $('.alert').append(resp);
                   }
                }
            })
        })
    });
</script>

</html>