<?php

//print $_POST['addid']."\n";
//print $_POST['addty']."\n";

$check=0;

$host="localhost";
$user="demon96";
$pass="kritika96";

//for creating connection

$conn=mysql_connect($host,$user,$pass);
mysql_select_db("winterland",$conn);

if($_POST['addty']=='add_id')
{

$id=$_POST['addid'];

$sql="SELECT user_id,sr FROM beta_add where add_id='$id'";
$result=mysql_query($sql,$conn);
$row=mysql_fetch_assoc($result);

//print $row['sr']."\n";

$uid=$row['user_id'];

$sql2="SELECT count(*)  as add_id from beta_add where user_id='$uid'";
$result2=mysql_query($sql2,$conn);

$r3=mysql_result($result2,0);
$l=$r3;

//print $l."\n";

for($i=$row['sr'];$i<$l;++$i)
{
$s1=$i+1;
$s2=$i;

$sql5="UPDATE beta_add set  sr='$s2' where sr='$s1'";
$set=mysql_query($sql5,$conn);
}


$sql6="delete from beta_add where add_id='$id'";
$sql7="delete from gama_pd where add_id='$id'";
$sql8="delete from gama_od where add_id='$id'";
$sql9="delete from gama_ame where add_id='$id'";
$sql10="delete from gama_pf where add_id='$id'";
$sql11="delete from gama_pp where add_id='$id'";
$sql12="delete from gama_td1 where add_id='$id'";
$sql13="delete from gama_td2 where add_id='$id'";

$set6=mysql_query($sql6,$conn);
$set7=mysql_query($sql7,$conn);
$set8=mysql_query($sql8,$conn);
$set9=mysql_query($sql9,$conn);
$set10=mysql_query($sql10,$conn);
$set11=mysql_query($sql11,$conn);
$set12=mysql_query($sql12,$conn);
$set13=mysql_query($sql13,$conn);

$check=1;
header('location:usradds.php');
}
else
if($_POST['addty']=='ad_id')
{

$id=$_POST['addid'];

$sql="SELECT user_id,sr FROM beta_ad where add_id='$id'";
$result=mysql_query($sql,$conn);
$row=mysql_fetch_assoc($result);

//print $row['sr']."\n";

$uid=$row['user_id'];

$sql2="SELECT count(*)  as add_id from beta_ad where user_id='$uid'";
$result2=mysql_query($sql2,$conn);

$r3=mysql_result($result2,0);
$l2=$r3;

//print $l2."\n";

for($i=$row['sr'];$i<$l2;++$i)
{
$s1=$i+1;
$s2=$i;

$sql5="UPDATE beta_ad set  sr='$s2' where sr='$s1'";
$set=mysql_query($sql5,$conn);
}

$sql6="delete from beta_ad where add_id='$id'";
$sql7="delete from gama_urd where add_id='$id'";
$sql8="delete from gama_uod where add_id='$id'";
$sql9="delete from gama_uame where add_id='$id'";
$sql10="delete from gama_uprd where add_id='$id'";

$set6=mysql_query($sql6,$conn);
$set7=mysql_query($sql7,$conn);
$set8=mysql_query($sql8,$conn);
$set9=mysql_query($sql9,$conn);
$set10=mysql_query($sql10,$conn);

$check=1;
header('location:usradds.php');
}

?>