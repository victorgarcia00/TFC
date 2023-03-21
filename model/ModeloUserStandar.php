<?php
require_once 'Conexion.php';
class ModeloUserStandar{
    private $db;

    public function __construct(){
        $this->db = Conexion::__connect();
    }
    public function cargarPerfil(){
        $query = $this->db->query("SELECT * FROM usuarios WHERE id=1");
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($result);
    }
    public function crearReserva(){

    }
    public function verReserva(){
        
    }
    public function editarReserva(){
        
    }
    public function eliminarReserva(){
        
    }
    public function verTodasReservas() {

    }
    public function crearRecordatorioLocal(){

    }
    public function verRecordatorioLocal(){
        
    }
    public function editarRecordatorioLocal(){
        
    }
    public function eliminarRecordatorioLocal(){
        
    }
    public function verTodosRecordatoriosLocales() {

    }

}