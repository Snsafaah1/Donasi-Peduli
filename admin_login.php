<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Admin - Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

        <!-- Ganti Icon Website-->
        <link rel="Icon" href="">

        <!-- Link Rell CSS -->
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/admin_login.css"/>

        <!-- Link Fontawesome-->
        <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    </head>

    <body>
        <div class="container">
            <div class="icon">
                <i class="fa fa-lock"></i>
            </div>

            <div class="login">
                <form action="aksi_admin_login.php" method="POST" enctype="multipart/form-data">
                    <input type="username" name="username" id="username" required=" " placeholder="Username" minlength="3" maxlength="50">
                    <br><br>

                    <input type="password" name="password" id="password" required=" " placeholder="Password" minlength="3" minlength="50">
                    <br><br>

                    <input type="submit" name="masuk" value="Login">
                </form>
            </div>
            
        </div>
    </body>
</html>