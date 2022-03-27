<?php

    require_once 'app/vendor/Controller.php';
    require_once 'app/vendor/Db.php';
    require_once 'app/models/Category.php';

    class CategoryController extends Controller
    {

        public function actionIndex()
        {
            $category = (Category::findAll());
            $this->render('admin/category/list', array(
                'category' => $category
            ));
        }   

        public function actionView($data)
        {
            $category = (Category::find($data['id']));
            $this->render('admin/category/view', array(
                'category' => $category
            ));
        }

        public function actionCreate()
        {
            $category = new Category();

            if(!empty($_POST)){
                if($category->load($_POST) && $category->save()){
                    header('Location:category-view?id='.$category->id);
                }
            }
            $this->render('admin/category/create', array(
                'category' => $category
            ));
        }

        public function actionUpdate($data)
        {
                
                $category = (Category::find($data['id']));

                if(!empty($_POST)){
                    var_dump($_POST);

                    $category = new Category();

                    $category->load($_POST);
                    $category->id = $data['id'];

                    if(empty($category->error)){
                        $category->save();
                        header('Location:category-view?id='.$data['id']);
                    }
                }
                
            $this->render('admin/category/update', array(
                'category' => $category
            ));
        }
    }