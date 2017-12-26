<?php
session_start();

$find=$_SESSION['find'];
$find2=$_SESSION['find2'];




$host="localhost";
$user="demon96";
$pass="kritika96";

//for creating connection

$conn=mysql_connect($host,$user,$pass);
mysql_select_db("winterland",$conn);
$sql="SELECT user_id FROM alpha_m3 where user_n='$find2' and user_fi='$find'";
$result=mysql_query($sql,$conn);
$row=mysql_fetch_assoc($result);


if(empty($row['user_id']))
{
header('location:index.php');
}
else
{
setcookie('userid',$row['user_id']);
$id=$_COOKIE['userid'];



$sql1="SELECT * FROM beta_per where user_id='$id'";
$result1=mysql_query($sql1,$conn);
$row1=mysql_fetch_assoc($result1);

$sql2="SELECT count(*)  as add_id from beta_add where user_id='$id'";
$result2=mysql_query($sql2,$conn);
$r2=mysql_result($result2,0);

$sql3="SELECT count(*)  as pack_id from beta_pack where user_id='$id'";
$result3=mysql_query($sql3,$conn);
$r3=mysql_result($result3,0);

$sql4="SELECT count(*)  as add_id from beta_ad where user_id='$id'";
$result4=mysql_query($sql4,$conn);
$r4=mysql_result($result4,0);

setcookie('nm',$row1['name']);
setcookie('ag',$row1['age']);
setcookie('gn',$row1['gen']);
setcookie('ml',$row1['user_ml']);
setcookie('ph',$row1['user_ph']);
setcookie('ty',$row1['user_ty']);
setcookie('dt',$row1['u_date']);
setcookie('tm',$row1['u_time']);
setcookie('userfi',$find);
setcookie('usernm',$find2);


setcookie('add1',$r2);
setcookie('add2',$r3);
setcookie('add3',$r4);

}




mysql_close($conn);


?>