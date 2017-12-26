<?php
session_start();


if(!empty($_POST['save']))
{


if($_POST['val']=='1'&&empty($_POST['uname']))
{$err="No changes saved";
}

if($_POST['val']=='2'&&$_POST['ph']=='+91')
{$err="No changes saved";
}

if($_POST['val']=='3'&&empty($_POST['ml']))
{$err="No changes saved";
}



if(!empty($_POST['uname'])||!empty($_POST['ph'])||!empty($_POST['ml']))
{

$uid=$_COOKIE['userid'];
$ufi=$_COOKIE['userfi'];

$host="localhost";
$user="demon96";
$pass="kritika96";

//for creating connection

$conn=mysql_connect($host,$user,$pass);
mysql_select_db("winterland",$conn);

if(!empty($_POST['uname'])&&$_POST['ph']=='+91'&&empty($_POST['ml']))
{
$nm=$_POST['uname'];

$sql="update alpha_m set user_n='$nm' where user_fi='$ufi'";
$set=mysql_query($sql,$conn);

$sql="update alpha_m3 set user_n='$nm' where user_fi='$ufi'";
$set1=mysql_query($sql,$conn);

if($set&&$set1)
{$err="Username saved successfully";
setcookie("usernm",$nm);
}
else
$err="Username not saved ";



}



if(empty($_POST['uname'])&&$_POST['ph']!='+91'&&empty($_POST['ml']))
{
$nm=$_POST['ph'];

$sql="update beta_per set user_ph='$nm' where user_id='$uid'";
$set=mysql_query($sql,$conn);

if($set)
{$err="Mobile No. saved successfully";
setcookie("ph",$nm);
}
else
$err="Mobile No. not saved ";
}



if(empty($_POST['uname'])&&$_POST['ph']=='+91'&&!empty($_POST['ml']))
{
$nm=$_POST['ml'];

$sql="update beta_per set user_ml='$nm' where user_id='$uid'";
$set=mysql_query($sql,$conn);

if($set)
{$err="Email Id saved successfully";
setcookie("ml",$nm);
}
else
$err="Email Id not saved ";

}


mysql_close($conn);

}

}




?>