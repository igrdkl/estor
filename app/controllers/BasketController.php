<?php
    require_once 'app/vendor/Controller.php';
    require_once 'app/vendor/Db.php';
    require_once 'app/models/Basket.php';
    require_once 'app/models/Product.php';

    //add product - bool
    //minus product - bool

    //view

    class BasketController extends Controller
    {
        public function actionAdd()
        {


            
        }   


        public function actionView($data)
        {
            $product = (Product::find($data['id']));
            $this->render('basket/view', array(
                'product' => $product
            ));
        }
    }

?>