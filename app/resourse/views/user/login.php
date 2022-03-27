<?php
    // var_dump($_POST);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/app/resourse/css/admin.css">
    <title>Login</title>
</head>
<body>
    <div class="top-logo__container">
        <div class="page-w">
            <a href="..//home-page" class="logo">estore</a>
        </div>
    </div>
    <div class="aside-form-container">
        <div class="left-aside">
        </div>

        <form class="form" action="" method="POST">
            <div class="description-option">
                <p>Авторизація на ESTORE</p>
            </div>
            
            <label for="">
                Введіть ваш логін
                <input type="text" name="login">
            </label>

            <label for="">
                Введіть ваш телефон
                <input type="text" name="phone">
            </label>

            <label for="">
                Введіть пароль
                <input type="password" name="password">
            </label>


            <input type="submit" value="Увійти">
            
            <p class="register-login" ><a href="register">Зареєструватись</a></p>
        </form>
    </div>
</body>
</html>