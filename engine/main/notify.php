<?php
session_start();

$id=$_COOKIE['userid'];

$name=array();
$age=array();
$gen=array();
$ph=array();
$mail=array();
$aidd=array();


$host="localhost";
$user="demon96";
$pass="kritika96";

//for creating connection

$conn=mysql_connect($host,$user,$pass);
mysql_select_db("winterland",$conn);

$sql="SELECT add_id FROM beta_add where user_id='$id'";
$result=mysql_query($sql,$conn);


//$sql2="SELECT count(*)  as add_id from beta_add where user_id='$id'";
//$result2=mysql_query($sql2,$conn);

//$r3=mysql_result($result2,0);
//$aw=$r3;

$i=0;
$j=0;

while($row=mysql_fetch_assoc($result))
{

$ai=$row['add_id'];


$sql1="SELECT * FROM beta_pack where pack_id='$ai'";
$result1=mysql_query($sql1,$conn);
$row1=mysql_fetch_assoc($result1);


if(!empty($row1['pack_id']))
{


$aidd[$j]=$ai;

$uid=$row1['user_id'];

$sql2="SELECT * FROM beta_per where user_id='$uid'";
$result2=mysql_query($sql2,$conn);
$row2=mysql_fetch_assoc($result2);

$name[$j]=$row2['name'];
$age[$j]=$row2['age'];
$gen[$j]=$row2['gen'];
$ph[$j]=$row2['user_ph'];
$mail[$j]=$row2['user_ml'];

++$j;

}



++$i;
}


mysql_close($conn);

for($i=0;$i<20;++$i)
{

if(empty($aidd[$i]))
{$lock=$i;
break;
}
}

/*

for($i=0;$i<$j;++$i)
{
print $aidd[$i];
print $name[$i];
print $age[$i];
print $gen[$i];
print $ph[$i];
print $mail[$i];

print "<br>";
}

*/


?>