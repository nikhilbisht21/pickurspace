<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<?php
session_start();

//if(isset($_COOKIE['userid']))
//header('location:usrhome.php');

include('engine/index.acc.php');


?>
<html>
<title>Pickurspace</title>
<?
include('prop/p.index.php');
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script type="text/javascript" >


main=1;
nom=1;
check=0;
ref=1;
hov=1;


$(document).ready(function(){
    $("#lg1").click(function(){
$("#hid").show();
$("#sign1").show();
 
document.getElementById("bdy").setAttribute("style","overflow:hidden;");

});
});

$(document).ready(function(){
    $("#close").click(function(){
$("#hid").hide();
$("#sign1").hide();


if(main==1)
{
document.getElementById("bdy").setAttribute("style","overflow:auto;");
}
else
if(main==2)
{
document.getElementById("bdy").setAttribute("style","overflow:auto;");
}


 });
});


$(document).ready(function(){
    $("#m2bt1").click(function(){
$("#hid").show();
$("#pst").show();
 
document.getElementById("bdy").setAttribute("style","overflow:hidden;");

});
});

$(document).ready(function(){
    $("#close2").click(function(){
$("#hid").hide();
$("#pst").hide();


if(main==1)
{
//document.getElementById("bdy").setAttribute("style","overflow:hidden;");
}
else
if(main==2)
{
//document.getElementById("bdy").setAttribute("style","overflow:auto;");
}


 });
});



$(document).ready(function(){
    $("#slider").click(function(){

main=2;
//tp="-"+25+"%";
tp2=8+"%";

//$("#main1").animate({top:tp},700);
$("#main2").animate({top:tp2},700);
$("#head").fadeIn( 'slow');


document.getElementById("bdy").setAttribute("style","overflow:auto;");
//document.getElementById("head").setAttribute("style","opacity:1.0;");

 });
});


$(document).ready(function(){
    $("#slider2").click(function(){

main=1;
//tp=0+"%";
tp2=100+"%";

//$("#main1").animate({top:tp},700);
$("#main2").animate({top:tp2},700);
$("#head").fadeOut( 'slow');


document.getElementById("bdy").setAttribute("style","overflow:hidden;");
//document.getElementById("head").setAttribute("style","opacity:0;");

 });
});



function start()
{
interId=setInterval(changeimage,3000);
}

function ho1()
{hov=0;}

function ho2()
{hov=1;}

function changeimage()
{


if(nom==2)
{
check=1;
}

if(nom==0)
{
check=0;
}

lft1=25*nom;
//lft=lft1+"%";

lft2=100*nom;
lft21="-"+lft2+"%";



if(hov==1)
{
//$("#m1slide3").animate({left: lft},800);
$("#m2sl").animate({left:lft21},800);
$("#m5sl").animate({left:lft21},800);
}

if(check==0)
{++nom;}
else
if(check==1)
{--nom;}

}

function refh()
{
if(ref==1)
{
document.getElementById("bdy").setAttribute("style","overflow:hidden;");}
}

start();


//$(document).ready(function(){
//$("#slider").click(function(){
//$("#head").fadeIn( 'slow');
//});
//});

//$("#slider2").mouseleave(function(){
//$("#head").fadeOut( 'slow');
//});
//});


count=0;


function sh1()
{
++count;

if(count%2==0)
$("#menu").hide();
else
$("#menu").show();

}


function sh2()
{
$("#head").fadeIn( 'slow');
}

function sh3()
{
$("#head").fadeOut( 'slow');
}


</script>


<head>  
<meta name="description" content="Rooms,PG,Flat on rent at dehradun|pickurspace|Rooms in dehradun">

<meta name="author" content="Nikhil Singh Bisht,Yash Prakash Vaish,Kavinder Rawal @pickurspace.com">

</head>
<body id="bdy" style="overflow:auto;" onscroll="sh2();"> 



<div id="main1" onmouseover="sh3();">

<div id="frm" >

