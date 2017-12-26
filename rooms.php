<?php
session_start();

include('engine/main/rooms.php');

if(!isset($_SESSION['id']))
header('location:result.php');

$img=array();
$img2=array();
$nme=array();


?>
<html>
<title>pickurspace</title>
<?
include('prop/p.rooms.php');
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script type="text/javascript" >


count1=<?php

$count=0;

if(file_exists
("upload/".$id."bedr1.jpg"))
++$count;

if(file_exists
("upload/".$id."bedr2.jpg"))
++$count;

if(file_exists
("upload/".$id."kitch1.jpg"))
++$count;

if(file_exists
("upload/".$id."kitch2.jpg"))
++$count;

if(file_exists
("upload/".$id."bath1.jpg"))
++$count;

if(file_exists
("upload/".$id."bath2.jpg"))
++$count;

if(file_exists
("upload/".$id."out1.jpg"))
++$count;

if(file_exists
("upload/".$id."out2.jpg"))
++$count;

if(file_exists
("upload/".$id."hall1.jpg"))
++$count;

if(file_exists
("upload/".$id."hall2.jpg"))
++$count;


print $count;
?>;









count=0;
lft=<?php print "0"; ?>

$(document).ready(function(){
      $("#nx").click(function(){
++count;

if(count==count1)
count=0;

lft=(-100)*count;
lft=lft+"%";

 $("#main10").animate({left:lft},700);

ldn="ld"+count;
ldp="ld"+(count-1);

if(count==0)
ldp="ld3";

    });
});

$(document).ready(function(){
    $("#pr").click(function(){

--count;

if(count==-1)
count=--count1;

lft=(-100)*count;
lft=lft+"%";

        $("#main10").animate({left: lft},700);


ldn="ld"+count;
ldp="ld"+(count+1);

if(count==3)
ldp="ld0";

    });
});



function show()
{
$("#hid8").show();
$("#main8").show();
$("#main9").show();

document.getElementById("bdy").setAttribute("style","overflow:hidden;");
}


function close1()
{
$("#hid8").hide();
$("#main8").hide();
$("#main9").hide();

document.getElementById("bdy").setAttribute("style","overflow:auto;");
}



</script> 

<head>

<meta name="ROBOTS"  content="NOINDEX,FOLLOW" >

<div id="head" >

<a href="index.php"><img src="images/4.jpg" id="logo1" ></a>
<a href="index.php"><p id="logo" >pickurspace</p></a>

</div>

</head>
<body id="bdy" style="overflow:auto;">

<div id="main" >

<div id="main1" >
<img src="<?php 

$cover="upload/".$id."bedr1.jpg";

if(!file_exists($cover))
$cover="images/l/noimg.jpg";

print $cover; ?>" id="im1" onclick="<?php 

if($count!=0)
print "show();";
?>"
 >
</div>

<div id="main2" >

<span id="txt1"></span>

<div  id="main21" >

<div style="background:;height:75px;width:125px;position:absolute;top:0px;left:0px;">
<font id="txt2"><span id="txt3">Type of property </span><br><?php print $row21['p_type']; ?></font>
<img src="images/l/prop.jpg" style="height:40px;width:40px;position:absolute;top:55px;left:40px;">
</div>
<div style="background:;height:75px;width:125px;position:absolute;top:0px;left:130px;">
<font id="txt2"><span id="txt3"><?php

if($row21['p_room']=='1')
print $row21['p_room']." Room";
else
print $row21['p_room']." Rooms";


?></span> <br><?php

if($row21['p_kitch']=='0')
print "Without Kitchen";
else
print "&nbsp&nbspWith Kitchen";

if(empty($row21['p_bed']))
print "<br><br><br><br>With no bed";
else
print "<br><br><br><br>with ".$row21['p_bed']." bed in each";


?>
</font>
<img src="images/l/rom.jpg" style="height:40px;width:40px;position:absolute;top:55px;left:40px;">
</div>
<div style="background:;height:75px;width:125px;position:absolute;top:95px;left:0px;">
<font id="txt4"><span id="txt5">Bathroom</span><br><?php print $row2['od_wshr']; ?></font>
<img src="images/l/bat.jpg" style="height:40px;width:40px;position:absolute;top:55px;left:45px;">
</div>
<div style="background:;height:75px;width:125px;position:absolute;top:95px;left:130px;">
<font id="txt41"><br><span id="txt5"></span><?php

