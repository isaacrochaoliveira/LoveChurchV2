<?php 
require_once('../config/config.php');
@session_start();

if (!($_SESSION['id'])) {
    header('Location: '.$url_base);
}
?>