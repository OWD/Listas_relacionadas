<?php
require_once 'Connections/Database.php'; // Asegúrate de que la ruta sea correcta
require_once 'ComunidadHandler.php'; // Asegúrate de que la ruta sea correcta

// Inicializar conexión y manejador de comunidades
try {
    $db = new Database();
    $comunidadHandler = new ComunidadHandler($db);
    $comunidades = $comunidadHandler->obtenerComunidades(); // Obtener comunidades desde la base de datos
} catch (Exception $e) {
    die("Error al cargar datos: " . $e->getMessage());
}
?>

<h2 style="text-align:center;">Municipios de España</h2>
<div class="col-md-6">

</div>


<form method="post" id="formlistasrelacionadas" name="formlistasrelacionadas">
    <label for="comunidades" class="form-label">Comunidades Autónomas</label>
    <select class="form-select" id="comunidades" name="idcomunidad" onchange="listasRelacionadas()">
        <option value="">Elegir...</option>
        <?php if (!empty($comunidades)): ?>
            <?php foreach ($comunidades as $comunidad): ?>
                <option value="<?= $comunidad['idcomunidad'] ?>">
                    <?= htmlspecialchars($comunidad['comunidad'], ENT_QUOTES, 'UTF-8') ?>
                </option>
            <?php endforeach; ?>
        <?php else: ?>
            <option value="0">No hay datos disponibles</option>
        <?php endif; ?>
    </select>
    <hr>
    <label for="provincias" class="form-label">Provincias</label>
    <select class="form-select" id="provincias" name="idprovincia" onchange="listasRelacionadas2()"></select>
    <hr>
    <label for="poblaciones" class="form-label">Municipios</label>
    <select class="form-select" id="poblaciones" name="idpoblacion"></select>
</form>

<script>
    function listasRelacionadas() {
        const comunidadElegida = document.getElementById('comunidades').value;
        if (comunidadElegida > 0) {
            $.post('includes/funciones-ajax.php', { idcomunidad: comunidadElegida, formid: 1 }, function(resp) {
                $('#provincias').html(resp);
                $('#poblaciones').html('<option value="0">Selecciona una provincia</option>');
            }).fail(function() {
                alert('Error al cargar provincias.');
            });
        }
    }

    function listasRelacionadas2() {
        const provinciaElegida = document.getElementById('provincias').value;
        if (provinciaElegida > 0) {
            $.post('includes/funciones-ajax.php', { idprovincia: provinciaElegida, formid: 2 }, function(resp) {
                $('#poblaciones').html(resp);
            }).fail(function() {
                alert('Error al cargar poblaciones.');
            });
        }
    }
</script>