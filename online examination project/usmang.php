<?php
session_start();
 $_SESSION['man']=$_SESSION['name'];
?>
<html>
<head>
<title>User Welcome</title>

<style>
div{  
	
	background-color: #00CCFF;
	padding:40px;
	box-sizing: border-box;
    border: 0px 2px 2px 2px solid black;
    border-radius: 8px;
	
	position:relative;
	} 
	
</style>
</head>

<body bgcolor="#33FFFF">
<div style="background-color:0099CC; width:100%; height:20%" align="center"><font size="6" color="#FFFFFF" >Online Examination System</font>
	 <br><font size="3" color="#FFFFFF"><i>Dear stress,lets breakup</i></font></div>
	<div style="background-color:0000CC; width:100%; height:40px" style="height:40px; background-color:#0000CC"; align="right"><a href="logout.php"><button style="height:40px">Logout</a></button></div>

<div style="float:left"> <a href="usmang.php">View results</a></div>
<div style="float: right"> <a href="">New Tests</a></div>

<br>
<br>
<br>

<div style=" margin-left:440px; width:200px"> <a href="edit1.php">Edit Profile</a></div>
<div style=" float:left"> <a href="">Practice tes</a></div>
<div style=" float:right"><a href=""> Resume TEst</a></div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>


<div style="height:40px; background-color:#00CCFF" align="center">Developed by Paras(Team Conatus)
		<br><b>COPYRIGHT@Parasgr2k16</div>
</body>
</html>
