<?php
session_start();


$id=$_SESSION['id'];
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

$sql5="SELECT * FROM gama_pf where add_id='$id'";
$result5=mysql_query($sql5,$conn);
$row5=mysql_fetch_assoc($result5);

$sql6="SELECT * FROM gama_pp where add_id='$id'";
$result6=mysql_query($sql6,$conn);
$row6=mysql_fetch_assoc($result6);

$sql4="SELECT * FROM gama_td1 where add_id='$id'";
$result4=mysql_query($sql4,$conn);
$row4=mysql_fetch_assoc($result4);

$sql7="SELECT * FROM gama_td2 where add_id='$id'";
$result7=mysql_query($sql7,$conn);
$row7=mysql_fetch_assoc($result7);



mysql_close($conn);


?>