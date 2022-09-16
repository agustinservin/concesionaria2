<?php
require_once 'controllers/error.php';
class App{

    function __construct(){
    //OBTENGO LA URL EN FORMA DE ARRAY

        $url = isset($_GET['url']) ? $_GET['url']:null; //---$URL  = si existe algo en get['url']lo guardo, sino guardo null.
        $url = rtrim($url,'/'); //elimina los / de mas
        $url = explode('/',$url); //convierte cada / en una posicion, ej: home/funcion/xcosa = 0/1/2
    
        if(empty($url[0])){
            $archivoController = 'controllers/Home.php';
            require_once $archivoController;
            $controller = new Home();
            $controller->loadModel('home');
            $controller->render();
            return false;
        }
    
        $archivoController = 'controllers/'.$url[0].".php";
        if(file_exists($archivoController)){
        
            require_once $archivoController;
            $controller = new $url[0];
            $controller->loadModel($url[0]);

            if (isset($url[1])){
                if(!method_exists($controller, $url[1])){
                    $controller = new Errors('404');
                    $controller->render();
                }
                else{
                    $controller->{$url[1]}();
                }      
            }
            else{
                $controller->render();
            }
        }
        else{
            $controller = new Errors('404');
            $controller->render();
        }
    }
}


?>