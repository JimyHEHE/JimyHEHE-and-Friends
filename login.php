<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
</head>
<body>
<div align="center">
	
	<h3>Log In</h3>
		<form id="login-form" method="post" action="authen.php">
			<table border="0" cellpadding="5" cellspacing="1" bgcolor="white" style="padding: 20px; border-top: 1px solid black; border-left: 2px solid black; border-right: 2px solid black; border-bottom: 1px solid black; border-radius: 10px">
				<tr>
					<td><label for="user_id">Username </label></td>
					<td>: <input type="text" name="user_id" id="user_id"><br><br></td>
				</tr>
				<tr>
					<td><label for="user_pass">Password </label></td>
					<td>: <input type="password" name="user_pass" id="user_pass"></td>
				</tr>
				<tr>
					<td colspan="3"><center><input type="submit" value="login"></center></td>
				</tr>
				<tr>
					<td><center>Don't have an account? <a href="signup.php">Sign up now</a>.</center></td>
				</tr>
			</table>
		</form>
</div>
</body>
</html>