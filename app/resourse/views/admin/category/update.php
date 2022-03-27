<?php
    var_dump($data);
    var_dump($_POST);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/app/resourse/css/admin.css">
    <title>Create New Category</title>
</head>
<body>
    <div class="top-logo__container">
        <div class="page-w">
            <a href="..//home-page" class="logo">estore</a>
            <a href="register" class="logout">Вихід</a>
        </div>
    </div>
    <div class="aside-form-container">
    <div class="left-aside">
            <ul>
                <li class="left-menu-catalog"><a href="#">Каталог</a>
                    <ul class="sub-menu-admin">
                        <li><a href="product-list">Список товарів</a></li>
                        <li><a href="producer-list">Виробники</a></li>
                        <li><a href="category-list">Категорії</a></li>
                    </ul>
                </li>
                <li><a href="#">Замовлення</a></li>
            </ul>
        </div>
        <form class="form" action="" method="POST">
            <div class="description-option">
                <p>Редагувати</p>
            </div>
            <?php if(isset($data) && !empty($data)): ?>
            <label for="">
                Змініть назву категорії
                <input type="text" name="name" value="<?=$data['category']['name']?>">
            </label>


            <input type="submit" value="Додати категорію">
            <?php endif; ?>
        </form>
    </div>
</body>
</html>