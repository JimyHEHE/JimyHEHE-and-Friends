<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
</head>
<body>
<center>
	<h2>Sign Up</h2>

	<table border="0" cellpadding="5" cellspacing="1" bgcolor="white" style="padding: 20px; border-top: 1px solid black; border-left: 2px solid black; border-right: 2px solid black; border-bottom: 1px solid black; border-radius: 10px">

	<form action="" method="post">
		
		<tr>
			<td>Nama</td><td>:</td><td><input type="text" name="nama" required><br><br></td>
		</tr>
		<tr>
			<td>Emel</td><td>:</td><td><input type="text" name="emel" required><br><br></td>
		</tr>
		<tr>
			<td>Katalaluan</td><td>:</td><td><input type="text" name="katalaluan"><br><br></td>
		</tr>
		<tr>
			<td>NoTelefon</td><td>:</td><td><input type="text" name="notelefon"><br><br></td>
		</tr>
		<tr>
			<td colspan="3"><center><input type="Submit" name="hantar" value="Sign In"><br></center></td>
		</tr>
		<tr>
			<td><center>Already have an account? <a href="login.php">Login here</a>.</center></td>
		</tr>
	</form>
		
	</table>
</center>
</body>

<!-- Memproses input yang dimasukkan ke dalam db -->
<?php 
	include 'config.php';
	if (isset($_POST['hantar'])) {
		
	$nama = $_POST['nama'];
	$emel = $_POST['emel'];
	$katalaluan = $_POST['katalaluan'];
	$notelefon = $_POST['notelefon'];

	$result = mysqli_query($link, "INSERT INTO users (nama, emel, katalaluan, notelefon) VALUES ('$nama','$emel','$katalaluan','$notelefon')");

	echo "<script>alert('Berjaya Daftar. Sila login akaun anda.');
	window.location='login.php'</script>";
	}
 ?>
</html>