<?php
session_start();

if(isset($_COOKIE['userid']))
{

if($_SESSION['process']==2)
{$_SESSION['process']=6;
$_SESSION['step']=1;
header('location:detail1.php');}
else
if($_SESSION['process']==3)
{$_SESSION['step']=11;
$_SESSION['process']=5;
header('location:detail11.php');}
else
{header('location:usrhome.php');}

}

if(isset($_COOKIE['err']))
{$err1=$_COOKIE['err'];}

include('engine/index.acc.php');

?>
<html>
<title>Sign In</title>
<?
include('prop/p.signin.php');
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script type="text/javascript" >

</script>
<head>

<div id="head" >

<a href="index.php"><img src="images/4.jpg" id="logo1" ></a>
<a href="index.php"><p id="logo" >pickurspace</p></a>

<div id="lg">
<a href="booster1.php" ><font id="lg1" >SIGN UP</font></a>
<a href="help.php"><font id="lg3" >HELP</font></a>
</div></div>

</head>
<body>

<div id="sign1" >

<p id="sg5"><span id="sg51" >pickurspace</span><br>At Your Service</p>

<div style="text-align:center;height:50px;width:200px;position:absolute;top:95px;left:105px;">
<font style="text-align:center;color:#E41A6A;font-size:13px;font-family:Century Gothic,sans-serif;" ><? print $err1; ?></font>
</div>

<font id="sg1">USERNAME</font>
<font id="sg2">PASSWORD</font>
<font id="sg9">Need an account </font>
<a href="booster1.php" ><font id="sg10">SIGN UP NOW</font></a>
<font id="sg3">Forgotten your password </font>
<a href="forget.php" ><font id="sg4">RESET NOW</font></a>

<form name="signin" method="post" action="">

<input type="text"
              name="usrname"
              value="<?php print $usrname; ?>"
id="fl1" >

<input type="password"
              name="usrpas"
              value="<?php print $usrpas; ?>"
id="fl2" >

<input type="submit"
              name="login"
              value="SIGN IN"
id="fl3" >


</form>

</div>


<div id="foot" >

<div id="fot" >
<a href="index.php"><span id="ft1" >Home</span></a>
<a href="tandc.php"><span id="ft2" >Terms and Conditions</span></a>
<a href="feedback.php"><span id="ft3" >Feedback</span></a>
<a href="contactus.php"><span id="ft4" >Contact Us</span></a>
<a href="aboutus.php"><span id="ft5" >About Us</span></a>
</div>

</div>

</body>
</html>