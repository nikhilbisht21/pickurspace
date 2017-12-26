<?php
session_start();

$id=$_COOKIE['userid'];
$l=0;



$search="";


if(!empty($_GET['search']))
{


if(!empty($_GET['space'])||!empty($_GET['per'])||!empty($_GET['area'])||!empty($_GET['city'])||!empty($_GET['kitch'])||!empty($_GET['bud']))
{

$search="where";

if(!empty($_GET['space']))
{$search.=" u_space='".$_GET['space']."'";
}

if(!empty($_GET['per']))
{
if($search=='where')
$search.=" u_am='".$_GET['per']."'";
else
$search.=" and u_am='".$_GET['per']."'";
}

if(!empty($_GET['area']))
{
if($search=='where')
$search.=" u_area='".$_GET['area']."'";
else
$search.=" and u_area='".$_GET['area']."'";
}

if(!empty($_GET['city']))
{
if($search=='where')
$search.=" u_city='".$_GET['city']."'";
else
$search.=" and u_city='".$_GET['city']."'";
}

if(!empty($_GET['kitch']))
{
if($search=='where')
$search.=" u_kitch='".$_GET['kitch']."'";
else
$search.=" and u_kitch='".$_GET['kitch']."'";
}


if(!empty($_GET['bud']))
{

if($search=='where')
{
if($_GET['bud']==1000)
$search.=" u_bdgt>1000";
else
if($_GET['bud']==1500)
$search.=" u_bdgt between 1000 and 2000";
else
if($_GET['bud']==2500)
$search.=" u_bdgt between 2000 and 3000";
else
if($_GET['bud']==3500)
$search.=" u_bdgt between 3000 and 4000";
else
if($_GET['bud']==4500)
$search.=" u_bdgt between 4000 and 5000";
else
if($_GET['bud']==5000)
$search.=" u_bdgt>5000";
}
else
{
if($_GET['bud']==1000)
$search.=" and u_bdgt>1000";
else
if($_GET['bud']==1500)
$search.=" and u_bdgt between 1000 and 2000";
else
if($_GET['bud']==2500)
$search.=" and u_bdgt between 2000 and 3000";
else
if($_GET['bud']==3500)
$search.=" and u_bdgt between 3000 and 4000";
else
if($_GET['bud']==4500)
$search.=" and u_bdgt between 4000 and 5000";
else
if($_GET['bud']==5000)
$search.=" and u_bdgt>5000";
}


}



}
}














$adid=array();
$per=array();
$space=array();
$kitch=array();
$area=array();
$are=array();
$city=array();
$cit=array();
$state=array();
$wsh=array();
$furn=array();
$bud=array();
$mxd=array();
$mnd=array();
$i=0;


$host="localhost";
$user="demon96";
$pass="kritika96";

//for creating connection

$conn=mysql_connect($host,$user,$pass);
mysql_select_db("winterland",$conn);
$sql="SELECT * FROM gama_urd $search";
$result=mysql_query($sql,$conn);


$sql31="SELECT distinct u_city FROM gama_urd order by u_city asc";
$result31=mysql_query($sql31,$conn);

while($row31=mysql_fetch_assoc($result31))
{
$cit[$i]=$row31['u_city'];
++$i;
}


$i=0;

$sql31="SELECT distinct u_area FROM gama_urd order by u_area asc";
$result31=mysql_query($sql31,$conn);


while($row31=mysql_fetch_assoc($result31))
{
$are[$i]=$row31['u_area'];
++$i;
}




$i=0;



while($row=mysql_fetch_assoc($result))
{
$adid[$i]=$row['add_id'];
$per[$i]=$row['u_am'];

if($row['u_space']==1)
$space[$i]=$row['u_space']." Room";
else
$space[$i]=$row['u_space']." Rooms";


$kitch[$i]=$row['u_kitch'];
$area[$i]=$row['u_area'];
$city[$i]=$row['u_city'];
$state[$i]=$row['u_state'];
$bud[$i]=$row['u_bdgt'];
$mxd[$i]=$row['u_mxt'];
$mnd[$i]=$row['u_mnt'];


$aid=$row['add_id'];

$sql1="SELECT * FROM gama_uod where add_id='$aid'";
$result1=mysql_query($sql1,$conn);
$row1=mysql_fetch_assoc($result1);

$wsh[$i]=$row1['od_wshr'];
$furn[$i]=$row1['od_furn'];

++$i;
}

$i=0;


mysql_close($conn);

for($i=0;$i<100;++$i)
{

if(empty($adid[$i]))
{$l=$i;
break;
}
}


$check=$l;

for($i=0;$i<100;++$i)
{

if(empty($are[$i]))
{$l3=$i;
break;
}
}


for($i=0;$i<100;++$i)
{

if(empty($cit[$i]))
{$l4=$i;
break;
}
}


/*
print "<table >";
print "<tr><th>Add_id</th><th>Person</th><th>Space</th><th>Kitchen</th><th>Area</th><th>City</th><th>State</th><th>Budget</th><th>Max_t</th><th>Min_t</th></tr>";
for($j=0;$j<20;++$j)
{print "<tr><td>";
print $adid[$j];
print "</td><td>";
print $per[$j];
print "</td><td>";
print $space[$j];
print "</td><td>";;
print $kitch[$j];
print "</td><td>";
print $area[$j];
print "</td><td>";
print $city[$j];
print "</td><td>";
print $state[$j];
print "</td><td>";
print $bud[$j];
print "</td><td>";
print $mxd[$j];
print "</td><td>";
print $mnd[$j];
print "</td><td>";
print $wsh[$j];
print "</td><td>";
print $furn[$j];
print "</td></tr>"; 
}
print "</table>";

print $aw;
print "<br>";
print $l;
*/


print $are[0];

for($i=0;$i<$l;++$i)
{
if($kitch[$i]==0)
{$kitch[$i]="Without kitchen";}
else
{$kitch[$i]="With kitchen";}

if($furn[$i]==0)
{$furn[$i]="No";}
else
{$furn[$i]="Yes";}

}


?>