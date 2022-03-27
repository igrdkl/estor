<?php

    require_once 'app/vendor/Db.php';
    require_once 'app/vendor/Model.php';


    class Product extends Models{
        
        public $id;
        public $name;
        public $quntity;
        public $price;
        public $category_id;
        public $producer_id;
        public $description;
        public $url_img;

        public static function findAll()
        {
            $pdo = Db::conection();

            $stmt = $pdo->prepare('SELECT estore_db.product.id as id, estore_db.product.name as product_name, estore_db.product.price as price, estore_db.product.quantity as quantity, estore_db.product.description as description, estore_db.category.name as category_name, estore_db.producer.name as producer_name, estore_db.galery.url as img_url  FROM estore_db.`product` LEFT JOIN estore_db.`category` ON estore_db.`product`.`category_id` = `category`.`id` LEFT JOIN estore_db.`producer` ON estore_db.`product`.`producer_id` = `producer`.`id` LEFT JOIN estore_db.`galery` ON estore_db.`product`.`id` = `galery`.`product_id`');

            $stmt->execute();

            while($row = $stmt->fetch()){
                $product[] = $row;
            }

            return $product;
        }

        public static function find($id)
        {
            $pdo = Db::conection();

            $stmt = $pdo->prepare('SELECT estore_db.product.id as id, estore_db.product.name as product_name, estore_db.product.price as price, estore_db.product.quantity as quantity, estore_db.product.description as description, estore_db.category.name as category_name, estore_db.producer.name as producer_name, estore_db.galery.url as img_url  FROM estore_db.`product` LEFT JOIN estore_db.`category` ON estore_db.`product`.`category_id` = `category`.`id` LEFT JOIN estore_db.`producer` ON estore_db.`product`.`producer_id` = `producer`.`id` LEFT JOIN estore_db.`galery` ON estore_db.`product`.`id` = `galery`.`product_id` WHERE estore_db.`product`.`id` = ?');
            
            $stmt->execute(array($id));
            
            return $stmt->fetch();
        }
        
        public function setName(string $name)
        {
            if($name !== ''){
                $this->name = $name;
                return true;
            }
            $this->error['name'] = '';
        }

        public function setQuantity(int $quantity)
        {
            if($quantity !== ''){
                $this->quantity = $quantity;
                return true;
            }
            $this->error['quantity'] = '';
        }

        public function setPrice(int $price)
        {
            if($price !== ''){
                $this->price = $price;
                return true;
            }
            $this->error['price'] = '';
        }

        public function setCategoryId(int $category_id)
        {
            if($category_id !== ''){
                $this->category_id = $category_id;
                return true;
            }
            $this->error['category_id'] = '';
        }

        public function setProducerId(int $producer_id)
        {
            if($producer_id !== ''){
                $this->producer_id = $producer_id;
                return true;
            }
            $this->error['producer_id'] = '';
        }

        public function setDescription($description)
        {
            if($description !== ''){
                $this->description = $description;
                return true;
            }
            $this->error['description'] = '';
        }

        public function save()
        {
            $data = array (
                'name_text' => $this->name,
                'quantity' => $this->quantity,
                'price' => $this->price,
                'category_id' => $this->category_id,
                'producer_id' => $this->producer_id,
                'description_text' => $this->description
            );
            if(!empty($this->id)){
                $data['id'] = $this->id;
                $sql = 'UPDATE estore_db.`product` SET `name`=:name_text,`quantity`=:quantity,`price`=:price,`category_id`=:category_id,`producer_id`=:producer_id,`description`=:description_text WHERE `id`=:id';
            } else {
                $sql = 'INSERT INTO estore_db.`product` (`name`,`quantity`,`price`,`category_id`,`producer_id`,`description`) VALUES (:name_text, :quantity, :price, :category_id, :producer_id, :description_text)';
            }
            $pdo = Db::conection();
            $stmt = $pdo->prepare($sql);
            $stmt->execute($data);
            $this->id = $pdo->lastInsertId();
            return true; 
        }

}