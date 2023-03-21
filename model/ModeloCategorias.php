<?php
require_once 'Conexion.php';
class ModeloCategorias{
    private $db;

    public function __construct(){
        $this->db = Conexion::__connect();
    }
    public function getCategorias(){
        $query = $this->db->query("SELECT nombre FROM categorias");
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($result);
    }
}
