<?php
require_once 'controllers/error.php';
class App{

    function __construct(){
    //OBTENGO LA URL EN FORMA DE ARRAY

        $url = isset($_GET['url']) ? $_GET['url']:null; //---$URL  = si existe algo en get['url']lo guardo, sino guardo null.
        $url = rtrim($url,'/'); //elimina los / de mas
        $url = explode('/',$url); //convierte cada / en una posicion, ej: home/funcion/xcosa = 0/1/2
        
        //si la url esta vacia, el controlador es home
        if(empty($url[0])){
            $archivoController = 'controllers/home.php';
            require_once $archivoController;
            $controller = new Home();
            $controller->loadModel('home');
            $controller->render();
            return false;
        }
        //en caso d qu no ste vacia verifico que exista y la requiero
        $archivoController = 'controllers/'.$url[0].".php";
        if(file_exists($archivoController)){
        
            require_once $archivoController;
            $controller = new $url[0];
            $controller->loadModel($url[0]);
            //si hay algo mas en  la url, ademas del controlador, estamos llamando un metodo
            if (isset($url[1])){
                if(!method_exists($controller, $url[1])){
                    $controller = new Errors('404');
                    $controller->render();
                }
                else{
                    //cargo todos los parametros que haya (se dividen por cada "/" que haya despues del metodo)
                    $numParametros = sizeof($url);
                    if($numParametros > 2){
                        $parametros = [];
                        for($i = 2; $i<$numParametros;$i++){
                            array_push($parametros, $url[$i]);
                        }
                        $controller->{$url[1]}($parametros);
                    }else{
                    $controller->{$url[1]}();
                    }
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