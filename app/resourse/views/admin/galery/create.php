<?php
    // if($_FILES['image']){

    //     $name = $_FILES['image']['name'];
    //     $tmp_name = $_FILES['image']['tmp_name'];
    //     move_uploaded_file($tmp_name, "app/resourse/uploads/".$name);
        
    // }
?>
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
        <form class="form" action="" method="POST" enctype="multipart/form-data">
            <div class="description-option">
                <p>Додати фото товару</p>
            </div>

            <label for="">
                Завантажте картинку
                <input type="file" name="image" id="">
            </label>

            <label for="">
                Виберіть товар
                <select name="product_id">
                    <?php foreach($data['product'] as $product):?>
                        <option value="<?=$product['id']?>"><?=$product['product_name']?></option>
                    <?php endforeach;?>
                </select>
            </label>

            <input type="submit" value="Додати фото">
        </form>
    </div>
</body>
</html>
<?php
