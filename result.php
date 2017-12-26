<?php

include('engine/main/result.php');

?>
<html>
<title>pickurspace</title>
<?
include('prop/p.result.php');
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script> 

count=0;


function sh1()
{
++count;

if(count%2==0)
$("#menu").hide();
else
$("#menu").show();

}


</script> 
<head>

</head>
<body>



<div id="opt" >


<font id="txt4">SORT BY</font>
<font id="txt5">Kitchen<br><br><br>Bathroom<br><br><br>Bed<br><br><br><br>Ammenities<br><br><br><br><br><br><br><br>Rent</font>



<form method="get" >

<select name="kitch" value="" style="height:25px;width:140px;position:absolute;top:105px;left:20px;">
<option value="" ></option> 
<option value="0" >Without Kitchen</option>
<option value="1" >With Kitchen</option>   
</select>

<select name="bath" value="" style="height:25px;width:140px;position:absolute;top:165px;left:20px;">
<option value="" ></option>   
<option value="Seperate" >Seperate</option>
<option value="Attached" >Attached</option>   
</select>

<select name="bed" value="" style="height:25px;width:140px;position:absolute;top:225px;left:20px;">
<option value="" ></option>  
<option value="0" >None</option>   
<option value="1" >1</option>
<option value="2" >2</option>
<option value="3" >3</option>
<option value="4" >4</option>
<option value="5" >5</option>
</select>

<div style="height:130px;width:180px;position:absolute;top:290px;left:0px;">

<font id="txt01">CableTV<br><br>Internet<br><br>Fan<br><br>AC</font>
<font id="txt02">Fridge<br><br>Geezer<br><br>Parking<br><br>Furnished</font>

<input type="checkbox" value="1" style="position:absolute;top:7px;left:12px;">
<input type="checkbox" value="1" style="position:absolute;top:37px;left:12px;">
<input type="checkbox" value="1" style="position:absolute;top:67px;left:12px;">
<input type="checkbox" value="1" style="position:absolute;top:97px;left:12px;">

<input type="checkbox" value="1" style="position:absolute;top:7px;left:105px;">
<input type="checkbox" value="1" style="position:absolute;top:37px;left:105px;">
<input type="checkbox" value="1" style="position:absolute;top:67px;left:105px;">
<input name="furn" type="checkbox" value="1" style="position:absolute;top:97px;left:105px;">


</div>

<select name="price" value="" style="height:25px;width:140px;position:absolute;top:445px;left:20px;">
<option value="">Rs. /Month</option> 
<option value="">--------------------------------</option> 
<option value="1000">Above 1000 .Rs</option> 
<option value="1500">1000-2000 .Rs</option> 
<option value="2500">2000-3000 .Rs</option> 
<option value="3500">3000-4000 .Rs</option> 
<option value="4500">4000-5000 .Rs</option> 
<option value="5000">Above 5000 .Rs</option> 
<option value="">--------------------------------</option> 
</select>




<input id="sort" type="submit" name="sort" value="SORT" style="">
</form>

</div>

<?php 


$t=220;
$intr=0;

if($check==0)
{
print<<<Here
<div id="main" >

<font id="txt6" >Sorry No Results Found</font>

<img src="images/l/usr.jpg" id="im6" >

</div>
Here;
}
else
if($check!=0)
{
for($i=0;$i<$check;++$i)
{
$tp=$t."px";
++$intr;

$cover="upload/".$adid[$i]."bedr1.jpg";

if(!file_exists
($cover))
$cover="images/l/noimg.jpg";


print<<<Here
<div style="height:200px;width:830px;border:3px solid #2EAFB0;border-radius:2px;background:;position:absolute;top:$tp;left:23%;" >
<img src="$cover" style="height:190px;width:280px;position:absolute;top:5px;left:5px;">


<div  style="height:155px;width:255px;;border-radius:3px;background:;position:absolute;top:10px;left:300px;" >


<div style="background:;height:75px;width:125px;position:absolute;top:0px;left:0px;">
<font id="txt1"><span id="txt2">Type of property </span><br>$prop[$i]</font>
<img src="images/l/prop.jpg" style="height:40px;width:40px;position:absolute;top:55px;left:40px;">
</div>
<div style="background:;height:75px;width:125px;position:absolute;top:0px;left:130px;">
<font id="txt1"><span id="txt2">$room[$i]</span> <br>$kitch[$i]<br><br><br><br>$pbed[$i]</font>
<img src="images/l/rom.jpg" style="height:40px;width:40px;position:absolute;top:55px;left:40px;">
</div>
<div style="background:;height:75px;width:125px;position:absolute;top:95px;left:0px;">
<font id="txt7"><span id="txt8">Bathroom</span><br>$wsh[$i]</font>
<img src="images/l/bat.jpg" style="height:40px;width:40px;position:absolute;top:45px;left:45px;">
</div>
<div style="background:;height:75px;width:125px;position:absolute;top:95px;left:130px;">
<font id="txt71"><br><span id="txt8"></span>$furn[$i]<br>$ame1[$i]<br>$ame2[$i]</font>
</div>


</div>

<div  style="height:50px;width:230px;background:;border-radius:3px;position:absolute;top:30px;left:570px;" >

<img src="images/l/loc.jpg" style="height:50px;width:50px;border-radius:50px;position:absolute;top:10px;left:5px;">

<font id="txt11"><span id="txt12">Area</span><br>$area[$i]</font>
<font id="txt13"><span id="txt14">City</span><br>$city[$i]</font>

</div>

<div  style="height:50px;width:230px;background:#2EAFB0;border-radius:3px;position:absolute;top:85px;left:570px;" >

<font id="txt15"><span id="txt16">Rs.</span>$price[$i] /Month</font>

</div>


<div  style="background:height:50px;width:230px;border-radius:3px;position:absolute;top:140px;left:570px;" >

<form method="post" action="rooms1.php" >
<input type="hidden" name="id" value="$adid[$i]">
<input id="gb" type="submit" name="g_sb" value="KNOW MORE">
</form>

<span id="gen" >$gen[$i]</span>

</div>

</div>
</div>
Here;

$t=$t+230;
}

//if($i>10)
//print<<<Here
//<div  style="height:60px;width:470px;position:absolute;top:$t;left:450px;" >
//<img src="images/l/pre.jpg" style="height:40px;width:40px;border-radius:40px;position:absolute;top:10px;left:5%;">
//<img src="images/l/nxt.jpg" style="height:40px;width:40px;border-radius:40px;position:absolute;top:10px;right:5%;">
//</div>
//Here;

}

