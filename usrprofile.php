<?php

if(!isset($_COOKIE['userid']))
{header('location:signin.php');}


include('engine/main/profile.php');

$pg="profile";

?>
<html>
<title>pickurspace</title>
<?
include('prop/p.usrprofile.php');
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<script> 

$(document).ready(function(){
    $("#edit3").click(function(){
        $("#edit2").show();
         $("#pas").show();
$("#edit3").hide();

    });
});




$(document).ready(function(){
    $("#sh1").click(function(){
        $("#hd1").show();
         $("#hd4").show();
$("#sh1").hide();
$("#sh2").hide();
$("#sh3").hide();
$("#er1").show();


document.getElementById("hdn").setAttribute("value","1");
    });
});

$(document).ready(function(){
    $("#sh2").click(function(){
        $("#hd2").show();
         $("#hd4").show();
$("#sh1").hide();
$("#sh2").hide();
$("#sh3").hide();
$("#er2").show();

document.getElementById("hdn").setAttribute("value","2");
    });
});

$(document).ready(function(){
    $("#sh3").click(function(){
        $("#hd3").show();
         $("#hd4").show();
$("#sh1").hide();
$("#sh2").hide();
$("#sh3").hide();
$("#er3").show();

document.getElementById("hdn").setAttribute("value","3");
    });
});

$(document).ready(function(){
    $("#bck").click(function(){
$("#sh1").show();
$("#sh2").show();
$("#sh3").show();
$("#hd1").hide();
$("#hd2").hide();
$("#hd3").hide();
$("#hd4").hide();
$("#er1").hide();
$("#er2").hide();
$("#er3").hide();
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

<a href="upgrade.php">
<span id="memb"  class="<? 
if($pg=='upgrade')
print "cl";
else
print "cl1";
?>" ><font id="prof1" >Upgrade</font></span></a>

</div>


<div id="info">

<div id="wel">Personal Details </div>

<span id="sh1" style="cursor:pointer;color:#2EAFB0;font-size:12px;font-family:Century Gothic,sans-serif;position:absolute;top:90px;left:630px;" ><u>EDIT</u></span>
<span id="sh2" style="cursor:pointer;color:#2EAFB0;font-size:12px;font-family:Century Gothic,sans-serif;position:absolute;top:150px;left:630px;" ><u>EDIT</u></span>
<span id="sh3" style="cursor:pointer;color:#2EAFB0;font-size:12px;font-family:Century Gothic,sans-serif;position:absolute;top:170px;left:630px;" ><u>EDIT</u></span>

<span id="er1" style="display:none;color:#E41A6A;font-size:12px;font-family:Century Gothic,sans-serif;position:absolute;top:90px;left:630px;" >Enter new Username</span>
<span id="er2" style="display:none;color:#E41A6A;font-size:12px;font-family:Century Gothic,sans-serif;position:absolute;top:150px;left:630px;" >Enter new Mobile No.</span>
<span id="er3" style="display:none;color:#E41A6A;font-size:12px;font-family:Century Gothic,sans-serif;position:absolute;top:170px;left:630px;" >Enter new Email Id</span>

<span id="er1" style="color:#E41A6A;font-size:15px;font-family:Century Gothic,sans-serif;position:absolute;top:45px;left:400px;" ><?php print $err; ?></span>



<font id="det2" >Name<br>Username<br>Age<br>Gender<br>Mobile No.<br>Email<br>Membership</font>

<font id="det3" ><?php print $_COOKIE['nm']; ?><br><?php print $_COOKIE['usernm']; ?><br><?php print $_COOKIE['ag']; ?><br><?php print $_COOKIE['gn']; ?><br><?php print $_COOKIE['ph']; ?><br><?php print $_COOKIE['ml']; ?><br><?php
if($_COOKIE['ty']=='P')
print "Premium";
else
print "Free";

 ?></font>


<?
$mem=0;

if($mem==0)
print<<<Here
<img src="images/l/fre.jpg" id="mem">
Here;

if($mem==1)
print<<<Here
<img src="images/l/premium.jpg" id="mem">
Here;

?>

<div id="set">
<button id="edit3" >Settings</button>
<button id="edit2" onclick="location.href='pass.php'" >CHANGE PASSWORD</button>
<button id="pas" onclick="location.href='delete.php'" >DELETE MY ACCOUT</button>
</div>


<form method="post" action="">

<div id="hd1"><input type="text" value="" id="fl1" name="uname" ></div>
<div id="hd2"><input type="text" value="+91" id="fl2" name="ph" ></div>
<div id="hd3"><input type="text" value="" id="fl3" name="ml" placeholder="@mail.com" ></div>
<input type="hidden" value="5" id="hdn" name="val" >

<div id="hd4"><input type="submit" value="SAVE CHANGES" id="edit4" name="save" ><img id="bck" src="images/l/bck.jpg" style="cursor:pointer;"></div>
</form>


</div>

<div id="foot" >

<font id="edit1">Personal Information of our members are completely protected<br>This information is used to provide better service to the users</font>

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