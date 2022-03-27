<?php
    require_once 'app/controllers/admin/ProducerController.php';
    require_once 'app/vendor/Controller.php';
    require_once 'app/vendor/Db.php';
    require_once 'app/models/Galery.php';
    require_once 'app/models/Product.php';

    class GaleryController extends Controller
    {

        
        public function actionCreate()
        {
            $galery = new Galery();
            
            $product = (Product::findAll());

            $this->render('admin/galery/create', array(
                'product' => $product,
            ));

            $galery->upload();
            
            if(!empty($_POST)){
                if($galery->load($_POST) && $galery->save()){

                    header('Location:galery-view?id='.$galery->id);
                }
            }
            $this->render('admin/galery/create', array(
                'galery' => $galery
            ));
        }
    }

