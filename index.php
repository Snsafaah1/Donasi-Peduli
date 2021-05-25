<?php
	include("config.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Peduli.ID</title>
	<style type="text/css">
		.back{
			background-image: linear-gradient(#9ebfc6, #ffffff);
			width: 100%;
			min-height: 500px;

		}
		*{
			margin: 0;
			padding:0;
		}
		.navbar{
			padding: 0 150px;
			color: white;
			background-color: black;
			overflow: hidden;
		}
		.navbar a{
			float: left;
			color: #f2f2f2;
			text-align: center;
			padding: 10px 12px;
			text-decoration: none;
			font-size: 17px;
		}
		.navbar-right{
			margin: 5px;
			float: right;
		}
		.navbar .logo{
			color: #1187a0;
			font-size: 20px;
		}
		.navbar .daftar{
			background-color: #b6e13a;
			border-radius: 0px;
		}
		.jumbotron{
			display: flex;
			justify-content: center;
		}
		.jumbotron>div{
			max-height: 300px;
		}

		.img-jumbotron img{
			width: 300px;
			height: 300px;
		}
		.text-jumbotron{
			padding-top: 100px;
			font-size: 17px;
		}
		.text-jumboton h3{
			color: #81b2bc;
		}
		.text-jumbotron a{
			text-decoration: none;
			color: black;
			background-color: #b6e13a;
			padding: 10px;
			display: inline-block;
			border-radius: 15px;
		}
		.konten{
			display: flex;
			justify-content: center;
		}
		.wrap{
			border-radius: 20px;
			padding: 10px;
			min-height: 200px;
			width: 900px;
			background-color: #acbec7;
			display: flex;
			justify-content: center;
			align-items: center;
		}
		.campaign{
			cursor: pointer;
			border-radius: 15px;
			background-color: white;
			width: 200px;
			font-size: 17px;
			margin: 10px;
		}
		.campaign img{
			width: 200px;
			border-radius: 15px;
		}
		.campaign .text-campaign{
			padding: 5px;
		}
		.right-float{
			float: right;
		}
		.campaign hr{
			background-color: #1929ba;
			height: 10px;
		}
		.selengkapnya{
			background-color: transparent;
		}
		.selengkapnya-btn{
			padding: 5px;
			border-radius: 15px;
			text-decoration: none;
			background-color: red;
			color: black;
			font-size: 17px;
		}
		.selengkapnya-btn:hover{
			background-color: #ff1c1c;
		}
		.back-persen{
			background-color: #00d1c7;
			padding:0;
			margin: 0;
		}
	</style>
	<link rel="stylesheet" href="css/style-profil.css">
	<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
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
				<div class="campaign">
					<img src="images/campaign1.jpg">
					<div class="text-campaign">
						<p>Donasi bencana indonesia tanah longsor</p>
						<div class="back-persen">
							<hr width="70%">
						</div>
						<div>
							<span>Terkumpul</span><span class="right-float">Donatur</span>
						</div>
						<div>
							<span>Rp.852.000</span><span class="right-float">45</span>
						</div>
					</div>
				</div>
				<div class="campaign">
					<img src="images/campaign1.jpg">
					<div class="text-campaign">
						<p>Donasi bencana indonesia tanah longsor</p>


						<div class="back-persen">
							<hr width="70%">
						</div>
						<div>
							<span>Terkumpul</span><span class="right-float">Donatur</span>
						</div>
						<div>
							<span>Rp.852.000</span><span class="right-float">45</span>
						</div>
					</div>
				</div>
				<div class="campaign">
					<img src="images/campaign1.jpg">
					<div class="text-campaign">
						<p>Donasi bencana indonesia tanah longsor</p>
						<div class="back-persen">
							<hr width="70%">
						</div>
						<div>
							<span>Terkumpul</span><span class="right-float">Donatur</span>
						</div>
						<div>
							<span>Rp.852.000</span><span class="right-float">45</span>
						</div>
					</div>
				</div>
				<div class="campaign selengkapnya">
					<a href="#" class="selengkapnya-btn">Tampilkan lebih banyak</a>
				</div>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.campaign').click(function(){
			window.location.href = 'pembayaran.php';
		});
	});
</script>
</html>