<?php 
@session_start();
var_dump($_SESSION);
exit;

include_once('../config/config.php');

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = $pdo->query("SELECT * FROM logins WHERE email_login = '$email';");
$res = $sql->fetchAll(PDO::FETCH_ASSOC);
if (count($res) > 0) {
    if(password_verify($senha, $res[0]['senha_login'])) {
        if (!($_SESSION['id'])) {
            @session_start();
        }

        $_SESSION['id'] = $res[0]['id_login'];
        $_SESSION['nome'] = $res[0]['nome_login'];
        $_SESSION['email'] = $res[0]['email_login'];
        $_SESSION['nasc'] = $res[0]['data_nasc_login'];

        exit;
        echo "Validado!";
    } else {
        echo "Senha e/ou Email Incorretos";
    }
} else {
    echo "Senha e/ou Email Incorretos";
}


?>