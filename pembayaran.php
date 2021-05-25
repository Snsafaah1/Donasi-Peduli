<?php
    include("config.php");
 ?>
<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf 8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=”stylesheet” media=”screen and (min-width: 320px) and (max-width: 360)" href="mobile_styles.css">
    <title>Pembayaran Donasi Peduli ID</title>
    <link rel="stylesheet" href="css/style-konfirmasi-pembayaran.css">
    <link rel="stylesheet" href="css/style-profil.css">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
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
    </div>
        <div class="kiri">
            <h3>Donasi bencana indonesia tanah longsor</h3>
            <img src="images/campaign1.jpg" alt="">
        </div> 
        <div class="kanan">
            <div class="kotak">
                <div class="form">
                    <h3>Mohon Isi Formulir Donasi</h3>
                    <form class="register">
                        <input type="number" id="nominal" placeholder="Nominal (Rp)">
                        <textarea id="pesan" cols="30" rows="10" placeholder="Pesan Yang disampaikan"></textarea> 
                        Transfer Pembayaran : <br>
                        <img src="images/tf.png" alt="rekening bank">   
                    </form>
                    <button onclick="submitdata()">Donasi</button>
                    <a href="konfirmasi.html"><button>Konfirmasi</button></a>
                </div>
            </div> 
        </div>
        <!-- <div class="clear"></div>
        <div class="footer">
            <a href="">Tentang Kami</a>
            <img src="images/cs.png" alt="layanan service">
            <h3 class="hp">Call Center +6281-345-6798</h3>
        </div>   -->
    </div>
    <script src="js/text.js"> </script>
</body>
</html>
</html>