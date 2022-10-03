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
    public function modelo($param = null){
        if(!isset($param[2])){
        header("Location:".constant('URL'));
        }
        else{
            $nombre = $param[0];
            $año = $param[1];
            $modelo = $param[2];
            if($nombre != null && $año != null && $modelo!=null){
                $auto = $this->model->getCar($nombre,$año,$modelo);
                if(!empty($auto)){
                    $this->vista->auto = $auto;
                    $this->vista->render('ver/index');
                }
            }
        }
    }
    public function buscar($marca = null){
        if($marca == null){
            header("Location:".constant('URL'));
        }
        else{
            $parametro = $marca[0];
            if($parametro != null){
            $busqueda = $this->model->buscar($parametro);
            if(!empty($busqueda)){
            $this->vista->autos = $busqueda;
            $this->vista->render('home/index');
            }else{
                $error = new Errors('404');
                $this->vista = $error;
                $this->vista->render('error/index');
            }
        }
    }
}
}
?>