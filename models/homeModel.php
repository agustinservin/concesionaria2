<?php
include_once 'models/auto.php';
class homeModel extends Model{
    public function __construct()
    {
        parent::__construct();    
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
    
}


?>