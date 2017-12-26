<?php

if(!isset($_COOKIE['userid']))
{header('location:index.php');}

include('engine/usradds.php');

$pg="adds";

?>
<html>
<title>pickurspace</title>
<?
include('prop/p.usradds.php');
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<script> 


$(document).ready(function(){
    $("#let").click(function(){
        $("#gets").hide();
         $("#lets").show();



document.getElementById("let").setAttribute("class","cl");

document.getElementById("get").setAttribute("class","cl1");


    });
});


$(document).ready(function(){
    $("#get").click(function(){
        $("#lets").hide();
         $("#gets").show();

document.getElementById("get").setAttribute("class","cl");

document.getElementById("let").setAttribute("class","cl1");

    });
});




//$(document).ready(function(){
   // $("#dl1").click(function(){
//$("#hid1").show();
//$("#hid2").show();

 //});
//});


$(document).ready(function(){
    $("#close").click(function(){
$("#hid1").hide();
$("#hid2").hide();

 });
});

 
function a1(add,addty)
{
$("#hid1").show();
$("#hid2").show();

document.getElementById("ad1").setAttribute("value",add);
document.getElementById("ad12").setAttribute("value",addty);
}

function a2()
{
$("#hid3").hide();
$("#hid4").hide();

}

</script> 
<head>

<div id="head" >

<meta name="ROBOTS"  content="NOINDEX,FOLLOW" >

<a href="index.php"><img src="images/4.jpg" id="logo1" ></a>
<a href="index.php"><p id="logo" >pickurspace</p></a>

<div id="lg">
<a href="terminate.php" ><font id="lg1" >LOGOUT</font></a>
<a href="help.php"><font id="lg3" >HELP</font></a>
</div></div>

</head>
<body>

<div id="opt">

<img src="images/l/usr.jpg" id="uopt">
<div id="uopt1"><?php print $_COOKIE['nm']; ?><br><span id="uopt2"><?php
if($_COOKIE['ty']=='P')
print "Premium";
else
print "Free";

 ?></span></div>

<a href="usrhome.php">
<span id="hm" class="<? 
if($pg=='home')
print "cl";
else
print "cl1";
?>" ><font id="hm1" >Home</font></span></a>

<a href="usrprofile.php">
<span id="prof" class="<? 
if($pg=='profile')
print "cl";
else
print "cl1";
?>"  ><font id="prof1">Profile</font></span></a>

<a href="usradds.php">
<span id="adds"  class="<? 
if($pg=='adds')
print "cl";
else
print "cl1";
?>" ><font id="adds1" >Ads</font></span></a>

<span id="let" class="cl" ><font id="let1" >Let Space</font></span>

<span id="get" class="cl1" ><font id="get1" >Get Space</font></span>


<a href="usrbook.php">
<span id="book" class="<? 
if($pg=='book')
print "cl";
else
print "cl1";
?>" ><font id="book1"  >Cart</font></span></a>

<a href="usrhistory.php">
<span id="his"  class="<? 
if($pg=='history')
print "cl";
else
print "cl1";
?>" ><font id="his1" >Notification</font></span></a>

<a href="upgrade.php">
<span id="memb"  class="<? 
if($pg=='upgrade')
print "cl";
else
print "cl1";
?>" ><font id="prof1" >Upgrade</font></span></a>

</div>


<div id="lets">

<div id="wel"><span id="wel1">
To Let Your Space</span></div>

<?php


if($adds==1)
print<<<Here
<font id="msg" >Sorry<br>Yoy haven't posted any Add<br><br>Want To Post Your Add For Free</font>
<button id="adpost" onclick="location.href='booster6.php'">Post Your Add Now</button>
Here;
else
{
$t=80;

for($i=0;$i<$l;++$i)
{
$tp=$t."px";

$pic="upload/".$addid[$i]."bedr1.jpg";

if(!file_exists
($pic))
{
$pic="images/l/noimg.jpg";

}

print<<<Here
<div id="ad" style="height:150px;width:800px;position:absolute;top:$tp;left:50px;">
<img id="adimg" src="$pic">

<font id="f1" ><span id="f4">Ad ID</span><br>$addid[$i]</font>
<font id="f2" ><span id="f4">Posted On</span><br>$dd[$i]</font>
<font id="f3" ><span id="f4">Time</span><br>$tt[$i]</font>

<img id="dl1" src="images/l/del.jpg"  onclick="a1($addid[$i],'add_id');" >

<form method="post" action="view.php">
<input type="hidden" name="addid" value="$addid[$i]" >
<input type="submit" id="b2" name="sub" value="VIEW DETAILS" ></form>
</div>
Here;

$t=$t+170;
}
}


?>

</div>

<div id="gets">

<div id="wel"><span id="wel1">
To Get A Space</span></div>

<?php



if($ads==1)
print<<<Here
<font id="msg" >Sorry<br>Yoy haven't posted any Add<br><br>Want To Post Your Add For Free ?</font>
<button id="adpost" onclick="location.href='booster5.php'">Post Your Add Now</button>
Here;
else
{
$t2=80;

for($i=0;$i<$l2;++$i)
{

$tp=$t2."px";

print<<<Here
<div id="ad" style="height:150px;width:800px;position:absolute;top:$tp;left:50px;">
<img id="adimg" src="images/l/usr" style="border-radius:80px;height:80px;width:80px;">

<font id="f1" ><span id="f4">Ad ID</span><br>$adid[$i]</font>
<font id="f2" ><span id="f4">Posted On</span><br>$ddd[$i]</font>
<font id="f3" ><span id="f4">Time</span><br>$ttt[$i]</font>

<img id="dl1" src="images/l/del.jpg"  onclick="a1($adid[$i],'ad_id');"  >

<form method="post" action="view2.php">
<input type="hidden" name="addid" value="$adid[$i]" >
<input type="submit" id="b2" name="sub" value="VIEW DETAILS" ></form>
</div>
Here;

$t2=$t2+120;
}


}






?>

</div>



<?php


$lock=$l;

if($t2>$t)
{$lock=$l2;
$tp=$t2;}
else
{$lock=$l;
$tp=$t;}



$tp=$tp+170;

if($lock<3)
$tp="bottom:0px";
else
$tp="top:".$tp."px";

print<<<Here
<div id="foot" style="position:absolute;$tp;left:0px;" >
Here;

?>

<div id="fot" >
<a href="index.php"><span id="ft1" >Home</span></a>
<a href="tandc.php"><span id="ft2" >Terms and Conditions</span></a>
<a href="feedback.php"><span id="ft3" >Feedback</span></a>
<a href="contactus.php"><span id="ft4" >Contact Us</span></a>
<a href="aboutus.php"><span id="ft5" >About Us</span></a>
</div>

</div>

<?php

if($_COOKIE['done']=='done')
{

setcookie('done','',time() -3600);

print<<<Here

<div id="hid4" style="display:block;"></div>
<div id="hid3" style="display:block;">


<font id="hist1" >Your Ad have been posted successfully <span id="hist2" > ON THE WALL</span></font>


<button id="hist" onclick="a2();" >CONTINUE</button>


</div>
Here;

}



?>

<div id="hid1"></div>

<div id="hid2">

<button id="close">X</button>

<font id="hist1" >Are you sure that you want to<span id="hist2" > DELETE YOUR ADD</span></font>

<form method="post" action="del.php">
<input id="ad1" type="hidden" name="addid" value="" >
<input id="ad12" type="hidden" name="addty" value="" >
<input  type="submit" id="hist"  value="YES, CONTINUE" >
</form>

</div>

</body>
</html>