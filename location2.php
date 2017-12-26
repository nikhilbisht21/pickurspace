<?php
session_start();

?>
<html>
<title>pickurspace</title>
<?
include('prop/p.location.php');
?>

<head>

<div id="head" >
<meta name="ROBOTS"  content="NOINDEX,FOLLOW" >

<a href="index.php"><img src="images/4.jpg" id="logo1" ></a>
<a href="index.php"><p id="logo" >pickurspace</p></a>

</div>

</head>
<body>


<div id="info" style="position:absolute;left:10%;">

<img src="images/l/whats.jpg" style="height:200px;width:200px;position:absolute;top:70px;left:450px;" >
<span id="f1" >We want to provide our services in a better way<br><br><br><br><br><br><br><br><br><br><br><br><span style="color:#E41A6A;font-weight:bold;">Add location of your property with the help of Whatsapp</span><br><br><span style="font-weight:bold;">Send location with the following details:</span>
<br><br><br><br><br><br>An send it to<br><span style="font-weight:bold;">+917060273896</span>
<br>Location will be added to your Ad
</span>
<img src="images/l/whats.jpg" style="height:30px;width:30px;position:absolute;top:440px;left:460px;" >

<span id="f4" >
<span style="font-weight:bold;">Name:</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php print $_COOKIE['name']; ?>
<br><span style="font-weight:bold;">Ad_id:</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php print $_SESSION['addid']; ?>
<br><span style="font-weight:bold;">Tag:</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsplocation@pickurspace
</span>

<button id="bt3" onclick="location.href='<?php

if(isset($_COOKIE['userid']))
print "usradds.php";
else
print "signin.php"; ?>'">CONTINUE</button>

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