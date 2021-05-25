<!DOCTYPE html>
<html>

<head>
    <title>Login Peduli.ID</title>
    <link rel="stylesheet" href="css/style-login.css">

</head>
<body>
 <div class="login-page">
        <div class="form">
            <form action="aksidaftar.php" method="POST" class="register-form">
                <input type="text" name="nama" placeholder="Nama Lengkap">
                <input type="text" name="email" placeholder="Email">
                <input type="text" name="password" placeholder="Password">
                <input type="submit" class="tombol" value="Create">
                <p class="message">
                    Sudah Memiliki Akun? <a href="">Login</a>
                </p>
            </form>
            <form action="ceklogin.php" method="POST" class="login-form">
                <!-- GET dan post -->
                <input type="text" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <input type="submit" class="tombol" value="login">
                <p class="message">
                    Belum Memiliki Akun? <a href="#">Register</a>
                </p>
            </form>
        </div>
    </div>
</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript">
    var getUrlParameter = function getUrlParameter(sParam) {
        var sPageURL = window.location.search.substring(1),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;

        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');

            if (sParameterName[0] === sParam) {
                return typeof sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
            }
        }
        return false;
    };
    $(' .message a').click(function(){
    $('form').animate({
        height: "toggle",
        opacity: "toggle"
    }, "slow");
    });
    $(document).ready(function(){
        var menu = getUrlParameter('p');
        if (menu == "daftar") {
            $('form').animate({
                height: "toggle",
                opacity: "toggle"
            }, "slow");
        }
        if(menu == "salah"){
            alert("Email atau password anda salah, silahkan coba lagi");
        }
        var pesan = getUrlParameter('alert');
        if(pesan != ""){
            alert(pesan);
        }
    });
</script>
</html>