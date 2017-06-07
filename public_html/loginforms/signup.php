<?php
include("header.php")
?>
<?php
include_once("check_login_status.php");
// If user is logged in, header them away
if(isset($_GET["u"])) {
    header("location: http://critwin.com/loginforms/user.php?u=" . $_SESSION["username"]);
    exit();
}
?><?php
// Ajax calls this NAME CHECK code to execute
if (isset($_POST["usernamecheck"])) {
    include_once("db_conx.php");
    $username = preg_replace('#[^a-z0-9]#i', '', $_POST['usernamecheck']);
    $sql = "SELECT id FROM users WHERE username='$username' LIMIT 1";
    $query = mysqli_query($db_conx, $sql);
    $uname_check = mysqli_num_rows($query);
    if (strlen($username) < 3 || strlen($username) > 16) {
        echo '<strong style="color:#F00;"><br>Username must be between 3-16 characters</strong>';
        exit();
    }
    if (is_numeric($username[0])) {
        echo '<strong style="color:#F00;"><br>Usernames must begin with a letter</strong>';
        exit();
    }
    if ($uname_check < 1) {
        echo '<strong style="color:#009900;"><br>' . $username . ' is available!</strong>';
        exit();
    } else {
        echo '<strong style="color:#F00;"><br>' . $username . ' is taken, try again</strong>';
        exit();
    }
}
?><?php
// Ajax calls this REGISTRATION code to execute
if (isset($_POST["u"])) {
    // CONNECT TO THE DATABASE
    include_once("db_conx.php");
    // GATHER THE POSTED DATA INTO LOCAL VARIABLES
    $u = preg_replace('#[^a-z0-9]#i', '', $_POST['u']);
    $e = mysqli_real_escape_string($db_conx, $_POST['e']);
    $p = $_POST['p'];
//    $g = preg_replace('#[^a-z]#', '', $_POST['g']);
//    $c = preg_replace('#[^a-z ]#i', '', $_POST['c']);
    // GET USER IP ADDRESS
    $ip = preg_replace('#[^0-9.]#', '', getenv('REMOTE_ADDR'));
    // DUPLICATE DATA CHECKS FOR USERNAME AND EMAIL
    $sql = "SELECT id FROM users WHERE username='$u' LIMIT 1";
    $query = mysqli_query($db_conx, $sql);
    $u_check = mysqli_num_rows($query);
    // -------------------------------------------
    $sql = "SELECT id FROM users WHERE email='$e' LIMIT 1";
    $query = mysqli_query($db_conx, $sql);
    $e_check = mysqli_num_rows($query);
    // FORM DATA ERROR HANDLING
    if ($u == "" || $e == "" || $p == "") {
        echo '<strong style="color:#F00;"><br>Fill out all the forms</strong>';
        exit();
    } else if ($u_check > 0) {
        echo '<strong style="color:#F00;"><br>username taken</strong>';
        exit();
    } else if ($e_check > 0) {
        echo '<strong style="color:#F00;"><br>That email is already in use</strong>';
        exit();
    } else if (strlen($u) < 3 || strlen($u) > 16) {
        echo'<strong style="color:#F00;"><br>Usrername must be 3-16 characters</strong>';
        exit();
    } else if (is_numeric($u[0])) {
        echo '<strong style="color:#F00;"><br>username must start with a letter</strong>';
        exit();
    } else {
        // END FORM DATA ERROR HANDLING
        // Begin Insertion of data into the database
        // Hash the password and apply your own mysterious unique salt
//        $cryptpass = crypt($p);
//        include_once ("randStrGen.php");
//        $p_hash = randStrGen(20)."$cryptpass".randStrGen(20);
        $p_hash = md5($p);
//        $p_hash = $p;
        // Add user info into the database table for the main site table
//        $sql = "INSERT INTO users (username, email, password, signup, lastlogin) VALUES('$u','$e','$p_hash',now(),now(),now())";
        $sql = "INSERT INTO users (username, email, password, signup, lastlogin) VALUES('$u','$e','$p_hash',now(),now())";
        $query = mysqli_query($db_conx, $sql);
        $uid = mysqli_insert_id($db_conx);
        // Establish their row in the useroptions table
        $sql = "INSERT INTO useroptions (id, username, background) VALUES ('$uid','$u','original test')";
        $query = mysqli_query($db_conx, $sql);
        // Create directory(folder) to hold each user's files(pics, MP3s, etc.)
//        if (!file_exists("user/$u")) {
//            mkdir("user/$u", 0755);
//        }
        // Email the user their activation link
        $to = "$e";
        $from = "noreply@critwin.com";
        $subject = 'critwin Account Activation';
        $message = '<!DOCTYPE html><html><head><meta charset="UTF-8"><title>critwin Message</title></head><body style="margin:0; font-family:Tahoma, Geneva, sans-serif;"><div style="padding:10px; background:#333; font-size:24px; color:#CCC;"><a href="http://www.critwin.com"><img src="http://www.critwin.com/img/bg-banner.jpg" width="36" height="30" alt="critwin" style="border:none; float:left;"></a>critwin Account Activation</div><div style="padding:24px; font-size:17px;">Hello ' . $u . ',<br /><br />Click the link below to activate your account when ready:<br /><br /><a href="http://www.critwin.com/loginforms/activation.php?id=' . $uid . '&u=' . $u . '&e=' . $e . '&p=' . $p_hash . '">Click here to activate your account now</a><br /><br />Login after successful activation using your:<br />* E-mail Address: <b>' . $e . '</b></div></body></html>';
        $headers = "From: $from\n";
        $headers .= "MIME-Version: 1.0\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\n";
        mail($to, $subject, $message, $headers);
        echo "'<strong style=\"color:white;\"></br>Please check your email to verify your account</strong>'";
        exit();
    }

}



