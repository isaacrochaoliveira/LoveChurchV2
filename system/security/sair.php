<?php 
require_once('../../config/config.php');
@session_start();
if ($_SESSION['id']) {
    @session_destroy();
}
header("Location: " . $url_base);
?>