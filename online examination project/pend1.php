<?php
ob_start();
mysql_connect('localhost','root','');
mysql_select_db('project');

if (isset($_POST['signin']))
{
	$name=$_POST['signin'];
	
$sql="INSERT INTO `data` SELECT  * FROM `regdata` WHERE`Username`='$name' " ;

$recor=mysql_query($sql);
echo mysql_error();
if($recor)
	{echo" sucess";
	$oop="DELETE FROM `regdata` WHERE `Username`='$name'";

	$run= mysql_query($oop);
     	echo mysql_error();
	if($run)
	header('location:pend.php');
    }
else
  echo"wrong";
ob_flush();
}
	
?>
