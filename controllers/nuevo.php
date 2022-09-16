<?php

class Nuevo extends Controller{
    function __construct()
    {
        parent::__construct();
    }
    public function render(){
        $this->vista->render('nuevo/index');
    }
}
