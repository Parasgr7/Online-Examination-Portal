
<html>
<head><style>
	div{	background-color:#0099CC;
			width:100%;
			height:20%;
		}
	
	</style></head>
<body bgcolor="#33FFFF"><div align="center"><font size="6" color="#FFFFFF" >Online Examination System</font>
	 <br><font size="3" color="#FFFFFF"><i>Dear stress,lets breakup</i></font></div>
	<div style="height:40px; background-color:#0000CC"; align="right"></a></div>
<?php
session_start();

mysql_connect('localhost','root','');
mysql_select_db('project');
$count=0;

$i=1;

if(isset($_SESSION['count']))
   $count=$_SESSION['count'];
   
//while($i<3)
if(isset($_SESSION['test']))
    $i=$_SESSION['test'];//{
 

$query="SELECT * FROM `test` WHERE `ID`= '$i'";
$run=mysql_query($query);


if($run)
{	
	while($fet=mysql_fetch_assoc($run))
		{	

		echo"Question"."$i".":";
		$q=$fet['Question'];
			$p=$fet['Option1'];
			$r=$fet['Option2'];
			$s=$fet['Option3'];
			$t=$fet['Option4'];
			
			
			echo"<form action='practest1.php' method='POST'>";
			echo"$q";echo"<br />";
			echo"<input type='radio' name='lol' value='$p'/>";					

			echo"$p";echo"<br />";
			echo"<input type='radio' name='lol' value='$r'/>";

			echo"$r";echo"<br />";
			echo"<input type='radio' name='lol' value='$s'/>";echo"$s";echo"<br />";
			

			echo"<input type='radio' name='lol' value='$t'/>";
			echo"$t";echo"<br />";
			echo"<br />";echo"<br />";
			echo"<input type='submit'  value='Next'/>";
			
			echo"</form>";
echo"<br />";echo"<br />";
			
					mysql_connect('localhost','root','');
					mysql_select_db('project');
					
					if(!empty($_POST['lol']))
					{	$ans=$_POST['lol'];
						
						$query="SELECT * FROM `test` WHERE `ID` = $i";
						$run=mysql_query($query);
						while($q=mysql_fetch_assoc($run))
						{	
							echo $q['Answer'];
							if(strcmp($ans,$q['Answer'])==0)
							{
								$count++;
							}
							
						}
						echo $count;
						
						
					}
					
		
					
		

		
		}
}
$i=$i+1;
$_SESSION['test']=$i;

$_SESSION['count']=$count;

//}
if($i>6)
{session_unset($_SESSION['test']);
echo"TEST OVER";
echo"<br><a href='usmang.php'>BACK TO HOME</a>";

}


		
	

?>
<div style="height:40px; background-color:#00CCFF" align="center">Developed by Paras(Team Conatus)
		<br><b>COPYRIGHT@Parasgr2k16</div>
</body>
</html>
