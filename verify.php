<?php
session_start();

if(!isset($_SESSION['process']))
{header('location:usrhome.php');}

include('engine/e.verify.m.php');




?>
<html>
<title>pickurspace</title>
<?
include('prop/p.verify.php');
?>

<head>

<div id="head" >

<meta name="ROBOTS"  content="NOINDEX,FOLLOW" >

<a href="index.php"><img src="images/4.jpg" id="logo1" ></a>
<a href="index.php"><p id="logo" >pickurspace</p></a>

</div>

</head>
<body>

<div id="wel">Verify<span id="wel1">  Your Ad</span></div>

<div id="main" >

<font id="txt1">A verification code has been sent to your registered EMAIL ID</font>
<font id="txt2">Verification Code</font>
<font id="txt3" >Haven't received it yet ?</font>
<a href="redirect_v.php" ><font id="txt4" >Resend Now</font></a>

<p style="color:#E41A6A;font-size-adjust:0.40;font-family:Century Gothic,sans-serif;position:absolute;top:60px;left:380px;" ><?php print $err1; ?></p>

<form method="post"
         action="" style="position:absolute;">
<input id="field1"
           type="text"
           name="ver"
           value="" >
<input type="submit"
           name="verify"
           value="VERIFY"
             id="sb"  >
</form>


</div>

<div id="foot" >

<div id="fot" >
<a href="index.php"><span id="ft1" >Home</span></a>
<a href="index.php"><span id="ft2" >Terms and Conditions</span></a>
<a href="index.php"><span id="ft3" >Feedback</span></a>
<a href="index.php"><span id="ft4" >Contact Us</span></a>
<a href="index.php"><span id="ft5" >About Us</span></a>
</div>

</div>

</body>
</html>