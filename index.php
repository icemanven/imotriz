<?php
session_start();

if (!empty($_SESSION['success']) && $_SESSION['success'] == true){
    require_once "server.php";
    require_once "header.php";
    require_once "nav.php";
    require_once "wrapper.php";
    require_once "footer.php";
} else {
    header("location: LoginForm.php");
}
?>











