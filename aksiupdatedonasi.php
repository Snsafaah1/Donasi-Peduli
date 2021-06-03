<?php
    include 'config.php';
    $id_donasi = $_GET['id_donasi'];
    $status = $_GET['status'];

    $query = mysqli_query($conn,"UPDATE donasi SET status = '$status' WHERE id_donasi = '$id_donasi'") or die(mysqli_error($conn));
    if($query){

        header("location: admin_donasi.php");
    }else{
        echo "cannot save data";
    }


?>