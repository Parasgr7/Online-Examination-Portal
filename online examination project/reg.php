<?php
	mysql_connect('localhost','root','');
	mysql_select_db('project');
if (isset($_POST['username'])&& isset($_POST['email'])&& isset($_POST['password'])&& isset($_POST['repassword'])&& isset($_POST['city'])
&& isset($_POST['addr'])&& isset($_POST['pin'])&& isset($_POST['contact']))
{

	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=md5($_POST['password']);
	$repassword=md5($_POST['repassword']);	
	$city=$_POST['city'];
	$address=$_POST['addr'];
	$contact=$_POST['contact'];
	$pin=$_POST['pin'];
	
	if($password==$repassword)
{	
	$query="INSERT INTO `regdata` (`Username`, `Password`, `Retype Password`, `Email`, `Contactno.`, `Address`, `City`, `PinCode`) VALUES ('$username', '$password', '$repassword', '$email', '$contact', '$address', '$city', '$pin')";
	if(mysql_query($query))
	echo "<h1>REGISTRATION SUCCESFULL</h1>";
	
}
	else echo"Password doesn't match";

}

	else "Register Carefully";
	
	
echo "<u><a href =\"user.php\">LOGIN</a></u>";
?>