<?php
session_start();


$host="localhost";
$user="demon96";
$pass="kritika96";

//for creating connection

$conn=mysql_connect($host,$user,$pass);
mysql_select_db("winterland",$conn);


if($_SESSION['process']==2)
{

$mem="P";

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


$sql2="SELECT count(*)  as add_id from beta_add where user_id='$userid'";
$result2=mysql_query($sql2,$conn);

$r3=mysql_result($result2,0);
$aw=$r3;


$sql4="insert into beta_per values('$userid','$oname','$oage','$ogen','$mail','$no','$ty','$date','$time')";
$sql5="insert into beta_mem values('$userid','$oname','$mem','$date','$time')";
$sql6="insert into beta_add values('$userid','$oname','$addid','$date','$time','$aw')";

$sql7="insert into gama_pd values('$addid','$ptype','$room','$kitch','$lngth','$brdth','$oam','$padd','$pmrk','$parea','$pdist','$pstate','$local','$pbed')";

$sql8="insert into gama_od values('$addid','$bed','$hall','$bath','$furnsh')";

$sql14="insert into gama_ame values('$addid','$tv','$intr','$fan','$ac','$geez','$frig','$prk','$semi')";

$sql9="insert into gama_td1 values('$addid','$t1name','$t1age','$t1gen','$t1st','$t1clg','$t2name','$t2age','$t2gen','$t2st','$t2clg')";

$sql10="insert into gama_td2 values('$addid','$t3name','$t3age','$t3gen','$t3st','$t3clg','$t4name','$t4age','$t4gen','$t4st','$t4clg')";

$sql11="insert into gama_pf values('$addid','$tsomk','$tgen','$tcop','$tagemin','$tagemx','$tprf')";

$sql12="insert into gama_pp values('$addid','$dd','$mm','$yy','$maxt','$mint','$price')";



$set4=mysql_query($sql4,$conn);
$set5=mysql_query($sql5,$conn);
$set6=mysql_query($sql6,$conn);

$set7=mysql_query($sql7,$conn);
$set8=mysql_query($sql8,$conn);
$set9=mysql_query($sql9,$conn);
$set10=mysql_query($sql10,$conn);
$set11=mysql_query($sql11,$conn);
$set12=mysql_query($sql12,$conn);

$set14=mysql_query($sql14,$conn);

}


if($_SESSION['process']==6)
{

$mem="P";

$userid=$_COOKIE['userid'];

$sql2="SELECT count(*)  as add_id from beta_add where user_id='$userid'";
$result2=mysql_query($sql2,$conn);

$r3=mysql_result($result2,0);
$aw=$r3;

$sql6="insert into beta_add values('$userid','$oname','$addid','$date','$time','$aw')";

$sql7="insert into gama_pd values('$addid','$ptype','$room','$kitch','$lngth','$brdth','$oam','$padd','$pmrk','$parea','$pdist','$pstate','$local','$pbed')";

$sql8="insert into gama_od values('$addid','$bed','$hall','$bath','$furnsh')";

$sql14="insert into gama_ame values('$addid','$tv','$intr','$fan','$ac','$geez','$frig','$prk','$semi')";

$sql9="insert into gama_td1 values('$addid','$t1name','$t1age','$t1gen','$t1st','$t1clg','$t2name','$t2age','$t2gen','$t2st','$t2clg')";

$sql10="insert into gama_td2 values('$addid','$t3name','$t3age','$t3gen','$t3st','$t3clg','$t4name','$t4age','$t4gen','$t4st','$t4clg')";

$sql11="insert into gama_pf values('$addid','$tsomk','$tgen','$tcop','$tagemin','$tagemx','$tprf')";

$sql12="insert into gama_pp values('$addid','$dd','$mm','$yy','$maxt','$mint','$price')";




$set6=mysql_query($sql6,$conn);

$set7=mysql_query($sql7,$conn);
$set8=mysql_query($sql8,$conn);
$set9=mysql_query($sql9,$conn);
$set10=mysql_query($sql10,$conn);
$set11=mysql_query($sql11,$conn);
$set12=mysql_query($sql12,$conn);
$set14=mysql_query($sql14,$conn);

}

mysql_close($conn);




?>