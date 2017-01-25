<?php

mysql_connect('localhost','root','');
mysql_select_db('project');

$query="SELECT * FROM `submng`";
$done=mysql_query($query);


if(mysql_num_rows($done)==1)
{

}
?>
<html>
<head>
<style>
	div{	background-color:#0099CC;
			width:100%;
			height:20%;
		}
	
	</style></head>
<body bgcolor="#33FFFF">
 <div align="center"><font size="6" color="#FFFFFF" >Online Examination System</font>
	 <br><font size="3" color="#FFFFFF"><i>Dear stress,lets breakup</i></font></div>
	<div style="height:40px; background-color:#0000CC"; align="right"></div><br>

<table align="center" cellpadding="20" width="600" border="2" style="border-collapse:collapse;">
<tr>

<th>Subject Name</th>
<th>Subject Description</th>
<th>Edit</th>
<tr>
<?php
while($ro=mysql_fetch_assoc($done))
	{		
			echo"<tr>";
			echo"<td>".$ro['Subject Name']."</td>";
			echo "<td>".$ro['Sub Des']."</td>";
			
			echo "<td>"."</td>";
			echo"</tr>";
			
			
	
	
	}
?>
	
</tr></tr></table><br>

<div style="height:40px; background-color:#00CCFF" align="center">Developed by Paras(Team Conatus)
		<br><b>COPYRIGHT@Parasgr2k16</div>
</body></html>