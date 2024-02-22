<?php
function conectarBD(){

    $servidor="localhost";
    $usuario="root";
    $contraseña="diego041012";
    $basedatos="base_datos_cimbrdos";
    
    $conexion=new mysqli($servidor,$usuario,$contraseña,$basedatos);
    
    if($conexion->connect_errno)
    {
        die("Error:".$conexion->connect_errno);

    }

    return $conexion;
}

?>