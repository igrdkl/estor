
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/app/resourse/css/admin.css">
    <title>Register</title>
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
                <p>Реєстація на ESTORE</p>
            </div>
            
            <label for="">
                Введіть ваш логін
                <input type="text" name="login" id="">
            </label>

            <label for="">
                Введіть ваш ім'я
                <input type="text" name="name" id="">
            </label>

            <label for="">
                Введіть ваш телефон
                <input type="text" name="phone" id="">
            </label>

            <label for="">
                Придумайте пароль
                <input type="password" name="password" id="">
            </label>


            <input type="submit" value="Зареєструватись">
            <p class="register-login"><a href="login">Вже зареєстровані?</a></p>
        </form>
    </div>
</body>
</html>