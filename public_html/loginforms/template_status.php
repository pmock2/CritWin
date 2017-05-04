<?php
$status_ui = "";
$statuslist = "";
if($isOwner == "yes") {
    $status_ui = '<textarea style="resize: none; height: 100px;" class="bigtext" id="statustext" rows="5" cols="50" onkeyup="statusMax(this,250)" placeholder="Start a new thread on your page or write a custom bio."></textarea>';
    $status_ui .= '<br><button id="statusBtn" onclick="postToStatus(\'status_post\',\'a\',\'' . $u . '\',\'statustext\')">Post</button><br><hr>';
//} if($log_username != $u){
//    $status_ui = '<textarea id="statustext" rows="5" cols="50" onkeyup="statusMax(this,250)" placeholder="Start a new thread."></textarea>';
//    $status_ui .= '<br><button id="statusBtn" onclick="postToStatus(\'status_post\',\'c\',\''.$u.'\',\'statustext\')">Post</button><br><hr>';}
}
?><?php
include("userlevel.php");
$sql = "SELECT * FROM status WHERE account_name='$u' AND type='a' OR account_name='$u' AND type='c' ORDER BY postdate DESC LIMIT 20";
$query = mysqli_query($db_conx, $sql);
$statusnumrows = mysqli_num_rows($query);
while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
    $statusid = $row["id"];
    $account_name = $row["account_name"];
    $author = $row["author"];
    $postdate = $row["postdate"];
    $data = $row["data"];
    $data = nl2br($data);
    $data = str_replace("&amp;","&",$data);
    $data = stripslashes($data);

    $statusDeleteButton = '';
    if(($author == $log_username || $account_name == $log_username || $userlevel === "c") && isset($_SESSION["username"]) ){
        $asAdmin = "";
        if ($userlevel === "c"){
            $asAdmin = " as Admin";
        }
        $statusDeleteButton =
        '<span id="sdb_'.$statusid.'">
        <a href="#" onclick="return false;" onmousedown="deleteStatus(\''.$statusid.'\',\'status_'.$statusid.'\');" title="Delete entire thread">Delete Thread'.$asAdmin.'</a>
        </span> &nbsp; &nbsp;';
    }
    // GATHER UP ANY STATUS REPLIES
    $status_replies = "";
    $query_replies = mysqli_query($db_conx, "SELECT * FROM status WHERE osid='$statusid' AND type='b' ORDER BY postdate ASC");
    $replynumrows = mysqli_num_rows($query_replies);
    if($replynumrows > 0){
        while ($row2 = mysqli_fetch_array($query_replies, MYSQLI_ASSOC)) {
            $statusreplyid = $row2["id"];
            $replyauthor = $row2["author"];
            $replydata = $row2["data"];
            $replydata = nl2br($replydata);
            $replypostdate = $row2["postdate"];
            $replydata = str_replace("&amp;","&",$replydata);
            $replydata = stripslashes($replydata);
            $replyDeleteButton = '';
            if(($replyauthor == $log_username || $account_name == $log_username  || $userlevel === "c") && isset($_SESSION["username"]) ){
                $asAdmin = "";
                if ($userlevel === "c"){
                    $asAdmin = " as Admin";
                }
                $replyDeleteButton =
                '<span id="srdb_'.$statusreplyid.'">
                <a href="#" onclick="return false;" onmousedown="deleteReply(\''.$statusreplyid.'\',\'reply_'.$statusreplyid.'\');" title="DELETE THIS COMMENT">
                remove
                </a></span>';
            }
            $status_replies .=
            '<div id="reply_'.$statusreplyid.'" class="reply_boxes">
            <div class="replybox" style="margin-left: 15px">
            <br>
            <b class=bigtext style="margin-left: 15px">'.$replydata.'</b>
            <br>
            <div style="margin-left: 15px" >
            Reply by <a href="http://critwin.com/loginforms/user.php?u='.$replyauthor.'">'.$replyauthor.'</a>'.' on '.$replypostdate.': '.$replyDeleteButton.'
            <br />
            </div>
            </div>
            </div>';
        }
    }
    $statuslist .= '
    <div id="status_'.$statusid.'" class="status_boxes">
    <div class="firstbox">
    <div style="margin-left: 10px">
    <b class="bigtextbold">'.$data.'</b>
    <br />Posted by <a href="http://critwin.com/loginforms/user.php?u='.$author.'">'.$author.'</a> '.$postdate.': '.$statusDeleteButton.' 
    </div>
    </div>'
        .$status_replies.'
    </div>';
    if(isset($_SESSION["username"])){
        $statuslist .= '<hr><textarea style="resize: none; margin-left: 15px; height: 100px;" class="bigtext"" rows="3" cols="50" style="margin-left: 15px" id="replytext_'.$statusid.'" class="replytext" onkeyup="statusMax(this,250)" placeholder="Write a reply"></textarea>
        <br>
        <button style="margin-left: 15px" id="replyBtn_'.$statusid.'" onclick="replyToStatus('.$statusid.',\''.$u.'\',\'replytext_'.$statusid.'\',this)">Reply</button><hr>';
    }
}
?>
<script>
    function _(x) {
        return document.getElementById(x);
    }

    function postToStatus(action,type,user,ta){
        var data = _(ta).value;
        if(data == ""){
            alert("Type something first doofis");
            return false;
        }
        _("statusBtn").disabled = true;
        var ajax = ajaxObj("POST", "status_system.php");
        ajax.onreadystatechange = function() {
            if(ajaxReturn(ajax) == true) {
                var response = ajax.responseText;
                var responseTrim = response.trim();
                var datArray = responseTrim.split("|");
                if(datArray[0] == "post_ok"){
                    var sid = datArray[1];
                    data = data.replace(/</g,"&lt;").replace(/>/g,"&gt;").replace(/\n/g,"<br />").replace(/\r/g,"<br />");
                    var currentHTML = _("statusarea").innerHTML;
                    _("statusarea").innerHTML = '<div id="status_'+sid+'" class="status_boxes">' +
                        '<div class="firstbox">' +
                        '<div style="margin-left: 10px"><b class="bigtextbold">'+data+'</b>' +
                        '<br>Posted by you just now: ' +
                        '<span id="sdb_'+sid+'">' +
                        '<a href="#" onclick="return false;" onmousedown="deleteStatus(\''+sid+'\',\'status_'+sid+'\');" title="Delete Entire Thread">' +
                        ' Delete Thread' +
                        '</a>' +
                        '</span></div>' +
                        '<br />' +
                        '<p></p>' +
                        '</div>' +
                        '</div>' +
                        '<textarea style="resize: none;" id="replytext_'+sid+'" class="replytext" rows="5" cols="50" onkeyup="statusMax(this,250)" placeholder="Write a reply">' +
                        '</textarea>' +
                        '<br>' +
                        '<button id="replyBtn_'+sid+'" style="margin-left: 10px" onclick="replyToStatus('+sid+',\'<?php echo $u; ?>\',\'replytext_'+sid+'\',this)">' +
                        'Reply' +
                        '</button><br>'+currentHTML;
                    _("statusBtn").disabled = false;
                    _(ta).value = "";
                } else {
                    alert(ajax.responseText);
                }
            }
        };
        ajax.send("action="+action+"&type="+type+"&user="+user+"&data="+data);
    }
    function replyToStatus(sid,user,ta,btn){
        var data = _(ta).value;
        if(data == ""){
            alert("Type something first doofis");
            return false;
        }
        _("replyBtn_"+sid).disabled = true;
        var ajax = ajaxObj("POST", "status_system.php");
        ajax.onreadystatechange = function() {
            if(ajaxReturn(ajax) == true) {
                var response = ajax.responseText;
                var responseTrim = response.trim();
                var datArray = responseTrim.split("|");
                if(datArray[0] == "reply_ok"){
                    var rid = datArray[1];
                    data = data.replace(/</g,"&lt;").replace(/>/g,"&gt;").replace(/\n/g,"<br />").replace(/\r/g,"<br />");
                    _("status_"+sid).innerHTML +=
                        '<div id="reply_'+rid+'" class="reply_boxes">' +
                        '<div class="newreplybox" style="margin-left: 15px">' +
                        '<br>' +
                        '<b class="bigtext" style="margin-left: 10px">'+data+'</b>' +
                        '<br>' +
                        '<div style="margin-left: 15px">' +
                        'Reply by you just now: ' +
                        '<span id="srdb_'+rid+'">' +
                        '<a href="#" onclick="return false;" onmousedown="deleteReply(\''+rid+'\',\'reply_'+rid+'\');" title="DELETE THIS COMMENT">remove</a>' +
                        '</div>' +
                        '</span>' +
                        '<br />' +
                        '</div>' +
                        '</div>';
                    _("replyBtn_"+sid).disabled = false;
                    _(ta).value = "";
                } else {
                    alert(ajax.responseText);
                }
            }
        };
        ajax.send("action=status_reply&sid="+sid+"&user="+user+"&data="+data);
    }
    function deleteStatus(statusid,statusbox){

        var ajax = ajaxObj("POST", "status_system.php");
        ajax.onreadystatechange = function() {
            if(ajaxReturn(ajax) == true) {
                var response = ajax.responseText;
                var responseTrim = response.trim();
                if(responseTrim == "delete_ok"){
                    _(statusbox).style.display = 'none';
                    _("replytext_"+statusid).style.display = 'none';
                    _("replyBtn_"+statusid).style.display = 'none';
                } else {
                    alert(ajax.responseText);
                }
            }
        };
        ajax.send("action=delete_status&statusid="+statusid);
    }
    function deleteReply(replyid,replybox){

        var ajax = ajaxObj("POST", "status_system.php");
        ajax.onreadystatechange = function() {
            if(ajaxReturn(ajax) == true) {
                var response = ajax.responseText;
                var responseTrim = response.trim();
                if(responseTrim == "delete_ok"){
                    _(replybox).style.display = 'none';
                } else {
                    alert(ajax.responseText);
                }
            }
        };
        ajax.send("action=delete_reply&replyid="+replyid);
    }
    function statusMax(field, maxlimit) {
        if (field.value.length > maxlimit){
            alert(maxlimit+" maximum character limit reached");
            field.value = field.value.substring(0, maxlimit);
        }
    }
    function ajaxObj( meth, url ) {
        var x = new XMLHttpRequest();
        x.open( meth, url, true );
        x.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        return x;
    }
    function ajaxReturn(x){
        if(x.readyState == 4 && x.status == 200){
            return true;
        }
    }
</script>
<div id="statusui">
    <?php echo $status_ui; ?>
</div>
<div id="statusarea">
    <?php echo $statuslist; ?>
</div>