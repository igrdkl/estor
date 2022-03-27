<?php
    require_once 'app/vendor/Controller.php';
    require_once 'app/vendor/Db.php';
    require_once 'app/models/Product.php';

    class ProductController extends Controller
    {
        public function actionIndex()
        {
            $product = (Product::findAll());
            $this->render('home/index', array(
                'product' => $product
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