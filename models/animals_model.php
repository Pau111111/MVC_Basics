<?php
class animals_model{
    private $db;
    private $animals;
 
    public function __construct(){
        $this->db=Conectar::conexion();
        $this->animals=array();
    }
    public function get_animals(){
        $consulta=$this->db->query("select * from animals;");
        while($filas=$consulta->fetch_assoc()){
            $this->animals[]=$filas;
        }
        return $this->animals;
    }
}
?>