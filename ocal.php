<?php

if(!isset($_COOKIE['userid']))
{header('location:signin.php');}

include('engine/main/ocal.php');

$pg="book";

?>
<html>
<title>pickurspace</title>
<?
include('prop/p.ocal.php');
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<script >

$(document).ready(function(){
    $("#luk").click(function(){
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
<span id="hist"  class="<? 
if($pg=='history')
print "cl";
else
print "cl1";
?>" ><font id="hist1" >Notification</font></span></a>

<a href="upgrade.php">
<span id="memb"  class="<? 
if($pg=='upgrade')
print "cl";
else
print "cl1";
?>" ><font id="prof1" >Upgrade</font></span></a>

</div>

<div id="main">

<div id="main1">

<span id="txt1"><span id="txt31">Package ID:</span> &nbsp&nbsp<?php print $id; ?></span>
<span id="txt2"><span id="txt31">Added on:</span> &nbsp&nbsp<?php print $row11['u_date']; ?><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php print $row11['u_time']; ?></span>

</div>

<div id="main2">
<div id="hd"><span id="txt3">Property Details</span></div>

<img src="images/l/prop.jpg" style="height:40px;width:40px;position:absolute;top:60px;left:70px;">
<img src="images/l/rom.jpg" style="height:40px;width:40px;position:absolute;top:110px;left:70px;">
<img src="images/l/bat.jpg" style="height:40px;width:40px;position:absolute;top:160px;left:70px;">
<img src="images/l/loc.jpg" style="height:40px;width:40px;position:absolute;top:60px;left:300px;">

<span id="txt4"><span id="txt5">Type of property</span><br><?php print $row21['p_type']; ?></span>
<span id="txt6"><span id="txt5"><?php if($row21['p_room']==1)print $row21['p_room']." Room";else print $row21['p_room']." Rooms"; ?></span>&nbsp<?php if($row21['p_bed']==0)print "No bed";elseif($row21['p_room']==1) print "with ".$row21['p_bed']." bed";elseif($row21['p_room']>1) print "with ".$row21['p_bed']." bed in each"; ?><br><?php if($row21['p_kitch'])print "With Kitchen";else print "Without Kitchen"; ?></span>
<span id="txt7"><span id="txt5">Bathroom</span><br><?php print $row2['od_wshr']; ?></span>
<span id="txt8"><span id="txt5">Area</span> <?php print $row21['p_area']; ?><br><span id="txt5">City</span> <?php print $row21['p_dist']; ?><br><span id="txt5">State</span> <?php print $row21['p_state']; ?></span>
<span id="txt9"><span id="txt5">Ammenities</span><br>
<?php

if(!$row3['ame_cbl'])
print "Cable TV, ";

if($row3['ame_intr'])
print "Internet, ";

if($row3['ame_fan'])
print "Fan, ";

if($row3['ame_ac'])
print "AC, ";

if($row3['ame_gee'])
print "Geezer, ";

if($row3['ame_frig'])
print "Refrigrator, ";

if($row3['ame_park'])
print "Parking, ";

if($row3['ame_semi'])
print "Semi-Furnished, ";


?>
</span>
<span id="txt10"><span id="txt5">Available from: </span><?php print $row6['dd'].",".$row6['mm']." ".$row6['yy']; ?></span>
<span id="txt11">Rs. <?php print $row6['price']; ?> /Month</span>

</div>

<div id="main3">
<div id="hd"><span id="txt3">Owner's Details</span></div>

<img src="images/l/usr1.jpg" style="height:70px;width:70px;position:absolute;top:65px;left:30px;">

<span id="txt12"><span id="txt45">Name<br>Age<br>Gender<br>&nbsp&nbsp&nbsp&nbsp<?php print $row21['p_am']; ?></span></span>
<span id="txt13"><?php print $row1['name']; ?><br><?php print $row1['age']; ?><br><?php print $row1['gen']; ?><br>Landlord</span>

</div>

<div id="main4">
<div id="hd"><span id="txt3">Contact Details</span></div>

<img src="images/l/ph2.jpg" style="height:40px;width:30px;position:absolute;top:60px;left:55px;">
<img src="images/l/ml2.jpg" style="height:40px;width:40px;position:absolute;top:110px;left:50px;">

<span id="txt14"><?php print $row1['user_ph']; ?><br><?php print $row1['user_ml']; ?></span>

</div>

<div id="main5">
<div id="hd"><span id="txt3">Address Details</span></div>

<img src="images/l/addr.jpg" style="height:60px;width:60px;position:absolute;top:80px;left:20px;">


<span id="txt15"><span id="txt45">Area<br>City<br>Landmark<br>Address</span></span>
<span id="txt16"><?php print $row21['p_area']; ?><br><?php print $row21['p_dist']; ?><br><?php print $row21['p_state']; ?><br><?php print $row21['p_adr']; ?></span>

</div>

<div id="main6">
<div id="hd"><span id="txt3">Location On Map</span></div>

<img src="images/l/loc2.jpg" style="height:100px;width:100px;position:absolute;top:70px;left:60px;">

<a href="location.php"><span id="txt17">Get<br>Location<br>Now</span></a>

</div>

</div>



<div id="foot" >

<span id="txt18">*Pacakage is valid for maximum 10 days</span>

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