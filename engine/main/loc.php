<?php
session_start();

$id=$_COOKIE['userid'];
$nm=$_COOKIE['nm'];
$pid=$_SESSION['pid'];
$date=date("M-d-Y,D");
$time=date("h:i:sa");

$host="localhost";
$user="demon96";
$pass="kritika96";

//for creating connection

$conn=mysql_connect($host,$user,$pass);
mysql_select_db("winterland",$conn);

$sql="select location from gama_pd where add_id='$pid'";
$set=mysql_query($sql,$conn);
$row=mysql_fetch_assoc($set);

if($row['location']=='123456')
$loc=3;
else
$loc=1;


if(!empty($_GET['phone']))
{

if(empty($_GET['mno']))
$err="Please enter your whatsapp number";
else
if($_GET['mno']=='+91')
$err="Please enter your whatsapp number";
else
if(ereg('^\+\91[0-9]{10}',$_GET['mno']))
{
$len6=strlen($_GET['mno']);

if($len6>'13')
{$err="Invalid Mobile No.";}
else
{

$mno=$_GET['mno'];
$sql="insert into lambda_loc values('$id','$nm','$pid','$mno','$date','$time')";
$set=mysql_query($sql,$conn);

if(isset($set))
{$loc=2;


$to="yv12350@gmail.com";
$subject="Location Request @ pickurspace.com";
$message="Request fro location by:\r\n\r\nName:".$nm."\r\nAdid:".$pid."\r\nMobile no.:".$mno;
$headers="From: info@pickurspace.com\r\n";

mail($to,$subject,$message,$headers);





}
else
$err="Sorry your request can't be processed";

}

}
else
$err="Invalid Mobile No.";


}


mysql_close($conn);

?>