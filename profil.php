<?php
    include("config.php");
    include 'function.php';
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
            <?php
                session_start();
                if(isset($_SESSION["email"])) {
                    $email = $_SESSION["email"];
                    $id_user = $_SESSION["id_user"];
                    $query= "SELECT * FROM user where id_user = '$id_user'";
                    $user= mysqli_query($conn,$query);
                    $user= mysqli_fetch_assoc($user);
            ?>
                <div class="dropdown">
                <button class="dropbtn nama"> <?php echo $user["nama"]; ?> </button> <i class="fa fa-sort-desc"></i>
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
                    <p class="nama"><?php echo $user["nama"]; ?></p>
                    <p class="email"><?php echo $user["email"]; ?></p>
                </div>
            </div>
            <div class="profile-right">
                <div class="text-wrap">
                    <p>Dana didonasikan</p>
                    <?php
                        $dana = mysqli_query($conn,"SELECT SUM(nominal) as total FROM donasi where id_user = '$id_user' AND status = 'Diterima'");
                        $dana = mysqli_fetch_array($dana);
                    ?>
                <p class="price"><?php echo rupiah($dana['total']); ?>,-</p>
                </div>
            </div>
        </div>
    </div>
    <div class="menu">
        <div class="menu-wrap">
            <div class="menu-left">
                <div class="edit active">
                    <a href="profil.php"><i class="fa fa-pencil-square-o"></i> Edit Profil</a>
                </div>
                <div class="donasi">
                    <a href="profil-donasi.php"><i class="fa fa-user"></i> Donasi</a>
                </div>
                <div class="pengajuan">
                    <a href="profil-pengajuan.php"><i class="fa fa-file-text-o"></i> Pengajuan Campaign</a>
                </div>
                <div class="riwayat">
                    <a href="profil-riwayat.php"><i class="fa fa-history"></i> Riwayat Transaksi</a>
                </div>
            </div>
            <div class="menu-right">
                <div class="edit-wrap">
                    <?php
                        if($user['nama'] == "" || $user['telepon'] == "" || $user['jenis_kelamin'] == "" || $user['alamat'] == ""){ ?>
                            <h4>Anda belum melengkapi profil!</h4>
                    <?php
                        }
                     ?>
                    
                    <form action="aksiupdateprofil.php" method="POST">
                        <table>
                            <tr>
                                <td>Nama</td>
                                <td><input type="text" name="nama" placeholder="nama" value="<?php  echo $user['nama'];?>"></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td><input type="text" name="alamat" placeholder="alamat" value="<?php  echo $user['alamat'];?>"></td>
                            </tr>
                            <tr>
                                <td>No. Telp</td>
                                <td><input type="text" name="telepon" placeholder="no telepon" value="<?php  echo $user['telepon'];?>"></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>
                                    <select class="jk" name="jenis_kelamin">
                                    <option value="l" selected disabled>Silahan pilih</option>
                                    <option value="l" <?php if($user['jenis_kelamin'] == "l"){echo "selected";} ?>>Laki-Laki</option>
                                    <option value="p" <?php if($user['jenis_kelamin'] == "p"){echo "selected";} ?> >Perempuan</option>
                                  </select></td>
                            </tr>
                        </table>
                        <div class="tombol-wrap">
                            <div>
                                <input type="submit" class="save-tombol" value="Save">
                            </div>
                            <div>
                                <input type="reset" class="cancel-tombol" value="Cancel">
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