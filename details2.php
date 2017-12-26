<?php
session_start();

if(!empty($_POST['sub']))
{
if($_SESSION['process']==3)
{header('location:redirect.php');}
else
if($_SESSION['process']==5)
{
header('location:redirect.22.php');}
}



?>
<html>
<title>pickursapce</title>
<?

include('prop/p.details2.php');
?>
<head>


<div id="head" >

<meta name="ROBOTS"  content="NOINDEX,FOLLOW" >

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

<div id="main1">

<span id="txt12">pickurspace</span>
<span id="txt1">Your Space, Your Choice</span >

</div>

<div id="main2">

<span id="txt">Personal Details</span>

<span id="txt2">Name<br>Age<br>Gender<br>Mobile No.<br>Email</span>
<span id="txt3"><?php print $_COOKIE['name']; ?><br><?php print $_COOKIE['age']; ?><br><?php print $_COOKIE['gen']; ?><br><?php print $_COOKIE['mno']; ?><br><?php print $_COOKIE['email']; ?></span>

</div>

<div id="main3">

<span id="txt">Requirement Details</span>

<span id="txt4">Iam/We are<br>Looking for<br>Want to live in<br><br><br>Your Budget<br>Move in from<br><br></span>
<span id="txt5"><?php print $_COOKIE['im']; ?><br><?php print $_COOKIE['space']." Space "; 

if(!empty($_COOKIE['gkitch']))
print "with kitchen";

?><br><span id="txt81">Area: </span><?php print $_COOKIE['area']; ?><br><span id="txt81">City: </span><?php print $_COOKIE['city']; ?><br><span id="txt81">State:</span><?php print $_COOKIE['state']; ?><br><?php print "Rs. ".$_COOKIE['bdg']; ?> /Month<br><span id="txt81">Max Date: <?php print $_COOKIE['mxt']; ?></span><br><span id="txt81">Min date: </span><?php print $_COOKIE['mnt']; ?></span>

</div>

<div id="main4">

<span id="txt">Other Details</span>
<span id="txt6">No. of beds<br>Hall<br>Bathroom/Toilet<br>Furnished<br>Ammenities</span>
<span id="txt7"><?php 
if($_COOKIE['ubed']==0)
print "None";
else
print $_COOKIE['ubed']; ?><br><?php if($_COOKIE['uhall']==0)
print "No";
else
print "Yes"; ?><br><?php print $_COOKIE['uwshr']; ?><br><?php if($_COOKIE['ufurnshd']==0)
print "No";
else
print "Yes"; ?><br><?php 

if($_COOKIE['ucbltv'])
print "CableTV,";


if($_COOKIE['uinternet'])
print "Internet,";

if($_COOKIE['ufan'])
print "Fan,";

if($_COOKIE['uac'])
print "AC,"."\n";

if($_COOKIE['ugeezer'])
print "Geezer,";

if($_COOKIE['ufridge'])
print "Fridge,"."\n";

if($_COOKIE['upark'])
print "Parking,";

if($_COOKIE['usemi'])
print "SemiFurnished";

?></span>

</div>

<div id="main5">

<span id="txt">Preference Details</span>
<span id="txt4">Buddy Preference<br><br>Do you have pet<br>Do you have smoke<br>Do you have drink<br>hometown<br>Occupation<br>Advert Details</span>
<span id="txt5"><span id="txt81">Age: </span><?php print $_COOKIE['uage']; ?><br><span id="txt81">Gender: </span><?php print $_COOKIE['ugen']; ?><br><?php if($_COOKIE['upet']==0)
print "No";
else
print "Yes"; ?><br><?php if($_COOKIE['usmok']==0)
print "No";
else
print "Yes"; ?><br><?php if($_COOKIE['udrink']==0)
print "No";
else
print "Yes"; ?><br><?php print $_COOKIE['uhome']; ?><br><?php print $_COOKIE['uoccp']; ?><br><?php print $_COOKIE['upref']; ?></span>

</div>

</div>


<div id="accpt">

<input  onmousedown="a1();" type="checkbox" id="chck" style="position:absolute;top:50px;left:100px;">

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