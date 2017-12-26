<?php
session_start();

$id=$_COOKIE['userid'];
$l=0;

$addid=array();
$adid=array();
$dd=array();
$tt=array();
$ddd=array();
$ttt=array();

$host="localhost";
$user="demon96";
$pass="kritika96";

//for creating connection

$conn=mysql_connect($host,$user,$pass);
mysql_select_db("winterland",$conn);
$sql="SELECT * FROM beta_add where user_id='$id'";
$result=mysql_query($sql,$conn);
$sql1="SELECT * FROM beta_ad where user_id='$id'";
$result1=mysql_query($sql1,$conn);

$sql2="SELECT count(*)  as add_id from beta_add where user_id='$id'";
$result2=mysql_query($sql2,$conn);

$r3=mysql_result($result2,0);
$aw=$r3;


while($row=mysql_fetch_assoc($result))
{

$addid[$row['sr']]=$row['add_id'];
$dd[$row['sr']]=$row['u_date'];
$tt[$row['sr']]=$row['u_time'];
}



while($row1=mysql_fetch_assoc($result1))
{

$adid[$row1['sr']]=$row1['add_id'];
$ddd[$row1['sr']]=$row1['u_date'];
$ttt[$row1['sr']]=$row1['u_time'];

}

mysql_close($conn);

for($i=0;$i<20;++$i)
{

if(empty($addid[$i]))
{$l=$i;
break;
}
}

for($i=0;$i<20;++$i)
{

if(empty($adid[$i]))
{$l2=$i;
break;
}
}

if($l==0)
$adds=1;
else
$adds=0;


if($l2==0)
$ads=1;
else
$ads=0;



?>