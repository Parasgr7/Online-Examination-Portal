<?php
$code=$_POST['code'];

mysql_connect('localhost','root','');
mysql_select_db('project');
session_start();
 echo "HELOOOO";
$query=mysql_query("CREATE TABLE `project`.`$code` ( `ID` INT NOT NULL AUTO_INCREMENT , `Question` VARCHAR(20) NOT NULL , `Option1` VARCHAR(20) NOT NULL, `Option2` VARCHAR(20) NOT NULL, `Option3` VARCHAR(20) NOT NULL, `Option4` VARCHAR(20) NOT NULL, `Answer` VARCHAR(20) NOT NULL,`Marks` INT NOT NULL, PRIMARY KEY (`ID`)) ENGINE = InnoDB");
?>
<html>
<head>
<title>Create Test</title>
<style>
textarea
	{
    width: 52%;
    height: 35px;
    padding: 4px;
    box-sizing: border-box;
    border: 0px 2px 2px 2px solid black;
    border-radius: 4px;
    background-color:#FFFFFF;
	resize:none;
	}
	div{	background-color:#0099CC;
			width:100%;
			height:20%;
		}
</style>
</head>
<body bgcolor="#CCFFFF">
<form method="post" action="createtab.php">
 <div align="center"><font size="6" color="#FFFFFF" >Online Examination System</font>
	 <br><font size="3" color="#FFFFFF"><i>Dear stress,lets breakup</i></font></div>
	<div style="height:40px; background-color:#0000CC"; align="right"><input type="button" value="Save" onClick=""><a href=""><button>Cancel</button></a><a href=""><button>Manage Test</button></a><a href="logout.php"><button>Logout</button></a></div>

<br>
<br>
Question:	<textarea name="text"></textarea><br><br>


Option A:	<input type="text" name="op1" /><br><br>

Option B:	<input type="text" name="op2" /><br><br>


Option C:	<input type="text" name="op3"/><br><br>


Option D:	<input type="text" name="op4"/><br><br>
Correct Answer:	<select name="ans">
<option selected="selected" disabled="disabled">Options</option>
<option value="A">A</option>
<option value="B">B</option>
<option value="C">C</option>
<option value="D">D</option>
</select><br><br>
Marks:	<input type="text" name="marks"/><br><br>
</form>
<div style="height:40px; background-color:#00CCFF" align="center">Developed by Paras(Team Conatus)
		<br><b>COPYRIGHT@Parasgr2k16</div>

</body>
</html>	
<?php
mysql_connect('localhost','root','');
mysql_select_db('project');
session_start();
$code=$_SESSION['code'];
if(isset($_POST['text'])&& isset($_POST['ans'])&& isset($_POST['marks']) && isset($_POST['op1'])&& isset($_POST['op2'])&& isset($_POST['op3'])&& isset($_POST['op4']))
{
			$text=$_POST['text'];
		
			$marks=$_POST['marks'];
			$op1=$_POST['op1'];
			$op2=$_POST['op2'];
			$op3=$_POST['op3'];
			$op4=$_POST['op4'];
			
			if(	$_POST['ans']=="A")
				$ans=$op1;
			elseif ($_POST['ans']=="B")
				$ans=$op2;
			elseif ($_POST['ans']=="C")
				$ans=$op3;
			elseif ($_POST['ans']=="D")
				$ans=$op4;
				
				
	$query="INSERT INTO `$code` (`ID`, `Question`, `Option1`, `Option2`, `Option3`, `Option4`, `Answer`, `Marks`) VALUES (NULL, '$text', '$op1', '$op2', '$op3', '$op4', '$ans', '$marks')";
	$run=mysql_query($query);
	echo mysql_error();
}

?>
