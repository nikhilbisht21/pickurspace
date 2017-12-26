<?php
session_start();

$rest=1;

if(!empty($_POST['rest']))
{

$host="localhost";
$user="demon96";
$pass="kritika96";

//for creating connection

$conn=mysql_connect($host,$user,$pass);
mysql_select_db("winterland",$conn);

if(empty($_POST['name'])&&empty($_POST['email']))
{$err1="Enter Username <br><br>OR<br><br> Email Id";
}
else
if(!empty($_POST['name'])&&!empty($_POST['email']))
{$err1="Enter only one detail";
}


if(!empty($_POST['name'])&&empty($_POST['email']))
{

$name=$_POST['name'];

$sql="select user_fi from alpha_m where user_n='$name'";
$set=mysql_query($sql,$conn);
$row=mysql_fetch_assoc($set);

if($row['user_fi'])
{

$a=rand(999,9999);
$pas="DE".$a."ON";

$fid=$row['user_fi'];

$sql="update alpha_m2 set user_p='$pas' where user_fi='$fid'";
$set=mysql_query($sql,$conn);

if($set)
{$rest=2;
setcookie('err',"Login to continue",time() +40);

$sql="select user_id from alpha_m3 where user_fi='$fid'";
$set=mysql_query($sql,$conn);
$row=mysql_fetch_assoc($set);

$userid=$row['user_id'];

$sql="select user_ml from beta_per where user_id='$userid'";
$set=mysql_query($sql,$conn);
$row=mysql_fetch_assoc($set);

$email=$row['user_ml'];
$usernm=$name;
}

}
else
$err1="Username not found";

}
else
if(empty($_POST['name'])&&!empty($_POST['email']))
{

$email=$_POST['email'];

$sql="select user_id from beta_per where user_ml='$email'";
$set=mysql_query($sql,$conn);
$row=mysql_fetch_assoc($set);

$id=$row['user_id'];

$sql="select user_fi from alpha_m3 where user_id='$id'";
$set=mysql_query($sql,$conn);
$row=mysql_fetch_assoc($set);

if($row['user_fi'])
{

$a=rand(999,9999);
$pas="DE".$a."ON";

$fid=$row['user_fi'];

$sql="update alpha_m2 set user_p='$pas' where user_fi='$fid'";
$set=mysql_query($sql,$conn);

if($set)
{$rest=2;
setcookie('err',"Login to continue",time() +40);

$sql="select user_n from alpha_m where user_fi='$fid'";
$set=mysql_query($sql,$conn);
$row=mysql_fetch_assoc($set);

$usernm=$row['user_n'];

}

}
else  
$err2="email Id not found";

}

mysql_close($conn);

}

if($rest==2)
{
$to=$email;
$subject="Password Reset@pickurspace.com";
$message="Password for your account a has been changed successfuly\r\n\r\n"."Username: ".$usernm."\r\nPassword: ".$pas."\r\n\r\nPlease login to your account with your new password\r\nWe recommend you to change your password for security reasons";
$headers="From: info@pickurspace.com\r\n";

mail($to,$subject,$message,$headers);
}


?>