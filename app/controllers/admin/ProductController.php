<?php
    require_once 'app/controllers/admin/ProducerController.php';
    require_once 'app/vendor/Controller.php';
    require_once 'app/vendor/Db.php';
    require_once 'app/models/Product.php';
    require_once 'app/models/Producer.php';
    require_once 'app/models/Category.php';

    class ProductController extends Controller
    {

        public function actionIndex()
        {
            $product = (Product::findAll());
            $category = (Category::findAll());
            $producer = (Producer::findAll());
            $this->render('admin/product/list', array(
                'product' => $product,
                'producer' => $producer,
                'category' => $category
            ));
        }   

        public function actionView($data)
        {
            $product = (Product::find($data['id']));
            $this->render('admin/product/view', array(
                'product' => $product
            ));

            
        }

        public function actionCreate()
        {
            $product = new Product();
            
            $category = (Category::findAll());
            $producer = (Producer::findAll());

            $this->render('admin/product/create', array(
                'producer' => $producer,
                'category' => $category
            ));

            if(!empty($_POST)){
                
                if($product->load($_POST) && $product->save()){
                    header('Location:product-view?id='.$product->id);
                }
            }

            $this->render('admin/product/create', array(
                'product' => $product
            ));
        }

        public function actionUpdate($data)
        {
                
                $product = (Product::find($data['id']));
                $category = (Category::findAll());
                $producer = (Producer::findAll());

                if(!empty($_POST)){
                    $product = new Product();

                    $product->load($_POST);
                    $product->id = $data['id'];

                    if(empty($product->error)){

                        $product->save();
                        header('Location:product-view?id='.$data['id']);
                    }
                }
                
            $this->render('admin/product/update', array(
                'product' => $product,
                'producer' => $producer,
                'category' => $category
            ));
        }
        
    }