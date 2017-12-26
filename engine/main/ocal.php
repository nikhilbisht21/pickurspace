<?php
session_start();

//$_SESSION['id']=$_POST['id'];
$id=$_SESSION['pid'];
//$id="860315472";

$host="localhost";
$user="demon96";
$pass="kritika96";

//for creating connection

$conn=mysql_connect($host,$user,$pass);
mysql_select_db("winterland",$conn);
$sql="SELECT user_id FROM beta_add where add_id='$id'";
$result=mysql_query($sql,$conn);
$row=mysql_fetch_assoc($result);

$uid=$row['user_id'];

$sql1="SELECT *from beta_per where user_id='$uid'";
$result1=mysql_query($sql1,$conn);
$row1=mysql_fetch_assoc($result1);

$sql11="SELECT *from beta_add where user_id='$uid'";
$result11=mysql_query($sql11,$conn);
$row11=mysql_fetch_assoc($result11);

$sql2="SELECT * FROM gama_od where add_id='$id'";
$result2=mysql_query($sql2,$conn);
$row2=mysql_fetch_assoc($result2);

$sql21="SELECT * FROM gama_pd where add_id='$id'";
$result21=mysql_query($sql21,$conn);
$row21=mysql_fetch_assoc($result21);

$sql3="SELECT * FROM gama_ame where add_id='$id'";
$result3=mysql_query($sql3,$conn);
$row3=mysql_fetch_assoc($result3);

$sql6="SELECT * FROM gama_pp where add_id='$id'";
$result6=mysql_query($sql6,$conn);
$row6=mysql_fetch_assoc($result6);



mysql_close($conn);


?>