<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/app/resourse/css/admin.css">
    <title>Update Product</title>
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
                <p>Редагувати товар</p>
            </div>
            <?php if(isset($data) && !empty($data)): ?>
            <label for="name">
                Вкажіть назву товара
                <input type="text" name="name"  value="<?=$data['product']['product_name']?>">
            </label>
        
            <label for="quantity">
                Вкажіть кількість
                <input type="text" name="quantity" value="<?=$data['product']['quantity']?>">
            </label>

            <label for="price">
                Вкажіть ціну
                <input type="text" name="price" value="<?=$data['product']['price']?>">
            </label>
           

            <label for="category_id">Оберіть категорію товара
            <select name="category_id">
                <?php foreach($data['category'] as $category):?>
                    <option value="<?=$category['id']?>"><?=$category['name']?></option>
                <?php endforeach;?>
            </select>
            </label>

            <label for="producer_id">Оберіть виробника
            <select name="producer_id">
                <?php foreach($data['producer'] as $producer):?>
                    <option value="<?=$producer['id']?>"><?=$producer['name']?></option>
                <?php endforeach;?>
            </select>
            </label>
            
          
            <label for="description">Введіть опис товару
            <textarea type="text" cols="30" rows="5" name="description"><?=$data['product']['description']?></textarea>
            </label>
            
            <input type="submit" value="Змінити товар">
            <?php endif; ?>
        </form>
    </div>
</body>
</html>