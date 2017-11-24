<?php
header("content-Type: text/html; charset=Utf-8");
ini_set("session.cookie_httponly",1);
ini_set("display_errors",0);
$nr = @$_POST['nr'];
if(!$nr)exit("搞事啊");
$link = sqls();
$nr = base64_encode($nr); //对获取的信息base64编码，防御SQL注入攻击
$bsf = base64_encode(randomkeys(4)); //生成标识符
$sql = "insert into spy(bsf,nr) values('$bsf','$nr')";
$ret = mysql_query($sql,$link);
	if ($ret === false) {
		endway(json_encode("Insert Failed: " . mysql_error($link)));
	} else {
	    echo base64_decode($bsf);
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
