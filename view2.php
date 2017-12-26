<?php
session_start();

if(!isset($_COOKIE['userid']))
header('location:signin.php');

include('engine/main/view2.php');



?>
<html>
<title>pickursapce</title>
<?

include('prop/p.view2.php');
?>
<head>

<meta name="ROBOTS"  content="NOINDEX,FOLLOW" >

<div id="head" >

<a href="index.php"><img src="images/4.jpg" id="logo1" ></a>
<a href="index.php"><p id="logo" >pickurspace</p></a>

</div>


</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script> 

//$(document).ready(function(){
  //$("#txt1").select(function(){

//$("#sh").show();


//   });
//});



function check()
{
document.getElementById("sd").setAttribute("style","display:block;");
}

</script> 

<body>


<div id="main">

<div id="add" style="">
<span id="ad1">ADD ID: <span id="ad2"><?php print $aid; ?></span ></span>
<span id="ad3">POSTED ON: <span id="ad4"><?php print $row8['u_date']; ?></span ></span>
<span id="ad5"><?php print $row8['u_time']; ?></span >
</div>

<div id="main1">

<span id="txt12">pickurspace</span>
<span id="txt1">Your Space, Your Choice </span >

</div>

<div id="main2">

<span id="txt">Personal Details</span>

<span id="txt2">Name<br>Age<br>Gender<br>Mobile No.<br>Email</span>
<span id="txt3"><?php print $row9['name']; ?><br><?php print $row9['age']; ?><br><?php print $row9['gen']; ?><br><?php print $row9['user_ph']; ?><br><?php print $row9['user_ml']; ?></span>

</div>

<div id="main3">

<span id="txt">Requirement Details</span>

<span id="txt4">Iam/We are<br>Looking for<br>Want to live in<br><br><br>Your Budget<br>Move in from<br><br></span>
<span id="txt5"><?php print $row1['u_am']; ?><br><?php print $row1['u_space']." Space "; 

if($row1['u_kitch'])
print "with kitchen";
else 
print "without kitchen";

?><br><span id="txt81">Area: </span><?php print $row1['u_area']; ?><br><span id="txt81">City: </span><?php print $row1['u_city']; ?><br><span id="txt81">State: </span><?php print $row1['u_state']; ?><br><span id="txt81">Rs. </span><?php print $row1['u_bdgt']; ?> /Month<br><span id="txt81">Max Date: </span><?php print $row1['u_mxt']; ?><br><span id="txt81">Min date: </span><?php print $row1['u_mnt']; ?></span>

</div>

<div id="main4">

<span id="txt">Other Details</span>
<span id="txt6">No. of beds<br>Hall<br>Bathroom/Toilet<br>Furnished<br>Ammenities</span>
<span id="txt7"><?php 
if($row2['od_bed']==0)
print "None";
else
print $row2['od_bed']; ?>
<br><?php if($row2['od_hall']==0)
print "No";
else
print "Yes"; ?><br><?php print $row2['od_wshr']; ?><br><?php if($row2['od_furn']==0)
print "No";
else
print "Yes"; ?><br><?php 

if($row3['ame_cbl'])
print "CableTV,";

if($row3['ame_intr'])
print "Internet,";

if($row3['ame_fan'])
print "Fan,";

if($row3['ame_ac'])
print "AC,"."\n";

if($row3['ame_gee'])
print "Geezer,";

if($row3['ame_frig'])
print "Fridge,"."\n";

if($row3['ame_park'])
print "Parking,";

if($row3['ame_semi'])
print "SemiFurnished";

?></span>

</div>

<div id="main5">

<span id="txt">Preference Details</span>
<span id="txt4">Buddy Preference<br><br>Do you have pet<br>Do you have smoke<br>Do you have drink<br>hometown<br>Occupation<br>Advert Details</span>
<span id="txt5"><span id="txt81">Age: </span><?php print $row4['u_age']; ?><br><span id="txt81">Gender: </span><?php print $row4['u_gen']; ?><br><?php if($row4['u_pet']==0)
print "No";
else
print "Yes"; ?><br><?php if($row4['u_smok']==0)
print "No";
else
print "Yes"; ?><br><?php if($row4['u_drink']==0)
print "No";
else
print "Yes"; ?><br><?php print $row4['u_home']; ?><br><?php print $row4['u_occp']; ?><br><?php print $row4['u_advrt']; ?></span>

</div>

</div>


<div id="accpt">

<button id="nxt" name="sub" onclick="location.href='usradds.php'" >BACK TO HOME</button>

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