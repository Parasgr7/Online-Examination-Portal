<html>
<head>
<style>
	div{	background-color:#0099CC;
			width:100%;
			height:20%;
		}
	.demoInputBox{  width:100%;
    padding: 12px 20px;

    display:inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	height:25px
					
	
	}
	</style>
</head>
<body bgcolor="#33FFFF">
<form action="reg.php" method="POST">
<div align="center"><font size="6" color="#FFFFFF" >Online Examination System</font>
	 <br><font size="3" color="#FFFFFF"><i>Dear stress,lets breakup</i></font></div>
	<div style="height:40px; background-color:#0000CC"; align="right"><input type="submit" value="Register"></div>
<br>

<table border="2 " align="center" cellpadding="20"  style="border-collapse:collapse; margin:auto" >

<tr>
<td>Username</td>
<td ><input type="text" class="demoInputBox" name="username" required  /></td>
</tr>


<tr>
<td>Password</td>
<td><input type="password" class="demoInputBox" name="password" required /></td>
</tr>
<tr>
<td>ReType Password</td>
<td><input type="password" class="demoInputBox" name="repassword" required /></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" class="demoInputBox" name="email" required /> </td>
</tr>

<tr>
<td>Contant no.</td>
<td><input type="numerics" class="demoInputBox" name="contact" required /> </td>
</tr>
<tr>
<td>Address</td>
<td><textarea name="addr" style="width:100%; resize:none;" ></textarea> </td>
</tr>
<tr>
<td>City</td>
<td><input type="text" class="demoInputBox" name="city" required /></td>
</tr>

<tr>
<td>PIN CODE</td>
<td><input type="text" class="demoInputBox" name="pin" required /></td>
</tr>


</table>
<br>
<div style="height:40px; background-color:#00CCFF" align="center">Developed by Paras(Team Conatus)
		<br><b>COPYRIGHT@Parasgr2k16</div>
</body>

</html>
