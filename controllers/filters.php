<?php 
class filters extends Controller{
    public function __construct()
    {
        parent::__construct();
    }
    public function render(){
        $this->vista->render('filters');
    }
}