<?php
class Home extends Controller{
    
    public function __construct()
    {
        parent::__construct();
    }
    public function render(){
        $autos = $this->model->getCars();
        $this->vista->autos = $autos;
        $this->vista->render('home/index');
    }
}
?>