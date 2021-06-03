<?php
	include 'config.php';
	$username= $_POST["username"];
	$password= $_POST["password"];

	$query= "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
	$hasil= mysqli_query($conn,$query);
	$hasil = mysqli_fetch_assoc($hasil);
	if($hasil != null){
		//bener
		session_start();
		$_SESSION["admin_username"] = $email;
		$_SESSION["id_admin"] = $hasil['id_admin'];
		header("location: admin_campaign.php");
	}else{
		//jika salah
		header("location: admin_login.php?p=salah");
	}

?>