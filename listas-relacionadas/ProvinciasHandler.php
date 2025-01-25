<?php
require_once 'Connections/Database.php';

class ProvinciasHandler {
    private $db;

    public function __construct(Database $database) {
        $this->db = $database->getConnection();
    }

    public function obtenerProvinciasPorComunidad($idComunidad) {
        $stmt = $this->db->prepare("SELECT idprovincia, provincia FROM provincia WHERE idcomunidad = :idComunidad");
        $stmt->bindParam(':idComunidad', $idComunidad, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function obtenerPoblacionesPorProvincia($idProvincia) {
        $stmt = $this->db->prepare("SELECT idpoblacion, poblacion FROM poblacion WHERE idprovincia = :idProvincia");
        $stmt->bindParam(':idProvincia', $idProvincia, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}