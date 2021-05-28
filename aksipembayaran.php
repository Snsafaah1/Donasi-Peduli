<?php
	include 'config.php';
	$id_user= $_POST['id_user'];
	$id_campaign = $_POST['id_campaign'];
	$nominal = $_POST['nominal'];
	$pesan = $_POST['pesan'];
	$status = "Belum Transfer";
	$query = mysqli_query($conn,"INSERT INTO 
		donasi (id_campaign, id_user, nominal, pesan, status) 
		VALUES ('$id_campaign','$id_user','$nominal','$pesan','$status')");
	if($query){
		$last_id = mysqli_insert_id($conn);
		header("location:konfirmasi.php?id_donasi=$last_id");
	}else{
		echo "gagal membayar donasi";
	}


 ?>