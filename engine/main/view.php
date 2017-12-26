<?
session_start();

$id=$_COOKIE['userid'];
$aid=$_POST['addid'];

$host="localhost";
$user="demon96";
$pass="kritika96";

//for creating connection

$conn=mysql_connect($host,$user,$pass);
mysql_select_db("winterland",$conn);
$sql="SELECT * FROM beta_per where user_id='$id'";
$result=mysql_query($sql,$conn);
$row=mysql_fetch_assoc($result);

$sql1="SELECT * FROM gama_pd where add_id='$aid'";
$result1=mysql_query($sql1,$conn);
$row1=mysql_fetch_assoc($result1);

$sql2="SELECT * FROM gama_od where add_id='$aid'";
$result2=mysql_query($sql2,$conn);
$row2=mysql_fetch_assoc($result2);

$sql3="SELECT * FROM gama_ame where add_id='$aid'";
$result3=mysql_query($sql3,$conn);
$row3=mysql_fetch_assoc($result3);

$sql5="SELECT * FROM gama_pf where add_id='$aid'";
$result5=mysql_query($sql5,$conn);
$row5=mysql_fetch_assoc($result5);

$sql6="SELECT * FROM gama_pp where add_id='$aid'";
$result6=mysql_query($sql6,$conn);
$row6=mysql_fetch_assoc($result6);

$sql4="SELECT * FROM gama_td1 where add_id='$aid'";
$result4=mysql_query($sql4,$conn);
$row4=mysql_fetch_assoc($result4);

$sql7="SELECT * FROM gama_td2 where add_id='$aid'";
$result7=mysql_query($sql7,$conn);
$row7=mysql_fetch_assoc($result7);

$sql8="SELECT * FROM beta_add where add_id='$aid'";
$result8=mysql_query($sql8,$conn);
$row8=mysql_fetch_assoc($result8);


mysql_close($conn);


?>