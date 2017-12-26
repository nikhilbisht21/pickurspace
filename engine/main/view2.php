<?php
session_start();

if(!empty($_POST['addid']))
$aid=$_POST['addid'];
else
if(empty($_POST['addid']))
$aid=$_SESSION['addid'];
//$aid=924790230;

$host="localhost";
$user="demon96";
$pass="kritika96";

//for creating connection

$conn=mysql_connect($host,$user,$pass);
mysql_select_db("winterland",$conn);
$sql="SELECT user_id FROM beta_ad where add_id='$aid'";
$result=mysql_query($sql,$conn);
$row=mysql_fetch_assoc($result);

$id=$row['user_id'];

$sql9="SELECT * FROM beta_per where user_id='$id'";
$result9=mysql_query($sql9,$conn);
$row9=mysql_fetch_assoc($result9);

$sql1="SELECT * FROM gama_urd where add_id='$aid'";
$result1=mysql_query($sql1,$conn);
$row1=mysql_fetch_assoc($result1);

$sql2="SELECT * FROM gama_uod where add_id='$aid'";
$result2=mysql_query($sql2,$conn);
$row2=mysql_fetch_assoc($result2);

$sql3="SELECT * FROM gama_uame where add_id='$aid'";
$result3=mysql_query($sql3,$conn);
$row3=mysql_fetch_assoc($result3);	

$sql4="SELECT * FROM gama_uprd where add_id='$aid'";
$result4=mysql_query($sql4,$conn);
$row4=mysql_fetch_assoc($result4);

$sql8="SELECT * FROM beta_ad where add_id='$aid'";
$result8=mysql_query($sql8,$conn);
$row8=mysql_fetch_assoc($result8);

mysql_close($conn);


?>