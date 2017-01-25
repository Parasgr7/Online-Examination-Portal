
<?php
mysql_connect('localhost','root','');
	mysql_select_db('project');
if (isset($_POST['des'])&& isset($_POST['tname'])&& isset($_POST['code'])&& isset($_POST['from'])&& isset($_POST['to']))

{			
					$tesn=$_POST['select'];
				$des=$_POST['des'];

			$tname=$_POST['tname'];
			$des1=$des."::".$tname;
			$code=$_POST['code'];
		$from=$_POST['from'];
		$to=$_POST['to'];
		$date=$from." to ".$to;
	

$query="INSERT INTO `testdef` (`desc1`, `name`, `code`, `validity`) VALUES ('$des1', '$tesn', '$code','$date' )";
$run=mysql_query($query);
echo mysql_error();

}
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
	<div style="height:40px; background-color:#0000CC"; align="right"><a href="testmng.php"><button style="height:40px">ADD</button></a><button>Delete</button>

<button><a href="admwelcome.php">Dashboard</a></button>
<a href="logoutadmin.php" ><button>Logout</button></div></a><br />




<table width="717" height="81" border="2" align="center" cellpadding="20" style="border-collapse:collapse">
<tr>

<th width="119" height="61">Test Description</th>
<th width="136">Subject Name</th>
<th width="129">Test Secret Code</th>
<th width="65">Validity</th>
<th width="42">Edit</th>
</tr>

<?php

mysql_connect('localhost','root','');
	mysql_select_db('project');
	session_start();
	$uery="SELECT * FROM `testdef`";
	$un=mysql_query($uery);

while($tes=mysql_fetch_assoc($un))
{
	 $der=$tes['desc1'];
		$nam=$tes['name'];
		$cod=$tes['code'];
		
		$val=$tes['validity'];
		echo"<tr>";echo"<td>"."$der"."</td>" ;
		echo"<td>"."$nam"."</td>" ;
		echo"<td>"."$cod"."</td>" ;
		echo"<td>"."$val"."</td>" ;
		echo"<td>"."<form action='createtab.php' method='POST'><input type='hidden' name='code' value='".$cod."'> <input type=submit value='Insert'> </form>"."</td>" ;echo"</tr>";
	
		
		


}
?>

</table>
<br />

<div style="height:40px; background-color:#00CCFF" align="center">Developed by Paras(Team Conatus)
		<br><b>COPYRIGHT@Parasgr2k16</div>
</body></html>