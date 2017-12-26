<?php
session_start();
include('engine/e.detail4.php');


if(!isset($_SESSION['process'])||!isset($_SESSION['step']))
{header('location:usrhome.php');}
else
if($_SESSION['step']==1)
{header('location:detail1.php');}
else
if($_SESSION['step']==2)
{header('location:detail2.php');}
else
if($_SESSION['step']==3)
{header('location:detail3.php');}
else
if($_SESSION['step']==5)
{header('location:upload.php');}
else
if($_SESSION['step']==99)
{header('location:verify.php');}


?>
<html>
<title>pickurspace</title>
<?
include('prop/p.detail4.php');

?>
<head>

<meta name="ROBOTS"  content="NOINDEX,FOLLOW" >

<div id="head" >

<a href="index.php"><img src="images/4.jpg" id="logo1" ></a>
<a href="index.php"><p id="logo" >pickurspace</p></a>

</div>


<body>

<div id="wel">Step 4:<span id="wel1">  Period/Price Details</span></div>

<div id="main" ><div id="main1" >

<font id="txt1" >Room Available from</font>
<font id="txt2" >Max Time Period For Stay</font>
<font id="txt3">Min Time Period For Stay</font>
<font id="txt4" >Price</font>


<p style="color:#E41A6A;font-size-adjust:0.40;font-family:Century Gothic,sans-serif;position:absolute;top:30px;left:550px;" ><? print $err1; ?></p>
<p style="color:#E41A6A;font-size-adjust:0.40;font-family:Century Gothic,sans-serif;position:absolute;top:80px;left:550px;"><? print $err2; ?></p>
<p style="color:#E41A6A;font-size-adjust:0.40;font-family:Century Gothic,sans-serif;position:absolute;top:180px;left:550px;"><? print $err3; ?></p>
<p style="color:#E41A6A;font-size-adjust:0.40;font-family:Century Gothic,sans-serif;position:absolute;top:130px;left:550px;"><? print $err4; ?></p>

<form id="" method="post"
         action="" style="position:absolute;">

<select id="field1" name="dd"  >
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
  

<select id="field2" name="mm"  >
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

<select id="field3" name="yy"  >
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

<select id="field5" name="maxt"  >
<option value="" >mm</option> 
<?php

for($i=1;$i<=36;++$i)
{
print<<<Here
<option value="$i">$i</option> 
Here;
}

?>
</select> 

<select id="field6" name="mint"  >
<option value="" >mm</option> 
<?php

for($i=1;$i<=36;++$i)
{
print<<<Here
<option value="$i">$i</option> 
Here;
}

?>
</select> 

<input id="field7" type="text"
           placeholder="Rs."
           name="price"
           value="" >

<input type="submit"
           name="nxt5"
           value="Next"
             id="nxt5"   >

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