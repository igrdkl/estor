<?php
    require_once 'app/vendor/Controller.php';
    require_once 'app/vendor/Db.php';
    require_once 'app/models/Order.php';
    require_once 'app/models/Product.php';

    class OrderController extends Controller
    {
        // public function actionIndex()
        // {
        //     $product = (Product::findAll());
        //     $this->render('user/index', array(
        //         'product' => $product
        //     ));;
        // }   

        public function actionView($data)
        {
            $order= (Order::find($data['id']));
            $this->render('order/view', array(
                'order' => $order
            ));
        }
    }