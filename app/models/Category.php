<?php

    require_once 'app/vendor/Db.php';
    require_once 'app/vendor/Model.php';


    class Category extends Models{

        public $id;
        public $name;
        
        public static function findAll()
        {
            $pdo = Db::conection();

            $stmt = $pdo->prepare('SELECT * FROM estore_db.category');

            $stmt->execute();

            while($row = $stmt->fetch()){
                $category[] = $row;
            }

            return $category;
        }

        public static function find(int $id)
        {
            $pdo = Db::conection();

            $stmt = $pdo->prepare('SELECT * FROM estore_db.category WHERE id = ?');
            
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

        public function save()
        {
            $data = array (
                'name_text' => $this->name,
            );
            if(!empty($this->id)){
                $data['id'] = $this->id;
                $sql = 'UPDATE estore_db.`category` SET `name`=:name_text WHERE estore_db.`category`.`id`=:id';
            } else {
                $sql = 'INSERT INTO estore_db.`category` (`name`) VALUES (:name_text)';
            }
            $pdo = Db::conection();
            $stmt = $pdo->prepare($sql);
            $stmt->execute($data);
            $this->id = $pdo->lastInsertId();
            return true; 
        }
}