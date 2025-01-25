<?php
require_once '../ProvinciasHandler.php';

try {
    $db = new Database();
    $handler = new ProvinciasHandler($db);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['formid']) && $_POST['formid'] == 1 && isset($_POST['idcomunidad'])) {
            $idComunidad = intval($_POST['idcomunidad']);
            $provincias = $handler->obtenerProvinciasPorComunidad($idComunidad);
            if ($provincias) {
                echo "<option value=''>Elegir...</option>";
                foreach ($provincias as $provincia) {
                    echo "<option value='{$provincia['idprovincia']}'>" . htmlspecialchars($provincia['provincia'], ENT_QUOTES, 'UTF-8') . "</option>";
                }
            } else {
                echo "<option value='0'>No hay provincias disponibles</option>";
            }
        } elseif (isset($_POST['formid']) && $_POST['formid'] == 2 && isset($_POST['idprovincia'])) {
            $idProvincia = intval($_POST['idprovincia']);
            $poblaciones = $handler->obtenerPoblacionesPorProvincia($idProvincia);
            if ($poblaciones) {
                foreach ($poblaciones as $poblacion) {
                    echo "<option value='{$poblacion['idpoblacion']}'>" . htmlspecialchars($poblacion['poblacion'], ENT_QUOTES, 'UTF-8') . "</option>";
                }
            } else {
                echo "<option value='0'>No hay poblaciones disponibles</option>";
            }
        }
    }
} catch (Exception $e) {
    echo "<option value='0'>Error interno: " . htmlspecialchars($e->getMessage(), ENT_QUOTES, 'UTF-8') . "</option>";
}