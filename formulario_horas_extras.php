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
        <h1>HORAS EXTRAS </h1>

        <div class="camisa">
            <img class="camisa__imagen" src="img/imagen-oficina.jpg " alt="Imagen del Producto">

            <div class="camisa__contenido">
            <form id="miFormulario" class="formulario">
                    <fieldset>
                        <h3>Ingresar Informacion</h3>

                <div class="contenedor-campos1"> <!-- analizar bn este punto para sabe-->

                    <div class="campo">
                        <label for="">Nombre del trabajador</label>
                        <input class="input-text" name="nombre" type="text" placeholder="Digite su nombre">
                    </div>

                    <div class="campo">
                        <label for="">Cedula</label>
                        <input class="input-text" name="cedula" type="text" placeholder="Digite cedula : ">
                    </div>

                    <div class="campo">
                        <label for="">Edad</label>
                        <input class="input-text" name="edad" type="number" placeholder="Digite su edad" />
                    </div>

                    <div class="campo">
                        <label for="">Sexo</label>
                        <select class="input-text" name="sexo" id="">
                        <option value="">Seleccionar</option>
                        <option value="">M</option>
                        <option value="">F</option>
                        </select>                     
                    </div>
                    
                    <div class="campo">
                        <label for="">Fecha</label>
                        <input class="input-text" name="fecha" type="date" name="" id="" />                       
                    </div>

                    <div class="campo">
                        <label for="">Actividad que va a realizar:</label>
                        <input class="input-text" name="actividad" type="text" placeholder="Actividad de hora extra" />                        
                    </div>

                    <div class="campo">
                        <label for="">Hora de Inicio</label>
                        <input class="input-text" name="hora_inicio" type="time" placeholder="Inicio de su hora extra" />
                    </div>

                    <div class="campo">
                        <label for="">Hora final</label>
                        <input class="input-text" name="hora_final" type="time" placeholder="Fin de horas extras" />
                    </div>

                    <div class="campo">
                        <label for="">Tipo de hora extra</label>
                        <select class="input-text" name="tipo_hora_extra" name="" id="">
                        <option value="">Seleccionar</option>
                        <option value="">Hora extra Diurna</option>
                        <option value="">Hora Extra Nocturna</option>
                        <option value="">Hora Extra diurana Festiva</option>
                        <option value="">Hora Extra Festiva</option>
                        <option value="">Recargo</option>
                        </select>
                    </div>

                    <div class="campofirma">
                        <h3>Firma trabajador</h3>
                        <canvas id="signature"></canvas>
                        <input type="button" class="boton w-sm-100" value="Limpiar firma" onclick="clearSignature()" name="firma">
                    </div>
                </div> <!-- este es el contenedor-campos-->

                  <div class="alinear-derecha flex">                         
                        <input id="guardar" class="boton w-sm-100" type="submit" value="Enviar" name='observaciones' name="formSubmitted">
                   </div>
                </fieldset>
            </form>
        </div>
    </div>
</main> 
    <footer class="footer">
        <p class="footer__texto">Cimbrados - Todos los derechos Reservados 2024.</p>
    </footer> 
    
    <script src="./js/horas_extras.js"></script> 
    <script src="js/firma.js"></script>
    <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>  
</body>
</html> 