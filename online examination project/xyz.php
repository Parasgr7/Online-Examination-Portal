<?php
   ob_start(); 
	mysql_connect('localhost','root','');
	mysql_select_db('project');
	if(isset ($_POST['username']))
	{	
		$qwe=$_POST['username'];
		$pass=md5($_POST['password']);
		$quet="SELECT * FROM `data` WHERE `Username`='$qwe' AND `Password`='$pass'";
		$hey=mysql_query($quet);
		if(mysql_num_rows($hey)==1)
		{	session_start();
		    $_SESSION['name']=$qwe;
//			$_SESSION['comment']="Wait till admin approve you";
	        header('location:usmang.php');
			
		}
		
		else{
		    $quet1="SELECT * FROM `regdata` WHERE `Username`='$qwe' AND `Password`='$pass'";
		    $hey1=mysql_query($quet1);
		if(mysql_num_rows($hey1)==1)
			echo "Wait Till admin approove you";
		
		else
		 echo "<h1>"."Please Register yourself first"."</h1>";
		 }
		}
	ob_flush();
?>