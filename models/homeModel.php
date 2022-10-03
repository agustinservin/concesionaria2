<?php
include_once 'models/auto.php';
class homeModel extends Model{
    public function __construct()
    {
        parent::__construct();    
    }
    public function getCar($nombre,$año,$modelo){
        
        $objCoche = new Auto();
        $query = $this->db->connect()->prepare("SELECT * FROM autos WHERE nombre = :nombre and anio = :anio and modelo = :modelo");
        $queryFotos = $this->db->connect()->prepare("SELECT * FROM imagenes WHERE patente = :patente");
        try {
            $query->execute(['nombre'=>$nombre,'anio'=>$año,'modelo'=>$modelo]);
            
            while($row = $query->fetch()){
                $objCoche->patente = $row['patente'];
                $objCoche->nombre = $row['nombre'];
                $objCoche->modelo = $row['modelo'];
                $objCoche->año = $row['anio'];
                $objCoche->km = $row['km'];
                $objCoche->color = $row['color'];
                $queryFotos->execute(['patente'=>$objCoche->patente]);
                while($rowPics = $queryFotos->fetch()){
                    
                $objCoche->foto = $rowPics['foto1']; 
                $objCoche->foto2 = $rowPics['foto2']; 
                $objCoche->foto3 = $rowPics['foto3']; 
                }
            }
            if(isset($objCoche->patente)){
            return $objCoche;
            }
        } catch (PDOException $e) {
            echo 'error en la conexion'.$e->getMessage();
        }        

    }

    public function getCars(){
      
        $items=[];
        try {
            $query = $this->db->connect()->query("SELECT * FROM autos");
            while($row = $query->fetch()){
                $item = new Auto();
                $item->patente = $row['patente'];
                $item->nombre  = $row['nombre'];
                $item->modelo  = $row['modelo'];
                $item->año  = $row['anio'];
                $item->km  = $row['km'];
                $item->color   = $row['color'];
                $queryFotos = $this->db->connect()->query("SELECT * FROM imagenes WHERE patente = '".$item->patente."'");
                while($rowFoto = $queryFotos->fetch()){
                    $item->foto = $rowFoto['foto1'];

                    array_push($items, $item);
                }
            }
        return $items;
        } catch (PDOException $e) {
            return [];
            }
        }
    

    public function buscar($parametro){
        $items2=[];
        try {
            $query = $this->db->connect()->query("SELECT * FROM autos WHERE nombre LIKE '%".$parametro."%' ");
            while($row = $query->fetch()){
                $item = new Auto();
                $item->patente = $row['patente'];
                $item->nombre  = $row['nombre'];
                $item->modelo  = $row['modelo'];
                $item->año  = $row['modelo'];
                $item->km  = $row['km'];
                $item->color   = $row['color'];
                $queryFotos = $this->db->connect()->query("SELECT * FROM imagenes WHERE patente = '".$item->patente."'");
                while($rowFoto = $queryFotos->fetch()){
                    $item->foto = $rowFoto['foto1'];

                    array_push($items2, $item);
                }
            }
        return $items2;
        } catch (PDOException $e) {
            return [];
            }
    }
    
}


?>