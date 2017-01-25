<?php

mysql_connect('localhost','root','');
mysql_select_db('project');



$sql="SELECT `Username`, `Email`, `Contactno.` FROM `data` " ;


$records=mysql_query($sql);


?>

<html>

<head>
<title>Manage Users</title>

<style>

tr{ background:#9966FF; }
td{	padding:4px; border:thin; }
tr:hover{background-color:#66FF66;}
div{	background-color:#0099CC;
			width:100%;
			height:20%;
		}
</style>
</head>

<body bgcolor="#33FFFF">
<div align="center"><font size="6" color="#FFFFFF" >Online Examination System</font>
	 <br><font size="3" color="#FFFFFF"><i>Dear stress,lets breakup</i></font></div>
	<div style="height:40px; background-color:#0000CC"; align="right"><a href="pend.php"><button style="40px">Pending Users</a></button>

<button style="40px">Delete</button>

<button style="40px">Test Conductors</button>

<a href="admwelcome.php"><button style="40px">Dashboard</a></button>
<a href="logout.php"><button style="40px">Logout</a></button>
</div>

<table cellpadding="20" width="600" border="2" style="border-collapse:collapse;" align="center">
<tr>

<th>Username</th>
<th>Email Id</th>
<th>Contact no.</th>
<th>Edit</th>
  <?php
 while($signin=mysql_fetch_assoc($records))
 {echo "<tr>";

  echo "<td>".$signin['Username']."</td>";
  
  echo "<td>".$signin['Email']."</td>";
  
  echo "<td>".$signin['Contactno.']."</td>";
    echo "<td>"."</td>";
 
  
  echo "</tr>";
  
  }


?></tr></table>
 <div style="height:40px; background-color:#00CCFF" align="center">Developed by Paras(Team Conatus)
		<br><b>COPYRIGHT@Parasgr2k16</div>

</body>
</html>


