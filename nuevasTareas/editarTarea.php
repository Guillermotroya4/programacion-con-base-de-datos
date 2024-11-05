<?php
require_once 'tareaService.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombreNuevo = $_POST['nombreNuevo'];
    $idNuevo = $_POST['idNuevo'];


    if (actualizarTarea(new tarea($idNuevo, $nombreNuevo, null))) {
        header("location: index.php");
    } else {
        echo "Error";
    }
}
?>
<form method="post" action="">
    <label for="nombreNuevo">Nuevo nombre:</label>
    <input id="nombreNuevo" type="text" name="nombreNuevo">
    <input type="hidden" name="idNuevo" value="<?= $_GET['id']?>">

    <div class="operaciones">
        <input type="submit" value="cambiar Nombre">
    </div>
</form>

