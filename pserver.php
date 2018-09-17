<?php
/**
 * Created by PhpStorm.
 * User: josei
 * Date: 9/16/2018
 * Time: 4:00 PM
 */
require_once "server.php";

if (isset($_POST['reg_p'])) {

// receive all input values from the form

    $pname = mysqli_real_escape_string($db,$_POST['pname']);

    $price = $_POST['pirce'];//  mysqli_real_escape_string($db,$_POST['pirce']);

    $pcat = mysqli_real_escape_string($db,$_POST['pcat']);

    $product_details = mysqli_real_escape_string($db,$_POST['pdetails']);

// Check connection

    if ($db->connect_error) {

        die("Connection failed: " . $db->connect_error);

    }

    $sql = "INSERT INTO products (product_name,product_price,product_cat,product_details)

VALUES ('$pname', ".$price." , '$pcat','". $product_details."')";

    if ($db->query($sql) === TRUE) {

        echo "alert('New record created successfully')";

    } else {

        echo "Error: " . $sql . "<br>" . $db->error;

    }
    $db->close();

    header("location: index.php?page=tables");

} else {
    header("location: index.php?page=product");
}
?>