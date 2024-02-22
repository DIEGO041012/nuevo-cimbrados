<?php

include('constructor_reporte_diario.php');

conectarBD();

if($conexion){
    $sql = "SELECT * FROM formulario_reporte_diario";
    $resultado = $conexion->query($sql);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area TI</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./datos.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <header class="header">
    <a href="principal.php">
            <img class="header__logo" src="img/logocimbrados-removebg-preview.png" alt="Logotipo">
        </a>
    </header>
    <nav class="navegacion">
        <a class="navegacion__enlace navegacion__enlace--activo" href="principal.php">Formularios</a>
        <a class="navegacion__enlace" href="./datos.php">Base de Datos</a>   
    </nav>
    
    <main class="contenedor">
        <h1>reporte</h1>

        <div class="prestamos"> 
            <div class="cabecera1">
                <span>Nombre</span>
                <span>Mes</span>
                <span>Dia</span>  
                <span>Area</span>             
                <span>Actividad Obra</span>
                <span>Centro Costos</span>
                <span>Actividad Planta</span>
                <span>Causa Inactiva</span>  
                <span>Fecha Registro</span>                            
                <!-- Agrega más encabezados según tus necesidades -->
            </div>

            <?php while($formulario_reporte_diario = $resultado->fetch_assoc()): ?>
                <div class="prestamo" id="<?php echo $formulario_reporte_diario['id']?>">
                <div class="nombre"><?php echo $formulario_reporte_diario['nombre']?></div>
                <div class="mes"><?php echo $formulario_reporte_diario['mes']?></div>
                <div class="dia"><?php echo $formulario_reporte_diario['dia']?></div>
                <div class="area"><?php echo $formulario_reporte_diario['area']?></div>          
                <div class="actividad_obra"><?php echo $formulario_reporte_diario['actividad_obra']?></div>
                <div class="centro_costos"><?php echo $formulario_reporte_diario['centro_costos']?></div>
                <div class="actividad_planta"><?php echo $formulario_reporte_diario['actividad_planta']?></div>
                <div class="causa_inactividad"><?php echo $formulario_reporte_diario['causa_inactividad']?></div>
                <div class="fechaSistema"><?php echo $formulario_reporte_diario['fechaSistema']?></div>                           
                <!-- Agrega más datos según tus necesidades -->
                </div>
            <?php endwhile; ?>
        </div>
    </main> 

    <footer class="footer">
        <p class="footer__texto">ComestiblesDan - Todos los derechos Reservados 2024.</p>
    </footer> 
    <script src="./js/reporte_diario.js"></script> 
    <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script> 
</body>
</html>