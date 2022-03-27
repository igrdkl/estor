<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/app/resourse/css/admin.css">
    <title>Create New Product</title>
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
                <p>Додати новий товар</p>
            </div>
            
            <label for="">
                Введіть назву товара
                <input type="text" name="name" id="">
            </label>

            <label for="">
                Вкажіть кількість
                <input type="text" name="quantity" id="">
            </label>

            <label for="">
                Вкажіть ціну
                <input type="text" name="price" id="">
            </label>

            <label for="">Оберіть категорію товара
            <select name="category_id" id="">
                <?php foreach($data['category'] as $category):?>
                    <option value="<?=$category['id']?>"><?=$category['name']?></option>
                <?php endforeach;?>
            </select>
            </label>

            <label for="">Оберіть виробника
            <select name="producer_id" id="">
                <?php foreach($data['producer'] as $producer):?>
                    <option value="<?=$producer['id']?>"><?=$producer['name']?></option>
                <?php endforeach;?>
            </select>
            </label>

            <label for="">Введіть опис товару
            <textarea name="description" id="" cols="30" rows="5"></textarea>
            </label>

            <input type="submit" value="Додати товар">
        </form>
    </div>
</body>
</html>
<?php
