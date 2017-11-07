<?php
/**
 * Created by IntelliJ IDEA.
 * User: Payton
 * Date: 7/12/2016
 * Time: 5:35 PM
 */
$db_conx = mysqli_connect("localhost", "root", "root", "critwin");

if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
    exit();
}
?>