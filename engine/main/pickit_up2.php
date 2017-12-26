<?php

$host="localhost";
$user="demon96";
$pass="kritika96";

//for creating connection

$conn=mysql_connect($host,$user,$pass);
mysql_select_db("winterland",$conn);


if($_SESSION['process']==3)
{

$mem="F";

$lid1=15010282;
$a=rand(200,258);
$b=rand(200,258);
$c=$a*$b;

$userid=$lid1*$c;

$_SESSION['userid']=$userid;

$sql1="insert into alpha_m values('$username','$id')";
$sql2="insert into alpha_m2 values('$id','$pas')";
$sql13="insert into alpha_m3 values('$username','$id','$userid','$date','$time')";
$sql3="delete from alpha_tmp where user_fi='$id'";


$set1=mysql_query($sql1,$conn);
$set2=mysql_query($sql2,$conn);
$set3=mysql_query($sql3,$conn);
$set13=mysql_query($sql13,$conn);

$sql2="SELECT count(*)  as add_id from beta_ad where user_id='$userid'";
$result2=mysql_query($sql2,$conn);

$r3=mysql_result($result2,0);
$aw=$r3;

$sql4="insert into beta_per values('$userid','$oname','$oage','$ogen','$mail','$no','$ty','$date','$time')";
$sql5="insert into beta_mem values('$userid','$oname','$mem','$date','$time')";
$sql6="insert into beta_ad values('$userid','$oname','$addid','$date','$time','$aw')";

$sql7="insert into gama_urd values('$addid','$space','$kitch','$am','$area','$city','$state','$bdgt','$mxt','$mnt')";

$sql8="insert into gama_uod values('$addid','$bed','$hall','$bath','$furnsh')";

$sql14="insert into gama_uame values('$addid','$tv','$intr','$fan','$ac','$geez','$frig','$prk','$semi')";

$sql9="insert into gama_uprd values('$addid','$uage','$ugen','$upet','$usmok','$udrink','$uhome','$uoccp','$uadvrt')";



$set4=mysql_query($sql4,$conn);
$set5=mysql_query($sql5,$conn);
$set6=mysql_query($sql6,$conn);

$set7=mysql_query($sql7,$conn);
$set8=mysql_query($sql8,$conn);
$set9=mysql_query($sql9,$conn);

$set14=mysql_query($sql14,$conn);

}
else
if($_SESSION['process']==5)
{

$mem="F";

$userid=$_COOKIE['userid'];

$sql2="SELECT count(*)  as add_id from beta_ad where user_id='$userid'";
$result2=mysql_query($sql2,$conn);

$r3=mysql_result($result2,0);
$aw=$r3;

$sql6="insert into beta_ad values('$userid','$oname','$addid','$date','$time','$aw')";

$sql7="insert into gama_urd values('$addid','$space','$kitch','$am','$area','$city','$state','$bdgt','$mxt','$mnt')";

$sql8="insert into gama_uod values('$addid','$bed','$hall','$bath','$furnsh')";

$sql14="insert into gama_uame values('$addid','$tv','$intr','$fan','$ac','$geez','$frig','$prk','$semi')";

$sql9="insert into gama_uprd values('$addid','$uage','$ugen','$upet','$usmok','$udrink','$uhome','$uoccp','$uadvrt')";

$set6=mysql_query($sql6,$conn);

$set7=mysql_query($sql7,$conn);
$set8=mysql_query($sql8,$conn);
$set9=mysql_query($sql9,$conn);
$set14=mysql_query($sql14,$conn);

}

mysql_close($conn);
?>