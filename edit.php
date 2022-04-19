<!DOCTYPE html>
<html>
<head>
	<title>SEMINAR</title>
</head>
<body>
<?php 
include 'config.php';
$kod=$_GET['id'];
$result=mysqli_query($link, "SELECT * FROM seminar WHERE id=$kod");

while ($res=mysqli_fetch_array($result)) {
	
	$id=$res['id'];
	$nama=$res['nama'];
	$emel=$res['emel'];
	$notel=$res['notel'];
	$slot=$res['slot'];
}
 ?>

<form action="" method="POST">
	<center>
	<table border="0" cellpadding="5" cellspacing="1" bgcolor="white" style="padding: 20px; border-top: 1px solid black; border-left: 2px solid black; border-right: 2px solid black; border-bottom: 1px solid black; border-radius: 10px">
		<tr>
			<td>NAMA</td>
			<td>:</td>
			<td><input type="text" name="nama" value="<?php echo $nama;?>"><br></td>
		</tr>
		<tr>
			<td>EMEL</td>
			<td>:</td>
			<td><input type="text" name="emel" value="<?php echo $emel;?>"><br></td>
		</tr>
		<tr>
			<td>NO.TEL</td>
			<td>:</td>
			<td><input type="text" name="notel" value="<?php echo $notel;?>"><br></td>
		</tr>
		<tr>
			<td>SLOT</td>
			<td>:</td>
			<td><input type="text" name="slot" value="<?php echo $slot;?>"><br></td>
		</tr>
		<tr>
			<td colspan="3"><input type="submit" name="submit" value="Submit"></td>
		</tr>
	</table>
	</center>
</form>
</body>
</html>