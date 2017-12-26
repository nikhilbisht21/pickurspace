<?php
session_start();

$id=$_COOKIE['userid'];
$l=0;


$adid=array();
$prop=array();
$room=array();
$kitch=array();
$area=array();
$are=array();
$gen=array();
$pbed=array();
$city=array();
$cit=array();
$price=array();
$wsh=array();
$furn=array();
$ame1=array();
$ame2=array();
$i=0;


$search="";
$sort="";



if(!empty($_GET['search']))
{


if(!empty($_GET['room'])||!empty($_GET['pbed'])||!empty($_GET['prop'])||!empty($_GET['area'])||!empty($_GET['city']))
{

$search="where";

if(!empty($_GET['room']))
{$search.=" p_room='".$_GET['room']."'";
}

if(!empty($_GET['pbed']))
{
if($search=='where')
$search.=" p_bed='".$_GET['pbed']."'";
else
$search.=" and p_bed='".$_GET['pbed']."'";
}

if(!empty($_GET['prop']))
{
if($search=='where')
$search.=" p_type='".$_GET['prop']."'";
else
$search.=" and p_type='".$_GET['prop']."'";
}

if(!empty($_GET['area']))
{
if($search=='where')
$search.=" p_area='".$_GET['area']."'";
else
$search.=" and p_area='".$_GET['area']."'";
}

if(!empty($_GET['city']))
{
if($search=='where')
$search.=" p_dist='".$_GET['city']."'";
else
$search.=" and p_dist='".$_GET['city']."'";
}



}
}



if(!empty($_GET['sort']))
{


if(!empty($_GET['bath'])||!empty($_GET['kitch'])||!empty($_GET['bed'])||!empty($_GET['price']))
{

$sort="and";


if(!empty($_GET['bath']))
{$sort.=" gama_od.od_wshr='".$_GET['bath']."'";
}

if(!empty($_GET['kitch']))
{$sort.=" gama_pd.p_kitch='".$_GET['kitch']."'";
}

if(!empty($_GET['bed']))
{$sort.=" gama_od.od_bed='".$_GET['bed']."'";
}

if(!empty($_GET['price']))
{

if($_GET['price']==1000)
$sort.=" gama_pp.price>1000";
else
if($_GET['price']==1500)
$sort.=" gama_pp.price between 1000 and 2000";
else
if($_GET['price']==2500)
$sort.=" gama_pp.price between 2000 and 3000";
else
if($_GET['price']==3500)
$sort.=" gama_pp.price between 3000 and 4000";
else
if($_GET['price']==4500)
$sort.=" gama_pp.price between 4000 and 5000";
else
if($_GET['price']==5000)
$sort.=" gama_pp.price>5000";


}



}
}









$host="localhost";
$user="demon96";
$pass="kritika96";

//for creating connection

$conn=mysql_connect($host,$user,$pass);
mysql_select_db("winterland",$conn);




$sql31="SELECT distinct p_dist FROM gama_pd order by p_dist asc";
$result31=mysql_query($sql31,$conn);

while($row31=mysql_fetch_assoc($result31))
{
$cit[$i]=$row31['p_dist'];
++$i;
}


$i=0;

$sql31="SELECT distinct p_area FROM gama_pd order by p_area asc";
$result31=mysql_query($sql31,$conn);


while($row31=mysql_fetch_assoc($result31))
{
$are[$i]=$row31['p_area'];
++$i;
}




$i=0;


if(!empty($_GET['search']))
{$sql="SELECT *FROM gama_pd $search";}
else
if(!empty($_GET['sort']))
{$sql="select gama_pd.add_id,p_type,p_room,p_kitch,p_area,p_dist,price from gama_pd,gama_od,gama_pp,gama_ame where gama_pd.add_id=gama_od.add_id and gama_pd.add_id=gama_ame.add_id and gama_pd.add_id=gama_pp.add_id $sort";
}
else
$sql="SELECT *FROM gama_pd";

$result=mysql_query($sql,$conn);

while($row=mysql_fetch_assoc($result))
{

$adid[$i]=$row['add_id'];
$prop[$i]=$row['p_type'];

if($row['p_room']==1)
$room[$i]=$row['p_room']." Room";
else
$room[$i]=$row['p_room']." Rooms";

if($row['p_bed']==0)
$pbed[$i]="with no bed";
else
$pbed[$i]="with ".$row['p_bed']." bed in each";

if($row['p_kitch']==0)
$kitch[$i]="Without Kitchen";
else
$kitch[$i]="&nbsp&nbsp&nbspWith Kitchen";

$area[$i]=$row['p_area'];
$city[$i]=$row['p_dist'];

$aid=$adid[$i];

$sql1="SELECT *FROM gama_od where add_id='$aid'";
$result1=mysql_query($sql1,$conn);
$row1=mysql_fetch_assoc($result1);

$wsh[$i]=$row1['od_wshr'];

if($row1['od_furn'])
$furn[$i]="&nbsp&nbsp&nbspFurnished";
else
$furn[$i]="Non Furnished";

if($row1['od_hall'])
$ame1[$i]="Hall";


$sql2="SELECT price FROM gama_pp where add_id='$aid'";
$result2=mysql_query($sql2,$conn);
$row2=mysql_fetch_assoc($result2);

$price[$i]=$row2['price'];

$sql22="SELECT pf_gen FROM gama_pf where add_id='$aid'";
$result22=mysql_query($sql22,$conn);
$row22=mysql_fetch_assoc($result22);

if($row22['pf_gen']=='Male')
$gen[$i]="For Boys Only";
else
if($row22['pf_gen']=='Female')
$gen[$i]="For Girls Only";
else
if($row22['pf_gen']=='Both')
$gen[$i]="For<br>Both";


$sql3="SELECT *FROM gama_ame where add_id='$aid'";
$result3=mysql_query($sql3,$conn);
$row3=mysql_fetch_assoc($result3);

if($furn[$i]=='Non-Furnished')
{
if($row3['ame_semi'])
$furn[$i]="Semi-Furnished";
}

if($row3['ame_ac'])
$ame1[$i]="AC";
else
if($row3['ame_cbl'])
$ame1[$i]="Cabel TV";
else
if($row3['ame_intr'])
$ame1[$i]="Internet";
else
if($row3['ame_fan'])
$ame1[$i]="Fan";



if($row3['ame_gee'])
$ame2[$i]="Geezer";
else
if($row3['ame_frig'])
$ame2[$i]="Refrigerator";
else
if($row3['ame_park'])
$ame2[$i]="Parking";



++$i;
}


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
print "<tr><th>Add_id</th><th>Type</th><th>Room</th><th>Kitchen</th><th>BAthroom</th><th>Area</th><th>City</th><th>Furn</th><th>Ame1</th><th>Ame2</th><th>Price</th></tr>";
for($j=0;$j<20;++$j)
{print "<tr><td>";
print $adid[$j];
print "</td><td>";
print $prop[$j];
print "</td><td>";
print $room[$j];
print "</td><td>";;
print $kitch[$j];
print "</td><td>";
print $wsh[$j];
print "</td><td>";
print $area[$j];
print "</td><td>";
print $city[$j];
print "</td><td>";
print $furn[$j];
print "</td><td>";
print $ame1[$j];
print "</td><td>";
print $ame2[$j];
print "</td><td>";
print $price[$j];
print "</td><td>";
print "</td></tr>"; 
}
print "</table>";

print $aw;
print "<br>";
print $l;
*/



?>