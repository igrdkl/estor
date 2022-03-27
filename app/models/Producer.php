<?php

    require_once 'app/vendor/Db.php';
    require_once 'app/vendor/Model.php';


    class Producer extends Models{   

        public static function findAll()
        {
            $pdo = Db::conection();

            $stmt = $pdo->prepare('SELECT * FROM estore_db.producer');

            $stmt->execute();

            while($row = $stmt->fetch()){
                $producer[] = $row;
            }

            return $producer;
        }

        public static function find(int $id)
        {
            $pdo = Db::conection();

            $stmt = $pdo->prepare('SELECT * FROM estore_db.producer WHERE id = ?');
            
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
            $pdo = Db::conection();
            $stmt = $pdo->prepare('INSERT INTO estore_db.`producer` (`name`) VALUES (:name_text)');
            $data = array (
                'name_text' => $this->name,
            );
            $stmt->execute($data);
            $this->id =$pdo->lastInsertId();
            return true; 
        }

}

