<?php
session_start();

$date=date("M-d-Y,D");
$time=date("h:i:sa");
$a=rand(99999,999999);

if(!empty($_POST['nxt2'])&&!empty($_POST['feed']))
{
$name=$_POST['name'];
$cmp=$_POST['cmp'];
$msg=$_POST['feed'];


ereg_replace('\n','\r\n',$msg);

$to="rudeboy2196@gmail.com";
$subject="Feedback@".$a;
$message="\r\nDate:".$date."\r\nTime:".$time."\r\n\r\nName:".$name."\r\nReply to:".$cmp."\r\n\r\n\r\n".$msg;
$header="From: info@pickurspace.com\r\n";

mail($to,$subject,$message,$header);

}

?>