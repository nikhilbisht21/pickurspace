<?php

session_start();
include('engine/e.detail11.php');


if(!isset($_SESSION['process'])||!isset($_SESSION['step']))
{header('location:usrhome.php');}
else
if($_SESSION['step']==22)
{header('location:detail22.php');}
else
if($_SESSION['step']==33)
{header('location:detail33.php');}
else
if($_SESSION['step']==99)
{header('location:verify.php');}


?>
<html>
<title>pickursapce</title>
<?

include('prop/p.detail11.php');
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

<div id="wel">Step 1:<span id="wel1">  Requirement Details</span></div>

<div id="main" ><div id="main1" >


<p style="color:#E41A6A;font-size-adjust:0.40;font-family:Century Gothic,sans-serif;position:absolute;top:30px;left:600px;" ><? print $err1; ?></p>
<p style="color:#E41A6A;font-size-adjust:0.40;font-family:Century Gothic,sans-serif;position:absolute;top:80px;left:600px;"><? print $err2; ?></p>
<p style="color:#E41A6A;font-size-adjust:0.40;font-family:Century Gothic,sans-serif;position:absolute;top:130px;left:600px;"><? print $err3; ?></p>
<p style="color:#E41A6A;font-size-adjust:0.40;font-family:Century Gothic,sans-serif;position:absolute;top:160px;left:600px;"><? print $err7; ?></p>
<p style="color:#E41A6A;font-size-adjust:0.40;font-family:Century Gothic,sans-serif;position:absolute;top:190px;left:600px;"><? print $err8; ?></p>
<p  style="color:#E41A6A;font-size-adjust:0.40;font-family:Century Gothic,sans-serif;position:absolute;top:230px;left:600px;" ><? print $err4; ?></p>
<p  style="color:#E41A6A;font-size-adjust:0.40;font-family:Century Gothic,sans-serif;position:absolute;top:285px;left:600px;"><? print $err5; ?></p>
<p  style="color:#E41A6A;font-size-adjust:0.40;font-family:Century Gothic,sans-serif;position:absolute;top:330px;left:600px;"><? print $err6; ?></p>


<font id="txt1" >I am/We are</font>
<font id="txt2">Looking for</font>
<font id="txt3">Want to live in</font>
<font id="txt4" >Your Budget</font>
<font id="txt5" >Move in from</font>


<p  style="font-weight:bold;font-size-adjust:0.45;font-family:Century Gothic,sans-serif;position:absolute;top:285px;left:190px;" >Max date</p>
<p  style="font-weight:bold;font-size-adjust:0.45;font-family:Century Gothic,sans-serif;position:absolute;top:325px;left:190px;" >Min date</p>


<form method="post"
         action="" style="position:absolute;">


<p  style="font-size-adjust:0.50;font-family:Century Gothic,sans-serif;position:absolute;top:80px;left:250px;" >Room</p>
<select id="field1" name="space"  >
<option value="1" >1</option> 
<option value="2" >2</option>   
<option value="3" >3</option> 
<option value="4" >4</option>  
<option value="5" >5</option> 
</select>

<p style="font-size-adjust:0.50;font-family:Century Gothic,sans-serif;position:absolute;top:80px;left:440px;" >Kitchen</p>
<select id="field2" name="gkitch"  >
<option value="0" >Without Kitchen</option> 
<option value="1" >With Kitchen</option>   
</select>


<select id="field3" name="i_am" >
<option value="Single" > Single</option>   
<option value="Couple" >Couple</option>
</select>


<p  style="font-weight:bold;font-size-adjust:0.45;font-family:Century Gothic,sans-serif;position:absolute;top:130px;left:190px;" >Area</p>
<p  style="font-weight:bold;font-size-adjust:0.45;font-family:Century Gothic,sans-serif;position:absolute;top:160px;left:190px;" >City</p>
<p  style="font-weight:bold;font-size-adjust:0.45;font-family:Century Gothic,sans-serif;position:absolute;top:190px;left:190px;" >State</p>


<input id="field7" type="text"
           name="area"
           value="<? print $area; ?>">

<input id="field8" type="text"
           name="city"
           value="<? print $city; ?>">

<input id="field9" type="text"
           name="state"
           value="<? print $state; ?>">

<input id="field10" type="text"
           name="budget"
           value="<? print $budget; ?>"
placeholder="Rs/month">

<select id="field11" name="mxdd"  >
<option value="" >dd</option> 
<?php

for($i=1;$i<=31;++$i)
{
print<<<Here
<option value="$i">$i</option> 
Here;
}

?>
</select>  
  

<select id="field12" name="mxmm"  >
<option value="" >mm</option> 
<option value="Jan" >January</option>   
<option value="February" >February</option>
<option value="March" > March</option>   
<option value="April" >April</option>
<option value="May" > May</option>   
<option value="June" >June</option>
<option value="July" > July</option>   
<option value="August" >August</option>
<option value="September" > Sepetember</option>   
<option value="October" >October</option>
<option value="November" > November</option>   
<option value="December" >December</option>
</select>  

<select id="field13" name="mxyy"  >
<option value="" >yy</option> 
<?php

$d=date("Y");

for($i=0;$i<=25;++$i)
{
$e=$d+$i;
print<<<Here
<option value="$e">$e</option> 
Here;
}

?>
</select>  

<select id="field14" name="mndd"  >
<option value="" >dd</option> 
<?php

for($i=1;$i<=31;++$i)
{
print<<<Here
<option value="$i">$i</option> 
Here;
}

?>
</select>  
  

<select id="field15" name="mnmm"  >
<option value="" >mm</option> 
<option value="Jan" >January</option>   
<option value="February" >February</option>
<option value="March" > March</option>   
<option value="April" >April</option>
<option value="May" > May</option>   
<option value="June" >June</option>
<option value="July" > July</option>   
<option value="August" >August</option>
<option value="September" > Sepetember</option>   
<option value="October" >October</option>
<option value="November" > November</option>   
<option value="December" >December</option>
</select>  

<select id="field16" name="mnyy"  >
<option value="" >yy</option> 
<?php

$d=date("Y");

for($i=0;$i<=25;++$i)
{
$e=$d+$i;
print<<<Here
<option value="$e">$e</option> 
Here;
}

?>
</select>  




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