<?php
session_start();

include('engine/e.detail3.php');


if(!isset($_SESSION['process'])||!isset($_SESSION['step']))
{header('location:usrhome.php');}
else
if($_SESSION['step']==1)
{header('location:detail1.php');}
else
if($_SESSION['step']==2)
{header('location:detail2.php');}
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
<title>pickurspace</title>
<?
include('prop/p.detail3.php');

?>
<head>

<meta name="ROBOTS"  content="NOINDEX,FOLLOW" >

<div id="head" >

<a href="index.php"><img src="images/4.jpg" id="logo1" ></a>
<a href="index.php"><p id="logo" >pickurspace</p></a>

</div>
</head>
<body>

<div id="wel">Step 3:<span id="wel1">  Preference/Occupant's Details</span></div>

<div id="main" ><div id="main1" >

<font id="txt1" >Occupants Present</font>
<font id="txt2" >(If any)</font>
<font id="txt3" >Preference for <br>Tennant</font>

<font style="font-weight:bold;font-size:12px;font-family:Century Gothic,sans-serif;position:absolute;top:40px;left:190px;" >Occupant 1</font>
<font style="font-weight:bold;font-size:12px;font-family:Century Gothic,sans-serif;position:absolute;top:70px;left:190px;" >Occuoant 2</font>
<font style="font-weight:bold;font-size:12px;font-family:Century Gothic,sans-serif;position:absolute;top:100px;left:190px;" >Occupant 3</font>
<font style="font-weight:bold;font-size:12px;font-family:Century Gothic,sans-serif;position:absolute;top:130px;left:190px;" >Occupant 4</font>


<span style="color:#E41A6A;font-size-adjust:0.40;font-family:Century Gothic,sans-serif;position:absolute;top:40px;left:730px;"><? print $err2; ?></span>
<span style="color:#E41A6A;font-size-adjust:0.40;font-family:Century Gothic,sans-serif;position:absolute;top:70px;left:730px;"><? print $err3; ?></span>
<span  style="color:#E41A6A;font-size-adjust:0.40;font-family:Century Gothic,sans-serif;position:absolute;top:100px;left:730px;" ><? print $err4; ?></span>
<span  style="color:#E41A6A;font-size-adjust:0.40;font-family:Century Gothic,sans-serif;position:absolute;top:130px;left:730px;"><? print $err5; ?></span>


<font id="txt4"  >Smoking</font>
<font id="txt5"  >Gender</font>
<font id="txt6" >Couples</font>
<font id="txt7" >Min Age</font>
<font id="txt8" >Max Age</font>
<font id="txt9" >Others</font>


<font id="txt10">Yes</font>
<font id="txt11" >No</font>

<font id="txt12"  >Yes</font>
<font id="txt13" >No</font>


<p style="color:#E41A6A;font-size-adjust:0.40;font-family:Century Gothic,sans-serif;position:absolute;top:210px;left:450px;" ><? print $err1; ?></p>


<form method="post"
         action="" style="position:absolute;">


<input id="field1" type="text"
            placeholder="Name"
           name="t1name"
           value="">
<input id="field2" type="text"
            placeholder="Age"
           name="t1age"
           value="">
<select id="field3" name="t1gen" >
<option value="" >Gen</option> 
<option value="Male" > Male</option>   
<option value="Female" >Female</option>
</select> 
<input id="field4" type="text"
            placeholder="State"
           name="t1state"
           value="" >
<input id="field5" type="text"
            placeholder="College/Company"
           name="t1cmp"
           value="" >


<input id="field6" type="text"
            placeholder="Name"
           name="t2name"
           value="" >
<input id="field7" type="text"
            placeholder="Age"
           name="t2age"
           value="" >
<select id="field8" name="t2gen"  >
<option value="" >Gen</option> 
<option value="Male" > Male</option>   
<option value="Female" >Female</option>
</select> 
<input id="field9" type="text"
            placeholder="State"
           name="t2state"
           value="">
<input id="field10" type="text"
            placeholder="College/Company"
           name="t2cmp"
           value="">


<input id="field11" type="text"
            placeholder="Name"
           name="t3name"
           value="" >
<input id="field12" type="text"
            placeholder="Age"
           name="t3age"
           value="" >
<select id="field13" name="t3gen" >
<option value="" >Gen</option> 
<option value="Male" > Male</option>   
<option value="Female" >Female</option>
</select> 
<input id="field14" type="text"
            placeholder="State"
           name="t3state"
           value="">
<input id="field15" type="text"
            placeholder="College/Company"
           name="t3cmp"
           value="" >


<input id="field16" type="text"
            placeholder="Name"
           name="t4name"
           value="" >
<input id="field17" type="text"
            placeholder="Age"
           name="t4age"
           value="" >
<select id="field18" name="t4gen" >
<option value="" >Gen</option> 
<option value="Male" > Male</option>   
<option value="Female" >Female</option>
</select> 
<input id="field19" type="text"
            placeholder="State"
           name="t4state"
           value="" >
<input id="field20" type="text"
            placeholder="College/Company"
           name="t4cmp"
           value="" >



<input id="field21" type="radio" name="tsmok"  value="1" >
<input id="field22" type="radio" name="tsmok" checked="checked" value="0"  >

<select id="field23" name="tgen"      >
<option value="" >  </option> 
<option value="Male" > Male</option>   
<option value="Female" >Female</option>
<option value="Both" >Both</option>
</select> 


<input id="field24" type="radio" name="tcoup" value="1" checked="checked"  >
<input id="field25" type="radio" name="tcoup" value="0"  >

<input id="field26" type="text"
           name="tagemin"
           value="18"
                >

<input id="field27" type="text"
           name="tagemx"
           value="50"
                >

<textarea id="field28" name="tpref" wrap="hard" placeholder="Please Specify If Any"   >
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