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
        <div class="page-w left-menu-slider-wrapp">
            <div class="left-menu">
                <ul>
                <?php foreach($data['category'] as $category):?>
                    <li><a href=""><?=$category['name']?></a>
                        <div class="producer-menu">
                            <p>Вибір виробника</p>
                            <ul>
                                <?php foreach($data['producer'] as $producer):?>
                                <li>
                                    <a href=""><?=$producer['name']?></a>
                                </li>
                                <?php endforeach;?>
                            </ul> 
                        </div>
                    </li>
                <?php endforeach;?>
                </ul>
            </div>
            <div class="slider">
                <p>Супер вигдні ціни на техніку</p>
                <h2>Apple</h2>
                <p>від 15000 <span>₴</span></p>
                <a href="">Детальніше</a>
            </div>
        </div>
        <div class="page-w">
        <div class="product-cart-wrapp">
                <?php foreach($data['product'] as $product):?>
                        <div class="product-cart">
                            <div class="product-cart-picture">
                                <a href="product-view?id=<?=$product['id']?>">
                                    <picture class="product-cart-picture__img">
                                        <img src="<?=$product['img_url']?>" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="product-cart-content">
                                <a class="product-cart-content__name" href="product-view?id=<?=$product['id']?>"><?=$product['product_name']?></a>
                                <p class="product-cart-content__price"><?=$product['price']?><span>₴</span></p>
                                <div>
                                    <a class="product-cart-content__bascket add-to-cart" data-id="<?=$product['id']?>" href="basket-view?id=<?=$product['id']?>">В корзину</a>
                                    <a class="product-cart-content__buy" href="product-view?id=<?=$product['id']?>">Купити</a>
                                </div>
                            </div>
                        </div>
                <?php endforeach; ?>
        </div>
    </div>
    <footer>

    </footer>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="/app/resourse/js/main.js"></script>
</body>
</html>


