<?php
header("Content-Type:text/html;charset=utf-8");
$sql=mysql_connect('localhost','root','1234567890');
if(!$sql){
	die('Could not connect mysql server'.mysql_error());
}
mysql_query("set names 'utf8'");
mysql_select_db("info_collect",$sql);
$name="jintian";
$phone_no="18616951795";
$email="jintian_2004@163.com";
$QQ="448414822";
$sex="男";
$exec="insert into info(name,phone_no,email,QQ,sex) value ('$name','$phone_no','$email','$QQ','$sex')";
mysql_query($exec);
echo "保存成功";

?>