?>



<?php

if($intr<2)
{$t2=0;}
else
if($intr>=2)
{$t2=70-($intr*36);}

$tp2=$t2."%";


print<<<Here
<div id="foot" style="position:absolute;left:0%;bottom:$tp2;">

<div id="fot" >
<a href="index.php"><span id="ft1" >Home</span></a>
<a href="tandc.php"><span id="ft2" >Terms and Conditions</span></a>
<a href="feedback.php"><span id="ft3" >Feedback</span></a>
<a href="contactus.php"><span id="ft4" >Contact Us</span></a>
<a href="aboutus.php"><span id="ft5" >About Us</span></a>
</div>

</div>
Here;

?>

<div id="wel3">
<div id="wel">



<img src="images/l/rom.jpg" style="height:40px;width:40px;position:absolute;top:50px;left:120px;">
<img src="images/l/bed.jpg" style="height:40px;width:40px;position:absolute;top:50px;left:240px;">
<img src="images/l/prop.jpg" style="height:40px;width:40px;position:absolute;top:50px;left:365px;">
<img src="images/l/are.jpg" style="height:40px;width:40px;position:absolute;top:50px;left:490px;">
<img src="images/l/loc.jpg" style="height:40px;width:40px;position:absolute;top:50px;left:615px;">



<form method="get" action="">

<select name="room" id="field1" >
<option value="" >Rooms</option> 
<option value="1" > 1 Room</option>   
<option value="2" >2 Rooms</option>
<option value="3" >3 Rooms</option>
<option value="4" >4 Rooms</option>
<option value="5" >5 Rooms</option>
<option value="6" >6 Room</option>   
<option value="7" >7 Rooms</option>
<option value="8" >8 Rooms</option>
<option value="9" >9 Rooms</option>
<option value="10">10 Rooms</option>
</select>


<select name="pbed" id="field6" >
<option value="" >Bed</option> 
<option value="0" >No bed</option>   
<option value="1" >1 Bed in each</option>
<option value="2" >2 Bed in each</option>
<option value="3" >3 Bed in each</option>
<option value="4" >4 Bed in each</option>
<option value="5" >5 Bed in each</option>   
<option value="6" >6 Bed in each</option>
<option value="7" >7 Bed in each</option>
<option value="8" >8 Bed in each</option>
<option value="9" >9 Bed in each</option>
<option value="10" >10 Bed in each</option>
</select>

<select name="prop" id="field3" >
<option  value="" >Property type</option>   
<option  value="Room">Room</option>   
<option value="Flat">Flat</option>
<option value="House" >House</option>
</select>

<select name="area" id="field4" >
<option  value="" >Area</option>   
<?php
for($i=0;$i<$l3;++$i)
{
print<<<Here
<option value="$are[$i]">$are[$i]</option> 
Here;
}
?>
</select>

<select name="city" id="field5" >
<option  value="" >City</option>   
<?php
for($i=0;$i<$l4;++$i)
{
print<<<Here
<option  value="$cit[$i]" >$cit[$i]</option> 
Here;
}
?>
</select>

<input type="submit" name="search" id="srch" value="Search" ></form>

</div>

<div style="background:white;height:10px;width:100%;position:absolute;left:0px;bottom:0px;" ></div>

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

<a href="index.php"><img src="images/4.jpg" id="logo1" ></a>
<a href="index.php"><p id="logo" >pickurspace</p></a>

<div id="lg">

<?php

/*
if(isset($_COOKIE['userid']))
print<<<Here
<img src="images/l/usr.jpg" id="lg1" onclick="sh1();" >
<a href="terminate.php"><font id="lg3" >LOGOUT</font></a>
Here;
else
print<<<Here
<a href="signin.php" ><font id="lg2" >SIGN IN</font></a>
<a href="booster1.php"><font id="lg3" >SIGN UP</font></a>
Here;
*/
?>



</div></div>

</body>
</html>