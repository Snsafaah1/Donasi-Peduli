<?php

	include 'config.php';
	session_start();
	$email = $_SESSION['email'];

	$pekerjaan = $_POST['pekerjaan'];
	$medsos = $_POST['medsos'];
	$tempat = $_POST['tempat'];
	$instansi = $_POST['instansi'];
	$diri = $_POST['diri'];
	$kategori = $_POST['kategori'];
	$judul = $_POST['judul'];
	$waktu = $_POST['waktu'];
	$penerima = $_POST['penerima'];
	$kondisi = $_POST['kondisi'];
	$rencana = $_POST['rencana'];
	$ajakan = $_POST['ajakan'];
	$nomor = $_POST['nomor'];
	
	// ambil data foto campaign
	$namaFile = $_FILES['foto']['name'];
	$namaSementara = $_FILES['foto']['tmp_name'];

	// tentukan lokasi file akan dipindahkan
	$dirUpload = "foto/";

	// pindahkan file
	$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

	if ($terupload) {
		$user = mysqli_query($conn,"SELECT * FROM user where email = '$email' "); //ambil data dari database
		$user = mysqli_fetch_assoc($user); //merubah konversi array
		$id_user = $user['id_user']; // menyimpan variable id user

		$query= "INSERT INTO 
		campaign (id_user, id_kategori, batas_waktu, judul, pekerjaan, medsos, alasan_penggalangan, tempat_tinggal, kondisi_terkini, instansi, profil_diri, penerima_manfaat, ajakan_singkat, foto, nomor_hp, status) 
		VALUES ('$id_user','$kategori','$waktu','$judul', '$pekerjaan','$medson','$rencana','$tempat','$kondisi','$instansi','$diri','$penerima','$ajakan','$namaFile','$nomor','Proses Verifikasi')";
		$insert= mysqli_query($conn,$query);
		if($insert == TRUE){
			header('location: index.php');
		}else{
			header('location: buat-campaign.php?alert=gagal buat campaign');
		}
	} else {
	    echo "Upload Gagal!";
	}

	
?>