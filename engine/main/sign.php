<?php

$logid=$_POST['usrnme'];




$host="localhost";
$user="demon96";
$pass="kritika96";

//for creating connection

$conn=mysql_connect($host,$user,$pass);
mysql_select_db("winterland",$conn);
$sql="SELECT user_fi FROM alpha_m where user_n='$logid'";
$result=mysql_query($sql,$conn);
$row=mysql_fetch_assoc($result);

if(!empty($row['user_fi']))
$err4="Username Already exist";
else
++$check;

mysql_close($conn);


?>