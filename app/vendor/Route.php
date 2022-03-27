<?php
namespace vendor;

use Controller;

class Route
{
    private $uri;
    private $controller_name = 'Index';
    private $action_name = 'Index';
    private $params = array();
    private $rout;
    private $dir_controller = 'app/controllers/';
    public function start(){
        $this->setUri();

        $this->setRout();

        $this->setRoutParam();
  
        $this->redirect();
    }
    public function setUri()
    {
        $this->uri = $_SERVER['REQUEST_URI'];
        $this->uri = trim($this->uri,'/');
    }
    private function setRout(){
        $this->rout = explode('?',$this->uri);
    }
    private function setRoutParam()
    {
        global $urlRoutes;
        if (isset($urlRoutes[$this->rout[0]])) {
          $rout_way = explode("/", $urlRoutes[$this->rout[0]]);
          if($rout_way[0] == 'admin'){
              $this->dir_controller .= 'admin/';
              array_shift($rout_way);
          }
          if ($rout_way[0]) {
            $this->setControllerName($rout_way[0]);
          }
          if ($rout_way[1]) {
            $this->setActionName($rout_way[1]);
          }
        }
        if (isset($this->rout[1])) {
          $this->getParam($this->rout[1]);
        }
    }
    private function setControllerName($name)
    {
        $this->controller_name = ucfirst($name).'Controller';
    }
    private function setActionName($name)
    {
        $this->action_name = 'action'.ucfirst($name);
    }
    private function getParam($param_str)
    {
        $params = explode('&',$param_str);
            foreach($params as $string_param){
                $explode_params = explode('=',$string_param);
                $this->params[$explode_params[0]] = $explode_params[1];
            }
    }
    private function redirect()
    {
        $cont_dir = $this->dir_controller."$this->controller_name.php";
        if(file_exists($cont_dir)){
            require_once $cont_dir;
        } else {
            die('Controller file is not found');
        }
         if(class_exists($this->controller_name)){
             $controller = new $this->controller_name();
        } else {
            die('Class is not found');
        }

        if(method_exists($controller,$this->action_name)){
            $action = $this->action_name;
            $controller->$action($this->params);
        } else {
            $controller->actionIndex();
        }      

    }

}