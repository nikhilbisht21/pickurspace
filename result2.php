<?php

include('engine/main/result2.php');

?>
<html>
<title>pickurspace</title>
<?
include('prop/p.result2.php');
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<script> 

</script> 
<head>

<meta name="ROBOTS"  content="NOINDEX,FOLLOW" >

</head>
<body>

<div id="wel">

<font  id="wel2" ><span id="wel1"><?php print "Ads to get a space"; ?></span><br>Find a best match for your property</font >


</div>

<div id="opt" >

<font id="txt4"><?php print "SORT BY"; ?></font>
<font id="txt5">Person<br><br><br>Room<br><br><br>Kitchen<br><br><br>Area<br><br><br>City<br><br><br>Budget</font>

<form method="get" >

<select name="per" value="" style="height:25px;width:140px;position:absolute;top:105px;left:20px;">
<option value="" ></option> 
<option value="Single" > Single</option>   
<option value="Couple" >Couple</option>
</select>

<select name="space" value="" style="height:25px;width:140px;position:absolute;top:165px;left:20px;">
<option value="" ></option>   
<option value="1" >1 Room</option>
<option value="2" >2 Rooms</option>
<option value="3" >3 Rooms</option>
<option value="4" >4 Rooms</option>
<option value="5" >5 Rooms</option>
</select>

<select name="kitch" value="" style="height:25px;width:140px;position:absolute;top:220px;left:20px;">
<option value="" ></option> 
<option value="1" >With kitchen</option>   
<option value="0" >Without kitchen</option>
</select>

<select name="area" value="" style="height:25px;width:140px;position:absolute;top:275px;left:20px;">
<option value=""></option> 
<?php

for($i=0;$i<$l3;++$i)
{
print<<<Here
<option value="$are[$i]">$are[$i]</option> 
Here;
}  

?>
</select>

<select name="city" value="" style="height:25px;width:140px;position:absolute;top:330px;left:20px;">
<option value=""></option> 
<?php

for($i=0;$i<$l4;++$i)
{
print<<<Here
<option value="$cit[$i]">$cit[$i]</option> 
Here;
}  

?>
</select>

<select name="bud" value="" style="height:25px;width:140px;position:absolute;top:390px;left:20px;">
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


<input id="sort" type="submit" name="search" value="SORT" style="">
</form>

</div>

<?php 

$t=170;
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
{
for($i=0;$i<$check;++$i)
{
$tp=$t."px";
++$intr;

print<<<Here
<div style="height:160px;width:800px;background:#f5f5f5;border:3px solid #2EAFB0;border-radius:5px;position:absolute;top:$tp;left:23%;" >
<img src="images/l/usr.jpg" style="height:50px;width:50px;border-radius:50px;position:absolute;top:40px;left:5%;">
<div  style="height:140px;width:260px;border-radius:3px;position:absolute;top:10px;left:130px;" >

<font id="txt2" >I am/We are: <br>Looking for: <br><br>Want to live in: <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Area<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;City<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State </font>
<font id="txt1" >$per[$i]<br>$space[$i] $kitch[$i]<br><br><br>$area[$i]<br>$city[$i]<br>$state[$i]</font>

</div>
<div  style="height:140px;width:230px;border-radius:3px;position:absolute;top:10px;left:395px;" >

<font id="txt2" >Bathroom: <br>Furnished: <br><br>My Budget:<br>Move in from<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Max date:<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Min date:</font>
<font id="txt3" >$wsh[$i]<br>$furn[$i]<br><br>Rs. $bud[$i] /Month<br><br>$mxd[$i]<br>$mnd[$i]</font>

</div>
<div  style="height:100px;width:150px;border-radius:5px;position:absolute;top:25px;left:630px;" >
<form method="post" action="getter1.php" >
<input type="hidden" name="addid" value="$adid[$i]">
<input id="gb" type="submit" name="g_sb" value="KNOW MORE">
<img src="images/l/ph2.jpg" style="height:40px;width:30px;position:absolute;top:55px;left:40px;">
<img src="images/l/ml2.jpg" style="height:40px;width:40px;position:absolute;top:55px;right:30px;">
</div>
</form>
</div>
</div>
Here;

$t=$t+190;
}

//if($i>=10)
//print<<<Here
//<div  style="height:60px;width:470px;position:absolute;top:$t;left:450px;" >
//<img src="images/l/pre.jpg" style="height:40px;width:40px;border-radius:40px;position:absolute;top:10px;left:5%;">
//<img src="images/l/nxt.jpg" style="height:40px;width:40px;border-radius:40px;position:absolute;top:10px;right:5%;">
//</div>
//Here;

}

?>


<div id="head" >

<a href="index.php"><img src="images/4.jpg" id="logo1" ></a>
<a href="index.php"><p id="logo" >pickurspace</p></a>

</div>


<?php

if($intr<3)
{$t2=0;}
else
if($intr>=3)
{$t2=60-($intr*30);}

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



</body>
</html>