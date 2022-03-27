<?php

    require_once 'app/vendor/Controller.php';
    require_once 'app/vendor/Db.php';
    require_once 'app/models/Producer.php';

    class ProducerController extends Controller
    {

        public function actionIndex()
        {
            $producer = (Producer::findAll());
            $this->render('admin/producer/list', array(
                'producer' => $producer
            ));
        }   

        public function actionView($data)
        {
            $producer = (Producer::find($data['id']));
            $this->render('admin/producer/view', array(
                'producer' => $producer
            ));
        }

        public function actionCreate()
        {
            $producer = new Producer();

            if(!empty($_POST)){
                if($producer->load($_POST) && $producer->save()){
                    header('Location:producer-view?id='.$producer->id);
                }
            }
            $this->render('admin/producer/create', array(
                'producer' => $producer
            ));
        }
    }