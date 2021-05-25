<?php
	include 'config.php';
	$email= $_POST["email"];
	$password= $_POST["password"];

	$query= "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
	$hasil= mysqli_query($conn,$query);
	$hasil = mysqli_fetch_assoc($hasil);
	if($hasil != null){
		//bener
		session_start();
		$_SESSION["email"] = $email;
		header("location: index.php");
	}else{
		//jika salah
		header("location: login.php?p=salah");
	}

?>