<img id="slid1" src="images/2.jpg" >
<img id="slid2" src="images/2.jpg" >
<img id="slid3" src="images/3.jpg" >
<img id="slid4" src="images/13.jpg" >


<font id="sl11">Your fresh start<br>Is waiting in your new space</font>
<?php 
print<<<Here
<button onclick="location.href='result.php'" id="sl12" >Explore Now</button>
Here;
?>

</div>

<img id="slider" src="images/l/home.up.jpg" style="cursor:pointer;"></img>


</div>



<div id="main2" >

<div id="main21" >

<div id="m1block11">
<font id="m1txt4">Rooms at Rent</font>
<font id="m1txt1">
Over  +100 rooms on rent with better facilities of your choice
</font>
<img src="images/l/rom.jpg" style="height:90px;width:90px;position:absolute;top:120px;left:60px;" >
</div>


<div id="m1block12">
<font id="m1txt5">Best Locations </font>
<font id="m1txt2">
Around 50 locations<br>We  will help you to get the best for you
</font>
<img src="images/l/loc2.jpg" style="border-radius:90px;height:90px;width:90px;position:absolute;top:120px;left:60px;" >
</div>

<div id="m1block13">
<font id="m1txt6">Instant Location</font>
<font id="m1txt3">
We'll drop you at the door<br>Get instant Whatsapp Locations
</font>

<img src="images/l/what.jpg" style="border-radius:90px;height:90px;width:90px;position:absolute;top:120px;left:60px;" >

</div>

</div>

<img id="slider2" src="images/l/home.dwn.jpg"  style="cursor:pointer;"></img>




<div id="main22" >


<div id="m2sl" onmouseover="ho1();" onmouseout="ho2();" >

<div id="m2block11">

<div id="m2main">
<div id="m2block1">

<font id="m2txt1">Post your Ad</font>
<font id="m2txt2">We are here to help you get the best for you<br>Post your ad for free and save your time in search of best deal for you. </font>

<button id="m2bt1" >POST IT NOW</button>
</div>

<img src="images/l/home.add1.jpg" id="im21">


</div></div>


<div id="m2block21">

<div id="m2main">
<div id="m2block2">

<font id="m2txt1">Let your room</font>
<font id="m2txt2">Want to let your room ?<br>We will help you to find out the best match for your property</font>
<font id="m2txt3">Post your Ad</font>
<button id="m2bt1" onclick="location.href='booster2.php'"  >TO LET ROOM</button>
</div>

<img src="images/l/home.add1.jpg" id="im22">

</div></div>


<div id="m2block31">

<div id="m2main">
<div id="m2block3">

<font id="m2txt1">Want a room</font>
<font id="m2txt2">Are you in search of a room ?<br>Ad can help you to get the room of your match</font>
<font id="m2txt3">Post your Ad</font>
<button id="m2bt3"  onclick="location.href='booster3.php'">TO GET ROOM</button>
</div>

<img src="images/l/home.add1.jpg" id="im23">
</div>

</div></div>

</div>


<div id="main23" >

<div id="m3block1">

<img style="border:1px solid #2EAFB0;height:80%;width:35%;position:absolute;top:10%;left:60%;" src="images/l/rslt2.jpg">

<div id="m3block2">

<font id="m3txt1">
No need to wait for a<br>Paying Guest
</font>

<font id="m3txt2">
Are you in search of a paying guest for your property ?<br>Now no need to wait for a paying guest<br>We are here to help you to find a perfect match for your property<br>We have introduced an easy way to help you out
<br><br><font id="m3txt3">
Ads To Get Rooms
</font>

</font>



<button id="bt42" onclick="location.href='result2.php'" >EXPLORE NOW</button>

</div>

</div></div>










<div id="main24" >


<div id="m4block2">

<img src="images/ocal.jpg" style="height:100%;width:400px;position:absolute;" >



<div id="m4block3" >

<font id="m4txt7">
Our first preference is<br>Your Time
</font>

