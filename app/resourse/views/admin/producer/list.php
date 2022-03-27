<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/app/resourse/css/admin.css">
    <title>Product List</title>
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
        <div class="product-list">
            <form action="" method="POST">
                <table>
                    <caption>Product List</caption>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                    </tr>
                        <?php foreach($data['producer'] as $producer):?>
                            <tr>
                                <td><?=$producer['id']?></td>
                                <td><?=$producer['name']?></td>
                                <td><a href="producer-view?id=<?=$producer['id']?>">view</a></td>
                                <td><a href="producer-update?id=<?=$producer['id']?>">update</a></td>
                                <td><a href="producer-del">delete</a></td>
                            </tr>
                        <?php endforeach;?>
                </table>
            </form>
        </div>
    </div>
</body>
</html>