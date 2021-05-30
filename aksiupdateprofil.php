<?php 
	include 'config.php';
	session_start();
	$id_user = $_SESSION['id_user'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$telepon = $_POST['telepon'];
	$jenis_kelamin = $_POST['jenis_kelamin'];

	$query = mysqli_query($conn,"UPDATE user SET nama='$nama', alamat ='$alamat', telepon=$telepon,jenis_kelamin='$jenis_kelamin' WHERE id_user = '$id_user'") or die(mysqli_error($conn));

	if($query){
		header("location:profil.php");
	}else{
		echo "gagal update profil";
	}


?>