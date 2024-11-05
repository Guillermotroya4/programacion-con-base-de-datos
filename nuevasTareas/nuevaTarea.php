<!doctype html>
<?php
require_once 'tareaService.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST['nombre'];

    if(guardarTarea($nombre)){
        header("location: index.php");
    }else{
        echo "Error";
    }

}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        html{
            background-color: #FAEBD7;
            text-align: center;
        }
    </style>
</head>
<body>
<header>
    <h1>Creaccion de tarea</h1>
</header>

<form method="post" action="">
    <label for="nombre">Nombre:</label>
    <input id="nombre" type="text" name="nombre">



    <div class="operaciones">
        <input type="submit" value="Guardar">
    </div>
</form>
</body>
</html>