if($row2['od_furn']=='1')
print "&nbsp&nbsp&nbsp&nbspFurnished";
else
if($row3['ame_semi']=='1')
print "Semi-Furnished";
else
print "Non-Furnished";

if($row3['ame_ac']=='1')
print "<br>AC";
else
if($row3['ame_intr']=='1')
print "<br>Internet";
else
if($row3['ame_cbl']=='1')
print "<br>Cable TV";

if($row3['ame_gee']=='1')
print "<br>Geezer";
else
if($row3['ame_park']=='1')
print "<br>Parking";
else
if($row3['ame_fan']=='1')
print "<br>Fan";
else
if($row3['ame_frig']=='1')
print "<br>Refrigrator";

?></font>
</div>

</div>

<div  style="height:50px;width:230px;background:;border-radius:3px;position:absolute;top:30px;left:260px;" >

<img src="images/l/loc.jpg" style="height:50px;width:50px;border-radius:50px;position:absolute;top:10px;left:10px;">

<font id="txt6"><span id="txt7">Area</span><br><?php print $row21['p_area']; ?></font>
<font id="txt8"><span id="txt7">City</span><br><?php print $row21['p_dist']; ?></font>

</div>

<div  style="height:50px;width:230px;background:#2EAFB0;border-radius:3px;position:absolute;top:85px;left:270px;" >

<font id="txt9"><span id="txt10">Rs.</span><?php print $row6['price']; ?> /Month</font>

</div>

<div id="main6" >
<font id="txt18"><?php print $row1['name']; ?><br><span id="txt10" style="font-size:12px;" >Age:</span>&nbsp&nbsp<?php print $row1['age']; ?><br><span id="txt10" style="font-size:12px;" >Gender:</span>&nbsp&nbsp<?php print $row1['gen']; ?></font>


<font id="txt19"><?php 

$ph=$row1['user_ph'];

echo ereg_replace('..[0-9]{7}$','********',$ph);

?><br><br><?php

$ph=$row1['user_ml'];


echo ereg_replace('[0-9a-zA-Z].*@','************@',$ph);

?></font>


<img src="images/l/usr.jpg" style="height:40px;width:40px;border-radius:40px;position:absolute;top:10px;left:15px;">
<img src="images/l/ph.jpg" style="height:30px;width:25px;position:absolute;top:65px;left:30px;">
<img src="images/l/ml.jpg" style="height:30px;width:30px;position:absolute;top:95px;left:28px;">

<button id="gd" onclick="location.href='booster4.php'">KNOW DETAILS</button>

<?php //<span id="txt20"><span id="txt10" style="color:black;">At just</span>&nbsp&nbsp&nbspRs. 199</span> ?>

</div>

<span id="txt17"><span id="txt10" style="font-size:12px;" >Available from:</span>&nbsp&nbsp<?php print $row6['dd'].", ".$row6['mm']." ".$row6['yy']; ?></span>

</div>


<div id="main3" >
<div id="hd" >
<span id="txt16">Ammenities</span>
</div>

<span id="txt11">No. of Beds<br>Hall<br>Ammenities</span>
<span id="txt12"><?php 
if($row2['od_bed'])
print $row2['od_bed'];
else
print "None";

if($row2['od_hall'])
print "<br>Yes";
else
print "<br>No";

 ?></span>

<span id="txt13"><?php

if($row3['ame_cbl'])
print "-Cable TV";

if($row3['ame_intr'])
print "<br>-Internet";

if($row3['ame_fan'])
print "<br>-Fan";

?>
</span>
<span id="txt14"><?php

if($row3['ame_ac'])
print "-AC";

if($row3['ame_gee'])
print "<br>-Geezer";

if($row3['ame_frig'])
print "<br>-Refrigrator";


?></span>
<span id="txt15"><?php

if($row3['ame_park'])
print "-Parking";

