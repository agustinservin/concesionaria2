<?php
class Controller{
    function __construct()
    { 
        $this->vista = new View();
    }

    function loadModel($model){
        $url = 'models/'.$model.'Model.php';
        if(file_exists($url)){
            require $url;
            $modelName = $model.'Model';
            $this->model = new $modelName();
        }
    }
}