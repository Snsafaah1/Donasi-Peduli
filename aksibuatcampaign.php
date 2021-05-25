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
	$waktu = "2021-05-25 15:18:33";
	$penerima = $_POST['penerima'];
	$kondisi = $_POST['kondisi'];
	$rencana = $_POST['rencana'];
	$ajakan = $_POST['ajakan'];
	$nomor = $_POST['nomor'];

	$ekstensi_diperbolehkan	= array('png','jpg');
	$foto = $_FILES['foto']['name'];
	$x = explode('.', $foto);
	$ekstensi = strtolower(end($x));
	$file_tmp = $_FILES['foto']['tmp_name'];

	if (!empty($foto)){
	    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true){

	        //Mengupload ga
	        move_uploaded_file($file_tmp, 'foto/'.$foto);
	        
	    }
	}else {
	    $foto="bank_default.png";
	}

	$user = mysqli_query($conn,"SELECT * FROM user where email = '$email' "); //ambil data dari database
	$user = mysqli_fetch_assoc($user); //merubah konversi array
	$id_user = $user['id_user']; // menyimpan variable id user

	$query= "INSERT INTO 
	campaign (id_user, id_kategori, batas_waktu, judul, pekerjaan, medsos, alasan_penggalangan, tempat_tinggal, kondisi_terkini, instansi, profil_diri, penerima_manfaat, ajakan_singkat, foto, nomor_hp, status) 
	VALUES ('$id_user','$kategori','$waktu','$judul', '$pekerjaan','$medson','$rencana','$tempat','$kondisi','$instansi','$diri','$penerima','$ajakan','foto','$nomor','proses')";
	$insert= mysqli_query($conn,$query);
	if($insert == TRUE){
		header('location: index.php');
	}else{
		header('location: buat-campaign.php?alert=gagal buat campaign');
	}
?>