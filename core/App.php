<?php

class App{
    //domain.com/Home/SayHi/12/2
    protected $controller="Home";
    protected $action="SayHi";
    protected $params=[];

    function __construct(){
        $arr = $this->UrlProcess();
        //print_r($arr);
        //Array ( [0] => home [1] => action [2] => param1 [3] => 2 )
        //xu ly controller 
        if(file_exists("./mvc/controllers/".$arr[0].".php")){
            $this->controller = $arr[0];
            //huy phan tu 0 
            unset($arr[0]);
        }
        require_once "./mvc/controllers/". $this->controller .".php";
        //khoi tao doi tuong controller tuong ung , eg : new Home() controller
        $this->controller = new $this->controller;

        //xu ly action
        if(isset($arr[1])){
            if(method_exists($this->controller,$arr[1])){
                $this->action = $arr[1];
            }
            unset($arr[1]);
        }
        //echo $this->action;

        //Xu ly params
        $this->params = $arr? array_values($arr):[];
        //print_r( $this->params);
        //
        call_user_func_array([$this->controller , $this->action], $this->params);
    }
    function UrlProcess(){
        //neu thanh dia chi co url
        if(isset($_GET["url"])){
            //return $u= $_GET["url"];
            return explode("/", filter_var(trim($_GET["url"],"/")));
        }
        
    }
}
?>