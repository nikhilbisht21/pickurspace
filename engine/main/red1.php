<?
session_start();

$lid=152182;

$a=rand(200,258);
$b=rand(200,258);
$c=$a*$b;

$_SESSION['userfi']=$lid*$c;

$name=$_COOKIE['usrnme'];
$mail=$_COOKIE['email'];
$no=$_COOKIE['mno'];
$id=$_SESSION['userfi'];
$date=date("M-d-Y,D");
$time=date("h:i:sa");



$host="localhost";
$user="demon96";
$pass="kritika96";

//for creating connection

$conn=mysql_connect($host,$user,$pass);
mysql_select_db("winterland",$conn);
$sql="insert into alpha_tmp values('$name','$id','$mail','$no','','$date','$time')";
$set=mysql_query($sql,$conn);

mysql_close($conn);

if(isset($set))
header('location:redirect_v.php');

?>