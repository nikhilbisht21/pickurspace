<?php
if(!isset($_COOKIE['userid']))
{header('location:index.php');}

$pg="profile";

?>
<html>
<title>Pickurspace</title>
<?
include('prop/p.usrprofile.edit.php');
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<script> 

</script> 
<head>

<div id="head" >

<a href="index.php"><img src="images/4.jpg" id="logo1" ></a>
<a href="index.php"><p id="logo" >Pickurspace</p></a>

<div id="lg">
<a href="terminate.php" ><font id="lg1" >LOG OUT</font></a>
<a href="help.php"><font id="lg3" >HELP</font></a>
</div></div>

</head>
<body>

<div id="opt">

<img src="images/l/usr" id="uopt">
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

<div id="wel">Edit <span id="wel1">Personal Details</span></div>

<font id="det2" >Name<br><br>Age<br><br>Gender<br><br>Mobile No.<br><br>Email</font>

<font id="det3" ><?php print $_COOKIE['nm']; ?></font>
<font id="det4" ><?php print $_COOKIE['ag']; ?></font>
<font id="det5" ><?php print $_COOKIE['gn']; ?></font>

<form method="post"
         action="usrprofile.php" style="position:absolute;">
     
<input type="text"
           name="mno"
           value="<? print $_COOKIE['ph']; ?>"
           placeholder="+91"            
           id="no" >

<input type="text"
           name="mail"
           value="<? print $_COOKIE['ml']; ?>"
           placeholder="usersmail@mail.com"            
           id="mail" >

<input type="submit"
           name="save"
           value="SAVE CHANGES"
             id="save" >


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