if($row3['ame_semi'])
print "<br>-Semi Furnished";


?></span>


</div>

<div id="main4" >
<div id="hd" >
<span id="txt16">Preference Details</span>
</div>

<span id="txt11">Smoking<br>Gender<br>Coupes<br>Min Age<br>Max Age<br>Others</span>

<span id="txt12"><?php 

if($row5['pf_smok'])
print "Yes";
else
print "No";

print "<br>".$row5['pf_gen'];

if($row5['pf_cop'])
print "<br>Yes";
else
print "<br>No";

print "<br>".$row5['min_ag'];

print "<br>".$row5['mx_ag'];

print "<br>".$row5['pf_oth'];


 ?></span>

</div>

<div id="main5" >
<div id="hd" >
<span id="txt16">Tennant's Details</span>
</div>

<table id="tb" >


<?php

if(!empty($row4)&&!empty($row4)&&!empty($row7)&&!empty($row7))
print<<<Here
<tr><th>Name</th><th>Age</th><th>Gender</th><th>State</th><th>College/Company</th></tr>
Here;
else
if(empty($row4['t1_nm'])&&empty($row4['t2_nm'])&&empty($row7['t3_nm'])&&empty($row7['t4_nm']))
print<<<Here
<tr><th>No Tennants's Present</th></tr>
Here;

?>



<tr><td><?php print $row4['t1_nm']; ?></td><td><?php print $row4['t1_ag'];?></td><td><?php print $row4['t1_gen'];?></td><td><?php print $row4['t1_state'];?></td><td><?php print $row4['t1_cmp']; ?></td></tr>
<tr><td><?php print $row4['t2_nm']; ?></td><td><?php print $row4['t2_ag'];?></td><td><?php print $row4['t2_gen'];?></td><td><?php print $row4['t2_state'];?></td><td><?php print $row4['t2_cmp']; ?></td></tr>
<tr><td><?php print $row7['t3_nm']; ?></td><td><?php print $row7['t3_ag'];?></td><td><?php print $row7['t3_gen'];?></td><td><?php print $row7['t3_state'];?></td><td><?php print $row7['t3_cmp']; ?></td></tr>
<tr><td><?php print $row7['t4_nm']; ?></td><td><?php print $row7['t4_ag'];?></td><td><?php print $row7['t4_gen'];?></td><td><?php print $row7['t4_state'];?></td><td><?php print $row7['t4_cmp']; ?></td></tr>



</table>
</div>


<div id="main7" >
<div id="hd"><span id="txt16">Gallery</span></div>

<?php

if($count>1)
$shw="show();";
else
$shw="";


for($j=0;$j<10;++$j)
{
$img[$j]=decide();
$nme[$j]=deci($j);
}




//print<<<Here
//<font onclick="$shw" src="$img[0]" style="cursor:pointer;height:150px;width:180px;border-radius:2px;position:absolute;top:70px;left:50px;">$img[0] global: $gal[0]</font>
//Here;


print<<<Here
<img onclick="$shw" src="$img[0]" style="cursor:pointer;height:150px;width:180px;border-radius:2px;position:absolute;top:80px;left:50px;">
<img onclick="$shw" src="$img[1]" style="cursor:pointer;height:150px;width:180px;border-radius:2px;position:absolute;top:80px;left:260px;">
<img onclick="$shw" src="$img[2]" style="cursor:pointer;height:150px;width:180px;border-radius:2px;position:absolute;top:80px;left:470px;">
<img onclick="$shw" src="$img[3]" style="cursor:pointer;height:150px;width:180px;border-radius:2px;position:absolute;top:80px;left:680px;">
<img onclick="$shw" src="$img[4]" style="cursor:pointer;height:150px;width:180px;border-radius:2px;position:absolute;top:80px;left:890px;">
Here;

