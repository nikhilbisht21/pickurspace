<?php

if(isset($_COOKIE['userid']))
{header('location:usrhome.php');}

include('engine/main/forget.php');

$pg="book";

?>
<html>
<title>pickurspace</title>
<?
include('prop/p.forget.php');
?>

<head>

<div id="head" >

<meta name="ROBOTS"  content="NOINDEX,FOLLOW" >

<a href="index.php"><img src="images/4.jpg" id="logo1" ></a>
<a href="index.php"><p id="logo" >pickurspace</p></a>

</div>

</head>
<body>



<div id="info">

<span id="wel">Reset your<span id="wel1"> PASSWORD</span></span>


<?php


if($rest==1)
{
print<<<Here
<span id="f2">Enter one of your following details:</span>
<span id="f1">Username:<br>Email Id:</span>

<span style="color:#E41A6A;font-weight:bold;font-size:15px;font-family:Century Gothic,sans-serif;position:absolute;top:175px;left:260px;">OR</span>


<span style="color:#E41A6A;text-align:center;font-size:12px;font-family:Century Gothic,sans-serif;position:absolute;top:145px;left:360px;" >$err1</span>
<span style="color:#E41A6A;font-size:12px;font-family:Century Gothic,sans-serif;position:absolute;top:205px;left:360px;">$err2</span>


<form method="post">

<input type="text" name="name" id="field1" value="" >
<input type="text" name="email" id="field2" value="" placeholder="@mail.com" >

<input type="submit" name="rest" value="RESET" id="b2">

</form>
Here;
}
if($rest==2)
{
print<<<Here
<span id="f2">A new password has been sent to your Email Id<br>Check your Email Id for login to your account </span>
<button onclick="location.href='signin.php'" id="bt3" >CONTINUE</button>
Here;
}


?>

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