<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <title>Leyout MOW - login</title>
    <!-- icon  -->
    <script src="https://unpkg.com/ionicons@4.4.6/dist/ionicons.js"></script>
</head>
<body>

    <section class="login-col">
        <div class="login">
            <div class="login-logo"><ion-icon name="cube" role="img" class="hydrated" aria-label="cube"></ion-icon></div>
            <form method="post" action="connection/connection.php">
                <p>Email:</p>
                <input type="email" name="login" placeholder="Email">
                <p>Hasło:</p>
                <input type="password" name="password" placeholder="Hasło">
                <p><span class="verification">e_email or e_password</span></p>
                <input type="submit" class="btn" value="Zaloguj">
                <p class="lost-login">Nie pamiętam hasła</p>
            </form> 
        </div>
    </section>
    <footer>
        <h3>Twórca portalu</h3>
    </footer>
<!-- 
        <li title="#233656" style="background: #233656; border-top: 2px solid #000"></li>
        <li title="#415B76" style="background: #415B76"></li>
        <li title="#7B9BA6" style="background: #7B9BA6"></li>
        <li title="#CDD6D5" style="background: #CDD6D5"></li>
        <li title="#EEF4F2" style="background: #cecece"></li> -->
</body>
</html>