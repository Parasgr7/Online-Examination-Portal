<html>
<head>

<style>
	div{	background-color:#0099CC;
			width:100%;
			height:20%;
		}
		</style></head>
		
<body>

<body bgcolor="#33FFFF">
<form method="post" action="submng.php" >
     <div align="center"><font size="6" color="#FFFFFF" >Online Examination System</font>
	 <br><font size="3" color="#FFFFFF"><i>Dear stress,lets breakup</i></font></div>
	<div style="height:40px; background-color:#0000CC"; align="right"><input style="height:40px" name="submit" type="submit" value="Save" /></div>
	<br>
<br>
<div align="center" style="width:500px; height:130px; margin-left:300px;">
  <table bgcolor="#33FFCC" >
    <tr > 
	<br>
      <td width="119" ;>Subject Name:</td>
      <td width="161"><input type="text" name="text" /></td>
    </tr>
    <tr>
      <td>Subject Description</td>
      <td><textarea name="area"></textarea></td>
    <tr> </tr>
  <td>
  </tr>
  </table>
</div>
</body></html></form>

<?php

ob_start();
mysql_connect('localhost','root','');
mysql_select_db('project');
session_start();

if(isset($_POST['text'])&& (isset($_POST['area'])))
{		
		$text=$_POST['text'];
		$area=$_POST['area'];
$query="INSERT INTO `submng` (`Subject Name`, `Sub Des`) VALUES ('$text', '$area');";
$done=mysql_query($query);
echo mysql_error();
if($done)
{
$_SESSION['name']=$text;
header('location:submng1.php');
}
else echo"what is diz??";}
?>
