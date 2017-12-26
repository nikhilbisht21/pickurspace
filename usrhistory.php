
<?php
if(!isset($_COOKIE['userid']))
{header('location:index.php');}

include('engine/main/notify.php');

$pg="history";

?>
<html>
<title>pickurspace</title>
<?
include('prop/p.usrhistory.php');
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<script> 

$(document).ready(function(){
    $("#owner").click(function(){
        $("#purc").hide();
         $("#sold").show();



document.getElementById("owner").setAttribute("class","cl");

document.getElementById("buyer").setAttribute("class","cl1");


    });
});


$(document).ready(function(){
    $("#buyer").click(function(){
        $("#sold").hide();
         $("#purc").show();

document.getElementById("buyer").setAttribute("class","cl");

document.getElementById("owner").setAttribute("class","cl1");

    });
});

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


$(document).ready(function(){
    $("#dl3").click(function(){
$("#hid1").show();
$("#hid2").show();

 });
});

$(document).ready(function(){
    $("#dl4").click(function(){
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

<span id="memb"  class="<? 
if($pg=='upgrade')
print "cl";
else
print "cl1";
?>" ><font id="prof1" >Upgrade</font></span>

<a href="upgrade.php">
<span id="memb"  class="<? 
if($pg=='upgrade')
print "cl";
else
print "cl1";
?>" ><font id="prof1" >Upgrade</font></span></a>

</div>


<div id="sold">

<?

if($add==0)
print<<<Here
<font id="msg" ><br>You have no notification</font>

Here;
else
{
$t=0;

for($i=0;$i<$lock;++$i)
{
$tp=$t."px";

print<<<Here
<div id="ad" style="background:;border:1px solid #2EAFB0;height:150px;width:800px;position:absolute;top:$tp;left:50px;">

<font id="f1" ><span id="f4">Your AD just had a view</span><br></font>

<div style="background:;height:130px;width:300px;position:absolute;top:10px;left:300px;">
<font id="f2" >Name:<br>Age:<br>Gender:<br>Mobile No.<br>Email id:</font>
<font id="f3" >
$name[$i]<br>
$age[$i]<br>
$gen[$i]<br>
$ph[$i]<br>
$mail[$i]</font>

</div>

</div>
Here;

$t=$t+170;
}
}


?>

</div>



<?php


$t=$t+170;

if($lock<4)
$t="bottom:0px";
else
$t="top:".$t."px";

print<<<Here
<div id="foot" style="position:absolute;$t;left:0px;" >
Here;

?>

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