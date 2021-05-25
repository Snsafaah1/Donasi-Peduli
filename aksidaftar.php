<?php
	include 'config.php';

	$nama= $_POST["nama"];
	$email= $_POST["email"];
	$password= $_POST["password"];

	$query = "SELECT * FROM user where email = '$email'";
	$cek = mysqli_query($conn,$query);
	$cek = mysqli_fetch_assoc($cek);

	if($cek == null){
		//jiak email tidak ada maka bisa daftar
		$query= "INSERT INTO user (nama,email,password) VALUES ('$nama','$email','$password')";
		$hasil = mysqli_query($conn,$query);

		if($hasil == TRUE){
			session_start();
		$_SESSION["email"] = $email;
			header('location: profil.php');
		}
	}else{
		//email sudah ada 
		header('location: login.php?p=daftar&alert=Email sudah digunakan');

	}





	

?>