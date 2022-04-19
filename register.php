<!DOCTYPE html>
<html>
<head>
	<title>SEMINAR REGISTRATION</title>
</head>
<body>
	<center>
		<h2>SEMINAR REGISTRATION</h2>
	</center>
	<center>
		<table border="0" cellpadding="5" cellspacing="1" bgcolor="white" style="padding: 20px; border-top: 1px solid black; border-left: 2px solid black; border-right: 2px solid black; border-bottom: 1px solid black; border-radius: 10px">
			
			<form action="" method="post">
				<tr>
					<td>NAMA</td>
					<td>:</td>
					<td><input type="text" name="nama" required><br><br></td>
				</tr>
				<tr>
					<td>EMAIL</td>
					<td>:</td>
					<td><input type="text" name="emel" required><br><br></td>
				</tr>
				<tr>
					<td>NO.TEL</td>
					<td>:</td>
					<td><input type="text" name="notel" required><br><br></td>
				</tr>
				<tr>
					<td>SLOT</td>
					<td>:</td>
					<td>
						<select name="slot" id="slot">
							<option value="-">-</option>
							<option value="24 JUN 2021, 10 AM">24 JUN 2021, 10 AM</option>
							<option value="30 JUN 2021, 10 AM">30 JULAI 2021, 10 AM</option>
							<option value="1 JULAI 2021, 10 AM">1 JULAI 2021, 10 AM</option>
						</select><br><br>
					</td>
				</tr>
				<tr>
					<td colspan="3">
						<center>
							<input type="submit" name="hantar" value="Submit">
						</center>
					</td>
				</tr>
			</form>
		</table>
	</center>
</body>
</html>

<?php 
	include "config.php";

	if (isset($_POST['hantar'])) {
		
		$nama = $_POST['nama'];
		$emel = $_POST['emel'];
		$notel = $_POST['notel'];
		$slot = $_POST['slot'];

	$result = mysqli_query($link, "INSERT INTO seminar (nama, emel, notel, slot) VALUES ('$nama','$emel','$notel','$slot')");

	echo "<script>alert('Berjaya Daftar');
	window.location='seminar.php'</script>";
	}
 ?>