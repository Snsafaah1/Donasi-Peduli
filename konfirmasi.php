<?php
    include("config.php");
 ?>
<!DOCTYPE html>
<html>
    
<head>
    <title>Konfirmasiii Pembayaran</title>
    <link rel="stylesheet" href="css/style-konfirmasi-pembayaran.css">
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
    <div class="kanan"><div class="kotak">
        <div class="form">
            <h3>Konfirmasi Pembayaran</h3>
            <form class="regiser">
                <input type="text" placeholder="Nama Donatur">
                <input type="text" placeholder="Rekening atas Nama">
                <input type="number" id= "nominal"placeholder="Nominal (Rp)">
                Masukkan Bukti Pembayaran (JPEG,PNG) <br>
                <input id="upload" type="file" placeholder="Masukkan Bukti Pembayaran">
                <button onclick="confirm()">Konfirmasi</button>
                <img id="thank"src="images/hiasan.jpg" alt="">
            </form>
        </div>
    </div > </div>
    <div class="kiri2"><img src="images/trims.jpg" alt="logo"></div> 
    <script src="js/text.js"> </script>
</body>