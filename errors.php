<?php
/**
 * Created by PhpStorm.
 * User: josei
 * Date: 9/16/2018
 * Time: 3:54 PM
 */
if (count($errors) > 0) {
    echo '<div class="error">';
    foreach ($errors as $error) {
        echo "<p style='color: red'>" . $error . "</p>";
    }
}?>
