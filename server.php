<?php
/**
 * Created by PhpStorm.
 * User: josei
 * Date: 9/16/2018
 * Time: 3:48 PM
 */
session_start();

// initializing variables
date_default_timezone_set('America/Bogota');
$username = "";
$sistema = "Dashboard IMOTRIZ";
$coalition = "utf-8";


$menus = array (
    "product" => array(
        "title" => "Productos",
        "icon" => "fa-folder"
    ),
   /* "charts" => array(
        "title" => "Charts",
        "icon" => "fa-chart-area"
    ),*/
    "tables" => array(
        "title" => "Tablas",
        "icon" => "fa-table"
    )
);

$errors = array();

// connect to the database

$db = mysqli_connect('192.168.1.199', 'icecrm', '13864888', 'testimotriz');
?>