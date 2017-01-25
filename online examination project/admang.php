<?php

mysql_connect('localhost','root','');
mysql_select_db('project');


session_start();


$sql="SELECT `Username`, `Email`, `Contactno.` FROM `data` " ;


$records=mysql_query($sql);


?>

<html>

<head>
<title>Manage Users</title>
<style>
	div{	background-color:#0099CC;
			width:100%;
			height:20%;
		}
		</style>
</head>

<body bgcolor="#33FFFF">
<div align="center"><font size="6" color="#FFFFFF" >Online Examination System</font>
	 <br><font size="3" color="#FFFFFF"><i>Dear stress,lets breakup</i></font></div>
	<div style="height:40px; background-color:#0000CC"; align="right"><button><a href="pend.php">Pending Users</a></button>
<button><a href="">Add</a></button>
<button>Delete</button>

<button>Test Conductors</button>

<button><a href="admwelcome.php">Dashboard</a></button>
<button>Logout</button>
</div>

<br>

<table cellpadding="20" width="600" border="2" style="border-collapse:collapse" align="center">
<tr>

<th>Username</th>
<th>Email Id</th>
<th>Contact no.</th>
<th>Edit</th>
<tr>


<?php
 while($signin=mysql_fetch_assoc($records))
 {echo "<tr>";

  echo "<td>".$signin['Username']."</td>";
  
  echo "<td>".$signin['Email']."</td>";
  
  echo "<td>".$signin['Contactno.']."</td>";
    echo "<td>"."</td>";
 
  
  echo "</tr>";
  
  }


?></tr></tr></table><br>

<div style="height:40px; background-color:#00CCFF" align="center">Developed by Paras(Team Conatus)
		<br><b>COPYRIGHT@Parasgr2k16</div>
</body>
</html>


