<?php
session_start();
include('engine/e.detail33.php');

if(!isset($_SESSION['process'])||!isset($_SESSION['step']))
{header('location:usrhome.php');}
else
if($_SESSION['step']==11)
{header('location:detail11.php');}
else
if($_SESSION['step']==22)
{header('location:detail22.php');}
else
if($_SESSION['step']==99)


?>
<html>
<title>pickurspace</title>
<?
include('prop/p.detail33.php');

?>
<head>

<div id="head" >

<meta name="ROBOTS"  content="NOINDEX,FOLLOW" >

<a href="index.php"><img src="images/4.jpg" id="logo1" ></a>
<a href="index.php"><p id="logo" >pickurspace</p></a>

</div>
</head>
<body>

<div id="wel">Step 3:<span id="wel1">  Preference</span></div>

<div id="main" ><div id="main1" >

<font id="txt1" >Buddy Preference</font>

<font id="txt14" >Do you have a pet</font>
<font id="txt4"  >Do you smoke</font>
<font id="txt6" >Do you drink</font>
<font id="txt7" >Hometown</font>
<font id="txt8" >Occupation</font>
<font id="txt9" >Advert Details</font>


<font id="txt10"  >Yes</font>
<font id="txt11" >No</font>

<font id="txt12"  >Yes</font>
<font id="txt13" >No</font>

<font id="txt15"  >Yes</font>
<font id="txt16" >No</font>

<p style="color:#E41A6A;font-size-adjust:0.40;font-family:Century Gothic,sans-serif;position:absolute;top:30px;left:450px;" ><? print $err1; ?></p>
<p style="color:#E41A6A;font-size-adjust:0.40;font-family:Century Gothic,sans-serif;position:absolute;top:190px;left:450px;" ><? print $err2; ?></p>
<p style="color:#E41A6A;font-size-adjust:0.40;font-family:Century Gothic,sans-serif;position:absolute;top:230px;left:450px;" ><? print $err3; ?></p>
<p style="color:#E41A6A;font-size-adjust:0.40;font-family:Century Gothic,sans-serif;position:absolute;top:270px;left:450px;" ><? print $err4; ?></p>



<form method="post"
         action="" style="position:absolute;">

<input id="field2" type="text"
            placeholder="Age"
           name="uage"
           value="<? print $uage; ?>">
<select id="field3" name="ugen" >
<option value="" >Gen</option> 
<option value="Male" > Male</option>   
<option value="Female" >Female</option>
<option value="Female" >Both</option>
</select> 



<input id="field21" type="radio" name="upet"  value="1" >
<input id="field22" type="radio" name="upet" checked="checked" value="0"  >


<input id="field24" type="radio" name="usmok" value="1"  >
<input id="field25" type="radio" name="usmok" value="0"  checked="checked" >

<input id="field29" type="radio" name="udrink" value="1"  >
<input id="field30" type="radio" name="udrink" value="0" checked="checked"  >

<input id="field26" type="text"
           name="uhome"
           value="<? print $uhome; ?>"
                >

<input id="field27" type="text"
           name="uoccp"
           value="<? print $uoccp; ?>"
                >

<textarea id="field28" name="upref" wrap="hard" placeholder="Enter your advert details here"   value="<? print $upref; ?>" >
</textarea>

<input type="submit"
           name="nxt4"
           value="Next"
             id="nxt4" >

</form>

</div></div>

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