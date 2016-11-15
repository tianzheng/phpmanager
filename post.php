<?php
header("Content-Type:text/html;charset=utf-8");
$sql=mysql_connect('localhost','root','1234567890');
if(!$sql){
	die('Could not connect mysql server'.mysql_error());
}
mysql_query("set names 'utf8'");
mysql_select_db("info_collect",$sql);
$name="jintian";
$phone_no="18616951796";
$email="jintian_2005@163.com";
$QQ="448414828";
$sex="男";
$exec="insert into info(name,phone_no,email,QQ,sex) value ('$name','$phone_no','$email','$QQ','$sex')";
mysql_query($exec);
echo "<script>alert('信息提交成功');</script>";

?>