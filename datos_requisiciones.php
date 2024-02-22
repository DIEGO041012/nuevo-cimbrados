<?php

include('constructor_reporte_diario.php');

conectarBD();
   
if($conexion){
    $sql = "SELECT * FROM formularios_requisiciones";
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
    </header>
    <nav class="navegacion">
        <a class="navegacion__enlace navegacion__enlace--activo" href="principal.php">Formularios</a>
        <a class="navegacion__enlace" href="./datos.php">Base de Datos</a>   
    </nav>

    <main class="contenedor">
        <h1>Requisiciones </h1>

        <div class="prestamos3">
            <div class="cabecera3">
                <span>Area Solicitante</span>
                <span>Descripcion</span>
                <span>Cantidad</span>
                <span>Unidad Medida</span>
                <span>Centro Costos</span>
                <span>Proviene</span>
                <span>Respuesta</span>
                <span>Destino</span>
                <span>Observaciones</span>
                <span>Fecha Max</span>
                <span>Cobro Terceros</span>
                <span>Proveedor</span>
                <span>Precio Unitario</span>
                <span>N° factura</span>
                <span>Como Recupera</span>
                <span>N° Remision</span>
                <span>N° contable</span>
                <span>Recuperable Nombre</span>
                <span>Fecha Registro</span>
                

                <!-- Agrega más encabezados según tus necesidades -->
            </div>

            <?php while($formularios_requisiciones = $resultado->fetch_assoc()): ?>
                <div class="prestamo3" id="<?php echo $formularios_requisiciones['id']?>">
                    <div class="area_solicitante"><?php echo $formularios_requisiciones['area_solicitante']?></div>
                    <div class="nombre_solicitante"><?php echo $formularios_requisiciones['nombre_solicitante']?></div>
                    <div class="descripcion"><?php echo $formularios_requisiciones['descripcion']?></div>
                    <div class="cantidad"><?php echo $formularios_requisiciones['cantidad']?></div>
                    <div class="unidad_medida"><?php echo $formularios_requisiciones['unidad_medida']?></div>
                    <div class="centro_costos"><?php echo $formularios_requisiciones['centro_costos']?></div>
                    <div class="proviene"><?php echo $formularios_requisiciones['proviene']?></div>
                    <div class="respuesta"><?php echo $formularios_requisiciones['respuesta']?></div>
                    <div class="destino"><?php echo $formularios_requisiciones['destino']?></div>
                    <div class="observaciones"><?php echo $formularios_requisiciones['observaciones']?></div>
                    <div class="fecha_max"><?php echo $formularios_requisiciones['fecha_max']?></div>
                    <div class="cobro_terceros"><?php echo $formularios_requisiciones['cobro_terceros']?></div>
                    <div class="proveedor"><?php echo $formularios_requisiciones['proveedor']?></div>
                    <div class="precio_unitario"><?php echo $formularios_requisiciones['precio_unitario']?></div>
                    <div class="No_factura"><?php echo $formularios_requisiciones['No_factura']?></div>
                    <div class="como_recupera"><?php echo $formularios_requisiciones['como_recupera']?></div>
                    <div class="No_remision"><?php echo $formularios_requisiciones['No_remision']?></div>
                    <div class="No_contable"><?php echo $formularios_requisiciones['No_contable']?></div>
                    <div class="recuperable_nombre"><?php echo $formularios_requisiciones['recuperable_nombre']?></div>
                    <div class="fechaSistema"><?php echo $formularios_requisiciones['fechaSistema']?></div>
                    <!-- Agrega más datos según tus necesidades -->
                </div>
            <?php endwhile; ?>
        </div>
    </main> 
    
    <footer class="footer">
        <p class="footer__texto">ComestiblesDan - Todos los derechos Reservados 2024.</p>
    </footer>
    
    <script src="./js/requisiciones.js"></script> 
    <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script> 
</body>
</html>