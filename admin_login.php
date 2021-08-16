<?php
session_start();
include 'config.php';
if (isset($_POST['admin_login'])) {
	$uname = $_POST['username'];
	$pass = $_POST['password'];

	if (!empty($uname) && !empty($pass)) {
		$query = "SELECT * FROM `login` WHERE `username`='$uname' AND `password`='$pass'";
		$res = mysqli_query($con, $query);
		$count = mysqli_num_rows($res);
		if ($count > 0) {
			$row = mysqli_fetch_assoc($res);
			$id = $row['login_id'];
			$_SESSION['id'] = $id;
			$_SESSION['uname'] = $uname;
			header("location:admin_profile.php");
		} else {
			$_SESSION['error'] = "Invalid Username or Password. Please try again!";
			header("location:admin.php");
		}
	} else {
		$_SESSION['error'] = "Please fill all the fields.";
		header("location:admin.php");
	}
}
?>