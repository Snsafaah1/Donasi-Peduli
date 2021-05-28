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
            <?php
                $id_campaign = $_GET['id_campaign'];
                $id_user = $_SESSION['id_user'];
                $campaign = mysqli_query($conn,"SELECT * FROM campaign where id_campaign = '$id_campaign' ");
                $campaign = mysqli_fetch_array($campaign);
             ?>
            <h3><?php echo $campaign['judul'] ?></h3><br>
            <h5>Keterangan: <?php echo $campaign['alasan_penggalangan']; ?></h5><br>
            <img src="foto/<?php echo $campaign['foto']; ?>" alt="" height="300px">
        </div> 
        <div class="kanan">
            <div class="kotak">
                <div class="form">
                    <h3>Mohon Isi Formulir Donasi</h3><br>
                    <form action="aksipembayaran.php" class="register" method="POST">
                        <input type="hidden" name="id_user" value="<?php echo $id_user; ?>">
                        <input type="hidden" name="id_campaign" value="<?php echo $id_campaign; ?>">
                        <input type="number" name="nominal" placeholder="Nominal (Rp)">
                        <textarea name="pesan" id="pesan" cols="30" rows="10" placeholder="Pesan Yang disampaikan"></textarea> 
                        Transfer Pembayaran : <br><br>
                        <img src="images/tf.png" alt="rekening bank">  
                        <input type="submit" value="Donasi" class="button-input"> 
                    </form>
                    
                    <a href="konfirmasi.php"><button>Konfirmasi</button></a>
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