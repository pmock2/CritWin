<?php
/**
 * Created by IntelliJ IDEA.
 * User: Payton
 * Date: 7/12/2016
 * Time: 5:35 PM
 */
//$db_conx = mysqli_connect("localhost", "id300914_contactcritwin", "Paytonmock4", "id300914_critwindata");
$db_conx = mysqli_connect("localhost", "payton", "Paytonmock4", "critwin");

if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
    exit();
}
?>