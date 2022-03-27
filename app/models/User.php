<?php

require_once 'app/vendor/Db.php';
require_once 'app/vendor/Model.php';



class User extends Models{
    
    public $name;
    public $phone;
    public $password;
    public $login;


    public static function findAll()
    {
        $pdo = Db::conection();

        $stmt = $pdo->prepare('SELECT * FROM estore_db.usrers');

        $stmt->execute();

        while($row = $stmt->fetch()){
            $users[] = $row;
        }

        return $users;
    }

    public static function find(int $id)
    {
        $pdo = Db::conection();

        $stmt = $pdo->prepare('SELECT * FROM estore_db.users WHERE id = ?');
        
        $stmt->execute(array($id));
        
        return $stmt->fetch();
    }
    
    private function findUserByPhone($phone)
    {
        $pdo = Db::conection();

        $stmt = $pdo->prepare('SELECT `phone` FROM estore_db.users WHERE id = ?');
        
        $stmt->execute(array($phone));
        
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

    // public function setPhone($phone)
    // {
    //     $user = $this->findUserByPhone($phone);
    //     if(!empty($user)){
    //         $this->error['phone'] = '';
    //     } else {
    //         $this->phone = $phone;
    //     }
    // }

    public function setPassword(string $password)
    {
        if($password !== ''){
            $this->password = $password;

        } else {
            $this->error['password'] = '';
        }
    }

    public function setLogin(string $login)
    {
        if($login !== ''){
            $this->login = $login;
        } else {

            $this->error['login'] = '';
        }
    }

    public function save()
    {
        $pdo = Db::conection();
        $stmt = $pdo->prepare('INSERT INTO estore_db.`users` (`login`,`name`,`phone`,`password`) VALUES (:login_text, :name_text, :phone, :password_hash )');
        $data = array (
            'login_text' => $this->login,
            'name_text' => $this->name,
            'phone' => $this->phone,
            'password_hash' => md5($this->password)
        );
        $stmt->execute($data);
        $this->id =$pdo->lastInsertId();
        return true; 
    }

    public function login()
    {
        $user = $this->findUserByPhone($this->phone);
        
        if(empty($user)) {

            if(md5($this->password) == $user['password'] && $this->login == $user['login']){
                
                session_start();
                $_SESSION['user'] = $user['login'];
                $_SESSION['id'] = $user['id'];
                var_dump($_SESSION);

            } else {
                echo 'no';
            }
        }



        return true;
    }
}