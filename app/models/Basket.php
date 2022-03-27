<?php

    require_once 'app/vendor/Db.php';
    require_once 'app/vendor/Model.php';
    require_once 'app/models/Product.php';

    class Basket extends Models
    {
        public $id;
        public $product;

        public function add()
        {
            session_start();
            
        }
    }