<?php
session_start();

$ID=$_SESSION['addid'];

if(isset($_FILES['bedr1_name']))
{
$bedr1name=$_FILES['bedr1_name']['name'];
$bedr1tmp=$_FILES['bedr1_name']['tmp_name'];
$bedr1size=$_FILES['bedr1_name']['size'];


$type=pathinfo($bedr1name,PATHINFO_EXTENSION);

$bedr1name=$ID."bedr1.jpg";

if($type!=
"jpg"&&
$type!="png"
&&$type!=
"jpeg"
&&$type!=
"gif")
{
print "Inncorrect file type";
}
else
if($bedr1size>(3*1024*1024))
{
print "file size too big";
}
else
if(!bedr1tmp)
{
print "no file selected";
}
else
{
move_uploaded_file($bedr1tmp,"upload/$bedr1name");
}
     } 


if(isset($_FILES['bedr2_name']))
{

$bedr2name=$_FILES['bedr2_name']['name'];
$bedr2tmp=$_FILES['bedr2_name']['tmp_name'];
$bedr2size=$_FILES['bedr2_name']['size'];


$type=pathinfo($bedr2name,PATHINFO_EXTENSION);

$bedr2name=$ID."bedr2.jpg";

if($type!=
"jpg"&&
$type!="png"
&&$type!=
"jpeg"
&&$type!=
"gif")
{
print "Inncorrect file type";
}
else
if($bedr2size>(3*1024*1024))
{
print "file size too big";
}
else
if(!bedr2tmp)
{
print "no file selected";
}
else
{
move_uploaded_file($bedr2tmp,"upload/$bedr2name");
}
      }

















if(isset($_FILES['kitch1_name']))
{

$kitch1name=$_FILES['kitch1_name']['name'];
$kitch1tmp=$_FILES['kitch1_name']['tmp_name'];
$kitch1size=$_FILES['kitch1_name']['size'];


$type=pathinfo($kitch1name,PATHINFO_EXTENSION);

$kitch1name=$ID."kitch1.jpg";

if($type!=
"jpg"&&
$type!="png"
&&$type!=
"jpeg"
&&$type!=
"gif")
{
print "Inncorrect file type";
}
else
if($kitch1size>(3*1024*1024))
{
print "file size too big";
}
else
if(!kitch1tmp)
{
print "no file selected";
}
else
{
move_uploaded_file($kitch1tmp,"upload/$kitch1name");
}
      }



if(isset($_FILES['kitch2_name']))
{

$kitch2name=$_FILES['kitch2_name']['name'];
$kitch2tmp=$_FILES['kitch2_name']['tmp_name'];
$kitch2size=$_FILES['kitch2_name']['size'];


$type=pathinfo($kitch2name,PATHINFO_EXTENSION);

$kitch2name=$ID."kitch2.jpg";

if($type!=
"jpg"&&
$type!="png"
&&$type!=
"jpeg"
&&$type!=
"gif")
{
print "Inncorrect file type";
}
else
if($kitch2size>(3*1024*1024))
{
$err="FILE SIZE TOO BIG";
}
else
if(!kitch2tmp)
{
$err1="no file selected";
}
else
{
move_uploaded_file($kitch2tmp,"upload/$kitch2name");

}
      }















if(isset($_FILES['hall1_name']))
{

$hall1name=$_FILES['hall1_name']['name'];
$hall1tmp=$_FILES['hall1_name']['tmp_name'];
$hall1size=$_FILES['hall1_name']['size'];


$type=pathinfo($hall1name,PATHINFO_EXTENSION);

$hall1name=$ID."hall1.jpg";

if($type!=
"jpg"&&
$type!="png"
&&$type!=
"jpeg"
&&$type!=
"gif")
{
print "Inncorrect file type";
}
else
if($hall1size>(3*1024*1024))
{
print "file size too big";
}
else
if(!hall1tmp)
{
print "no file selected";
}
else
{
move_uploaded_file($hall1tmp,"upload/$hall1name");

}
      }



if(isset($_FILES['hall2_name']))
{

$hall2name=$_FILES['hall2_name']['name'];
$hall2tmp=$_FILES['hall2_name']['tmp_name'];
$hall2size=$_FILES['hall2_name']['size'];


$type=pathinfo($hall2name,PATHINFO_EXTENSION);

$hall2name=$ID."hall2.jpg";

if($type!=
"jpg"&&
$type!="png"
&&$type!=
"jpeg"
&&$type!=
"gif")
{
print "Inncorrect file type";
}
else
if($hall2size>(3*1024*1024))
{
print "file size too big";
}
else
if(!hall2tmp)
{
print "no file selected";
}
else
{
move_uploaded_file($hall2tmp,"upload/$hall2name");

}
      }












