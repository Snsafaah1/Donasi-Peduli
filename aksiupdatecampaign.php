<?php
    include 'config.php';
    $id_campaign = $_GET['id_campaign'];
    $status = $_GET['status'];

    $query = mysqli_query($conn,"UPDATE campaign SET status = '$status' WHERE id_campaign = '$id_campaign'") or die(mysqli_error($conn));
    if($query){

        header("location: admin_campaign.php");
    }else{
        echo "cannot save data";
    }


?>