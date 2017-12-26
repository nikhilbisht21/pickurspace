<?php
session_start();
include('engine/e.detail2.php');



if(!isset($_SESSION['process'])||!isset($_SESSION['step']))
{header('location:usrhome.php');}
else
if($_SESSION['step']==1)
{header('location:detail1.php');}
else
if($_SESSION['step']==3)
{header('location:detail3.php');}
else
if($_SESSION['step']==4)
{header('location:detail4.php');}
else
if($_SESSION['step']==5)
{header('location:upload.php');}
else
if($_SESSION['step']==99)
{header('location:verify.php');}



?>
<html>
<title>Pickurspace</title>
<?
include('prop/p.detail2.php');
?>
<head>

<meta name="ROBOTS"  content="NOINDEX,FOLLOW" >

<div id="head" >

<a href="index.php"><img src="images/4.jpg" id="logo1" ></a>
<a href="index.php"><p id="logo" >Pickurspace</p></a>

</div>


</head>
<body>

<div id="wel">Step 2:<span id="wel1"> Other Details</span></div>

<div id="main" ><div id="main1" >


<font id="txt1" >No. of beds</font>
<font id="txt2" >Hall</font>
<font id="txt3" >Bathroom/Toilet</font>
<font id="txt4" >Furnished<span id="txt42">*</span></font>
<font id="txt5" >Ammeneties</font>


<font style="font-size-adjust:0.50;font-family:Century Gothic,sans-serif;position:absolute;top:240px;left:220px;" >Cable Tv</font>
<font style="font-size-adjust:0.50;font-family:Century Gothic,sans-serif;position:absolute;top:240px;left:350px;" >Internet</font>
<font style="font-size-adjust:0.50;font-family:Century Gothic,sans-serif;position:absolute;top:290px;left:220px;" >Fan</font>
<font style="font-size-adjust:0.50;font-family:Century Gothic,sans-serif;position:absolute;top:290px;left:350px;" >Ac</font>
<font style="font-size-adjust:0.50;font-family:Century Gothic,sans-serif;position:absolute;top:340px;left:220px;" >Geezer</font>
<font style="font-size-adjust:0.50;font-family:Century Gothic,sans-serif;position:absolute;top:340px;left:350px;" >Fridge</font>
<font style="font-size-adjust:0.50;font-family:Century Gothic,sans-serif;position:absolute;top:240px;left:480px;" >Parking</font>
<font style="font-size-adjust:0.50;font-family:Century Gothic,sans-serif;position:absolute;top:290px;left:480px;" ><span id="txt42">*</span>Semi-Furnished</font>



<form method="post"
         action="" style="position:absolute;">

<select id="field1" name="bed"  >
<option value="0" >0</option> 
<option value="1" > 1</option>   
<option value="2" >2</option>
<option value="3" >3</option>
<option value="4" >4</option>
<option value="5" >5</option>
<option value="6" >6</option>   
<option value="7" >7</option>
<option value="8" >8</option>
<option value="9" >9</option>
<option value="10" >10</option>
</select>


<input type="radio" name="hall" value="1" style="position:absolute;top:90px;left:190px;"> 
<font style="font-size-adjust:0.50;font-family:Century Gothic,sans-serif;position:absolute;top:90px;left:215px;" >Yes</font>
<input type="radio" name="hall" checked="checked" value="0" style="position:absolute;top:90px;left:260px;">
<font style="font-size-adjust:0.50;font-family:Century Gothic,sans-serif;position:absolute;top:90px;left:285px;" >No</font>


<input type="radio" name="wshr" value="Attached" style="position:absolute;top:140px;left:190px;"> 
<font style="font-size-adjust:0.50;font-family:Century Gothic,sans-serif;position:absolute;top:140px;left:215px;" >Attached</font>
<input type="radio" name="wshr" checked="checked" value="Seperate" style="position:absolute;top:140px;left:300px;">
<font  style="font-size-adjust:0.50;font-family:Century Gothic,sans-serif;position:absolute;top:140px;left:320px;" >Seperate</font>

<input type="radio" name="furnshd" value="1" style="position:absolute;top:190px;left:190px;"> 
<font style="font-size-adjust:0.50;font-family:Century Gothic,sans-serif;position:absolute;top:190px;left:215px;" >Yes</font>
<input type="radio" name="furnshd" checked="checked" value="0" style="position:absolute;top:190px;left:260px;">
<font style="font-size-adjust:0.50;font-family:Century Gothic,sans-serif;position:absolute;top:190px;left:285px;" >No</font>


<input type="checkbox" name="cbltv" value="1" style="position:absolute;top:240px;left:190px;"> 
<input type="checkbox" name="internet" value="1" style="position:absolute;top:240px;left: 320px;"> 
<input type="checkbox" name="fan" value="1" style="position:absolute;top:290px;left:190px;"> 
<input type="checkbox" name="ac" value="1" style="position:absolute;top:290px;left: 320px;"> 
<input type="checkbox" name="geezer" value="1" style="position:absolute;top:340px;left:190px;"> 
<input type="checkbox" name="fridge" value="1" style="position:absolute;top:340px;left: 320px;"> 
<input type="checkbox" name="park" value="1" style="position:absolute;top:240px;left: 450px;"> 
<input type="checkbox" name="semi" value="1" style="position:absolute;top:290px;left: 450px;"> 

<input type="submit"
           name="nxt3"
           value="Next"
             id="nxt4">

</form>


</div></div>


<div id="foot">

<font id="txt41" >*Furnished includes room,sofa,bed,chair,table and other ammenities<br>*Semi-furnished includes table,chair and bed which may or may not be provided.Depends on the owner </font>

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