print<<<Here
<span onclick="$shw" style="font-weight:bold;font-size:14px;font-family:Century Gothic,sans-serif;position:absolute;top:50px;left:60px;">$nme[0]</span>
<span onclick="$shw" style="font-weight:bold;font-size:14px;font-family:Century Gothic,sans-serif;position:absolute;top:50px;left:270px;">$nme[1]</span>
<span onclick="$shw" style="font-weight:bold;font-size:14px;font-family:Century Gothic,sans-serif;position:absolute;top:50px;left:480px;">$nme[2]</span>
<span onclick="$shw" style="font-weight:bold;font-size:14px;font-family:Century Gothic,sans-serif;position:absolute;top:50px;left:690px;">$nme[3]</span>
<span onclick="$shw" style="font-weight:bold;font-size:14px;font-family:Century Gothic,sans-serif;position:absolute;top:50px;left:900px;">$nme[4]</span>
Here;


function decide()
{
global $id;
global $gal;
static $gal=array();
global $nme;
static $nme=array();


if(file_exists
("upload/".$id."bedr1.jpg")&&$gal[0]!=1)
{
$img="upload/".$id."bedr1.jpg";
$gal[0]=1;
}
else
if(file_exists
("upload/".$id."kitch1.jpg")&&$gal[1]!=1)
{
$img="upload/".$id."kitch1.jpg";
$gal[1]=1;
}
else
if(file_exists
("upload/".$id."bath1.jpg")&&$gal[2]!=1)
{
$img="upload/".$id."bath1.jpg";
$gal[2]=1;
}
else
if(file_exists
("upload/".$id."hall1.jpg")&&$gal[3]!=1)
{
$img="upload/".$id."hall1.jpg";
$gal[3]=1;
}
else
if(file_exists
("upload/".$id."out1.jpg")&&$gal[4]!=1)
{
$img="upload/".$id."out1.jpg";
$gal[4]=1;
}
else
if(file_exists
("upload/".$id."bedr2.jpg")&&$gal[5]!=1)
{
$img="upload/".$id."bedr2.jpg";
$gal[5]=1;
}
else
if(file_exists
("upload/".$id."kitch2.jpg")&&$gal[6]!=1)
{
$img="upload/".$id."kitch2.jpg";
$gal[6]=1;
}
else
if(file_exists
("upload/".$id."bath2.jpg")&&$gal[7]!=1)
{
$img="upload/".$id."bath2.jpg";
$gal[7]=1;
}
else
if(file_exists
("upload/".$id."hall2.jpg")&&$gal[8]!=1)
{
$img="upload/".$id."hall2.jpg";
$gal[8]=1;
}
else
if(file_exists
("upload/".$id."out2.jpg")&&$gal[9]!=1)
{
$img="upload/".$id."out2.jpg";
$gal[9]=1;
}
else
$img="images/l/noimg.jpg";

return $img;
}


function deci($i)
{
global $id;
global $gall;
static $gall=array();


if(file_exists
("upload/".$id."bedr1.jpg")&&$gall[0]!=1)
{$nme="Bedroom";$gall[0]=1;}
else
if(file_exists
("upload/".$id."kitch1.jpg")&&$gall[1]!=1)
{$nme="Kitchen";$gall[1]=1;}
else
if(file_exists
("upload/".$id."bath1.jpg")&&$gall[2]!=1)
{$nme="Bathroom";$gall[2]=1;}
else
if(file_exists
("upload/".$id."hall1.jpg")&&$gall[3]!=1)
{$nme="Hall";$gall[3]=1;}
else
if(file_exists
("upload/".$id."out1.jpg")&&$gall[4]!=1)
{$nme="Outside View";$gall[4]=1;}
else
if(file_exists
("upload/".$id."bedr2.jpg")&&$gall[5]!=1)
{$nme="Bedroom";$gall[5]=1;}
else
if(file_exists
("upload/".$id."kitch2.jpg")&&$gall[6]!=1)
{$nme="Kitchen";$gall[6]=1;}
else
if(file_exists
("upload/".$id."bath2.jpg")&&$gall[7]!=1)
{$nme="Bathroom";$gall[7]=1;}
else
if(file_exists
("upload/".$id."hall2.jpg")&&$gall[8]!=1)
{$nme="Hall";$gall[8]=1;}
else
if(file_exists
("upload/".$id."out2.jpg")&&$gall[9]!=1)
{$nme="Outside View";$gall[9]=1;}

return $nme;
}

