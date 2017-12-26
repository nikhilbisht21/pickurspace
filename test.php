<?php

$host="localhost";
$user="demon96";
$pass="kritika96";


$conn=mysql_connect($host,$user,$pass);
mysql_select_db("winterland",$conn);
$sql="SELECT * from test";
$result=mysql_query($sql,$conn);

$row=mysql_fetch_assoc($result);

if(isset($conn))
{print "COnnected";
print "<br>";
print $row['uname'];
}
else
print "Sorry";
?>