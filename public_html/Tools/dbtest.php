<?php
if(isset($_POST["input"])) {
    include_once("db_conx.php");
    $input = preg_replace('#[^a-z0-9]#i', '', $_POST['input']);
    $query = mysqli_query($db_conx, $sql);
    $sql = "INSERT INTO user_cards1 (username, card) VALUES ('usernameTest', '$input')";
    $query = mysqli_query($db_conx, $sql);
        echo "Sent $input to database as card";
        exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tester</title>

    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/main.js"></script>
    <script src="../js/ajax.js"></script>
    <script>
        function emptyElement(x){
            _(x).innerHTML = "";
        }
        function _(x) {
            return document.getElementById(x);
        }
        function test(){
            var input = _("input").value;
                var ajax = ajaxObj("POST", "dbtest.php");
                ajax.onreadystatechange = function() {
                    if(ajaxReturn(ajax) == true) {
                            _("status").innerHTML = ajax.responseText;
                    }
                };
                ajax.send("input="+input);
            }
    </script>
</head>
<body>
    <h3>Ajax Tester</h3>
    <form onsubmit="return false;">
        <div>Text to send</div>
        <input type="text" id="input" onfocus="emptyElement('status')" maxlength="88">
        <br /><br>
        <button id="btn" onclick="test()">Send</button>
        <p id="status">Response Goes here</p>
    </form>

</body>
</html>