<?php 
require ('config.php');

if (isset($_POST['user_id']) and isset($_POST['user_pass'])) {
	
	$username = $_POST['user_id'];
	$password = $_POST['user_pass'];

	$query = "SELECT * FROM users WHERE nama = '$username' and katalaluan = '$password'";

	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	$count = mysqli_num_rows($result);

	if ($count == 1) {
		
		echo "<script type='text/javascript'>alert('Maklumat Login disahkan')</script>";
		header("Location: seminar.php");
	}else{
		echo "<script type='text/javascript'>alert('Wrong username or password')</script>";
		echo "<center><a href='login.php'>Login semula</center>";
	}
}
 ?>