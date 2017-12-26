<?php
session_start();

$id=$_COOKIE['userid'];

$pid=array();
$dd=array();
$tt=array();


$host="localhost";
$user="demon96";
$pass="kritika96";

//for creating connection

$conn=mysql_connect($host,$user,$pass);
mysql_select_db("winterland",$conn);

$sql="SELECT * FROM beta_pack where user_id='$id'";
$result=mysql_query($sql,$conn);

//$sql2="SELECT count(*)  as add_id from beta_add where user_id='$id'";
//$result2=mysql_query($sql2,$conn);

//$r3=mysql_result($result2,0);
//$aw=$r3;

$i=0;

while($row=mysql_fetch_assoc($result))
{

$pid[$i]=$row['pack_id'];
$dd[$i]=$row['u_date'];
$tt[$i]=$row['u_time'];

++$i;
}


mysql_close($conn);

for($i=0;$i<20;++$i)
{

if(empty($pid[$i]))
{$lock=$i;
break;
}
}


?>