<?php
class Errors extends Controller{

    public function __construct($error)
    {
        parent::__construct();
        //no hace falta declarar los atributos de la clase
        $this->vista->mensaje = "error ".$error;
        
    }
    public function render(){
        $this->vista->render('error/index');
    }
}

?>