if(isset($_FILES['bath1_name']))
{

$bath1name=$_FILES['bath1_name']['name'];
$bath1tmp=$_FILES['bath1_name']['tmp_name'];
$bath1size=$_FILES['bath1_name']['size'];


$type=pathinfo($bath1name,PATHINFO_EXTENSION);

$bath1name=$ID."bath1.jpg";

if($type!=
"jpg"&&
$type!="png"
&&$type!=
"jpeg"
&&$type!=
"gif")
{
print "Inncorrect file type";
}
else
if($bath1size>(3*1024*1024))
{
print "file size too big";
}
else
if(!bath1tmp)
{
print "no file selected";
}
else
{
move_uploaded_file($bath1tmp,"upload/$bath1name");

}
      }



if(isset($_FILES['bath2_name']))
{

$bath2name=$_FILES['bath2_name']['name'];
$bath2tmp=$_FILES['bath2_name']['tmp_name'];
$bath2size=$_FILES['bath2_name']['size'];


$type=pathinfo($bath2name,PATHINFO_EXTENSION);

$bath2name=$ID."bath2.jpg";

if($type!=
"jpg"&&
$type!="png"
&&$type!=
"jpeg"
&&$type!=
"gif")
{
print "Inncorrect file type";
}
else
if($bath2size>(3*1024*1024))
{
print "file size too big";
}
else
if(!bath2tmp)
{
print "no file selected";
}
else
{
move_uploaded_file($bath2tmp,"upload/$bath2name");

}
      }















if(isset($_FILES['out1_name']))
{

$out1name=$_FILES['out1_name']['name'];
$out1tmp=$_FILES['out1_name']['tmp_name'];
$out1size=$_FILES['out1_name']['size'];


$type=pathinfo($out1name,PATHINFO_EXTENSION);

$out1name=$ID."out1.jpg";

if($type!=
"jpg"&&
$type!="png"
&&$type!=
"jpeg"
&&$type!=
"gif")
{
print "Inncorrect file type";
}
else
if($out1size>(3*1024*1024))
{
print "file size too big";
}
else
if(!out1tmp)
{
print "no file selected";
}
else
{
move_uploaded_file($out1tmp,"upload/$out1name");

}
      }



if(isset($_FILES['out2_name']))
{

$out2name=$_FILES['out2_name']['name'];
$out2tmp=$_FILES['out2_name']['tmp_name'];
$out2size=$_FILES['out2_name']['size'];


$type=pathinfo($out2name,PATHINFO_EXTENSION);

$out2name=$ID."out2.jpg";

if($type!=
"jpg"&&
$type!="png"
&&$type!=
"jpeg"
&&$type!=
"gif")
{
print "Inncorrect file type";
}
else
if($out2size>(3*1024*1024))
{
print "file size too big";
}
else
if(!out2tmp)
{
print "no file selected";
}
else
{
move_uploaded_file($out2tmp,"upload/$out2name");

}
      }


$i1="upload/".$ID."bedr1.jpg";
$i2="upload/".$ID."bedr2.jpg";
$i3="upload/".$ID."kitch1.jpg";
$i4="upload/".$ID."kitch2.jpg";
$i5="upload/".$ID."hall1.jpg";
$i6="upload/".$ID."hall2.jpg";
$i7="upload/".$ID."bath1.jpg";
$i8="upload/".$ID."bath2.jpg";
$i9="upload/".$ID."out1.jpg";
$i10="upload/".$ID."out2.jpg";


if(!empty($_POST['del12']))
{
if($_POST['del11']==1)
{unlink($i1);
}}

if(!empty($_POST['del22']))
{
if($_POST['del21']==1)
{unlink($i2);
}
}

if(!empty($_POST['del32']))
{
if($_POST['del31']==1)
{unlink($i3);
}
}

if(!empty($_POST['del42']))
{
if($_POST['del41']==1)
{unlink($i4);
}
}

if(!empty($_POST['del52']))
{
if($_POST['del51']==1)
{unlink($i5);
}
}

if(!empty($_POST['del62']))
{
if($_POST['del61']==1)
{unlink($i6);
}
}

if(!empty($_POST['del72']))
{
if($_POST['del71']==1)
{unlink($i7);
}
}

if(!empty($_POST['del82']))
{
if($_POST['del81']==1)
{unlink($i8);
}
}

if(!empty($_POST['del92']))
{
if($_POST['del91']==1)
{unlink($i9);
}
}

if(!empty($_POST['del102']))
{
if($_POST['del101']==1)
{unlink($i10);
}
}


?>