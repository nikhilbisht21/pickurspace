<?php
session_start();

if(!isset($_COOKIE['userid'])||!isset($_SESSION['id']))
{header('location:signin.php');}

include('engine/main/pack.php');

?>
<html>
<title>pickurspace</title>
<?
include('prop/p.pack.php');
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<script> 

</script> 

<div id="head" >

<meta name="ROBOTS"  content="NOINDEX,FOLLOW" >

<a href="index.php"><img src="images/4.jpg" id="logo1" ></a>
<a href="index.php"><p id="logo" >pickurspace</p></a>

</div>


</head>

<body>


<div id="main">

<span id="txt1" >Your <span id="txt2" >OCAL Package</span> has been successfully added to your cart 
<br>( Keep the package details confidential to maintain owners and your privacy )</span>


<button id="pro" onclick="location.href='usrbook.php'">VISIT YOUR CART NOW</button>

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