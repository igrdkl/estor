
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,600;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/app/resourse/css/main.css">
    <link rel="stylesheet" type="text/css" href="/app/resourse/css/slider.css">

    <title>Estore</title>
</head>
<body>
    <div class="main">
        <div class="top-menu-cantainer">
            <header class="top-menu-cantainer__header page-w">
                <nav class="top-menu-cantainer__menu">
                    <div class="top-menu-cantainer__logo">
                        <a href="home-page">estore</a>
                    </div>
                    <menu>
                        <li><a href="#">Каталог</a></li>
                        <li><a href="#">Контакти</a></li>
                        <li><a href="#">Про нас</a></li>
                    </menu>
                    <div class="top-menu-cantainer__search">
                        <form action="">
                            <input type="search" name="" id="" placeholder="Пошук">
                        </form> 
                    </div>
                    <div class="top-menu-cantainer__profile">
                        <a href="basket-view" class="top-menu-cantainer-profile__basket">
                        <img src="/app/resourse/img/shopping-bag.png" alt="">
                        </a>

                        <a href="register" class="top-menu-cantainer-profile__sign">
                        <img src="/app/resourse/img/user (3).png" alt="">
                        </a>
                    </div>
                </nav>
            </header>
        </div>
        <div class="page-w">
            <?php foreach($data as $key=>$product):?>
                <p class="cp-name"><?=$product['category_name']?>/<?=$product['producer_name']?></p>
                <p class="product-name"><?=$product['product_name']?></p>
                <div class="product-view-wrapp">
                    <div class="product-picture">
                        <picture>
                            <img src="<?=$product['img_url']?>" alt="">
                        </picture>
                    </div>
                    <div class="product-view-info">
                        <div class="product-view-logo">
                            <p>Продавець товару магазин:</p>
                            <p class="view-logo">Estore</p>
                        </div>
                        <div class="product-view-pb">
                            <div class="product-view-pb__desc">
                                <p>ціна на ESTORE</p>
                                <p><?=$product['price']?><span>₴</span></p>
                            </div>
                            <a href="">Оформити замовлення</a>
                        </div>
                        <div class="product-view-pay">
                            <p>Оплата</p>
                            <p>Готівкою, Безготівковими, VISA/Mastercard</p>
                        </div>
                        <div class="product-view-pay">
                            <p>Обмін/повернення</p>
                            <p>Обмін і повернення товару здійснюється протягом 14 днів після покупки, відповідно до закону України "Про захист прав споживачів України" Гарантія: 12 місяців</p>
                        </div>
                    </div>
                </div>
                <div class="product-view-desc">
                    <p>Опис товару</p>
                    <p><?=$product['description']?></p>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</body>