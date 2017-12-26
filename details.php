<?php
session_start();


$rm=$_COOKIE['room'];

if($_COOKIE['kitch'])
$kit="With Kitchen";
else
$kit="Without Kitchen";

$pbed=$_COOKIE['p_bed'];

if(!empty($_POST['sub']))
{
if($_SESSION['process']==2)
{header('location:redirect.php');}
else
if($_SESSION['process']==6)
{
header('location:redirect.2.php');}
}


?>
<html>
<title>pickursapce</title>
<?

include('prop/p.details.php');
?>
<head>


<div id="head" >

<meta name="ROBOTS"  content="NOINDEX,FOLLOW" >

<a href="index.php"><img src="images/4.jpg" id="logo1" ></a>
<a href="index.php"><p id="logo" >pickurspace</p></a>

</div>


</head>
<body>


<div id="main">

<div id="main1">

<span id="txt12">pickurspace</span>
<span id="txt1">Your Space, Your Choice</span >

</div>

<div id="main2">

<span id="txt">Owner's Details</span>

<span id="txt2">Name<br>Age<br>Gender<br>Mobile No.<br>Email</span>
<span id="txt3"><?php print $_COOKIE['name']; ?><br><?php print $_COOKIE['age']; ?><br><?php print $_COOKIE['gen']; ?><br><?php print $_COOKIE['mno']; ?><br><?php print $_COOKIE['email']; ?></span>

</div>

<div id="main3">

<span id="txt">Property Details</span>

<span id="txt4">Type of property<br><?php 
if($_SESSION['ptype']=='Shop')
print "Dimensions";

if($pbed)
print  "<br>";


 ?><br>I am<br>Address<br>Landmark<br>Area<br>City<br>State</span>

<span id="txt5"><?php print $_COOKIE['type']; ?><br><?php 

if($_SESSION['ptype']=='Shop')
print<<<Here
<span id="txt81">Length:</span>$ln <span id="txt81">, Breadth:</span>$br m
Here;
else
print<<<Here
$rm<span id="txt81"> Room, </span> $kit<span id="txt81"></span>
Here;


if($pbed)
print  " with ".$pbed." bed in each";


 ?><br><?php 
print $_SESSION['ow_am']." Landlord";
?><br><?php print $_COOKIE['p_add']; ?><br><?php print $_COOKIE['pmrk']; ?><br><?php print $_COOKIE['parea']; ?><br><?php print $_COOKIE['pdist']; ?><br><?php print $_COOKIE['pstate']; ?></span>

</div>

<div id="main4">

<span id="txt">Other Details</span>
<span id="txt6">No. of beds<br>Hall<br>Bathroom/Toilet<br>Furnished<br>Ammenities</span>
<span id="txt7"><?php 
if($_COOKIE['bed']==0)
print "None";
else
print $_COOKIE['bed']; ?><br><?php if($_COOKIE['hall']==0)
print "No";
else
print "Yes"; ?><br><?php print $_COOKIE['wshr']; ?><br><?php if($_COOKIE['furnshd']==0)
print "No";
else
print "Yes"; ?><br><?php 

if($_COOKIE['cbltv'])
print "CableTV,";


if($_COOKIE['internet'])
print "Internet,";

if($_COOKIE['fan'])
print "Fan,";

if($_COOKIE['ac'])
print "AC,"."\n";

if($_COOKIE['geezer'])
print "Geezer,";

if($_COOKIE['fridge'])
print "Fridge,"."\n";

if($_COOKIE['park'])
print "Parking,";

if($_COOKIE['semi'])
print "SemiFurnished";

?></span>

</div>

<div id="main5">

<span id="txt">Occupant's Details</span>
<font id="txt8"><span id="txt81">Name</span><br><br><?php print $_COOKIE['t1name']; ?><br><?php print $_COOKIE['t2name']; ?><br><?php print $_COOKIE['t3name']; ?><br><?php print $_COOKIE['t4name']; ?></font>
<font id="txt9"><span id="txt81">Age</span><br><br><?php print $_COOKIE['t1age']; ?><br><?php print $_COOKIE['t2age']; ?><br><?php print $_COOKIE['t3age']; ?><br><?php print $_COOKIE['t4age']; ?></font>
<font id="txt10"><span id="txt81">Gender</span><br><br><?php print $_COOKIE['t1gen']; ?><br><?php print $_COOKIE['t2gen']; ?><br><?php print $_COOKIE['t3gen']; ?><br><?php print $_COOKIE['t4gen']; ?></font>
<font id="txt11"><span id="txt81">State</span><br><br><?php print $_COOKIE['t1state']; ?><br><?php print $_COOKIE['t2state']; ?><br><?php print $_COOKIE['t3state']; ?><br><?php print $_COOKIE['t4state']; ?></font>
<font id="txt13"><span id="txt81">College/Company</span><br><br><?php print $_COOKIE['t1cmp']; ?><br><?php print $_COOKIE['t2cmp']; ?><br><?php print $_COOKIE['t3cmp']; ?><br><?php print $_COOKIE['t4cmp']; ?></font>


</div>

<div id="main6">

<span id="txt">Preference Details</span>
<span id="txt14">Smoking<br>Gender<br>Couples<br>Min. Age<br>Max. Age<br>Others</span>
<span id="txt15"><?php 
if($_COOKIE['tsmok'])
print "Yes";
else
print "No";
 ?><br><?php print $_COOKIE['tgen']; ?><br><?php 
if($_COOKIE['tcoup'])
print "Yes";
else
print "No";
?><br><?php print $_COOKIE['tagemin']; ?><br><?php print $_COOKIE['tagemx']; ?><br><?php print $_COOKIE['tpref']; ?></span>

</div>

<div id="main7">

<span id="txt">Period/Price Details</span>
<span id="txt14">Space available from<br>Max time to stay<br>Min time to stay<br>Price</span>
<span id="txt15"><?php print $_COOKIE['dd'].",".$_COOKIE['mm'].",".$_COOKIE['yy']; ?><br><?php print $_COOKIE['maxt']." month"; ?><br><?php print $_COOKIE['mint']." month"; ?><br><?php print "Rs ".$_COOKIE['price']; ?> /Month</span>

</div>

</div>


<div id="accpt">

<input onmousedown="a1();" type="checkbox" id="chck" style="position:absolute;top:50px;left:100px;">

<font id="txt18">All the information metioned above by me are genuine</font>

<form method="post">
<input type="submit" id="nxt" name="sub" value="POST MY AD" ></form>

<span id="hd" style="display:block;"></span>


</div>

<script type="text/javascript" >

trig=0;

function a1()
{

if(trig==0)
{
document.getElementById("hd").setAttribute("style","display:none;");
}

if(trig==1)
{
document.getElementById("hd").setAttribute("style","display:block;");
}



++trig;

if(trig==2)
{trig=0;}

}

</script>


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