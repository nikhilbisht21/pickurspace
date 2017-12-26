<?php
session_start();

include('engine/e.upload.php');


if(!isset($_SESSION['process']))
{header('location:usrhome.php');}

if(isset($_COOKIE['userid']))
{setcookie('done',"done",time() +20);}
else
{setcookie('done',"done",time() +30);
setcookie('err',"Login to continue",time() +20);}


?>
<html>
<title>pickurspace</title>
<?
include('prop/p.upload.php');
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

$(document).ready(function(){
    $("#bedr11").change(function(){
        $("#hid11").hide();
    });
});

                   $(document).ready(function(){
    $("#bedr21").change(function(){
        $("#hid12").hide();
    });
});



$(document).ready(function(){
    $("#kitch11").change(function(){
        $("#hid21").hide();
    });
});

                       $(document).ready(function(){
    $("#kitch21").change(function(){
        $("#hid22").hide();
    });
});



$(document).ready(function(){
    $("#hall11").change(function(){
        $("#hid31").hide();
    });
});

                      $(document).ready(function(){
    $("#hall21").change(function(){
        $("#hid32").hide();
    });
});



$(document).ready(function(){
    $("#bath11").change(function(){
        $("#hid41").hide();
    });
});

                         $(document).ready(function(){
    $("#bath21").change(function(){
        $("#hid42").hide();
    });
});



$(document).ready(function(){
    $("#out11").change(function(){
        $("#hid51").hide();
    });
});

                                $(document).ready(function(){
    $("#out21").change(function(){
        $("#hid52").hide();
    });
});



</script>
<body>

<div id="wel">Upload<span id="wel1">  Images</span></div>

<div id="adid">Ad ID: <span id="adid1"><?php print $ID; ?></div>


<div id="up1" >

<font id="txt2" >BEDROOM</font>

<?php

$img11="upload/".$ID."bedr1.jpg";
$img12="upload/".$ID."bedr2.jpg";

//Check if file already exist
if(file_exists
($img11)) 
{

print<<<Here
$del11
<img id="img1" src="$img11" >

<form method="post" >

<input type="hidden" name="del11"  value="1" >
<input type="submit" name="del12" value="DELETE" id="del1">


</form>
Here;
}
else
{
print<<<Here
<font id="im1" ><span id="imp">* </span>Image 1</font>
<form  method="post" enctype="multipart/form-data" name="bedr1" id="bedr1" >

<input type="file" name="bedr1_name" id="bedr11"  class="field1" >
<input type="submit" name="bedr1_up" id="bedr12" value="UPLOAD" class="sub1" >

</form>
<span id="hid11" class="hid1"></span>
Here;
}



//Check if file already exist
if(file_exists
($img12)) 
{

print<<<Here
<img id="img2" src="$img12" >

<form method="post" >

<input type="hidden" name="del21"  value="1" >
<input type="submit" name="del22" value="DELETE" id="del2">


</form>
Here;
}
else
{
print<<<Here
<font id="im2" ><span id="imp">* </span>Image 2</font>
<form  method="post" enctype="multipart/form-data" name="bedr2" id="bedr2" >

<input type="file" name="bedr2_name" id="bedr21"  class="field2" >
<input type="submit" name="bedr2_up" id="bedr22" value="UPLOAD" class="sub2" >

</form>
<span id="hid12" class="hid2"></span>
Here;
}



?>
</div>







<div id="up2" >

<font id="txt2" >KITCHEN</font>


<?php

$img21="upload/".$ID."kitch1.jpg";
$img22="upload/".$ID."kitch2.jpg";

//Check if file already exist
if(file_exists
($img21)) 
{

print<<<Here
<img id="img1" src="$img21" >

<form method="post" >

<input type="hidden" name="del31"  value="1" >
<input type="submit" name="del32" value="DELETE" id="del1">


</form>
Here;
}
else
{
print<<<Here
<font id="im1" ><span id="imp">* </span>Image 1</font>
<form  method="post" enctype="multipart/form-data" name="kitch1" id="kitch1" >

<input type="file" name="kitch1_name" id="kitch11"  class="field1">
<input type="submit" name="kitch1_up" id="kitch12" value="UPLOAD" class="sub1" >

</form>
<span id="hid21" class="hid1"></span>
Here;
}



//Check if file already exist
if(file_exists
($img22)) 
{

print<<<Here
<img id="img2" src="$img22" >

<form method="post" >

<input type="hidden" name="del41"  value="1" >
<input type="submit" name="del42" value="DELETE" id="del2">


</form>
Here;
}
else
{
print<<<Here
<font id="im2" ><span id="imp">* </span>Image 2</font>
<form  method="post" enctype="multipart/form-data" name="kitch2" id="kitch2" >

<input type="file" name="kitch2_name" id="kitch21"  class="field2" >
<input type="submit" name="kitch2_up" id="kitch22" value="UPLOAD" class="sub2" >

</form>
<span id="hid22" class="hid2"></span>
Here;
}




?>

<?php
if($_COOKIE['kitch']==0)
print<<<Here
<span id="hd1" ></span>
Here;
?>


</div>








<div id="up3" >

<font id="txt2" >HALL</font>


<?php

$img31="upload/".$ID."hall1.jpg";
$img32="upload/".$ID."hall2.jpg";

