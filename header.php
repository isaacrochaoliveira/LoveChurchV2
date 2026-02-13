<?php
    @include_once('config/config.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo $url_base ?>/css/style.css">
</head>

<body>
    <header>
        <div class="px-3 py-4 border-bottom" id="cabecalho">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="<?=$url_base?>" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                        <i class="fa-solid fa-book-bible fort-icon40pt"></i>
                    </a>

                    <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                        <li>
                            <a href="<?php echo $url_base ?>/system/index.php" class="nav-link text-white text-center">
                                <i class="fa-solid fa-database fort-icon30pt"></i>
                                <div>
                                    LoveChurch
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $url_base ?>" class="nav-link text-white text-center">
                                <i class="fa-solid fa-house fort-icon30pt"></i>
                                <div>
                                    Home
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <?php 
            if ($pag == 'index') {
                ?>
                    <div class="px-3 py-2 border-bottom mb-3">
                        <div class="container d-flex flex-wrap justify-content-center">
                            <form class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto" role="search">
                                <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                            </form>

                            <div class="text-end">
                                <button type="button" class="btn btn-danger text-white text-dark me-2">Sair</button>
                                <button type="button" class="btn btn-light">Cadastre-se</button>
                            </div>
                        </div>
                <?php   
            }
        ?>
        </div>
    </header>
</body>

</html>