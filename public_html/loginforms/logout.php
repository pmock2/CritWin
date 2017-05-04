<?php
/**
 * Created by IntelliJ IDEA.
 * User: Payton
 * Date: 7/16/2016
 * Time: 1:41 AM
 */

session_start();
// Set Session data to an empty array
$_SESSION = array();
// Expire their cookie files
if(isset($_COOKIE["id"]) && isset($_COOKIE["user"]) && isset($_COOKIE["pass"])) {
    setcookie("id", "", strtotime( '-5000 days' ), '/');
    setcookie("user", "", strtotime( '-5000 days' ), '/');
    setcookie("pass", "", strtotime( '-5000 days' ), '/');
    session_destroy();
}
// Destroy the session variables
session_destroy();
// Double check to see if their sessions exists
if(isset($_SESSION['username'])){
    header("location: http://www.critwin.com/Tools.html");
} else {
    session_destroy();
    header("location: http://critwin.com/loginforms/user.php?u=" . $_SESSION["username"]);
    exit();
} 
?>