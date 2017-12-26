<?php

//if(!isset($_COOKIE['userid']))
//{header('location:index.php');}

$pg="upgrade";

?>
<html>
<title>pickurspace</title>
<?
include('prop/p.upgrade.php');
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<script> 

$(document).ready(function(){
    $("#dl1").click(function(){
$("#hid1").show();
$("#hid2").show();

 });
});

$(document).ready(function(){
    $("#dl2").click(function(){
$("#hid1").show();
$("#hid2").show();

 });
});

$(document).ready(function(){
    $("#close").click(function(){
$("#hid1").hide();
$("#hid2").hide();

 });
});


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
<div id="uopt1"><?php //print $_COOKIE['nm']; ?><br><span id="uopt2"><?php
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
?>" ><font id="adds1" >Adds</font></span></a>


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

<?php

$mem=0;

if($mem==1)
{print<<<Here
<font id="msg" >You are already a</font>
<font id="msg1" >PREMIUM MEMBER</font>
<img id="pre1" src="images/l/premium.jpg" >

<ul id="msg7">
<li>Stand out feature</li>
<li>See your viewer's</li>
<li>Contact your viewer's</li>
<li>Help at doorsteps</li>
<li>Including all facilities <br>of Free Membership</li>
</ul>

Here;
}

if($mem==0)
{print<<<Here
<font id="msg" >You are  a</font>
<font id="msg1" ><span id="m5">FREE MEMBER</span></font>
<img id="pre2" src="images/l/fre.jpg" >

<font id="msg4" >Upgrade your account to<br><span id="msg5">PREMIUM MEMBERSHIP</span><br>And get more services from us</font>
<img id="pre3" src="images/l/premium.jpg" >

<ul id="msg6">
<li>Stand out feature</li>
<li>See your viewer's</li>
<li>Contact your viewer's</li>
<li>Help at doorsteps</li>
<li>Including all facilities <br>of Free Membership</li>
</ul>

Here;
}


?>

</div>


<div id="hid1"></div>

<div id="hid2">

<button id="close">X</button>

<font id="hist1" >Are you sure that you want to </font>
<font id="hist2" >DELETE YOUR ADD</font>

<button id="hist" onclick="location.href='upload.m.php'" >YES, CONTINUE</button>

</div>

<div id="foot" >

<font id="txt3" >*PREMIUM MEMBERSHIP is provided free on top 20 ADDS<br>*This membership is aplicable for only  1 month</font>

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