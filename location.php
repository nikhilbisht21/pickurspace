<?php


if(!isset($_COOKIE['userid']))
{header('location:signin.php');}

include('engine/main/loc.php');

$pg="book";

?>
<html>
<title>pickurspace</title>

<?php

include('prop/p.location.php');
?>

<head>

<div id="head" >

<meta name="ROBOTS"  content="NOINDEX,FOLLOW" >

<a href="index.php"><img src="images/4.jpg" id="logo1" ></a>
<a href="index.php"><p id="logo" >pickurspace</p></a>

<div id="lg">
<a href="terminate.php" ><font id="lg1" >LOG OUT</font></a>
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
?>" ><font id="his1" >History</font></span></a>

<a href="upgrade.php">
<span id="memb"  class="<? 
if($pg=='upgrade')
print "cl";
else
print "cl1";
?>" ><font id="prof1" >Upgrade</font></span></a>

</div>

<?php

if($loc==1)
{
print<<<Here
<div id="info">

<img src="images/l/whats.jpg" style="height:200px;width:200px;position:absolute;top:70px;left:450px;" >
<span id="f2" >We want to provide our services in a better way<br><br><br><br><br><br><br><br><br><br><br><br>Enter your Whatsapp Number:<br><br><br><br><br><br><span style="color:#E41A6A;" >$err</span></span>


<form method="get">

<input type="text" name="mno" id="field1" value="+91" >
<input type="submit" name="phone" value="SUBMIT" id="b2">

</form>




</div>
Here;
}
else
if($loc==2)
{
print<<<Here
<div id="info">

<img src="images/l/whats.jpg" style="height:200px;width:200px;position:absolute;top:70px;left:450px;" >
<span id="f1" style="position:absolute;top:45px;left:330px;">We want to provide our services in a better way<br><br><br><br><br><br><br><br><br><br><br><br>Thank you for using our instatant location service<br>Location will be sent to your Whatsapp number within few hours<br>We request you to have some patience while we process your request</span>

</div>
Here;
}
else
{
print<<<Here
<div id="info">

<img src="images/l/whats.jpg" style="height:200px;width:200px;position:absolute;top:70px;left:450px;" >
<span id="f1" style="position:absolute;top:45px;left:390px;">We want to provide our services in a better way<br><br><br><br><br><br><br><br><br><br><br><br>Your request can't be processed<br>Location is not provided by the owner</span>

</div>
Here;
}


?>



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