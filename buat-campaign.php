<?php
	include("config.php");
 ?>
<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>Buat Campaign.</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

		<!-- <link rel="shortcut icon" href=""> -->

		<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" type="text/css" href="css/style-buatcampaign.css">
		<link rel="stylesheet" href="css/style-profil.css">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
		<script defer type="text/javascript" src="js/pop_up.js"></script>
	</head>

	<body>
		<div class="navbar">
	 	<div class="navbar-right">
	 		<a href="index.php" class="logo">Peduli.ID</a>
	 		<a href="">FAQ</a>
	 		<?php
	 			session_start();
	 			if(isset($_SESSION["email"])) {
	 				$email = $_SESSION["email"];
	 				$query= "SELECT * FROM user where email = '$email' ";
	 				$hasil= mysqli_query($conn,$query);
	 				$hasil= mysqli_fetch_assoc($hasil);
	 		?>
	 			<div class="dropdown">
                <button class="dropbtn nama"> <?php echo $hasil["nama"]; ?> </button> <i class="fa fa-sort-desc"></i>
                <div class="dropdown-content">
                  <a href="profil.php">Profil Saya</a>
                  <a href="logout.php">Keluar</a>
                </div>
            </div>
	 		<?php

	 			}else{
	 				header("location: login.php");
	 		?>
	 			<a href="login.php">Masuk</a>
	 			<a href="login.php?p=daftar" class="daftar">Daftar</a>
	 		<?php
	 			}
	 		 ?>
	 		
	 	</div>
	</div>		<div class="container">
			<div class="thumb">
				<img src="logo/undraw_empty_xct9.png">
			</div>
			<div class="info">
				<div class="button">
					<button type="button">Galang Dana Sekarang</button>							
				</div>
				<div class="text1">
					<h4>Proses review kami berlandaskan :</h4>
					<br>
					<h4>1. Peraturan dari Kementria Sosial dan UU no. 9 Tahun 1960</h4>
					<br>
					<h4>2. Pengumpulan uang dan barang Community / Panduan Galang Dana Peduli-ID.com</h4>
					<br>
					<h4>3. Kelengkapan informasi yang Anda berikan</h4>
				</div>
				<div class="text2">
					<h5>Peduli.ID berhak menutup sepihak penggalangan dana yang melanggar aturan kami</h5>
				</div>
			</div>
			<div class="angkor">
				<div class="judul">
					<h3>Isi Data Pengajuan Pasien :</h3>
				</div>
				<div class="nav">
					<h4><a href="index.php#col1">1. Penanggung Jawab</a></h4>
					<h4><a href="index.php#col2">2. Informasi Detail</a></h4>
					<h4><a href="index.php#col3">3. Foto</a></h4>
					<h4><a href="index.php#col4">4. Informasi Kebutuhan</a></h4>
					<h4><a href="index.php#col5">5. Review & Selesai </a></h4>
				</div>
			</div>
		</div>

		<div class="data">
			<form action="aksibuatcampaign.php" method="POST" enctype="multipart/form-data">
				<div class="kotak" id="col1">
					<label for="pekerjaan">Pekerjaan</label><br>
					<input type="text" name="pekerjaan" id="pekerjaan">
					<br><br>
					
					<label for="medsos">Media Sosial</label><br>
					<input type="text" name="medsos" id="medsos">
					<br><br>

					<label for="tempat">Tempat Tinggal</label><br>
					<input type="text" name="tempat" id="tempat">
					<br><br>

					<label for="instansi">Instansi</label><br>
					<input type="text" name="instansi" id="instansi">
					<br><br>

					<label for="diri">Tentang Diri Kamu</label><br>
					<textarea id="text" name="diri" id="diri"></textarea>
				</div>
				<div class="kotak" id="col2">
					<label for="kategori">Kategori</label><br>
					<select id="kategori" name="kategori">
					  <option value="1">Kemanusiaan</option>
					  <option value="2">Bencana</option>
					</select>
					<br><br>
					
					<label for="judul">Judul</label><br>
					<input type="text" name="judul" id="judul">
					<br><br>

					<label for="waktu">Batas Waktu</label><br>
					<input type="date" name="waktu" id="waktu">
					<br><br>

					<label for="penerima">Penerima Manfaat</label><br>
					<input type="text" name="penerima" id="penerima">
					<br><br>

					<label for="kondisi">Kondisi Terkini</label><br>
					<textarea id="text" name="kondisi" id="kondisi"></textarea>
				</div>
				<div class="kotak" id="col3">
					<label for="foto">Pilih Salah satu foto utama untuk penggalangan danamu</label>
					<p style="font-size: 14px;">Format foto harus PNG / JPG / JPEG</p>
					<span><input type="file" name="foto" id="foto"></span>
				</div>
				<div class="kotak" id="col4">
					<label for="rencana">Alasan penggalangan dana, dan rencana penggunaan dana</label><br>
					<textarea id="text" name="rencana" id="rencana"></textarea>
					<br><br>

					<label for="ajakan">Tulis ajakan singkat untuk mengajak orang berdonasi</label><br>
					<textarea id="text" name="ajakan" id="ajakan"></textarea>					

				</div>
				<div class="kotak" id="col5">
					<label for="nomor">Nomor HP Aktif</label><br>
					<input type="text" name="nomor" id="nomor">
					<p style="font-size: 12px;">*Nomor hp akan digunakan untuk memverifikasi identitas Anda saat pencairan donasi.</p>		

					<div class="check">
						<div class="checkbox">
							<input type="checkbox" id="setuju">
						</div>		
						<div class="label">
							<label for="setuju"><p>Saya setuju dengan Syarat dan Ketentuan Donasi di Peduli.ID, termasuk biaya administrasi platform sebesar 5% dari total donasi Online yang terkumpul</p></label>
						</div>
					</div><br><br>
	
					<input type="submit" id="btn" value="KONFIRMASI">			
				</div>
			
		</div>

		<div class="popup" id="popup">
			<div class="icon">
				<i class="fas fa-check"></i><br>
			</div>
			<div class="teks">
				<h1>Success!!</h1>
				<br>
				<p>Penggalangan Dana Berhasil silahkan tunggu konfirmasi dari Peduli.ID yang akan dikirimkan melalui Email.</p>
				<br>
				<p>Terimakasih</p>	
			</div>
			<div class="button">
				<button data-close-button class="close-button" type="submit"><a href="index.php">OK</a></button>	
			</div>
		</div> 
		<div id="overlay"></div>
	</form>
	
	</body>
</html>