// If user is already logged in, header that weenis away
if ($user_ok == true) {
    header("location: http://critwin.com/loginforms/user.php?u=" . $_SESSION["username"]);
    exit();
}
?><?php
// AJAX CALLS THIS LOGIN CODE TO EXECUTE
if (isset($_POST["e"])) {
    // CONNECT TO THE DATABASE
    include_once("db_conx.php");
    // GATHER THE POSTED DATA INTO LOCAL VARIABLES AND SANITIZE
    $e = mysqli_real_escape_string($db_conx, $_POST['e']);
    $p = md5($_POST['p']);
    // GET USER IP ADDRESS
    $ip = preg_replace('#[^0-9.]#', '', getenv('REMOTE_ADDR'));
    // FORM DATA ERROR HANDLING
    if ($e == "" || $p == "") {
        echo "login_failed1";
        exit();
    } else {
        // END FORM DATA ERROR HANDLING
        $sql = "SELECT id, username, password FROM users WHERE email='$e' AND activated='1' LIMIT 1";
        $query = mysqli_query($db_conx, $sql);
        $row = mysqli_fetch_row($query);
        $db_id = $row[0];
        $db_username = $row[1];
        $db_pass_str = $row[2];
        if ($p != $db_pass_str) {
            echo "login_failed";
            exit();
        } else {
            // CREATE THEIR SESSIONS AND COOKIES
            $_SESSION['userid'] = $db_id;
            $_SESSION['username'] = $db_username;
            $_SESSION['password'] = $db_pass_str;
            setcookie("id", $db_id, strtotime('+30 days'), "/", "", "", TRUE);
            setcookie("user", $db_username, strtotime('+30 days'), "/", "", "", TRUE);
            setcookie("pass", $db_pass_str, strtotime('+30 days'), "/", "", "", TRUE);
            // UPDATE THEIR "IP" AND "LASTLOGIN" FIELDS
            $sql = "UPDATE users SET ip='$ip', lastlogin=now() WHERE username='$db_username' LIMIT 1";
            $query = mysqli_query($db_conx, $sql);
            echo $db_username;
            exit();
        }
    }

}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <!--    <link rel="icon" href="favicon.ico" type="image/x-icon">-->
    <link rel="stylesheet" href="/css/style.css">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/normalize.css">


    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style1.css">

    <script type='text/javascript' src='js/DropDown.js'></script>


    <script>

        function login() {
            var e = _("Loginemail").value;
            var p = _("Loginpassword").value;
            if (e == "" || p == "") {
                _("Loginstatus").innerHTML = '<strong style="color:#F00;"><br>Fill out all fields</strong>';
            } else {
                _("loginbtn").style.display = "none";
                _("Loginstatus").innerHTML = 'please wait ...';
                var ajax = ajaxObj("POST", "login.php");
                ajax.onreadystatechange = function () {
                    if (ajaxReturn(ajax) == true) {
                        if (ajax.responseText == "login_failed1") {
                            _("Loginstatus").innerHTML = "Please fill out all forms";
                            _("loginbtn").style.display = "block";

                        }

                        else if (ajax.responseText == "login_failed") {
                            _("Loginstatus").innerHTML = '<strong style="color:#F00;"><br>Incorrect username or password</strong>';
                            _("loginbtn").style.display = "block";

                        }
                        else {
                            window.location = "user.php?u=" + ajax.responseText;
                        }
                    }
                };
                ajax.send("e=" + e + "&p=" + p);
            }
        }
        
        
        
        function _(x) {
            return document.getElementById(x);
        }


        function ajaxObj(meth, url) {
            var x = new XMLHttpRequest();
            x.open(meth, url, true);
            x.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            return x;
        }
        function ajaxReturn(x) {
            if (x.readyState == 4 && x.status == 200) {
                return true;
            }
        }

        function restrict(elem) {
            var tf = _(elem);
            var rx = new RegExp;
            if (elem == "email") {
                rx = /[' "]/gi;
            } else if (elem == "username") {
                rx = /[^a-z0-9]/gi;
            }
            tf.value = tf.value.replace(rx, "");
        }
        function emptyElement(x) {
            _(x).innerHTML = "";
        }
        function checkusername() {
            var u = _("username").value;
            if (u != "") {
                _("unamestatus").innerHTML = 'checking ...';
                var ajax = ajaxObj("POST", "signup.php");
                ajax.onreadystatechange = function () {
                    if (ajaxReturn(ajax) == true) {
                        _("unamestatus").innerHTML = ajax.responseText;
                    }
                };
                ajax.send("usernamecheck=" + u);
            }
        }
        function signup() {
            var u = _("username").value;
            var e = _("email").value;
            var p1 = _("pass1").value;
            var p2 = _("pass2").value;

            var SignUpstatus = _("SignUpstatus");
            if (u == "" || e == "" || p1 == "" || p2 == "") {
                SignUpstatus.innerHTML = '<strong style="color:#F00;"><br>Please Fill out all fields</strong>';
            } else if (p1 != p2) {
                SignUpstatus.innerHTML = '<strong style="color:#F00;"><br>Your passwords do not match</strong>';
//            } else if( _("terms").style.display == "none"){
//                status.innerHTML = "Please view the terms of use";
//            }
            } else {
                _("signupbtn").style.display = "none";
                SignUpstatus.innerHTML = 'please wait ...';
                var ajax = ajaxObj("POST", "signup.php");
                ajax.onreadystatechange = function () {
                    if (ajaxReturn(ajax) == true) {
                        if (ajax.responseText != "Please check your email to verify your account") {
                            SignUpstatus.innerHTML = ajax.responseText;
                            _("signupbtn").style.display = "block";
                        } else {
                            window.scrollTo(0, 0);
                            _("signupform").innerHTML = "OK " + u + ", check your email inbox and junk mail box at <u>" + e + "</u> in a moment to complete the sign up process by activating your account. You will not be able to do anything on the site until you successfully activate your account.";
                        }
                    }
                };
                ajax.send("u=" + u + "&e=" + e + "&p=" + p1);
            }
        }
        //        function openTerms(){
        //            _("terms").style.display = "block";
        //            emptyElement("status");
        //        }
        /* function addEvents(){
         _("elemID").addEventListener("click", func, false);
         }
         window.onload = addEvents; */
    </script>
</head>
<body>

<?php echo $header ?>

<div class="form">

<!--    <div class="tab-content">-->
        <div id="signup">
            <h1>Sign Up To CritWin for Free!</h1>

            <form name="signupform" id="signupform" onsubmit="return false;">

                <div class="field-wrap">
                    <label>
                        Email Address<span class="req">*</span>
                    </label>
                    <input type="email" id="email" required autocomplete="off" maxlength="88">
                </div>
                <div class="field-wrap">
                    <label>
                        Username (Letters and Numbers Only)<span class="req">*</span>
                    </label>
                    <input type="text" id="username" required autocomplete="off"
                            maxlength="16">
                    <span id="unamestatus"></span>
                </div>

                <div class="field-wrap">
                    <label>
                        Set A Password<span class="req">*</span>
                    </label>
                    <input type="password" id="pass1" required autocomplete="off"
                           maxlength="160"/>
                </div>

                <div class="field-wrap">
                    <label>
                        Confirm Password<span class="req">*</span>
                    </label>
                    <input type="password" id="pass2" required autocomplete="off"
                           maxlength="160"/>
                </div>

                <button id="signupbtn" onclick="signup()" class="button button-block">Let's Roll</button>

                <span id="SignUpstatus"></span>
            </form>


        </div>


<!--    </div><!-- tab-content -->-->

</div> <!-- /form -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>



<script src="js/index.js"></script>


<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/bootstrap.min.js'></script>
<script type='text/javascript' src='js/scrollReveal.js'></script>
<script type='text/javascript'>
    jQuery(document).ready(function () {


        $(".top").click(function () {
            $("html, body").animate({scrollTop: 0}, "slow");
            return false;
        });
        $(".btMenu").click(function () {

            if ($(".menu").children(".menuItem").css("display") == "none") {
                $(".menu").children(".menuItem").slideDown();
            }
            else {
                $(".menu").children(".menuItem").slideUp();
            }
        });
        $(window).resize(function () {
            if ($(window).innerWidth() > 900) {
                $(".menu").children(".menuItem").css("display", "block");
            }
            else {
                $(".menu").children(".menuItem").css("display", "none");
            }
        });
    });
</script>


</body>
</html>