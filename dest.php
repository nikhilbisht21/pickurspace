<?php
session_start();



switch($_SESSION['process'])
{
case '1': session_destroy();
                header('location:fetch.php');
	break;

}

print "process=".$_SESSION['process'];


//session_destroy();
//setcookie('userid','',time() -3600);
//header('location:index.php');

?>