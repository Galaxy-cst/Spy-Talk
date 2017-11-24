<?php
header("content-Type: text/html; charset=Utf-8");
ini_set("session.cookie_httponly",1);
ini_set("display_errors",0);
$bsf = @$_POST['bsf'];
if(!$bsf)exit("搞事啊");
$bsf = base64_encode($bsf);
$link = sqls();
$sql = "select * from spy where bsf='$bsf' order by id desc limit 1";
$ret = mysql_query($sql,$link);
	if ($ret === false) {
		endway(json_encode("Insert Failed: " . mysql_error($link)));
	} else {
	    $row = mysql_fetch_assoc($ret);
	}
if($row) {
    echo base64_decode($row['nr']);
    sql_del($row['id']);
}else exit("搞事啊");
	
sqlc($link);

function sql_del($id) {
    $link = sqls();
    $sql = "DELETE FROM spy WHERE id='$id'";
$ret = mysql_query($sql,$link);
	if ($ret === false) {
	    sqlc($link);
		return false;
	} else {}
	sqlc($link);
	return true;
}

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
function randomkeys($length)   
{   
   $pattern = '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLOMNOPQRSTUVWXYZ';
    for($i=0;$i<$length;$i++)   
    {   
        $key .= $pattern{mt_rand(0,35)};    //生成php随机数   
    }   
    return $key;   
}
function endway($msg) {
  echo $msg;
  exit();
}
?>