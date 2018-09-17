<?php
/**
 * Created by PhpStorm.
 * User: josei
 * Date: 9/16/2018
 * Time: 3:53 PM
 */
// LOGIN USER
require_once "server.php";
if (!empty($_GET["logout"]) && !isset($_POST['login_user'])) {
    session_destroy();
    unset($_GET["logout"]);
}

if (isset($_POST['login_user'])) {

    $username = mysqli_real_escape_string($db, $_POST['username']);

    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($username)) {

        array_push($errors, "Username is required");

    }

    if (empty($password)) {

        array_push($errors, "Password is required");

    }

    if (count($errors) == 0) {

        $password = md5($password);

        $query = "SELECT * FROM users WHERE username='".$username."' AND password='".$password."'";

        $results = mysqli_query($db, $query);

        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;

            $_SESSION['success'] = true;

            header('location: index.php');

        }else {
            array_push($errors, "Wrong username/password combination");

        }

    }

}?>