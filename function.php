<?php
function rupiah ($angka){
    $hasil = "Rp" . number_format($angka, '0',',','.');
    return $hasil;
}
function selisih($startdate,$enddate){
	$starttimestamp = strtotime($startdate);
	$endtimestamp = strtotime($enddate);
	$difference = abs($endtimestamp - $starttimestamp)/3600;
	return $difference;
}

?>