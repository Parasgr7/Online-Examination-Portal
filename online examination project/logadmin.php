<?php

mysql_connect('localhost','root','');
	mysql_select_db('project');
if (isset($_POST['aname'])&& isset($_POST['password']))
{
	$aname=$_POST['aname'];
	$password=($_POST['password']);	
	
	$query ="SELECT * FROM admin WHERE Name='".$aname."' AND Password='".$password."'";
    $run=mysql_query($query);

	if(mysql_num_rows($run)==1)
	{ $arr=mysql_fetch_array($run);
	    
          session_start();	
		  $SESSION['username']=$arr['Name'];
		  header('location:admwelcome.php');
	}
	else echo " reee";


	
}




?>