<font id="m4txt8">
We knows the value of your time and money<br>We have created an easy way to help you to get the space of your choice<br>Hence we introduce<br><br><br>For the people who want to get a space
</font>

<font id="m4txt9">
OCAL Package
</font>

</div>


<div id="m4block1">

<p id="m4txt1"><span id="enlight">O</span>wner's Details</p>
<p id="m4txt2"><span id="enlight">C</span>ontact Details</p>
<p id="m4txt3"><span id="enlight">A</span>ddress Details</p>
<p id="m4txt4"><span id="enlight">L</span>ocation On Map</p>
<p id="m4txt6">PACKAGE</p>

</div>


</div></div>



<div id="main25" onmouseover="ho1();" onmouseout="ho2();" >

<div id="m5sl">

<div id="m51">
<div id="m51block1" >

<font id="m51txt1">
Be a part of us<br>Enjoy our best services
</font>

<font id="m51txt2">
We assure to provide you with our best services<br>Help us to serve you more by being a part of our Family<br>With <3<br>From pickurspace
</font>

</div>

<div id="m51block2">

<font id="m51txt5">Get our</font>

<font id="m51txt3"><span id="enlight251">Free</span>
<br>membership 
</font>

<font id="m51txt4"><span id="enlight351">PREMIUM</span>
<br>membership 
</font>

</div></div>


<div id="m52">
<div id="m52block1" >

<ul id="m52txt2">
<li>FREE MEMBERSHIP is given to every account</li>
<li>Your privacy is our responsiblity</li>
<li>Get our Whatsapp location facility</li>
<li>We are Spam free</li>
<li>Free guide to help you</li>
</ul>

<font id="m52txt1" >Get all these facilities</font>

</div>

<div id="m52block2">

<img src="images/l/fre.jpg" style="border-radius:100px;height:100px;width:100px;position:absolute;top:0px;left:px;" >
<font id="m52txt3"><span id="enlight252">Free</span>
<br>membership 
</font>

</div></div>


<div id="m53">
<div id="m53block1" >

<font id="m53txt1">
Be a Premium Member
</font>

<ul id="m53txt2">
<li>Stand out feature</li>
<li>See your viewer's</li>
<li>Contact your viewer's</li>
<li>Help at doorsteps</li>
<li>Including all facilities of Free Membership</li>
</ul>

</div>

<div id="m53block2">

<img src="images/l/premium.jpg" style="border-radius:100px;height:100px;width:100px;position:absolute;top:0px;left:35px;" >
<font id="m53txt3"><span id="enlight253">PREMIUM</span>
<br>membership 
</font>

</div></div>

</div></div>




<div id="foot" >

<div id="fot3" >

<a href="result.php" ><font id="ft101" >Ads to let room</font></a>
<a href="result2.php" ><font id="ft111" >Ads to get room</font></a>
<a href="booster6.php" ><font id="ft12" >Post Ad to let</font></a>
<a href="booster2.php" ><font id="ft13" >Post Ad to get</font></a>

<a href="usrhome.php" ><font id="ft1" >User Home</font></a>
<a href="usrprofile.php" ><font id="ft2" >User Pofile</font></a>
<a href="signin.php" ><font id="ft3" >Sign In</font></a>
<a href="booster1.php" ><font id="ft4" >Sign Up</font></a>

<a href="feedback.php" ><font id="ft5" >Feedback</font></a>
<a href="tandc.php" ><font id="ft6" >Terms And Conditions</font></a>
<a href="aboutus.php" ><font id="ft7" >About Us</font></a>
<a href="contactus.php" ><font id="ft8" >Contact Us</font></a>

</div>



<div id="fot2" >

<a href="alphis.php" ><font id="ft9" >Like Us On</font></a>

<a href="http://www.facebook.com/pickurspace" ><img id="im1" src="images/l/fb.jpg" ></a>
<a href="www.twitter.com/pickurspace" ><img id="im2" src="images/l/twt.jpg" ></a>
<a href="www.linkeden.com/pickurspace" ><img id="im3" src="images/l/gp.jpg" ></a>

