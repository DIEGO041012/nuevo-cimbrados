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
        <h1>REPORTE AUXILIO DE MOVILIDAD </h1>

        <div class="camisa">
            <img class="camisa__imagen" src="https://www.portafolio.co/files/main_video_image/uploads/2022/12/11/6395ef27e70f9.jpeg" alt="Imagen del Producto">

            <div class="camisa__contenido">
                <form id="miFormulario" class="formulario">
                    <fieldset>
                        <legend>Ingresar Informacion</legend>
                        
                        <div class="contenedor-campos1">
                            <div class="campo">
                                <label>Nombre/Apellido de quien transporta *</label>
                                <select class="input-text" id="nombre" name="nombre" required>
                                    <option>Selecionar quien trasporta</option>
                                    <option>Felipe Caicedo</option>
                                    <option>Edwin Sanchez</option>
                                    <option>Pedro Diaz</option>
                                    <option>Hector Marin</option>
                                    <option>Junior Molina</option>
                                    <option>Sara Gutierrez</option>
                                    <option>Santiago Duque Galeano</option>
                                    <option>Fabio Rivera</option>
                                    <option>Gabriel Vallejo</option>
                                    <option>Diana Lucia Baron</option>
                                </select>
                                <br>
                                <br>
                                <input type="text" placeholder="Otro? quien" id="nombre" name="nombre" class="input-text">
                            </div>

                            <div class="campo">
                                <label>Tipo de vehiculo *</label>
                                <select class="input-text" id="tipo_vehiculo" name="tipo_vehiculo" required>
                                    <option>Selecionar tipo de vehiculo</option>
                                    <option>Motocicleta</option>
                                    <option>Automovil</option>
                                </select>
                            </div>

                            <div class="campo">
                                <label>Lugar de salida *</label>
                                <input class="input-text" type="text" required name="lugar_salida" placeholder="Ingrese lugar">
                            </div>
                                
                            <div class="campo">
                                <label>Hora de salida *</label>
                                <input class="input-text" type="time" name="hora_salida">
                            </div>
                            
                            <div class="campo">
                                <label>Lugar de llegada *</label>
                                <input class="input-text" type="text" required name="lugar_llegada" placeholder="Ingrese lugar">
                            </div>

                            <div class="campo">
                                <label>Hora de llegada *</label>
                                <input class="input-text" required type="time" name="hora_llegada">
                            </div>
                            
                            <div class="campo">
                                <label>Actividad *</label>
                                <select class="input-text" id="actividad" name="actividad">
                                    <option>Actividad a realizar</option>
                                    <option>Mantenimiento preventivo</option>
                                    <option>Mantenimiento correctivo</option>
                                    <option value="">Compra de repuesto</option>
                                    <option value="">Visita tecnica</option>
                                    <option value="">Recoger personal</option>
                                    <option value="">Realce</option>
                                    <option value="">Montaje</option>
                                    <option value="">Desmontaje</option>
                                    <option value="">Reemplazo</option>
                                    <option value="">Inpeccion de obras SST</option>
                                    <option value="">Entrega reportes y/o Papelería</option>
                                    <option value="">Operación de equipo</option>
                                    <option value="">Regreso</option>
                                </select>
                                <br>
                                <br>
                                <input type="text" placeholder="Otra? cual" id="actividad" name="actividad" class="input-text">
                            </div>

                            <div class="campo">
                                <label>Valor *</label>
                                <input class="input-text" type="number" name="valor">
                            </div>

                            <div class="campo">
                                <label>Centro de costos</label>
                                <select class="input-text" id="actividad" name="actividad">
                                    <option>Selecciona cc</option>
                                    <option>01 Tacos vigas Andamios Bod 1</option>
                                    <option>02 Formaleteria y Torres de Carga Bod 2</option>
                                    <option>03 Equipo Mecánico con Operario</option>
                                    <option value="">04 Equipo Mecánico sin Operario</option>
                                    <option value="">05 Montajes</option>
                                    <option value="">06 Talleres</option>
                                    <option value="">07 Mercadeo</option>
                                    <option value="">09 Casetas</option>
                                    <option value="">Admin</option>
                                    <option value="">PT Prefabricados</option>
                                    <option value="">Obras (especifique en motivo que obra es)</option>
                                </select>
                            </div>

                            <div class="campo">
                                <label>Motivo *</label>
                                <input class="input-text" type="text" name="motivo">
                            </div>

                            <input type="button" class="botondos w-sm-100" value="Siguiente" id="btnMostrarSeccion">

                            <div class="campo" id="seccionAbajo">
                                <label>Recuperable *</label>
                                <select class="input-text" id="recuperable" name="recuperable" required>
                                    <option>Si / No</option>
                                    <option>SI</option>
                                    <option>NO</option>
                                </select>

                                <label>Si es recuperable, a quien? *</label>
                                <input class="input-text" type="text" name="Recuperable_quien">

                                <label>Como se recupera *</label>
                                <select class="input-text" id="como_recupera" name="como_recupera" required>
                                    <option>Selecciona</option>
                                    <option>Por factura</option>
                                    <option>Por cotizacion previa</option>
                                    <option>Cobro a terceros</option>
                                    <option>Por procesos de montajes</option>
                                </select>
                            </div>



                        </div>

                        <div class="alinear-derecha flex">                         
                                <input class="boton w-sm-100" type="submit" value="Enviar">
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </main> 

    <script>
        document.getElementById('btnMostrarSeccion').addEventListener('click', function () {
            var seccionAbajo = document.getElementById('seccionAbajo');
            seccionAbajo.style.display = (seccionAbajo.style.display === 'none' || seccionAbajo.style.display === '') ? 'block' : 'none';
        });
    </script>
    <footer class="footer">
        <p class="footer__texto">Cimbrados - Todos los derechos Reservados 2024.</p>
    </footer>  
    <script src="./js/auxulio_movilidad.js"></script> 
    <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>   
</body>
</html>