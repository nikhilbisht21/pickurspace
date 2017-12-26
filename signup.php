<?php
session_start();

include('engine/e.signup.m.php');


?>
<html>
<title>pickurspace</title>
<?
include('prop/p.signup.php');
?>

<head>


<div id="head" >

<a href="index.php"><img src="images/4.jpg" id="logo1" ></a>
<a href="index.php"><p id="logo" >pickurspace</p></a>

</div>

</head>

<body>

<div id="wel">Signup to <span id="wel1" >pickurspace</span></div>

<div id="main"  ><div id="main1"  >

<p id="txt1"  color="black" face="corbel" >Name</p>
<p id="txt2"  color="black" face="corbel" >Age</p>
<p id="txt3"  color="black" face="corbel" >Gender</p>
<p id="txt4"  color="black" face="corbel" >Username</p>
<p id="txt5"  color="black" face="corbel" >Email</p>
<p id="txt6"  color="black" face="corbel" >Mobile No.</p>
<p id="txt7"   face="corbel" color="black" >Password</p>
<p id="txt8"  face="corbel" color="black" >Re-Enter Password</p>
<p id="txt9"  face="corbel" color="black"  >I have read and accept all</p>
<a  href="temp.php"><p  id="txt10" >Terms And Conditions</p></a>


<p id="err1" style="color:#E41A6A;font-size:12px;font-family:Century Gothic,sans-serif;position:absolute;top:40px;left:380px;" ><? print $err1; ?></p>
<p id="err2" style="color:#E41A6A;font-size:12px;font-family:Century Gothic,sans-serif;position:absolute;top:90px;left:380px;"><? print $err2; ?></p>
<p id="err3" style="color:#E41A6A;font-size:12px;font-family:Century Gothic,sans-serif;position:absolute;top:140px;left:380px;"><? print $err3; ?></p>
<p id="err1" style="color:#E41A6A;font-size:12px;font-family:Century Gothic,sans-serif;position:absolute;top:190px;left:380px;" ><? print $err4; ?></p>
<p id="err2" style="color:#E41A6A;font-size:12px;font-family:Century Gothic,sans-serif;position:absolute;top:240px;left:380px;"><? print $err5; ?></p>
<p id="err3" style="color:#E41A6A;font-size:12px;font-family:Century Gothic,sans-serif;position:absolute;top:290px;left:380px;"><? print $err6; ?></p>
<p id="err2" style="color:#E41A6A;font-size:12px;font-family:Century Gothic,sans-serif;position:absolute;top:340px;left:380px;"><? print $err7; ?></p>


<font id="dyer"style="font-size:12px;font-family:Century Gothic,sans-serif;position:absolute;top:305px;left:670px;"></font>


<script language="javascript" type="text/javascript" >

*/
function check_v()
{
pass_buf=document.getElementById("field2").value;
pass_lvl=0;

if(pass_buf.match(/[a-z]/g))
{
++pass_lvl;
}

if(pass_buf.match(/[a-z]/g))
{
++pass_lvl;
}

if(pass_buf.match(/[A-Z]/g))
{
++pass_lvl;
}

if(pass_buf.match(/[0-9]/g))
{
++pass_lvl;
}

if(pass_buf.lenght<5)
{
if(pass_buf.lenght>=1)
--pass_lvl;
}
else
if(pass_buf.lenght>=7)
{
++pass_lvl;
}

output_val='';

switch(pass_lvl)
{
case 1: output_val='Weak';break;
case 2: output_val='Normal';break;
case 3: output_val='Strong';break;
case 4: output_val='VeryStrong';break;
default: output_val='VeryWeak';break;
}

img="images/l/pas"+pass_lvl+".jpg";

document.getElementById("pi").setAttribute("src",img);
document.getElementById("dyer").innerHTML=output_val;

}
/*

</script>


<form method="post"
         action="" style="position:absolute;">

<input id="field1"
           type="text"
           name="name"
           value="<? print $name; ?>" >

<input id="field2"
           type="text"
           name="age"
           value="<? print $age; ?>" >

<select id="field12" name="gen" >
<option>     </option>
<option value="Male" >Male</option>
<option value="Female" >Female</option>
</select>

<input id="field3"
           type="text"
           name="usrnme"
           value="<? print $usrnme; ?>" >

<input id="field4"
           type="text"
           name="email"
           value="<? print $email; ?>" placeholder="@mail.com">

<input id="field5"
           type="text"
           name="mno"
           value="+91"
>

<input  id="field6"  onkeypress="check_v()" 
           type="password"
           name="pass1"
           value="" >
            
<input  id="field7"
           type="password"
           name="pass2"
           value="" >
            
<input  id="field8" onmousedown="a1();" type="checkbox" name="accpt" value="done" >

<input type="submit"
           name="signup"
           value="Sign Up"
             id="sb"  >

</form>

<div id="hid" class="sb"  style=" display:block;">
</div>

<font id="sg9">Already have an account</font>
<a href="signin.php"><font id="sg10">SIGN IN NOW</font></a>


<script type="text/javascript" >

trig=0;

function a1()
{

if(trig==0)
{
document.getElementById("hid").setAttribute("style","display:none;");
}

if(trig==1)
{
document.getElementById("hid").setAttribute("style","display:block;");
}



++trig;

if(trig==2)
{trig=0;}

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