<?php
session_start();
include_once("check_login_status.php");
?>
<?php
$varfield = "Login";
$dropfield = "Login";
// If user is logged in, header them away
if (isset($_SESSION["username"])) {
//if(isset($_GET["u"])) {
    $varfield = "Welcome " .$_SESSION["username"];
    $dropfield = "Logout";
    $link = "http://critwin.com/loginforms/logout.php";
}
$header = "<div class=\"nav\">
    <div class='logo'></div>
    <ul class=\"menu\">
        <li class=\"btMenu\">
            <a href=\"javascript:void(0)\">MENU</a></li>
        <li class=\"menuItem\"><a href=\"http://critwin.com\">Home</a></li>
        <li class=\"menuItem\"><a href=\"http://critwin.com/loginforms/StraightToLogin.php\"><b> $varfield </b></a></li>
        <li class=\"menuItem\">
            <div class=\"dropdown\">
                <button onclick=\"myFunction()\" class=\"dropbtn\">Quick Links</button>
                <div id=\"myDropdown\" class=\"dropdown-content\">
                    <a href=\"http://critwin.com/DMsNotebook\">DM's Notebook</a>
                    <a href=\"http://critwin.com/Tools\">Tools</a>
                    <a href=\"http://critwin.com/AdventureLibrary\">Adventure Library</a>
                    <a href=\"https://www.youtube.com/channel/UCtd_XSgL5iuKPX9LFX7lQzw\">Videos!</a>
                    <a href=\"https://www.gofundme.com/2be9n9w\"><b>Support Us!</b></a>
                    <a href=\"http://critwin.com/bio/bio.php\">About the Creators</a>
                    <a href=\"$link\">$dropfield</a>
                </div>
            </div>
        </li>
    </ul>
</div>"
?>