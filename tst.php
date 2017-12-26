<?
include('engine/e.details4.php');

?>
<html>
<title>Pickurspace</title>
<?
include('prop/p.tst.php');
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<script> 

count=0;
lft=0;

$(document).ready(function(){
      $("#bt1").click(function(){
++count;

if(count==4)
count=0;

lft=(-1120)*count;

 $("#shw1").animate({left:lft});

ldn="ld"+count;
ldp="ld"+(count-1);

if(count==0)
ldp="ld3";



document.getElementById(ldp).setAttribute("style","background:white;");
document.getElementById(ldn).setAttribute("style","background:#330033;");

    });
});

$(document).ready(function(){
    $("#bt2").click(function(){

--count;

if(count==-1)
count=3;

lft=(-1120)*count;

        $("#shw1").animate({left: lft});


ldn="ld"+count;
ldp="ld"+(count+1);

if(count==3)
ldp="ld0";



document.getElementById(ldp).setAttribute("style","background:white;");
document.getElementById(ldn).setAttribute("style","background:#330033;");

    });
});


$(document).ready(function(){
    $("#tg1").click(function(){
        $("#de1").toggle();
    });
});


$(document).ready(function(){
    $("#tg2").click(function(){
        $("#de2").toggle();
    });
});


$(document).ready(function(){
    $("#tg3").click(function(){
        $("#de3").toggle();
    });
});



</script> 
<style type="text/css" >

</style>
<head>
<div id="head">
<font id="logo" size="8">
Pickurspace</font>
</div>
</head>
<body>

<div id="main1" >

<div id="img" >

<div id="shw" >

<div id="shw1" class="shw1" style="position:absolute;top:0px;left:0px;">

<img id="im1" src="images/1.jpg" class="img" style="position:absolute;top:0px;left:0px;">
<img  id="im2" src="images/2.jpg" class="img" style="position:absolute;top:0px;left:1120px;">
<img  id="im3" src="images/3.jpg" class="img" style="position:absolute;top:0px;left:2240px;">
<img  id="im4" src="images/9.jpg" class="img" style="position:absolute;top:0px;left:3360px;">

</div>

</div>


<div id="hd1"></div>
<div id="hd2"></div>

<img src="images/l/nxt.jpg" id="bt1" >
<img src="images/l/pre.jpg" id="bt2" > 

</div>


<div id="ld0" style="background:#330033;"></div>
<div id="ld1" style="background:white;"></div>
<div id="ld2" style="background:white;"></div>
<div id="ld3" style="background:white;"></div>

<div id="dis" >Bedroom</div>

</div>


<div id="main"  >

<div id="view"  >

<span id="v1">Rooms Available In</span>
<span id="v2" >360</span>
<span id="v3" > VIEW</span>

<button id="v4" > Click Here</button>

</div>

<div id="period" >

<font id="p1">Room available at its best price</font>

<span id="price">
<font id="price1">Rs. 999/month</font>
</span>


<font id="p2" >Room available from</font>
<span id="per1">
<font id="per12">2-April-2016</font>
</span>


<font id="p3" >Max time period to stay</font>
<span id="per2">
<font id="per22">2 months</font>
</span>


<button id="book" >Book Now</button>

</div>




<div id="detail1">

<div id="d1" >

<span id="sp1" >
</span>
<font id="d11">
Property Details
</font>
<img id="d12" src="images/l/add12" >
<img id="tg1" src="images/l/tog" >
</div>

<div id="de1" >

<font id="det1">.<br>.<br>.<br>.<br>.<br>.<br>.<br>.</font>

<font id="det2" >Type of property<br>Number Of Room<br>Kitchen<br>Bathroom/Toilet<br>Furnished<br>Cable TV<br>Internet<br>Ammeneties</font>

<font id="det3" >Rooms<br>Kitchen<br>Type of property<br>Bathroom/Toilet<br>Furnished<br>Cable TV<br>Internet<br>Ammeneties</font>

</div>

</div>

<div id="detail2" >

<div id="d2" >

<span id="sp2" >
</span>
<font id="d22">
Preference For Tennants
</font>
<img id="tg2" src="images/l/tog" >
</div>

<div id="de2" >

<font id="det21">.<br>.<br>.<br>.<br>.<br>.</font>

<font id="det22" >Smoking<br>Gender<br>Couples<br>Max. Age<br>Min. Age<br>Others</font>

<font id="det23" >Rooms<br>Kitchen<br>Type of property<br>Bathroom/Toilet<br>Furnished<br>Cable TV</font>

</div>

</div>


<div id="detail3" >



<div id="d3" >

<span id="sp3" >
</span>
<font id="d33">Occupants Details</font>
<img id="tg3" src="images/l/tog" >

</div>

<div id="de3" >
<?
$oc=0;

if($oc==1)
{print<<<Here
<table  id="occ">
<tr>
<th>Name</th><th>Age</th><th>Gender</th><th>State</th><th>College/Company</th>
</tr>
<tr>
<td></td><td></td><td></td><td></td><td></td>
</tr>
<tr>
<td></td><td></td><td></td><td></td><td></td>
</tr>
<tr>
<td></td><td></td><td></td><td></td><td></td>
</tr>
<tr>
<td></td><td></td><td></td><td></td><td></td>
</tr>
</table>
Here;
}
else
print<<<Here
<font id="occ2" >No occupants Present</font>
Here;

?>

</div>

</div>



</div>


<div id="foot" ></div>
</body>
</html>