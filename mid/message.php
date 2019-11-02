<?php

	session_start();
	
	if(isset($_SESSION['uname']) && isset($_COOKIE['uname'])){
?>





<html>
<head>
	<title> Messages </title>
</head>
<body>

	<center>
		<form method="post" action="message.php">
			<table border="0">
				<tbody>
					<tr>
						<td width="200px"><h2><i><font color="Red">Freelance</font></i></h2></td>
						<td width="90px"><a href = "home.php">Profile</a></td>
						<td width="90px"><a href = "message.php">Messages</a></td>
						<td width="90px"><a href = "earning.php">Earnings</a></td>
						<td width="100px"><a href ="notifi.php">Notifications</a></td>
						<td width="150px"><a href ="buyer.php">Buyer Request</a></td>
						<td width="90px"><a href = "balance.php">Show Balance</a><br>
						<td><a href="home.php"><img src="a.jpg" width="40px" height="40px"></a>
						<br>
						<a href = "logout.php"><h3>LogOut</h3></a></td>
					</tr>
					
					 <tr>
                        <td colspan="8" style="border-top:4px solid #888;"></td>
                    </tr>
				
				    <tr>
						<td> <br> </td>
					</tr>
					
					<tr>
						<td> <br> </td>
					</tr>
					
					<tr rowspan="2" >
						<td><font size="+3"><u> Active Users </u></font>
						<br>
						<p>no active users</p>
						</td>
						<td> <br> </td>
					</tr>
					
					<tr>
						<td> <br> </td>
					</tr>
					
					<tr>
						<td> <br> </td>
					</tr>
					
					<tr>
						<td> <br> </td>
					</tr>
					
					<tr>
						<td> <br> </td>
					</tr>
					
					<tr>
						<td> <br> </td>
					</tr>
					
					<tr>
						<td> <br> </td>
					</tr>
					
					<tr>
						<td> <br> </td>
					</tr>
					
					<tr>
						<td> <br> </td>
					</tr>
					
					<tr>
						<td> <br> </td>
					</tr>
					
					<tr>
						<td> <br> </td>
					</tr>
					
					<table border="0">
					<tr>
						<td></td>
						
						<td align="center" height="100" width="100"> <input type="text" name="text">
						
						
						</td>
						
					
						<td><input type="submit" name="submit" value="Send"></td>
					</tr>
					</table>
	          </tbody>
			</table>
		</form>
	</center>
</body>
</html>


<?php		
	}else{
		header('location: signin.php');
	}

?>
