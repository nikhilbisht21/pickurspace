<?php
session_start();

if(!isset($_COOKIE['userid']))
header('location:signin.php');

//print $_POST['addid'];

include('engine/main/view.php');

$ln=$row1['p_lngth'];
$br=$row1['p_brdth'];
$rm=$row1['p_room'];
$kt=$row1['p_kitch'];
$pbed=$row1['p_bed'];

?>
<html>
<title>pickurspace</title>
<?

include('prop/p.view.php');
?>
<head>

<meta name="ROBOTS"  content="NOINDEX,FOLLOW" >

<div id="head" >

<a href="index.php"><img src="images/4.jpg" id="logo1" ></a>
<a href="index.php"><p id="logo" >pickurspace</p></a>
</div>


</head>
<body>


<div id="main">

<div id="add" style="">
<span id="ad1">ADD ID: <span id="ad2"><?php print $aid; ?></span ></span>
<span id="ad3">POSTED ON: <span id="ad4"><?php print $row8['u_date']; ?></span ></span>
<span id="ad5"><?php print $row8['u_time']; ?></span >
</div>

<div id="main1">

<span id="txt12">pickurspace</span>
<span id="txt1">Your Space, Your Choice</span >

</div>




<div id="main2">

<span id="txt">Owner's Details</span>

<span id="txt2">Name<br>Age<br>Gender<br>Mobile No.<br>Email</span>
<span id="txt3"><?php print $row['name']; ?><br><?php print $row['age']; ?><br><?php print $row['gen']; ?><br><?php print $row['user_ph']; ?><br><?php print $row['user_ml']; ?></span>

</div>

<div id="main3">

<span id="txt">Property Details</span>

<span id="txt4">Type of property<br><?php 
if($row1['p_type']=='Shop')
print "Dimensions";
 ?><br>I am<br>Address<br>Landmark<br>Area<br>City<br>State</span>

<span id="txt5"><?php print $row1['p_type']; ?><br><?php 

if($row1['p_type']=='Shop')
print<<<Here
<span id="txt81">Length:</span>$ln m<span id="txt81">, Breadth:</span>$br m
Here;
else
print<<<Here
$rm<span id="txt81"> Room, </span>$kt<span id="txt81"> Kitchen</span>
Here;

if($pbed)
print  " with ".$pbed." bed in each";


 ?><br><?php 
print $row1['p_am']." Landlord";
?><br><?php print $row1['p_adr']; ?><br><?php print $row1['p_mrk']; ?><br><?php print $row1['p_area']; ?><br><?php print $row1['p_dist']; ?><br><?php print $row1['p_state']; ?></span>

</div>

<div id="main4">

<span id="txt">Other Details</span>
<span id="txt6">No. of beds<br>Hall<br>Bathroom/Toilet<br>Furnished<br>Ammenities</span>
<span id="txt7"><?php 
if($row2['od_bed']==0)
print "None";
else
print $row2['od_bed']; ?><br><?php if($row2['od_hall']==0)
print "No";
else
print "Yes"; ?><br><?php print $row2['od_wshr']; ?><br><?php if($row2['od_furshd']==0)
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

<span id="txt">Occupant's Details</span>
<font id="txt8"><span id="txt81">Name</span><br><br><?php print $row4['t1_nm']; ?><br><?php print $row4['t2_nm']; ?><br><?php print $row7['t3_nm']; ?><br><?php print $row7['t4_nm']; ?></font>
<font id="txt9"><span id="txt81">Age</span><br><br><?php print $row4['t1_ag']; ?><br><?php print $row4['t2_ag']; ?><br><?php print $row7['t3_ag']; ?><br><?php print $row7['t4_ag']; ?></font>
<font id="txt10"><span id="txt81">Gender</span><br><br><?php print $row4['t1_gen']; ?><br><?php print $row4['t2_gen']; ?><br><?php print $row7['t3_gen']; ?><br><?php print $row7['t4_gen']; ?></font>
<font id="txt11"><span id="txt81">State</span><br><br><?php print $row4['t1_state']; ?><br><?php print $row4['t2_state']; ?><br><?php print $row7['t3_state']; ?><br><?php print $row7['t4_state']; ?></font>
<font id="txt13"><span id="txt81">College/Company</span><br><br><?php print $row4['t1_cmp']; ?><br><?php print $row4['t2_cmp']; ?><br><?php print $row7['t3_cmp']; ?><br><?php print $row7['t4_cmp']; ?></font>


</div>

<div id="main6">

<span id="txt">Preference Details</span>
<span id="txt14">Smoking<br>Gender<br>Couples<br>Min. Age<br>Max. Age<br>Others</span>
<span id="txt15"><?php 
if($row5['pf_smok'])
print "Yes";
else
print "No";
 ?><br><?php print $row5['pf_gen']; ?><br><?php
if($row5['pf_cop'])
print "Yes";
else
print "No"; ?><br><?php print $row5['min_ag']; ?><br><?php print $row5['mx_ag']; ?><br><?php print $row5['pf_oth']; ?></span>

</div>

<div id="main7">

<span id="txt">Period/Price Details</span>
<span id="txt14">Space available from<br>Max time to stay<br>Min time to stay<br>Price</span>
<span id="txt15"><?php print $row6['dd'].",".$row6['mm'].",".$row6['yy']; ?><br><?php print $row6['mx_t']." month"; ?><br><?php print $row6['min_t']." month"; ?><br><?php print "Rs ".$row6['price']; ?> /Month</span>

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