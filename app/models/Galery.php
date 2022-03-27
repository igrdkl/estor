<?php    
    require_once 'app/vendor/Db.php';
    require_once 'app/vendor/Model.php';

    class Galery extends Models
    {
        public $product_id;
        public $url;

        public static function findAll()
        {
            $pdo = Db::conection();

            $stmt = $pdo->prepare('SELECT * FROM estore_db.galery');

            $stmt->execute();

            while($row = $stmt->fetch()){
                $galery[] = $row;
            }

            return $galery;
        }

        public function setProductId(int $product_id)
        {
            if($product_id !== ''){
                $this->product_id = $product_id;
                return true;
            }
            $this->error['product_id'] = '';
        }

        public function upload()
        {
            if(!empty($_FILES['image'])){
                
                //перевірка картинки
                $name = $_FILES['image']['name'];
                $tmp_name = $_FILES['image']['tmp_name'];
                move_uploaded_file($tmp_name, "app/resourse/uploads/".$name);

                $this->url = ("/app/resourse/uploads/".$name);
                
            }
        }

        public function save()
        {
            $data = array (
                'url_img' => $this->url,
                'product_id' => $this->product_id,
            );
            if(!empty($this->id)){
                $data['id'] = $this->id;
                $sql = 'UPDATE estore_db.`galery` SET `url`=:url_img, `product_id`:=product_id WHERE `id`=:id';
            } else {
                $sql = 'INSERT INTO estore_db.`galery` (`url`,`product_id`) VALUES (:url_img, :product_id)';
            }
            $pdo = Db::conection();
            $stmt = $pdo->prepare($sql);
            $stmt->execute($data);
            $this->id = $pdo->lastInsertId();
            return true; 
        }
    }