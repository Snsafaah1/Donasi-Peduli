<?php
	include 'config.php';
	$id_donasi= $_POST['id_donasi'];
	$nominal = $_POST['nominal'];
	$nama = $_POST['nama'];
	
	// ambil data foto campaign
	$namaFile = $_FILES['foto']['name'];
	$namaSementara = $_FILES['foto']['tmp_name'];

	// tentukan lokasi file akan dipindahkan
	$dirUpload = "foto-bukti-pembayaran/";

	// pindahkan file
	$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

	if ($terupload) {
		$query = mysqli_query($conn,"INSERT INTO 
		konfirmasi (id_donasi, bukti, atas_nama) 
		VALUES ('$id_donasi','$namaFile','$nama')");
		if($query){
			$last_id = mysqli_insert_id($conn);
			$query = mysqli_query($conn,"UPDATE donasi set status = 'Proses Konfirmasi' where id_donasi='$id_donasi' ");
			header("location:profil-riwayat.php");
		}else{
			echo "gagal input konfirmasi";
		}
	}else{
		echo "gagal upload konfirmasi";
	}
	


 ?>