<?php
ob_start();
mysql_connect('localhost','root','');
mysql_select_db('project');

 
session_start();
echo $name;
$query="SELECT * FROM `data` WHERE `Username`='$name'";
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
	
	echo "<table>";
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
  echo "<td>"."<input type=\"submit\"  value="."SAVE"."></td>";
  header('location:pend.php');
  echo "<td>"."<input type=\"submit\"  value="."DASHBOARD"."></td>";
   echo "<td>"."<input type=\"submit\"  value="."LOGOUT"."></td>";
  echo "</tr>";

  echo"</form>";
  

?>
<html>
<head></head>
<body bgcolor="#99FF00" > 

</body>
</html>