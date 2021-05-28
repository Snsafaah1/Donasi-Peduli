<?php
    include("config.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Peduli.ID</title>
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
                    $id_user = $_SESSION["id_user"];
                    $query= "SELECT * FROM user where id_user = '$id_user' ";
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

    <div class="back-red">
    </div>

    <div class="profile">
        <div class="profile-wrap">
            <div class="profile-left">
                <div class="img-wrap">
                    <img src="images/profile.png" alt="">
                </div>
                <div class="text-wrap">
                    <p class="nama"><?php echo $hasil["nama"]; ?></p>
                    <p class="email"><?php echo $hasil["email"]; ?></p>
                </div>
            </div>
            <div class="profile-right">
                <div class="text-wrap">
                    <p>Dana didonasikan</p>
                    <?php
                        $dana = mysqli_query($conn,"SELECT SUM(nominal) as total FROM donasi where id_user = '$id_user' AND status = 'Diterima'");
                        $dana = mysqli_fetch_array($dana);
                    ?>
                <p class="price">Rp. <?php echo $dana['total']; ?>,-</p>
                </div>

            </div>
        </div>
    </div>
    <div class="menu">
        <div class="menu-wrap">
            <div class="menu-left">
                <div class="edit">
                    <a href="profil.php"><i class="fa fa-pencil-square-o"></i> Edit Profil</a>
                </div>
                <div class="donasi">
                    <a href="profil-donasi.php"><i class="fa fa-user"></i> Donasi</a>
                </div>
                <div class="pengajuan">
                    <a href="profil-pengajuan.php"><i class="fa fa-file-text-o"></i> Pengajuan Campaign</a>
                </div>
                <div class="riwayat active">
                    <a href="profil-riwayat.php"><i class="fa fa-history"></i> Riwayat Transaksi</a>
                </div>
            </div>
            <div class="menu-right">
                <div class="riwayat-wrap">
                    <div class="wrapped">
                        <h2>Riwayat</h2>
                        <p>Menampilkan riwayat transaksi yang telah kamu lakukan</p>
                    </div>
                    <table>
                        <tr>
                            <th>Tanggal</th>
                            <th>Nama Campaign</th>
                            <th>Total Donasi</th>
                            <th>Qty</th>
                            <th>Status</th>
                        </tr>
                        <?php
                            $id_user= $_SESSION['id_user'];
                            $query = mysqli_query($conn,"SELECT donasi.tanggal_buat, campaign.judul, donasi.id_donasi,donasi.nominal,donasi.status FROM donasi INNER JOIN campaign where donasi.id_campaign = campaign.id_campaign AND donasi.id_user = '$id_user' ");
                            if(mysqli_num_rows($query)>0){
                                foreach ($query as $donasi) { ?>
                                <tr>
                                    <td><?php echo $donasi['tanggal_buat'] ?></td>
                                    <td><?php echo $donasi['judul'] ?><br>Kode Transaksi: <?php echo $donasi['id_donasi'] ?></td>
                                    <td>Rp. <?php echo $donasi['nominal'] ?>,-</td>
                                    <td>@1</td>
                                    <td>
                                        <?php if($donasi['status'] == 'Belum Transfer'){ ?>
                                            <a href="konfirmasi.php?id_donasi=<?php echo $donasi['id_donasi']; ?>"><?php echo $donasi['status'] ?></a>
                                        <?php }else{ ?>
                                            <?php echo $donasi['status'] ?>
                                        <?php } ?>
                                    </td>
                                </tr>
                                 <?php
                                }
                            }else{ ?>

                                <tr>
                                    <td colspan="5">Belom ada riwayat transaksi</td>
                                </tr>
                        <?php
                            }
                         ?>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="modal">
        <div class="modal-content">
            <span class="close-button">&times;</span>
            <h3>Sukses update profile</h3>
        </div>
    </div>
    
    <script src="js/script-profil.js"></script>
    
</body>
</html>