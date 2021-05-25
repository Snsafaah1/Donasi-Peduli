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
                <p class="price">Rp. 500.000,-</p>
                </div>
            </div>
        </div>
    </div>
    <div class="menu">
        <div class="menu-wrap">
            <div class="menu-left">
                <div class="donasi active">
                    <a href="#"><i class="fa fa-user"></i> Donasi</a>
                </div>
                <div class="pengajuan">
                    <a href="#"><i class="fa fa-file-text-o"></i> Pengajuan Campaign</a>
                </div>
                <div class="riwayat">
                    <a href="#"><i class="fa fa-history"></i> Riwayat Transaksi</a>
                </div>
                <div class="edit">
                    <a href="#"><i class="fa fa-pencil-square-o"></i> Edit Profil</a>
                </div>
            </div>
            <div class="menu-right">
                <div class="donasi-wrap wrapped">
                    <h2>Donasi</h2>
                    <p>Menampilkan donasi yang sudah selesai melalui Peduli.ID</p>
                    <div>
                        <a>Semua data telah ditampilkan.</a>
                    </div>
                </div>
                <div class="pengajuan-wrap hidden">
                    <div class="wrapped">
                        <h2>Data Pengajuan</h2>
                    </div>
                    <table>
                        <tr>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Tanggal Pengajuan</th>
                            <th>Kategori</th>
                            <th>Status</th>
                        </tr>
                        <tr>
                            <td colspan="5">Belum ada pengajuan yang tercatat</td>
                        </tr>
                    </table>
                </div>
                <div class="riwayat-wrap hidden">
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
                        <tr>
                            <td>1 Maret 2021, 17:50</td>
                            <td>Donasi untuk Viara Hikmatun nisa<br>Kode Transaksi: AB1234</td>
                            <td>Rp. 500.000,-</td>
                            <td>X1</td>
                            <td><a href="#">Menunggu konfirmasi</a></td>
                        </tr>
                    </table>
                </div>
                <div class="edit-wrap hidden">
                    <form action="">
                        <table>
                            <tr>
                                <td>Nama</td>
                                <td><input type="text" class="nama" placeholder="nama"></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td><input type="text" class="alamat" placeholder="alamat"></td>
                            </tr>
                            <tr>
                                <td>No. Telp</td>
                                <td><input type="text" class="no" placeholder="no telepon"></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>
                                    <select class="jk" name="jenis_kelamin">
                                    <option value="l">Laki-Laki</option>
                                    <option value="p">Perempuan</option>
                                  </select></td>
                            </tr>
                        </table>
                        <div class="tombol-wrap">
                            <div>
                                <a onclick="saveprofil()" class="save-tombol">Save</a>
                            </div>
                            <div>
                                <a onclick="cancel()" class="cancel-tombol">Cancel</a>
                            </div>
                        </div>
                    </form>
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