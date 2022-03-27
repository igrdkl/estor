<?php   
spl_autoload_register();

    require_once 'app/config/routes.php';
    require_once 'app/vendor/Route.php';


    $a = new \vendor\Route();
    $a->start();

//     $uri = $_SERVER['REQUEST_URI'];

//     $uri = trim($uri,'/');

//     $rout_path = explode('?',$uri);
//     $params = explode('&',$rout_path[1]);
//     $data = array();
//     foreach($params as $string_param){
//         $exp_p = explode('=',$string_param);
//         $data[$exp_p[0]] = $exp_p[1];
//     }

//     if(isset($urlRoutes[$rout_path[0]])){

//         $rout_way = explode('/',$urlRoutes[$rout_path[0]]); 
//         $controllerName = $rout_way[0];
//         $actionName = $rout_way[1];

//         $contr_name = ucfirst($controllerName).'Controller';
//         $contr_file = 'app/controllers/'.$contr_name.'.php';

//         if(file_exists($contr_file)){
//             require_once $contr_file;
//         } else {
//             die('404');
//         }

//         if(class_exists($contr_name)){
//             $controller = new $contr_name();
//         } else {
//             die('Class is not found');
//         }

//         $action = 'action'.ucfirst($actionName);
//         if(method_exists($controller,$action)){
//             $controller->$action($data);
//         } else {
//             $controller->actionIndex();
//         }      
// }

