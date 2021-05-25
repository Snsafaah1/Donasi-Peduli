<!DOCTYPE html>
<html>

<head>
    <title>Login Peduli.ID</title>
    <link rel="stylesheet" href="css/style-login.css">

</head>
<body>    <div class="login-page">
        <div class="form">
            <form class="register-form">
                <input type="text" placeholder="Username">
                <input type="text" placeholder="Password">
                <input type="text" placeholder="Email">
                <a class="tombol">Create</a>
                <p class="message">
                    Sudah Memiliki Akun? <a href="">Login</a>
                </p>
            </form>
            <form action="ceklogin.php" method="post" class="login-form">
                <input type="text" id="email" placeholder="Email">
                <input type="password" id="password" placeholder="Password">
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
    });
</script>
</html>