</div>



<div id="fot1" >


<img src="images/l/fre100.jpg" style="border-radius:120px;height:120px;width:120px;position:absolute;top:-30px;left:150px;" >

<?php //<a href="http://www.payumoney.com" ><img id="im4" src="images/l/payu.jpg" ></a> ?>

<font id="ft10" >100% Brokerage Free Service</font>
<a href="http://www.pickurspace.com" ><font id="ft11" >(www.pickurspace.com)</font></a>

</div>

</div>

<div id="foot1" >
<font id="cpyr">Copyright: pickurspace © 2016-<? print date("Y"); ?></font>
</div>




<div id="menu">


<span id="disp" class="cl1" ><font id="disp1" ><?php print $_COOKIE['nm']; ?></font></span>

<a href="usrhome.php">
<span id="hm" class="cl1" ><font id="hm1" >Home</font></span></a>

<a href="usrprofile.php">
<span id="prof" class="cl1"  ><font id="prof1">Profile</font></span></a>

<a href="usradds.php">
<span id="adds"  class="cl1" ><font id="adds1" >Ads</font></span></a>

<a href="usrbook.php">
<span id="book" class="cl1" ><font id="book1"  >Cart</font></span></a>

<a href="usrhistory.php">
<span id="his"  class="cl1" ><font id="his1" >Notification</font></span></a>

<a href="upgrade.php">
<span id="memb"  class="cl1" ><font id="memb1" >Upgrade</font></span></a>



</div>

<div id="head" >
</div>

<div id="head1" >

<img src="images/4.jpg" id="logo1" >
<p id="logo" style="cursor:pointer;">pickurspace</p>

<div id="lg">

<?php


if(isset($_COOKIE['userid']))
print<<<Here
<img src="images/l/usr.jpg" id="lg11" onclick="sh1();" >
<a href="terminate.php"><font id="lg2" >LOG OUT</font></a>
Here;
else
print<<<Here
<a style="cursor:pointer" ><font id="lg1" >SIGN IN</font></a>
<a href="booster1.php"><font id="lg2" >SIGN UP</font></a>
Here;
?>





</div>

</div>


<div id="hid" <?php 
if(!empty($err1))
print<<<Here
style="display:block;"
Here;
else
print<<<Here
style="display:none;"
Here;
?>>
</div>

<div id="sign1" <?php 
if(!empty($err1))
print<<<Here
style="display:block;"
Here;
else
print<<<Here
style="display:none;"
Here;
?>
>

<button id="close" >X</button>


<p id="sg5"><span id="sg51" >Pickurspace</span><br>At Your Service</p>

<div style="text-align:center;height:50px;width:200px;position:absolute;top:105px;left:105px;">
<font style="text-align:center;color:#E41A6A;font-size:12px;font-family:Century Gothic,sans-serif;" ><? print $err1; ?></font>
</div>

<font id="sg1">USERNAME</font>
<font id="sg2">PASSWORD</font>
<font id="sg9">Need an account </font>
<a href="booster1.php" ><font id="sg10">SIGN UP NOW</font></a>
<font id="sg3">Forgot your password </font>
<a href="forget.php" ><font id="sg4">RESET NOW</font></a>

<form name="signin" method="post" action="">

<input type="text"
              name="usrname"
              value="<?php print $usrname; ?>"
id="fl1" >

<input type="password"
              name="usrpas"
              value="<?php print $usrpas; ?>"
id="fl2" >

<input type="submit"
              name="login"
              value="SIGN IN"
id="fl3" >


</form>

</div>

<div id="pst" >

<p id="psttxt2"><span id="psttxt3" >Pickurspace</span><br>At Your Service</p>

<button id="close2" >X</button>

<p id="psttxt1">Post your Ad</p>

<button id="let" onclick="location.href='booster2.php'" >TO LET A ROOM</button>
<button id="get" onclick="location.href='booster3.php'" >TO GET A ROOM</button>


</div>


</body>
</html>