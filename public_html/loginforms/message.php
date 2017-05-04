<?php
/**
 * Created by IntelliJ IDEA.
 * User: Payton
 * Date: 7/13/2016
 * Time: 2:36 PM
 */
include("header.php");

$message = "";
$msg = preg_replace('#[^a-z 0-9.:_()]#i', '', $_GET['msg']);
if($msg == "activation_failure"){
    $message = '<h2>Activation Error</h2> Sorry there seems to have been an issue activating your account at this time. We have already notified ourselves of this issue and we will contact you via email when we have identified the issue.';
} else if($msg == "activation_success"){
    $message =
'<html>
<head>
    <title>
        Account Activated
    </title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>


<section class=\'aboutus\' id=\'about\'>
    <div class=\'container1\'>
        <div class="row">
            <div class="col-md-12 yomer-text-center">
                <h2 class="redtext">Account Creation Success!</h2>
                <p class="bigtext">
                    Click <a href ="StraightToLogin.php">here </a> to log in.
                </p>
                
            </div>
        </div>
    </div>
</section>

</body>
</html>
';

//        '<h2>Activation Success</h2> Your account is now activated. <a href="StraightToLogin.php">Click here to log in</a>';
} else {
    $message = $msg;
}
?>
<div><?php echo $message; ?></div>