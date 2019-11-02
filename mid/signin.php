<?php
	session_start();
if(isset($_POST['login'])){
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		
		
		if(empty($email) == true || empty($pass) == true){
			echo "fill all!";
		}
		else{
            $name='data.txt';
	$read = fopen($name, 'r');
	
		$fetch = fread($read, filesize($name));
		fclose($read);
		$lines=explode("\n", $fetch);
		foreach ($lines as $line) {
		$user = explode("|", $line);
	
		if($user[1] == $email && $user[2] == $pass){
				if($user[4]=='Admin'){
			$_SESSION['uname']=$user[0];
			header('location: AdminHome.php');
		}
		elseif($user[4]=='Seller')
			{
			setcookie("uname", $user[4], time()+3600, "/");
			$_SESSION['uname']=$user[4];
			header('location: home.php');
		}
		}
		

     	}	
	
	}
}
		


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
	<form method="POST" action="signin.php">
		
			<legend><font size="+1"><b>LOG IN <hr width="100"></b></font></legend>
			<table >
				<tr>
					<td> <br> </td>
				</tr>
				
				<tr>
					<td>
						Email:<br><input type="email" name="email" value="">
					</td>
				</tr>
				<tr>
					<td>
						Password: <br><input type="password" name="pass" value="">
					</td>
				</tr>
			
				<tr>
					<td> <br> </td>
				</tr>
			
			<tr>
			<td style="border-top:1px solid #888;"><br>
			<input type="submit" name="login" value="Login"/><br> <br>
			Haven't registered yet?<a href="registration.php">Register</a>
			</td>
			</tr>
			
			</table>

		


	</form>
	</center>


</body>
</html>