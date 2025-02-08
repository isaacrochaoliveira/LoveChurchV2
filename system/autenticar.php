<?php 

@session_start();

include_once('../config/config.php');

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = $pdo->query("SELECT * FROM logins WHERE email_login = '$email';");
$res = $sql->fetchAll(PDO::FETCH_ASSOC);
if (count($res) > 0) {
    if(password_verify($senha, $res[0]['senha_login'])) {
        if (!(@$_SESSION['id'])) {
            @session_start();
        }

        $_SESSION['id'] = $res[0]['id_login'];

        echo "Validado!";
    } else {
        echo "Senha e/ou Email Incorretos";
    }
} else {
    echo "Senha e/ou Email Incorretos";
}


?>