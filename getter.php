<?php

session_start();

include('engine/main/view2.php');

?>
<html>
<title>pickurspace</title>
<?
include('prop/p.getter.php');
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
<?php

if(isset($_COOKIE['userid']))
print<<<Here
<a href="terminate.php" ><font id="lg1" >LOG OUT</font></a>
Here;
else
print<<<Here
<a href="signin.php" ><font id="lg1" >SIGN IN</font></a>
Here;

?>

<a href="help.php"><font id="lg3" >HELP</font></a>
</div></div>

</head>
<body>

<div id="main">

<div id="main1" style="word-wrap:break-word;">

<img src="images/l/usr.jpg" id="im1" >

<font id="txt1">Name<br>Age<br>Gender</font>
<font id="txt2"><?php print $row9['name']; ?><br><?php print $row9['age']; ?><br><?php print $row9['gen']; ?></font>
<font id="txt3"><?php 


$string=$row9['user_ph'];

if(!isset($_COOKIE['userid']))
{
$string=ereg_replace('[0-9]{7}$','**********',$string);
}

echo $string;

?><br><br><?

$string=$row9['user_ml'];

if(!isset($_COOKIE['userid']))
{

$string=ereg_replace ('^[0-9a-zA-Z].*@','*******************@',$string);
}

$string=ereg_replace ('@', ' @', $string);

echo $string;




?></font>

<img src="images/l/ph.jpg" id="im2" >
<img src="images/l/ml.jpg" id="im3" >

<?php

if(!isset($_COOKIE['userid']))
{
print<<<Here
<a href="booster91.php"><font style="text-align:center;font-weight:bold;font-size-adjust:0.50;color:#E41A6A;font-family:Century Gothic,sans-serif;position:absolute;top:290px;left:60px;" >SIGN IN<br>TO VIEW DETAILS</font></a>
Here;
}


?>
</div>

<div id="main2">

<font id="txt5" >I am/We are: <br>Looking for: <br><br>Want to live in: <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Area<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;City<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State </font>
<font id="txt4" ><?php print $row1['u_am']; ?><br><?php

if($row1['u_space']==1)
print $row1['u_space']." Room ";
else 
print $row1['u_space']." Rooms ";



if($row1['u_kitch'])
print "with kitchen";
else 
print "without kitchen";

?><br><br><br><?php print $row1['u_area']; ?><br><?php print $row1['u_city']; ?><br><?php print $row1['u_state']; ?></font>

<font id="txt6" >My Budget:<br>Move in from<br>&nbsp;&nbsp;Max date:<br>&nbsp;&nbsp;Min date:</font>
<font id="txt7" >Rs. <?php print $row1['u_bdgt']; ?> /Month<br><br><?php print $row1['u_mxt']; ?><br><?php print $row1['u_mnt']; ?></font>

</div>

<div id="main3">

<font id="txt5" >No. of beds: <br>Hall: <br>Bathroom<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/Toilet: <br>Furnished</font>
<font id="txt4" ><?php 
if($row2['od_bed']==0)
print "None";
else
print $row2['od_bed']; ?><br><?php if($row2['od_hall']==0)
print "No";
else
print "Yes"; ?><br><?php print $row2['od_wshr']; ?><br><br><?php if($row2['od_furn']==0)
print "No";
else
print "Yes"; ?></font>

<font id="txt6" style="position:absolute;left:350px;">Ammenities:</font>
<font id="txt7" style="position:absolute;left:450px;"><?php 

if($row3['ame_cbl'])
{print "CableTV";
print "<br>";}
if($row3['ame_intr'])
{print "Internet,";
print "<br>";}
if($row3['ame_fan'])
{print "Fan";
print "<br>";}
if($row3['ame_ac'])
{print "AC"."\n";
print "<br>";}
if($row3['ame_gee'])
{print "Geezer";
print "<br>";}
if($row3['ame_frig'])
{print "Fridge"."\n";
print "<br>";}
if($row3['ame_park'])
{print "Parking";
print "<br>";}
if($row3['ame_semi'])
print "SemiFurnished";

?></font>
</div>

<div id="main4">

<font id="txt5" >Buddy Preference<br>&nbsp;&nbsp;Age<br>&nbsp;&nbsp;Gender<br>Pet<br>Smoker<br>Alcoholic<br>hometown<br>Occupation</font>
<font id="txt4" style="position:absolute;left:210px;"><br><?php print $row4['u_age']; ?><br><?php print $row4['u_gen']; ?><br><?php if($row4['u_pet']==0)
print "No";
else
print "Yes"; ?><br><?php if($row4['u_smok']==0)
print "No";
else
print "Yes"; ?><br><?php if($row4['u_drink']==0)
print "No";
else
print "Yes"; ?><br><?php print $row4['u_home']; ?><br><?php print $row4['u_occp']; ?></font>

<font id="txt9" style="position:absolute;left:350px;">Advert Details:</font>
<font id="txt10" style="position:absolute;left:350px;"><?php print $row4['u_advrt']; ?></font>
 


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