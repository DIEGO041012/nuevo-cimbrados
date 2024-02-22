<?php
require './conexiondatabase.php';


$conexion = conectarBD();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Aquí obtienes los datos del formulario
    $area_solicitante = $_POST['area_solicitante'];
    $nombre_solicitante = $_POST['nombre_solicitante'];
    $descripcion = $_POST['descripcion'];
    $cantidad = $_POST['cantidad'];
    $unidad_medida = $_POST['unidad_medida'];
    $centro_costos = $_POST['centro_costos'];
    $proviene = $_POST['proviene'];
    $respuesta = $_POST['respuesta'];
    $destino = $_POST['destino'];
    $descripcion = $_POST['descripcion'];
    $observaciones = $_POST['observaciones'];
    $fecha_max = $_POST['fecha_max'];
    $cobro_terceros = $_POST['cobro_terceros'];
    $proveedor = $_POST['proveedor']; 
    $precio_unitario = $_POST['precio_unitario'];
    $No_factura = $_POST['No_factura'];
    $como_recupera = $_POST['como_recupera'];
    $No_remision = $_POST['No_remision'];
    $No_contable = $_POST['No_contable'];
    $recuperable_nombre = $_POST['recuperable_nombre'];
    
    // Puedes obtener los otros campos de la misma manera

    // Por ejemplo, solo imprimo los datos por ahora:
    echo "area_solicitante: " . $area_solicitante . "<br>";
    echo "nombre_solicitante: " . $nombre_solicitante . "<br>";
    echo "descripcion: " . $descripcion . "<br>";
    echo "cantidad: " . $cantidad . "<br>";
    echo "unidad_medida: " . $unidad_medida . "<br>";
    echo "centro_costos: " . $centro_costos . "<br>";
    echo "proviene: " . $proviene . "<br>";
    echo "respuesta: " . $respuesta . "<br>";
    echo "destino: " . $destino . "<br>";
    echo "descripcion: " . $descripcion . "<br>";
    echo "observaciones: " . $observaciones . "<br>";
    echo "fecha_max: " . $fecha_max . "<br>";
    echo "cobro_terceros: " . $cobro_terceros . "<br>";
    echo "proveedor: " . $proveedor . "<br>";
    echo "precio_unitario: " . $precio_unitario . "<br>";
    echo "No_factura: " . $No_factura . "<br>";
    echo "como_recupera: " . $como_recupera . "<br>";
    echo "No_remision: " . $No_remision . "<br>";
    echo "No_contable: " . $No_contable . "<br>";
    echo "recuperable_nombre: " . $recuperable_nombre . "<br>";
   
    // Puedes imprimir los otros campos de la misma manera.

    $sql = "INSERT INTO formularios_requisiciones(area_solicitante, nombre_solicitante, descripcion, cantidad, unidad_medida, centro_costos, proviene, respuesta, destino, observaciones, fecha_max, cobro_terceros, proveedor, precio_unitario, no_factura, como_recupera, no_remision, no_contable, recuperable_nombre) VALUES ('$area_solicitante', '$nombre_solicitante', '$descripcion', '$cantidad', '$unidad_medida', '$centro_costos', '$proviene', '$respuesta', '$destino', '$observaciones', '$fecha_max', '$cobro_terceros', '$proveedor', '$precio_unitario', '$No_factura', '$como_recupera','$No_remision', '$No_contable', '$recuperable_nombre')";


    $conexion->query($sql);

}
?>
