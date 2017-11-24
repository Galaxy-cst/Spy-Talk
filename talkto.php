<?php
header("content-Type: text/html; charset=Utf-8");
ini_set("session.cookie_httponly",1);
ini_set("display_errors",0);
$sender = @$_POST['sender'];
$nr = @$_POST['nr'];
$cookie = @$_POST['cookie'];
$qd = @$_POST['qd'];
$chat = @$_POST['chat'];
$type = @$_POST['type'];
// echo substr('vdsav#<span+class="am-badge+am-badge-secondary+am-fr">点击翻译</span>',0,-67);
$time = time();
$link = sqls();
switch ($type) {
    case 'fanyi':
        endway(json_encode(array('code' => 1, 'msg' => fanyi(substr($nr,0,-67)))));
        break;
        
        
    case 'connect':
$qd = base64_encode(randomkeys(5));
$cookie = base64_encode(md5(uniqid(mt_rand(),1)));
$sql = "insert into spy_room(qd,cookie,time) values('$qd','$cookie','$time')";
$ret = mysql_query($sql,$link);
	if ($ret === false) {
		endway(json_encode("Insert Failed: " . mysql_error($link)));
	} else {
	    echo base64_decode($qd);
	}
        break;
        
        
    case 'connect_to':
$qd = base64_encode($qd);
$sql = "select * from spy_room where qd='$qd' order by id desc limit 1";
$ret = mysql_query($sql,$link);
	if ($ret === false) {
		endway(json_encode("Insert Failed: " . mysql_error($link)));
	} else {
	    $row = mysql_fetch_assoc($ret);
	}
if($row) {
    
    $sql = "update spy_room set con = '1' where qd='$qd'";
$ret = mysql_query($sql,$link);
	if ($ret === false) {
		endway(json_encode("Insert Failed: " . mysql_error($link)));
	} else {}
	
	    echo base64_decode($row['cookie']);
}else {
    sqlc($link);
    endway(json_encode(array('code' => 0, 'msg' => '不存在此标识符')));
}
        break;
        
    case 'con':
$qd = base64_encode($qd);
$sql = "select * from spy_room where qd='$qd' and con='1' order by id desc limit 1";
$ret = mysql_query($sql,$link);
	if ($ret === false) {
		endway(json_encode("Insert Failed: " . mysql_error($link)));
	} else {
	    $row = mysql_fetch_assoc($ret);
	}
if($row) {
	    echo base64_decode($row['cookie']);
}else {
    sqlc($link);
    // endway(json_encode(array('code' => 0, 'msg' => '不存在此标识符')));
}
        break;
        
    case 'talk':
        $cookie = base64_encode($cookie);
        $chat = base64_encode($chat);
$sql = "select * from spy_room where cookie='$cookie' order by id desc limit 1";
$ret = mysql_query($sql,$link);
	if ($ret === false) {
		endway(json_encode("Insert Failed: " . mysql_error($link)));
	} else {
	    $row = mysql_fetch_assoc($ret);
	}
if($row) {
	$sender = base64_encode($sender);
	if(!$row['chat']) {
$sql = "update spy_room set chat = '$chat',sender = '$sender' where cookie = '$cookie'";
$ret = mysql_query($sql,$link);
	if ($ret === false) {
		endway(json_encode("Update Failed: " . mysql_error($link)));
	} else {
	    echo json_encode(array('code' => 1, 'msg' => 'success'));
	}
	
	}else {
	    echo json_encode(array('code' => 2, 'msg' => 'waiting'));
	}
}else {
    sqlc($link);
    endway(json_encode(array('code' => 0, 'msg' => '搞事啊')));
}
        break;
        
        
    case 'get':
        $cookie = base64_encode($cookie);
$sql = "select * from spy_room where cookie='$cookie' order by id desc limit 1";
$ret = mysql_query($sql,$link);
	if ($ret === false) {
		endway(json_encode("Insert Failed: " . mysql_error($link)));
	} else {
	    $row = mysql_fetch_assoc($ret);
	}
if($row) {
	$sender = base64_encode($sender);
	if($sender != $row['sender'] and $row['chat']) {
	    echo json_encode(array('code' => 1, 'msg' => base64_decode($row['chat'])));
$sql = "update spy_room set chat = '' where cookie = '$cookie'";
$ret = mysql_query($sql,$link);
	if ($ret === false) {
		endway(json_encode("Update Failed: " . mysql_error($link)));
	} else {}
	
	}else {
	    echo json_encode(array('code' => 2, 'msg' => 'waiting'));
	}
}else {
    sqlc($link);
    endway(json_encode(array('code' => 0, 'msg' => '搞事啊')));
}
        break;
        
        
    default:
        endway(json_encode(array('code' => 0, 'msg' => '搞事啊')));
        break;
}
sqlc($link);
function sqls(){
    $link = mysql_connect('localhost', 'root', '0000')
or die('Could not connect: ' . mysql_connect_error());
//echo 'Connected successfully';
mysql_select_db('lightning') or die('er');
mysql_query("set names 'utf8'",$link);
return $link;
}
function sqlc($link){
    mysql_close($link);
}
function endway($msg) {
  echo $msg;
  exit();
}
function fanyi($nr) {
    $nr = urlencode($nr);
//参数设置
$ch = curl_init();
		    $res= curl_setopt ($ch, CURLOPT_URL,'http://fanyi.baidu.com/v2transapi');
		    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
		    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		    curl_setopt ($ch, CURLOPT_HEADER, 0);
		    curl_setopt($ch, CURLOPT_POST, 1);
		    curl_setopt($ch, CURLOPT_POSTFIELDS, "from=auto&to=zh&query=$nr&transtype=translang&simple_means_flag=3");
		    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
		    $result = curl_exec ($ch);
		    curl_close($ch);
		    $result = json_decode($result,true);
		    $re = $result['trans_result']['data'][0]['dst'];
		    return $re;
}
function randomkeys($length)   
{   
   $pattern = '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLOMNOPQRSTUVWXYZ';
    for($i=0;$i<$length;$i++)   
    {   
        $key .= $pattern{mt_rand(0,35)};    //生成php随机数   
    }   
    return $key;   
}
?>