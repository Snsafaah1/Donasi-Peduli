function submitdata()
{
    var nama = document.getElementById("nama").value;
    var kelamin = document.getElementById("kelamin").value;
    var email = document.getElementById("email").value;
    var nominal = document.getElementById("nominal").value;
    var pesan = document.getElementById("pesan").value;

    alert("Atas nama : " + nama + "\nJenis Kelamin : " + kelamin + "\nSilahkan Transfer Ke NO REK. 041201075483509 (Siti Nurhaliza) Sebesar Rp: " + nominal + "\n SILAHKAN MELANJUTKAN PROSES KONFIRMASI DENGAN UPLOAD BUKTI TRANSFER")
}

function confirm()
{
    alert("TERIMAKASIH TELAH MELAKUKAN DONASI ^_^" + "\n SEMOGA REZEKI ANDA BERLIPAT GANDA")
}
