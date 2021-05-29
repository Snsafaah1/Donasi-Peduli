<?php
	include("config.php");
	include 'function.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Peduli.ID</title>
	<link rel="stylesheet" href="css/style-home.css">
	<link rel="stylesheet" href="css/style-profil.css">
	
	<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
</head>
<body>
	<div class="navbar">
	 	<div class="navbar-right">
	 		<a href="index.php" class="logo">Peduli.ID</a>
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
	 		?>
	 			<a href="login.php">Masuk</a>
	 			<a href="login.php?p=daftar" class="daftar">Daftar</a>
	 		<?php
	 			}
	 		 ?>
	 		
	 	</div>
	</div>
	<div class="back">
		<div class="jumbotron">
			<div class="img-jumbotron">
				<img src="images/avatar-women.png">
			</div>
			<div class="text-jumbotron">
				<h3>Peduli.ID</h3>
				<p>Ribuan pasien di Indonesia membutuhkan bantuan biaya pengobatan,</p>
				<p>Mari berdonasi dan membantu mereka melalu Peduli.ID</p>
				<a href="buat-campaign.php">Buat Campaign</a>
			</div>
		</div>
		<div class="konten">
			<div class="wrap">
				<?php
				$query = mysqli_query($conn,"SELECT * FROM campaign ORDER BY tanggal_buat DESC LIMIT 0,3");
				?>
				<?php
				foreach ($query as $campaign) { ?>
					<div class="campaign" onclick="donasi('<?php echo $campaign['id_campaign']; ?>')">
						<img src="foto/<?php echo $campaign['foto']; ?>" height="150px">
						<div class="text-campaign">
							<p><?php echo $campaign['judul']; ?></p>
							<div class="back-persen">
								<?php 
									$id_campaign=$campaign['id_campaign'];
									$query = mysqli_query($conn,"SELECT sum(nominal) as total, count(*) as jumlah from donasi where id_campaign = '$id_campaign' AND status = 'Diterima' ");
									$tanggal_buat = $campaign['tanggal_buat'];
									$batas= $campaign['batas_waktu'];
									$selisih =selisih($campaign['tanggal_buat'],$campaign['batas_waktu']);
									$selisih_sekarang =selisih(date("Y-m-d h:i:s"),$campaign['batas_waktu']);
									$persen = 100/$selisih*$selisih_sekarang;
									$total = mysqli_fetch_array($query);
									if($total['jumlah'] < 1){
										$total['total'] = 0;
									}  
								?>
								<hr width="<?php echo $persen."%"; ?>">
							</div>
							<div>
								<span>Terkumpul</span><span class="right-float">Donatur</span>
							</div>
							<div>
								<span><?php echo rupiah($total['total']); ?>,-</span><span class="right-float"><?php echo $total['jumlah'] ?></span>
							</div>
						</div>
					</div>
				<?php 
					}
				 ?>
				<div class="campaign selengkapnya">
					<a href="campaign.php" class="selengkapnya-btn">Tampilkan lebih banyak</a>
				</div>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="application/javascript">

	function donasi(id){
			window.location.href = 'pembayaran.php?id_campaign='+id;
	}
</script>
</html>