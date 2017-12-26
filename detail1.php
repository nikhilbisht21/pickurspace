<?php
session_start();
include('engine/e.detail1.php');


if(!isset($_SESSION['process'])||!isset($_SESSION['step']))
{header('location:usrhome.php');}
else
if($_SESSION['step']==2)
{header('location:detail2.php');}
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
<title>pickursapce</title>
<?

include('prop/p.detail1.php');
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

<div id="wel">Step 1:<span id="wel1">  Property Details</span></div>

<div id="main" ><div id="main1" >


<p style="color:#E41A6A;font-size-adjust:0.40;font-family:Century Gothic,sans-serif;position:absolute;top:30px;left:600px;" ><? print $err1; ?></p>
<p style="color:#E41A6A;font-size-adjust:0.40;font-family:Century Gothic,sans-serif;position:absolute;top:80px;left:600px;"><? print $err2; ?></p>
<p style="color:#E41A6A;font-size-adjust:0.40;font-family:Century Gothic,sans-serif;position:absolute;top:180px;left:600px;"><? print $err3; ?></p>
<p  style="color:#E41A6A;font-size-adjust:0.40;font-family:Century Gothic,sans-serif;position:absolute;top:280px;left:600px;" ><? print $err4; ?></p>
<p  style="color:#E41A6A;font-size-adjust:0.40;font-family:Century Gothic,sans-serif;position:absolute;top:330px;left:600px;"><? print $err5; ?></p>
<p  style="color:#E41A6A;font-size-adjust:0.40;font-family:Century Gothic,sans-serif;position:absolute;top:380px;left:600px;"><? print $err6; ?></p>
<p  style="color:#E41A6A;font-size-adjust:0.40;font-family:Century Gothic,sans-serif;position:absolute;top:430px;left:600px;"><? print $err7; ?></p>

<font id="txt1" >Type of property</font>
<font id="txt2">I have</font>
<font id="txt3">I am</font>
<font id="txt4" >Address</font>
<font id="txt5" >Landmark</font>
<font id="txt6">Area</font>
<font id="txt7">City</font>
<font id="txt11">State</font>
<font id="txt8" >Live In Landlord<span id="txt9">(I own property and live there)</span></font>
<font id="txt10" >Live Out Landlord<span id="txt9">(I own property and but don't live there)</span></font>
         

<form method="post"
         action="" style="position:absolute;">


<p  style="font-size-adjust:0.50;font-family:Century Gothic,sans-serif;position:absolute;top:80px;left:250px;" >Room</p>
<select id="field1" name="room"  >
<option value="1" > 1</option>   
<option value="2" >2</option>
<option value="3" >3</option>
<option value="4" >4</option>
<option value="5" >5</option>
<option value="6" > 6</option>   
<option value="7" >7</option>
<option value="8" >8</option>
<option value="9" >9</option>
<option value="10" >10</option>
</select>

<p style="font-size-adjust:0.50;font-family:Century Gothic,sans-serif;position:absolute;top:80px;left:460px;" >Kitchen</p>
<select id="field2" name="kitch"  >
<option value="0" >Without Kitchen</option> 
<option value="1" >With Kitchen</option>   
</select>

<p style="font-size-adjust:0.50;font-family:Century Gothic,sans-serif;position:absolute;top:80px;left:520px;" >with</p>
<select name="bed" style="padding-left:5px;font-size-adjust:0.50;font-family:Century Gothic,sans-serif;border-radius:2px;height:30px;width:120px;position:absolute;top:90px;left:555px;" >
<option value="0" >No Beds</option>   
<option value="1" >1 bed in each</option> 
<option value="2" >2 bed in each</option>
<option value="3" >3 bed in each</option>
<option value="4" >4 bed in each</option>
<option value="5" >5 bed in each</option>
<option value="6" >6 bed in each</option>
<option value="7" >7 bed in each</option>
<option value="8" >8 bed in each</option>
<option value="9" >9 bed in each</option>
<option value="10" >10 bed in each</option>  
</select>


<select id="field3" name="type" >
<option value="" >         </option> 
<option value="Room">Room</option>   
<option  value="Flat" >Flat</option>
<option value="House" >House</option>
</select>


<div id="sh" style="display:none;">

<font style="font-weight:bold;font-size-adjust:0.50;font-family:Century Gothic,sans-serif;position:absolute;top:0px;left:10px;" >Dimensions</font>

<font style="font-size-adjust:0.50;font-family:Century Gothic,sans-serif;position:absolute;top:5px;left:250px;" >Length</font>
<font style="font-size-adjust:0.50;font-family:Century Gothic,sans-serif;position:absolute;top:5px;left:370px;" >Breadth</font>

<input id="field11" type="text"
           name="lngth"
           value="<? print $lngth; ?>"
placeholder="in m">

<input id="field12" type="text"
           name="brdth"
           value="<? print $brdth; ?>"
placeholder="in m">


</div>


<input id="field4" type="radio" name="oam" checked="checked" value="Live in" > 
<input id="field5" type="radio" name="oam" value="Live out">

<textarea id="field6" rows="3" cols="50" name="propadd" wrap="hard" placeholder="Enter address here" >
</textarea>

<input id="field7" type="text"
           name="propmrk"
            value="<? print $propmrk; ?>">

<input id="field8" type="text"
           name="proparea"
           value="<? print $proparea; ?>">

<input id="field9" type="text"
           name="propdist"
           value="<? print $propdist; ?>">

<input id="field10" type="text"
           name="propstate"
           value="<? print $propstate; ?>">


<input type="submit"
           name="nxt2"
           value="Next"
             id="nxt1" >


</form>

<script> 
function check()
{
document.getElementById("sh").setAttribute("style","display:block;");
}

function check2()
{
document.getElementById("sh").setAttribute("style","display:none;");
}
</script> 

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