?>

</div>



</div>

<div id="foot" >

<div id="fot" >
<a href="index.php"><span id="ft1" >Home</span></a>
<a href="tandc.php"><span id="ft2" >Terms and Conditions</span></a>
<a href="feedback.php"><span id="ft3" >Feedback</span></a>
<a href="contactus.php"><span id="ft4" >Contact Us</span></a>
<a href="aboutus.php"><span id="ft5" >About Us</span></a>
</div>

</div>


<div id="hid8" ></div>

<div id="main8" >

<div id="main10" style="position:absolute;top:0%;left:0%;" >

<?php

print<<<Here
<img  src="$img[0]" style="height:100%;width:25%;border-radius:2px;position:absolute;left:0%;">
<img  src="$img[1]" style="height:100%;width:25%;border-radius:2px;position:absolute;left:25%;">
<img src="$img[2]" style="height:100%;width:25%;border-radius:2px;position:absolute;left:50%;">
<img src="$img[3]" style="height:100%;width:25%;border-radius:2px;position:absolute;left:75%;">
<img src="$img[4]" style="height:100%;width:25%;border-radius:2px;position:absolute;left:100%;">
<img src="$img[5]" style="height:100%;width:25%;border-radius:2px;position:absolute;left:125%;">
<img src="$img[6]" style="height:100%;width:25%;border-radius:2px;position:absolute;left:150%;">
<img src="$img[7]" style="height:100%;width:25%;border-radius:2px;position:absolute;left:175%;">
<img src="$img[8]" style="height:100%;width:25%;border-radius:2px;position:absolute;left:200%">
<img src="$img[9]" style="height:100%;width:25%;border-radius:2px;position:absolute;left:225%">
Here;


print<<<Here
<span style="color:#2EAFB0;font-weight:bold;font-size:30px;font-family:Century Gothic,sans-serif;position:absolute;top:80%;left:20%;">$nme[0]</span>
<span style="color:#2EAFB0;font-weight:bold;font-size:30px;font-family:Century Gothic,sans-serif;position:absolute;top:80%;left:45%;">$nme[1]</span>
<span style="color:#2EAFB0;font-weight:bold;font-size:30px;font-family:Century Gothic,sans-serif;position:absolute;top:80%;left:70%;">$nme[2]</span>
<span style="color:#2EAFB0;font-weight:bold;font-size:30px;font-family:Century Gothic,sans-serif;position:absolute;top:80%;left:95%;">$nme[3]</span>
<span style="color:#2EAFB0;font-weight:bold;font-size:30px;font-family:Century Gothic,sans-serif;position:absolute;top:80%;left:120%;">$nme[4]</span>
<span style="color:#2EAFB0;font-weight:bold;font-size:30px;font-family:Century Gothic,sans-serif;position:absolute;top:80%;left:145%;">$nme[5]</span>
<span style="color:#2EAFB0;font-weight:bold;font-size:30px;font-family:Century Gothic,sans-serif;position:absolute;top:80%;left:170%;">$nme[6]</span>
<span style="color:#2EAFB0;font-weight:bold;font-size:30px;font-family:Century Gothic,sans-serif;position:absolute;top:80%;left:195%;">$nme[7]</span>
<span style="color:#2EAFB0;font-weight:bold;font-size:30px;font-family:Century Gothic,sans-serif;position:absolute;top:80%;left:220%;">$nme[8]</span>
<span style="color:#2EAFB0;font-weight:bold;font-size:30px;font-family:Century Gothic,sans-serif;position:absolute;top:80%;left:245%;">$nme[9]</span>
Here;



?>



</div>

</div>

<div id="main9" >

<button id="close" onclick="close1();" >X</button>

<img id="pr" src="images/pr.jpg" style="cursor:pointer;height:70px;width:50px;opacity:0.70;border-radius:50px;position:absolute;top:40%;left:2%;">
<img id="nx" src="images/nx.jpg" style="cursor:pointer;height:70px;width:50px;opacity:0.70;border-radius:50px;position:absolute;top:40%;right:2%;">

</div>

</body>
</html>