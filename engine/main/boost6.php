<?php
session_start();

$id=$_COOKIE['userid'];

$host="localhost";
$user="demon96";
$pass="kritika96";

//for creating connection

$conn=mysql_connect($host,$user,$pass);
mysql_select_db("winterland",$conn);
$sql="SELECT * FROM beta_per where user_id='$id'";
$result=mysql_query($sql,$conn);
$row=mysql_fetch_assoc($result);

setcookie('name',$row['name']);
setcookie('age',$row['age']);
setcookie('gen',$row['gen']);
setcookie('email',$row['user_ml']);
setcookie('mno',$row['user_ph']);


mysql_close($conn);


?>