<?php
include_once 'models/auto.php';
class verModel extends Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function getCarById($patente){
        
        $objCoche = new Auto();
       
        $query = $this->db->connect()->prepare("SELECT * FROM autos WHERE patente = :patente");
        $queryFotos = $this->db->connect()->prepare("SELECT * FROM imagenes WHERE patente = :patente");
        try {
            $query->execute(['patente'=>$patente]);
            $queryFotos->execute(['patente'=>$patente]);
            while($row = $query->fetch()){
                $objCoche->patente = $row['patente'];
                $objCoche->nombre = $row['nombre'];
                $objCoche->modelo = $row['modelo'];
                $objCoche->color = $row['color'];
                while($rowPics = $queryFotos->fetch()){
                $objCoche->foto = $rowPics['foto1']; 
                $objCoche->foto2 = $rowPics['foto2']; 
                $objCoche->foto3 = $rowPics['foto3']; 
                }
            }
            if(isset($objCoche->patente)){
            return $objCoche;
            }
            else{
                $error = new Errors('404');
                return $error;
            }
        } catch (PDOException $e) {
            echo 'error en la conexion'.$e->getMessage();
        }        

    }
}


?>