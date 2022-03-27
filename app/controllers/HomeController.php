<?php
    require_once 'app/vendor/Controller.php';
    require_once 'app/vendor/Db.php';
    require_once 'app/models/Product.php';
    require_once 'app/models/Category.php';
    require_once 'app/models/Producer.php';

    class HomeController extends Controller
    {
        public function actionIndex()
        {
            $product = (Product::findAll());
            $category = (Category::findAll());
            $producer = (Producer::findAll());
            $this->render('home/index', array(
                'product' => $product,
                'producer' => $producer,
                'category' => $category
            ));;
        }   

        public function actionView($data)
        {
            $product = (Product::find($data['id']));
            $this->render('product/view', array(
                'product' => $product
            ));
        }
    }