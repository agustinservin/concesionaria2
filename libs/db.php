<?php
class DB{
    private $host;
    private $db;
    private $dbuser;
    private $dbpass;
    private $charset;
    
    function __construct()
    {
        $this->host = constant('HOST');
        $this->dbname = constant('DB');
        $this->dbuser = constant('USER');
        $this->dbpass = constant('PASSWORD');
        $this->charset = constant('CHARSET');
    }
    function connect(){
        try {
            $options = [
                PDO::ATTR_ERRMODE  =>  PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES  =>  false
            ];
            $conexion = "mysql:host=" . $this->host .";dbname=" . $this->dbname . ";charset=" . $this->charset;
            $pdo = new PDO($conexion, $this->dbuser, $this->dbpass, $options);
            return $pdo;
        } catch (PDOException $e) {
            print_r("error en la conexion: ".$e->getMessage());
        }
    }
     
     
}
?>