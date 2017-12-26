<?php
session_start();

$uid=$_COOKIE['userid'];
$pid=$_SESSION['id'];
$trns="123456678";
$amt="20000";
$mode="CC";
$date=date("M-d-Y,D");
$time=date("h:i:sa");



$host="localhost";
$user="demon96";
$pass="kritika96";

//for creating connection

$conn=mysql_connect($host,$user,$pass);
mysql_select_db("winterland",$conn);

$sql="insert into beta_pack values('$uid','$pid','$date','$time')";
$result=mysql_query($sql,$conn);



mysql_close($conn);


?>