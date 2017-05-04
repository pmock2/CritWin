<?php
session_start();
include_once("check_login_status.php");

$varfield = "Login";
$dropfield = "Login";
// If user is logged in, header them away
if(isset($_GET["u"])) {
//if($user_ok == true){
    $varfield = "Welcome " . $_SESSION["username"];
    $dropfield = "View Profile";
}
//
//    if(isset($_GET["u"])){
//        $u = preg_replace('#[^a-z0-9]#i', '', $_GET['u']);
//    } else {
//        header("location: http://www.critwin.com");
//        exit();
//    }
//
//    $isOwner = "no";
//    if($u == $log_username && $user_ok == true){
//        $isOwner = "yes";
//    }
//
//    if ($isOwner == "no")
//        $isOwner = "You are currently not logged in as $u.";
//    else
//        $isOwner = "You ARE friggin logged in";

?>
<html>
<head>
    <title>
        Logout
    </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="nav">
    <div class='logo'></div>
    <ul class="menu">
        <li class="btMenu">
            <a href="javascript:void(0)">MENU</a></li>
        <li class="menuItem"><a href="/index.php">Home</a></li>
        <li class="menuItem"><a href="/loginforms/StraightToLogin.php"><b><?php echo $varfield; ?></b></a></li>
        <li class="menuItem">
            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn">Quick Links</button>
                <div id="myDropdown" class="dropdown-content">
                    <a href="/DMsNotebook/DMNotebook.html">DM's Notebook</a>
                    <a href="/Tools.html">Tools</a>
                    <a href="/Guides/guidesandreviews.php">Adventure Log</a>
                    <a href="https://www.youtube.com/channel/UCtd_XSgL5iuKPX9LFX7lQzw">Videos!</a>
                    <a href="https://www.gofundme.com/2be9n9w"><b>Support Us!</b></a>
                    <a href="/bio/bio.php">About the Creators</a>
                    <a href="/loginforms/StraightToLogin.php"><?php echo $dropfield; ?></a>
                </div>
            </div>
        </li>


    </ul>
</div>


<section class='aboutus' id='about'>
    <div class='container1'>
        <div class="row">
            <div class="col-md-12 yomer-text-center">
                <h2 class="redtext">Logout Successful</h2>
                <p><?php echo $isOwner;?></p>


            </div>
        </div>
    </div>
</section>

</body>
</html>
