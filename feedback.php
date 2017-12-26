<?php
session_start();
include('engine/feed.php');


?>
<html>
<title>pickursapce</title>
<?

include('prop/p.feed.php');
?>
<head>


<div id="head" >

<a href="index.php"><img src="images/4.jpg" id="logo1" ></a>
<a href="index.php"><p id="logo" >pickurspace</p></a>

</div>


</head>
<body>

<div id="wel"><span id="wel1">Feedback</span></div>

<div id="main" ><div id="main1" >

<?php

if(!empty($_POST['nxt2'])&&!empty($_POST['feed']))
print<<<Here
<font id="txt1" >Thank You for your Feedback<br>We assure you for the best services from us</font>
Here;
else
print<<<Here
<font id="txt1" >Leave your feedback for us so that it can help pickurspace to serve you better</font>

<font id="txt2" >Your Name<br><br><br>Your Company/Institution</font>

<form method="post"
         action="" style="position:absolute;">


<input type="text" name="name" value="$name" id="field5" >

<input type="text" name="cmp" value="$cmp" id="field4" >


<textarea id="field6" rows="3" cols="50" name="feed" wrap="hard" placeholder="Enter your Feedback Here" >
</textarea>

<input type="submit"
           name="nxt2"
           value="Submit"
             id="nxt1" >


</form>
Here;

?>



</div></div>

<div id="foot" >

<div id="fot" >
<a href="index.php"><span id="ft1" >Home</span></a>
<a href="index.php"><span id="ft2" >Terms and Conditions</span></a>
<a href="index.php"><span id="ft3" >Feedback</span></a>
<a href="index.php"><span id="ft4" >Contact Us</span></a>
<a href="index.php"><span id="ft5" >About Us</span></a>
</div>

</div>

</body>
</html>