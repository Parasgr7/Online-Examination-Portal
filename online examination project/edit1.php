<html>
<head><style>
	div{	background-color:#0099CC;
			width:100%;
			height:20%;
		}
	
	</style></head>
<body bgcolor="#CCFFFF" > 
<div align="center"><font size="6" color="#FFFFFF" >Online Examination System</font>
	 <br><font size="3" color="#FFFFFF"><i>Dear stress,lets breakup</i></font></div>
	<div style="height:40px; background-color:#0000CC"; align="right"><a href="reg.php"><button>Save</button></a>
<a href="usmang.php"><button>Dashboard</button></a>
<a href="logout.php"><button>Logout</button></a></div><br>

<?php
if(!isset($_SESSION['name']))
header('Location:user.php');
ob_start();
mysql_connect('localhost','root','');
mysql_select_db('project');

 
session_start();

if(isset($_SESSION['man']))
{
$n=$_SESSION['man'];


$query="SELECT * FROM `data` WHERE `Username`='$n'";
$done=mysql_query($query);
echo mysql_error();
if(mysql_num_rows($done)==1)
{

}
while($ro=mysql_fetch_assoc($done))
	{		
			$name=$ro['Username'];
			$pass=	$ro['Password'];
				$repass=	$ro['Retype Password'];
			$mail =$ro['Email'];
				$cont = $ro['Contactno.'];
				$addr=$ro['Address'];
				$city=$ro['City'];
				$pin=$ro['PinCode'];
	
	
	}
	
}

	echo "<table border='2' align='center' cellpadding='20' style='border-collapse:collapse'>";
	echo "<form method=\"POST\" action=\".php\">";
	echo "<tr>";
	echo "<td>"."Username"."</td>";
  echo "<td>"."<input type=\"text\" name=\"nam\" value=\"$name\"></td>";echo "</tr>";
 echo "<tr>";
  echo "<td>"."Password"."</td>";
    echo "<td>"."<input type=\"password\" name=\"nam\" value=\"$pass\"></td>";echo "</tr>";
  echo "<tr>";
  echo "<td>"."Retype Password"."</td>";
    echo "<td>"."<input type=\"password\" name=\"nam\" value=\"$repass\"></td>"; echo "</tr>";
	echo "<tr>";
  echo "<td>"."Email"."</td>";
    echo "<td>"."<input type=\"text\" name=\"nam\" value=\"$mail\"></td>"; echo "</tr>";
	echo "<tr>";
  echo "<td>"."Conatct no"."</td>";
    echo "<td>"."<input type=\"text\" name=\"nam\" value=\"$cont\"></td>"; echo "</tr>";
	echo "<tr>";
  echo "<td>"."Address"."</td>";
    echo "<td>"."<input type=\"text\" name=\"nam\" value=\"$addr\"></td>"; echo "</tr>";
	echo "<tr>";
  echo "<td>"."City"."</td>";
    echo "<td>"."<input type=\"text\" name=\"nam\" value=\"$city\"></td>"; echo "</tr>";
	echo "<tr>";
  echo "<td>"."Pin Code"."</td>";
   echo "<td>"."<input type=\"text\" name=\"nam\" value=\"$pin\"></td>";
  echo "</tr>";
  echo"<tr>";
  echo"</table>";
  
  echo"</form>";
  

?>
<br>

<div style="height:40px; background-color:#00CCFF" align="center">Developed by Paras(Team Conatus) <br>
  <b>COPYRIGHT@Parasgr2k16</b></div>

</body>
</html>