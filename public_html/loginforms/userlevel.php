<?php
include("header.php");
?>
<?php
$user = $_SESSION["username"];
$sql = "SELECT userlevel FROM users WHERE username='$user' AND activated='1' LIMIT 1";
$query = mysqli_query($db_conx, $sql);
$row = mysqli_fetch_row($query);
$userlevel = $row[0];
?>
