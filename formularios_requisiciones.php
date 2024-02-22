<?php

include('constructor_reporte_diario.php');

conectarBD();



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
    <link rel="stylesheet" href="./css/bajas.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<header class="header">
    <a href="principal.php">
        <img class="header__logo" src="img/logocimbrados-removebg-preview.png" alt="Logotipo">
    </a>
</header>
<nav class="navegacion">
    <a class="navegacion__enlace navegacion__enlace--activo" href="./principal.php">Formularios</a>
    <a class="navegacion__enlace" href="./loginadmin.php">Base de Datos</a>   
</nav>
<main class="contenedor">
    <h1>REQUISICIONES </h1>
    <div class="camisa1">
        <img class="camisa__imagen" src="img/Diseño sin título (11).jpg" alt="Imagen del Producto">
        <div class="camisa__contenido">
            <form id="miFormulario" class="formulario">
                <fieldset>
                    <legend>Ingresar Informacion</legend>
                    <div class="contenedor-campos1">
                        <div class="campo">
                            <label>Area que solicita</label>
                            <select class="input-text" id="area_solicitante" name="area_solicitante" required>
                                <option>Elije</option>
                                <option>EQUIPO</option>
                                <option>PREFABRICADOS</option>
                                <option>CONTABILIDAD</option>
                                <option>ADMINISTRATIVA</option>
                                <option>COMERCIAL</option>
                                <option>GERENCIA</option>
                                <option>LOGISTICA</option>
                                <option>GESTION HUMANA</option>
                                <option>SST</option>
                                <option>AMBIENTAL</option>
                                    <!-- Puedes agregar más opciones según sea necesario -->
                                </select>
                        </div>
                        <div class="campo">
                            <label>Quien solicita</label>
                            <select class="input-text" id="nombre_solicitante" name="nombre_solicitante" required>
                                <option>Elije</option>
                                <option>FELIPE CAICEDO</option>
                                <option>JASMIN HOLGUIN</option>
                                <option>JUAN ARANGO</option>
                                <option>RAMIRO BUSTAMANTE</option>
                                <option>FELIPE CORTES</option>
                                <option>CARLOS CARDENAS</option>
                                <option>PAULA CESPEDES</option>
                                <option>ARLEY CORTEZ</option>
                                <option>NATALIS RUIZ</option>
                                <option>MAURICIO LONDOÑO</option>
                                <option>SERGIO ARANGO</option>
                                <option>OMAR AGUIRRE</option>
                                <option>FRANCISCO URIBE</option>
                                <option>MANUEL CARVAJAL </option>
                                <option>BEATRIZ VILLA</option>
                                <option>JUAN FELIPE BETANCUR</option>
                                <option>SERGIO MUÑOZ</option>
                                <option>SANTIAGO DUQUE</option>
                                <option>VANESSA SALAZAR</option>
                                    <!-- Puedes agregar más opciones según sea necesario -->
                                </select>
                        </div>
                        <div class="campo">
                            <label>Descripcion</label>
                            <input class="input-text" type="text" placeholder="Escribe tu descripcion" name='descripcion'>
                        </div>
                        <div class="campo">
                            <label>Cantidad</label>
                            <input class="input-text" type="number" placeholder="Tu respuesta" name='cantidad'>
                        </div>                   
                        <div class="campo">
                            <label for="observaciones">Unidad de medida *</label>
                            <select class="input-text" id="unidad_medida    " name="unidad_medida" required>
                                <option>Elije</option>
                                <option>Unidad</option>
                                <option>m3</option>
                                <option>m2</option>
                                <option>Metro lineal</option>
                                <option>Kg</option>
                                <option>Tonelada</option>
                                <option>Galones</option>
                                <option>Litro</option>
                                    <!-- Puedes agregar más opciones según sea necesario -->
                                </select>
                        </div>
                        <div class="campo">
                            <label for="observaciones">Centro de costos *</label>
                            <select class="input-text" id="centro_costos" name="centro_costos" required>
                                <option>Elije</option>
                                <option>01 Tacos viguetas andamios</option>
                                <option>02 Torres de carga formaleteria</option>
                                <option>03 Equipo meq con operario</option>
                                <option>04 Equipo meq sin operario</option>
                                <option>05 Montajes</option>
                                <option>06 Talleres</option>
                                <option>07 Comercial</option>
                                <option>PT Prefabricados</option>
                                <option>09 Casetas</option>
                                <option>Administracion</option>
                                <option>Obras (Especifique cual en la casilla destino)</option>
                                <option>1435 comercializacion</option>
                                    <!-- Puedes agregar más opciones según sea necesario -->
                                </select>
                        </div>
                        <div class="campo">
                            <label for="observaciones">Proviene de: *</label>
                            <select class="input-text" id="proviene" name="proviene" required>
                                <option>Elije</option>
                                <option>OP</option>
                                <option>Cotizacion Aprobada</option>
                                <option>Necesidad de area</option>
                                    <!-- Puedes agregar más opciones según sea necesario -->
                                </select>
                        </div>
                        <div class="campo">
                            <label>No. OP y/o Cotización aprobada u Orden de compra cliente</label>
                            <input class="input-text" type="text" placeholder="Tu respuesta" name='respuesta'>
                        </div>
                        <div class="campo">
                            <label>Destino (Determinar si es para inventario o consumo) *</label>
                            <input class="input-text" type="text" placeholder="Tu respuesta" name='destino'>
                        </div>
                        <div class="campo">
                            <label>Observaciones</label>
                            <textarea name="observaciones" class="input-text" id="observaciones" cols="30" rows="10"></textarea>
                        </div>
                        <div class="campo">
                            <label>Fecha máx. de entrega *</label>
                            <input name="fecha_max" class="input-text" type="date" id="fecha_max">
                        </div>
                        <div class="campo">
                            <label>Se cobra a un tercero? *</label>
                            <select name="cobro_terceros" class="input-text" id="cobro_terceros">
                                <option>Elije</option>
                                <option>Si</option>
                                <option>No</option>
                            </select>
                        </div>
                        <input type="button" class="botondos w-sm-100" value="Siguiente" id="btnMostrarSeccion">
                
                        <div class="campo" id="seccionAbajo">
                            <h3>Se diligencia por parte del almacén</h3>
                            <label>Proveedor</label>
                            <input type="text" class="input-text" name="proveedor">
                            <label>Precio unitario sin IVA</label>
                            <input type="text" class="input-text" name="precio_unitario">
                            <label>Número de factura</label>
                            <input type="number" class="input-text" name="No_factura">
                            <label>Recibido</label>
                            <select class="input-text" id="como_recupera" name="como_recupera" required>
                                <option>Selecciona</option>
                                <option>Si</option>
                                <option>No</option>
                            </select>
                            <label>Número de remisión</label>
                            <input type="number" class="input-text" name="No_remision">
                            <label>Número documento contable</label>
                            <input type="number" class="input-text" name="No_contable">

                            <h3>A quién se le cobraría este ítem?</h3>
                            <label>Recuperable a nombre de quien</label>
                            <input type="text" class="input-text" name="recuperable_nombre">
                        </div>
                    </div>

                    <div class="alinear-derecha flex">                         
                        <input id="guardar" class="boton w-sm-100" type="submit" value="Enviar" name='observaciones'  name="formSubmitted">
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</main> 
<footer class="footer">
    <p class="footer__texto">Cimbrados - Todos los derechos Reservados 2024.</p>
</footer> 

    <script src="./js/requisiciones.js"></script> 
    <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script> 
</body>
</html>