<?php

class Consulta extends Controller{
    function __construct()
    {
        parent::__construct();
        
    }
    public function render(){
        $this->vista->render('consulta/index');
    }
    function __destruct()
    {
        
    }
}