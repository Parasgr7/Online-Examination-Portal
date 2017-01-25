

<html>
<head>
	<title> User Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
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
	<div style="height:40px; background-color:#0000CC"; align="right"><a href="registration.php"><button style="height:40px">Registration</button></a></div>
	<br>
<br>
<p>
	<div style="background-color:#CCCCCC; width:400px; height:250px; height:50%; margin:auto; padding-top:20px"; align="center">
 <form method="POST" action= "xyz.php">
  
         <p>
         	Username:<br />
        	<input type="text" id="username" name="username"  placeholder="Username" required />
        </p>
       
		 <p>
        	Password:<br />
        	<input type="password" id="password" name="password" placeholder="password" required />
        </p>
		
        <p>
       	
        	<input type="submit" id="btn" value="Login" />
        </p>
		 <p><?php //session_start();$_SESSION['comment'];?></p>
      </form>
		</div>
		</p>
<p>
		<div style="height:40px; background-color:#00CCFF" align="center">Developed by Paras(Team Conatus)
		<br><b>COPYRIGHT@Parasgr2k16</div></p>
</body>
</html>
