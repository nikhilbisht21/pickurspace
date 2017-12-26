<?php
session_start();


$check=0;

if($_POST['signup']=='Sign Up')
{


if(empty($_POST['name']))
$err1="Field can't be left blank";
else
if(ereg('[a-zA-Z] ?[a-zA-Z]',$_POST['name']))
{
$len=strlen($_POST['name']);

if($len>'25')
{$err1="Character limit exceeded";}
else
{
++$check;}
}
else
$err1="Only alphabetic characters are allowed ";


if(empty($_POST['age']))
$err2="Field can't be left blank";
else
if(ereg('[^a-zA-Z]',$_POST['age']))
{

if($_POST['age']<18)
{$err2="Age not acceptable";
}
if($_POST['age']>100)
{$err2="Age limit exceeded";}
else
{
++$check;}
}
else
$err2="Only numeric characters are allowed";

if(empty($_POST['gen']))
$err3="Field can't be left blank";
else
++$check;

if(empty($_POST['usrnme']))
$err4="Field can't be left blank";
else
if(ereg('[0-9a-zA-Z]',$_POST['usrnme']))
{

$len4=strlen($_POST['usrnme']);

if($len4>'20')
{$err4="Character limit exceeded";}
else
{

$nm=$_POST['usrnme'];

$conn=mysql_connect("localhost","","");
mysql_select_db("winterland",$conn);
$sql="SELECT *FROM alpha_m3 where user_n='$nm'";
$result=mysql_query($sql,$conn);
$row=mysql_fetch_assoc($result);

if($row['user_n'])
$err4="Username already exist";
else
++$check;

}
}


if(empty($_POST['email']))
$err5="Field can't be left blank";
else
if(ereg('[0-9a-zA-Z]@[a-zA-Z]+\.\com$',$_POST['email']))
{
$len5=strlen($_POST['email']);


if($len5>'35')
{$err5="Characters limit exceeded";}
else
{
++$check;}
}
else
$err5="Invalid Email Id";


if(($_POST['mno'])=='+91')
$err6="Field can't be left blank";
else
if(ereg('^\+\91[0-9]{10}',$_POST['mno']))
{
$len6=strlen($_POST['mno']);


if($len6>'13')
{$err6="Invalid Mobile No.";}
else
{
++$check;}
}
else
$err6="Invalid Mobile No.";

if(empty($_POST['pass1'])||empty($_POST['pass2']))
$err7="Field can't be left blank";


if($_POST['pass1']!=$_POST['pass2'])
$err7="Password dosen't match";
else
if(!empty($_POST['pass1'])&&!empty($_POST['pass2']))
{
if(ereg('^[^0-9][0-9a-zA-Z]',$_POST['pass2']))
{
$len7=strlen($_POST['pass2']);

if($len7<'8')
{$err7="Password must contain atleast 8 characters";}
else
{
++$check;}}
else
{$err7="Password must start with an alphabet";
}
}




if($check==7)
{


setcookie('name',$_POST['name']);
setcookie('age',$_POST['age']);
setcookie('gen',$_POST['gen']);
setcookie('usrnme',$_POST['usrnme']);
setcookie('mno',$_POST['mno']);
setcookie('email',$_POST['email']);
$_SESSION['pass']=$_POST['pass2'];


if($_SESSION['process']==1)
{$_SESSION['step']=99;
header('location:redirect.php');}
else
if($_SESSION['process']==2)
{$_SESSION['step']=1;
header('location:detail1.php');}
else
if($_SESSION['process']==3)
{$_SESSION['step']=11;
header('location:detail11.php');}
else
if($_SESSION['process']==4)
{
header('location:redirect.php');}


//header('location:signin.php');

}

}


?>