<?php
require_once 'Connections/Database.php';

class ComunidadHandler {
    private $db;

    public function __construct(Database $database) {
        $this->db = $database->getConnection();
    }

    public function obtenerComunidades() {
        $stmt = $this->db->prepare("SELECT idcomunidad, comunidad FROM comunidades ORDER BY comunidad");
        $stmt->execute();
        return $stmt->fetchAll();
    }
}