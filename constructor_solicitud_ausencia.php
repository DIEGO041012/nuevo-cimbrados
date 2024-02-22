<?php
require './conexiondatabase.php';


$conexion = conectarBD();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Aquí obtienes los datos del formulario
    $nombre = $_POST['nombre'];
    $cedula = $_POST['cedula'];
    $cargo = $_POST['cargo'];
    $observaciones = $_POST['observaciones'];
    // Puedes obtener los otros campos de la misma manera

    // Por ejemplo, solo imprimo los datos por ahora:
    
    echo "nombre: " . $nombre . "<br>";
    echo "cedula: " . $cedula . "<br>";
    echo "cargo: " . $cargo . "<br>";
    echo "observaciones: " . $observaciones . "<br>";
    // Puedes imprimir los otros campos de la misma manera.

    $sql = "INSERT INTO formulario_cronograma( nombre, cedula, cargo, observaciones) VALUES ('$nombre','$cedula','$cargo','$observaciones')";

    $conexion->query($sql);

}
?>