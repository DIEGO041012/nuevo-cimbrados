<?php
require './conexiondatabase.php';


$conexion = conectarBD();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Aquí obtienes los datos del formulario
    $nombre = $_POST['nombre'];
    $mes = $_POST['mes'];
    $dia = $_POST['dia'];
    $area = $_POST['area'];
    $obra = $_POST['obra'];
    $actividad_obra = $_POST['actividad_obra'];
    $centro_costos = $_POST['centro_costos'];
    $actividad_planta = $_POST['actividad_planta'];
    $causa_inactividad = $_POST['causa_inactividad'];
    
    // Puedes obtener los otros campos de la misma manera

    // Por ejemplo, solo imprimo los datos por ahora:
    
    echo "nombre: " . $nombre . "<br>";
    echo "mes: " . $mes . "<br>";
    echo "dia: " . $dia . "<br>";
    echo "area: " . $area . "<br>";
    echo "obra: " . $obra . "<br>";
    echo "actividad_obra: " . $actividad_obra . "<br>";
    echo "centro_costos: " . $centro_costos . "<br>";
    echo "actividad_planta: " . $actividad_planta . "<br>";
    echo "causa_inactividad: " . $causa_inactividad . "<br>";
    // Puedes imprimir los otros campos de la misma manera.

    $sql = "INSERT INTO formulario_reporte_diario( nombre, mes, dia, area,actividad_obra,centro_costos,actividad_planta,causa_inactividad) VALUES ('$nombre','$mes','$dia','$area','$actividad_obra','$centro_costos','$actividad_planta','$causa_inactividad')";

    $conexion->query($sql);

}
?>