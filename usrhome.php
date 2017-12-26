<?php
if(!isset($_COOKIE['userid']))
{header('location:index.php');}

$pg="home";

?>
<html>
<title>pickurspace</title>
<?
include('prop/p.usrhome.php');
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<script> 

</script> 
<head>

<div id="head" >

<meta name="ROBOTS"  content="NOINDEX,FOLLOW" >

<a href="index.php"><img src="images/4.jpg" id="logo1" ></a>
<a href="index.php"><p id="logo" >pickurspace</p></a>

<div id="lg">
<a href="terminate.php" ><font id="lg1" >LOGOUT</font></a>
<a href="help.php"><font id="lg3" >HELP</font></a>
</div></div>


</head>
<body>

<div id="opt">

<img src="images/l/usr.jpg" id="uopt">
<div id="uopt1"><?php print $_COOKIE['nm']; ?><br><span id="uopt2"><?php
if($_COOKIE['ty']=='P')
print "Premium";
else
print "Free";

 ?></span></div>

<a href="usrhome.php">
<span id="hm" class="<? 
if($pg=='home')
print "cl";
else
print "cl1";
?>" ><font id="hm1" >Home</font></span></a>

<a href="usrprofile.php">
<span id="prof" class="<? 
if($pg=='profile')
print "cl";
else
print "cl1";
?>"  ><font id="prof1">Profile</font></span></a>

<a href="usradds.php">
<span id="adds"  class="<? 
if($pg=='adds')
print "cl";
else
print "cl1";
?>" ><font id="adds1" >Ads</font></span></a>

<a href="usrbook.php">
<span id="book" class="<? 
if($pg=='book')
print "cl";
else
print "cl1";
?>" ><font id="book1"  >Cart</font></span></a>

<a href="usrhistory.php">
<span id="his"  class="<? 
if($pg=='history')
print "cl";
else
print "cl1";
?>" ><font id="his1" >Notification</font></span></a>

<a href="upgrade.php">
<span id="memb"  class="<? 
if($pg=='upgrade')
print "cl";
else
print "cl1";
?>" ><font id="prof1" >Upgrade</font></span></a>

</div>

<div id="info">

<div id="info1">
<div id="wel">As<span id="wel1">  an Owner</span></div>
<span id="txt1" ><span id="wel2"><?php print $_COOKIE['add1']; ?></span> Ads  posted</span>

<span id="txt3">Want to let your room</span>
<button id="bt" onclick="location.href='booster6.php'" >Post Your Ad Now</button>
</div>

<div id="info2">
<div id="wel">As<span id="wel1">  a Buyer</span></div>
<span id="txt1" ><span id="wel2"><?php print $_COOKIE['add2']; ?></span> Rooms Visited</span>

<span id="txt3">Want a space now</span>
<button id="bt" onclick="location.href='result.php'" >Get Your Space Now</button>
</div>

<div id="info3">
<div id="wel">Want <span id="wel1"> a Space</span></div>
<span id="txt1" ><span id="wel2"><?php print $_COOKIE['add3']; ?></span> Ads Posted</span>

<span id="txt4">Want a space of your desire</span>
<button id="bt" onclick="location.href='booster5.php'" >Post Your Ad Now</button>
</div>


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