<?php 
@session_start();
if (@$_SESSION['id']) {
    session_destroy();
}
@session_start();

include_once('config/config.php');

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = $pdo->query("SELECT * FROM logins WHERE email_login = '$email';");
$res = $sql->fetchAll(PDO::FETCH_ASSOC);
if (count($res) > 0) {
    $hash = $res[0]['senha_login'];
    if (password_verify($_POST['senha'], $hash)) {
        if (!(@$_SESSION['id'])) {
            @session_start();
            $_SESSION['id'] = $res[0]['id_login'];
            $_SESSION['pessoa'] = $res[0]['nome_login'];
            echo "Logado com Sucesso!";
        } 
    } else {
        echo "Senha e/ou Email Incorretos";
    }
} else {
    echo "Senha e/ou Email Incorretos";
}


?>