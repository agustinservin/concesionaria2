<?php

class Ver extends Controller{
    function __construct()
    {
        parent::__construct();
        
    }
    public function render(){
        $this->vista->render('ver/index');
    }
   public function getAuto($param){
        if($param == null){
            $error = new Errors('404');
            $this->vista = $error;
        }
        else{
            $patente = $param[0];
            $auto = $this->model->getCarById($patente);
            if(isset($auto->patente)){
                $this->vista->auto = $auto;
            }
            else{
            $error = new Errors('404');
            $this->vista = $error;
            }
        }
    }

}