//Check if file already exist
if(file_exists
($img31)) 
{

print<<<Here
<img id="img1" src="$img31" >

<form method="post" >

<input type="hidden" name="del51"  value="1" >
<input type="submit" name="del52" value="DELETE" id="del1">


</form>
Here;
}
else
{
print<<<Here
<font id="im1" ><span id="imp">* </span>Image 1</font>
<form  method="post" enctype="multipart/form-data" name="hall1" id="hall1" >

<input type="file" name="hall1_name" id="hall11"  class="field1">
<input type="submit" name="hall1_up" id="hall12" value="UPLOAD" class="sub1" >

</form>
<span id="hid31" class="hid1"></span>
Here;
}



//Check if file already exist
if(file_exists
($img32)) 
{

print<<<Here
<img id="img2" src="$img32" >

<form method="post" >

<input type="hidden" name="del61"  value="1" >
<input type="submit" name="del62" value="DELETE" id="del2">


</form>
Here;
}
else
{
print<<<Here
<font id="im2" ><span id="imp">* </span>Image 2</font>
<form  method="post" enctype="multipart/form-data" name="hall2" id="hall2" >

<input type="file" name="hall2_name" id="hall21"  class="field2" >
<input type="submit" name="hall2_up" id="hall22" value="UPLOAD" class="sub2" >

</form>

<span id="hid32" class="hid2"></span>
Here;
}


?>


<?php
if($_COOKIE['hall']==0)
print<<<Here
<span id="hd1" ></span>
Here;
?>
</div>



<div id="up4" >

<font id="txt3" >BATHROOM<br>TOILET</font>

<?php

$img41="upload/".$ID."bath1.jpg";
$img42="upload/".$ID."bath2.jpg";

//Check if file already exist
if(file_exists
($img41)) 
{

print<<<Here
<img id="img1" src="$img41" >

<form method="post" >

<input type="hidden" name="del71"  value="1" >
<input type="submit" name="del72" value="DELETE" id="del1">


</form>
Here;
}
else
{
print<<<Here
<font id="im1" ><span id="imp">* </span>Image 1</font>
<form  method="post" enctype="multipart/form-data" name="bath1" id="bath1" >

<input type="file" name="bath1_name" id="bath11"  class="field1">
<input type="submit" name="bath1_up" id="bath12" value="UPLOAD" class="sub1" >

</form>
<span id="hid41" class="hid1"></span>
Here;
}



//Check if file already exist
if(file_exists
($img42)) 
{

print<<<Here
<img id="img2" src="$img42" >

<form method="post" >

<input type="hidden" name="del81"  value="1" >
<input type="submit" name="del82" value="DELETE" id="del2">


</form>
Here;
}
else
{
print<<<Here
<font id="im2" ><span id="imp">* </span>Image 2</font>
<form  method="post" enctype="multipart/form-data" name="bath2" id="bath2" >

<input type="file" name="bath2_name" id="bath21"  class="field2" >
<input type="submit" name="bath2_up" id="bath22" value="UPLOAD" class="sub2" >

</form>
<span id="hid42" class="hid2"></span>
Here;
}

?>


</div>



<div id="up5" >

<font id="txt3" >OUTSIDE <br>VIEW</font>


<?php

$img51="upload/".$ID."out1.jpg";
$img52="upload/".$ID."out2.jpg";


//Check if file already exist
if(file_exists
($img51)) 
{

print<<<Here
<img id="img1" src="$img51" >

<form method="post" >

<input type="hidden" name="del91"  value="1" >
<input type="submit" name="del92" value="DELETE" id="del1">


</form>
Here;
}
else
{
print<<<Here
<font id="im1" ><span id="imp">* </span>Image 1</font>
<form  method="post" enctype="multipart/form-data" name="out1" id="out1" >

<input type="file" name="out1_name" id="out11"  class="field1">
<input type="submit" name="out1_up" id="out12" value="UPLOAD" class="sub1" >

</form>
<span id="hid51" class="hid1"></span>
Here;
}



//Check if file already exist
if(file_exists
($img52)) 
{

print<<<Here
<img id="img2" src="$img52" >

<form method="post" >

<input type="hidden" name="del101"  value="1" >
<input type="submit" name="del102" value="DELETE" id="del2">


</form>
Here;
}
else
{
print<<<Here
<font id="im2" ><span id="imp">* </span>Image 2</font>
<form  method="post" enctype="multipart/form-data" name="out2" id="out2" >

<input type="file" name="out2_name" id="out21"  class="field2" >
<input type="submit" name="out2_up" id="out22" value="UPLOAD" class="sub2" >

</form>
<span id="hid52" class="hid2"></span>
Here;
}



?>


</div>

<div id="up6" >

<font id="txt1" ><span id="imp2">* </span>Fields are required for a good add<br><span id="imp2">* </span>Image size should not be greater than 3 MB<br><span id="imp2">* </span>JPG,JPEG,GIF image type are acceptable only<br><span id="imp2">* </span>Upload at least one image in each section</font>


<button id="skip" onclick="location.href='location2.php'">SKIP</button>


<button id="done" onclick="<?php 

if(isset($_COOKIE['userid']))
{
print "location.href='location2.php'";}
else
{
print "location.href='location2.php'"; }

?>">CONTINUE</button>

<?php




if((!file_exists($img11))||(!file_exists($img21))||(!file_exists($img31))||(!file_exists($img41))||(!file_exists($img51))||(!file_exists($img12))||(!file_exists($img22))||(!file_exists($img32))||(!file_exists($img42))||(!file_exists($img52)))
{print<<<Here
<span id="dhid" ></span>
Here;
}


?>

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

</body>
</html>