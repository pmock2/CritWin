<?php
include("header.php")
?>
<?php
include_once("check_login_status.php");
// If user is already logged in, header that weenis away
if($user_ok == true){
    header("location: user.php?u=".$_SESSION["username"]);
    exit();
}
?><?php
// AJAX CALLS THIS CODE TO EXECUTE
if(isset($_POST["e"])){
    $e = mysqli_real_escape_string($db_conx, $_POST['e']);
    $sql = "SELECT id, username FROM users WHERE email='$e' AND activated='1' LIMIT 1";
    $query = mysqli_query($db_conx, $sql);
    $numrows = mysqli_num_rows($query);
    if($numrows > 0){
        while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
            $id = $row["id"];
            $u = $row["username"];
        }
        $emailcut = substr($e, 0, 4);
        $randNum = rand(10000,99999);
        $tempPass = "$emailcut$randNum";
        $hashTempPass = md5($tempPass);
        $sql = "UPDATE useroptions SET temp_pass='$hashTempPass' WHERE username='$u' LIMIT 1";
        $query = mysqli_query($db_conx, $sql);
        $to = "$e";
        $from = "noreply@critwin.com";
        $headers ="From: $from\n";
        $headers .= "MIME-Version: 1.0\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1 \n";
        $subject ="CritWin Temporary Password";
        $msg = '<h2>Hello '.$u.'</h2>
        <p>This is an automated email from critwin.com to renew your password. If you are not trying to recover your password, please feel free to email us at contactcritwin@gmail.com to express your concerns.</p>
        <p>We have generated a temporary random password for you to access your account.</p>
        <p>After you click the link below, your password to log in will be:<br /><b>'.$tempPass.'</b></p>
        <p><a href="http://www.critwin.com/loginforms/forgot_pass.php?u='.$u.'&p='.$hashTempPass.'">Click here to apply the temporary password shown above to your account</a></p>
        <p>If you do not click the link in this email, no changes will be made to your account.</p>';
        if(mail($to,$subject,$msg,$headers)) {
            echo "success";
            exit();
        } else {
            echo "email_send_failed";
            exit();
        }
    } else {
        echo "no_exist";
    }
    exit();
}
?><?php
// EMAIL LINK CLICK CALLS THIS CODE TO EXECUTE
if(isset($_GET['u']) && isset($_GET['p'])){
    $u = preg_replace('#[^a-z0-9]#i', '', $_GET['u']);
    $temppasshash = preg_replace('#[^a-z0-9]#i', '', $_GET['p']);
    if(strlen($temppasshash) < 10){
        exit();
    }
    $sql = "SELECT id FROM useroptions WHERE username='$u' AND temp_pass='$temppasshash' LIMIT 1";
    $query = mysqli_query($db_conx, $sql);
    $numrows = mysqli_num_rows($query);
    if($numrows == 0){
        header("location: message.php?msg=There is no match for that username with that temporary password in the system. We cannot proceed.");
        exit();
    } else {
        $row = mysqli_fetch_row($query);
        $id = $row[0];
        $sql = "UPDATE users SET password='$temppasshash' WHERE id='$id' AND username='$u' LIMIT 1";
        $query = mysqli_query($db_conx, $sql);
        $sql = "UPDATE useroptions SET temp_pass='' WHERE username='$u' LIMIT 1";
        $query = mysqli_query($db_conx, $sql);
        header("location: StrightToLogin.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/style1.css">
    <script src="js/main.js"></script>
    <script src="js/ajax.js"></script>
    <script>
        function forgotpass(){
            var e = _("email").value;
            if(e == ""){
                _("status").innerHTML = "Type in your email address";
            } else {
                _("forgotpassbtn").style.display = "none";
                _("status").innerHTML = 'please wait ...';
                var ajax = ajaxObj("POST", "forgot_pass.php");
                ajax.onreadystatechange = function() {
                    if(ajaxReturn(ajax) == true) {
                        var response = ajax.responseText;
                        if(response == "success"){
                            _("forgotpassform").innerHTML = '<h3>Step 2. Check your email inbox for further instructions.</h3><p>You can now close this window or tab.</p>';
                        } else if (response == "no_exist"){
                            _("status").innerHTML = "Sorry that email address is not in our system";
                        } else if(response == "email_send_failed"){
                            _("status").innerHTML = "Mail function failed to execute";
                        } else {
                            _("status").innerHTML = '<h3>Step 2. Check your email inbox for further instructions.</h3><p>You can now close this window or tab.</p>';
                        }
                    }
                };
                ajax.send("e="+e);
            }
        }

        function _(x) {
            return document.getElementById(x);
        }
        function emptyElement(x) {
            _(x).innerHTML = "";
        }

    </script>
</head>
<body>
<?php echo $header ?>

<section class='aboutus' id='about'>
    <div class='container1'>
        <div class="row">
            <div class="col-md-12 yomer-text-left">
                <h2 class="redtext">Generate a Temporary Password</h2>
            <form id="forgotpassform" onsubmit="return false;">
                <div class="bigtext">Enter Your Email Address</div>
                <input class = "bigtext"id="email" type="text" onfocus="_('status').innerHTML='';" maxlength="88">
                <button id="forgotpassbtn" onclick="forgotpass()">Generate Temporary Login Password</button>
                        <p id="status"></p>
                </form>
                </div>
            </div>
        </div>
    </section>

<!--<div id="pageMiddle">-->
<!--    <h3>Generate a temorary login password</h3>-->
<!--    <form id="forgotpassform" onsubmit="return false;">-->
<!--        <div>Step 1: Enter Your Email Address</div>-->
<!--        <input id="email" type="text" onfocus="_('status').innerHTML='';" maxlength="88">-->
<!--        <br /><br />-->
<!--        <button id="forgotpassbtn" onclick="forgotpass()">Generate Temporary Log In Password</button>-->
<!--        <p id="status"></p>-->
<!--    </form>-->
<!--</div>-->
<?php //include_once("template_pageBottom.php"); ?>
</body>
</html>