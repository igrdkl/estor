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
        <div class="info-product">
            <?php foreach($data as $key=>$value): ?>
                    <p class="info-product-desc">Фото</p>
                        <picture class="product_img">
                            <img src="<?=$value['img_url']?>" alt="">
                        </picture>
                    <p class="info-product-desc">Назва товару</p>
                    <p class="info-product-db"><?=$value['product_name']?></p>
                    <p class="info-product-desc">Кількість</p>
                    <p class="info-product-db"><?=$value['quantity']?></p>
                    <p class="info-product-desc">Ціна грн</p>
                    <p class="info-product-db"><?=$value['price']?></p>
                    <p class="info-product-desc">Категорія</p>
                    <p class="info-product-db"><?=$value['category_name']?></p>
                    <p class="info-product-desc">Виробник</p>
                    <p class="info-product-db"><?=$value['producer_name']?></p>
                    <p class="info-product-desc">Опис</p>
                    <p class="info-product-db"><?=$value['description']?></p>
            <?php endforeach;?>
        </div>
    </div>
</body>
</html>