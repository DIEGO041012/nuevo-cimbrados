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
        <h1>SOLICITUD ACARREOS</h1>

        <div class="camisa">
            <img class="camisa__imagen" src="https://www.auteco.com.co/wp-content/uploads/2022/12/tvs-raider-125-special-edition-1.png" alt="Imagen del Producto">

            <div class="camisa__contenido">
                <form id="miFormulario" class="formulario">
                    <fieldset>
                        <legend>INgresar Informacion</legend>

                <div class="contenedor-campos1">
                    <div class="campo">
                        <label>Quien solicita *</label>
                        <select class="input-text" id="nombre" name="nombre" required>
                            <option>Elije</option>
                            <option>Diana Lucia Baron</option>
                            <option>Mauricio Londoño</option>
                            <option>Arley Cortez</option>
                            <option>Marta Serna</option>
                            <option>Juan Felipe Betancur</option>
                            <option>Omar Aguirre</option>
                            <option>Felipe Caicedo</option>
                            <option>Andres Sanchez</option>
                            <option>Paula Cespedes</option>
                            <option>Francisco Uribe</option>
                            <option>Sergio Muñoz</option>
                            <option>Santiago Duque</option>
                            <option>Vanessa Salazar</option>
                            <option>Mildrey Zapata</option>
                            <option>Carlos Cardenas</option>
                            <option>Yasmin Holguin</option>
                        </select>
                    </div>
                        <div class="campo">
                        <label>Centro de costos *</label>
                        <select class="input-text" id="centro_costos" name="centro_costos" required>
                            <option>Elije</option>
                            <option>01 Tacos, Vigas y Andamios</option>
                            <option>02 Formaleteria y Torre de Carga</option>
                            <option>03 Equipo mecánico con operario</option>
                            <option>04 Equipo mecánico sin operario</option>
                            <option>05 Montajes</option>
                            <option>06 Talleres</option>
                            <option>07 Meracdeo</option>
                            <option>09 Casetas</option>
                            <option>Administración</option>
                            <option>PT Prefabricados</option>
                            <option>OB Obras (Especifique cual en Observaciones)</option>
                        </select>
                    </div>
                    <div class="campo">
                        <label>Recuperable *</label>
                        <select class="input-text" id="centro_costos" name="centro_costos" required>
                            <option>Elije</option>
                            <option>Si</option>
                            <option>No</option>
                        </select>
                    </div>
                    <div class="campo">
                        <label>Factura a nombre de *</label>
                        <select class="input-text" id="factura_quien" name="factura_quien" required>
                            <option>Elije</option>
                            <option>Cimbrados (movimiento interno)</option>
                            <option>Cimbrados (Montajes,desmontajes)</option>
                            <option>cliente</option>
                        </select>
                        <br><br>
                        <input class="input-text" type="email" name="otro_nombre" placeholder="otro">
                    </div>
                    <div class="campo">
                        <label>Que trasporta *</label>
                        <input class="input-text" type="email" name="carga" placeholder="Su respuesta">
                    </div>
                    <div class="campo">
                        <label>Valor de la mercancia *</label>
                        <input class="input-text" type="email" name="valor_mercancia" placeholder="Su respuesta">
                    </div>
                    <div class="campo">
                        <label>Tipo de vehiculo</label>
                        <select class="input-text" id="factura_quien" name="factura_quien" required>
                            <option>Elije</option>
                            <option>Camion grua</option>
                            <option>Planchon basculante</option>
                            <option>Camioneta</option>
                            <option>Tramont y/o terceros (Fredy-mario)</option>
                            <option>Taxi - Automovil</option>
                            <option>Sencillo - tmula - patineta</option>
                        </select>
                        <br><br>
                        <input class="input-text" type="email" name="otro_vehiculo" placeholder="otro">
                    </div>
                    <div class="campo">
                        <label>Que recurso requiere para realizar el cargue</label>
                        <select class="input-text" id="factura_quien" name="factura_quien" required>
                            <option>Elije</option>
                            <option>Montacarga</option>
                            <option>Torre Grua</option>
                            <option>Camion Grua</option>
                        </select>
                    </div>
                    <div class="campo">
                        <label>Fecha del servicio</label>
                        <input class="input-text" type="date" name="fecha_servicio" placeholder="DIgita fecha">
                    </div>
                    <div class="campo">
                        <label>Hora de servicio *</label>
                        <input class="input-text" name="hora_servicio" type="time" placeholder="Hora">
                    </div>
                    <div class="campo">
                        <label>Dirección de origen *</label>
                        <input class="input-text" type="text" name="direccion_origen" placeholder="Direccion de origen">
                    </div>
                    <div class="campo">
                        <label>Dirección destino Final *</label>
                        <input class="input-text" type="text" placeholder="Tu respuesta">
                    </div>
                    <div class="campo">
                        <label>Contacto en obra *</label>
                        <input class="input-text" type="text" name="contacto_obra" placeholder="contacto_obra">
                    </div>
                    <div class="campo">
                        <label>Teléfono de contacto *</label>
                        <input class="input-text" name="telefono_contacto" type="number" placeholder="Telefono contacto">
                    </div>
                    <div class="campo">
                        <label>Peso máximo de la carga (Aplica solo para carga)</label>
                        <input class="input-text" type="number" name="peso_carga" placeholder="Peso maximo de carga">
                    </div>
                    <div class="campo">
                        <label>Numero de kilómetros</label>
                        <input class="input-text" name="numero_kilometros" type="number" placeholder="Kilometros">
                    </div>
                    <div class="campo">
                        <label>Frecuencia del uso de la ruta( numero de veces que se utiliza la ruta en la semana, mes o año)</label>
                        <select class="input-text" id="frecuencia_ruta" name="frecuencia_ruta" required>
                            <option>Elije</option>
                            <option>Frecuente</option>
                            <option>Baja frecuencia</option>
                            <option>Solo una vez</option>
                        </select>   
                    </div>
                    <div class="campo">
                        <label>Necesidad de visita tecnica *</label>
                        <select class="input-text" id="nesecidad_visita" name="nesecidad_visita" required>
                            <option>Elije</option>
                            <option>Si</option>
                            <option>No</option>
                        </select>  
                    </div>
                    <div class="campo">
                        <label>Observaciones</label>
                        <textarea name="observaciones" class="input-text"></textarea>
                    </div>

                <input type="button" class="botondos w-sm-100" value="Siguiente" id="btnMostrarSeccion">

                    <div class="campo" id="diligenciaLogistica">

                        <h3>Diligencia logistica</h3>

                        <label>Programado</label>
                        <select class="input-text" id="programado" name="programado" required>
                            <option>Elije</option>
                            <option>Si</option>
                            <option>No</option>
                        </select> 

                        <label>Quien realiza el servicio</label>
                        <select class="input-text" id="presta_servicio" name="presta_servicio" required>
                            <option>Elije</option>
                            <option>Tramont</option>
                            <option>Transportadora estrella</option>
                            <option>Cimbrados</option>
                        </select> 
                        <br><br>
                        <input type="text" class="input-text" placeholder="otro" name="presta_servicio">

                        <label>Operario</label>
                        <select class="input-text" id="operario" name="operario" required>
                            <option>Elije</option>
                            <option>Jhonatan Estrada</option>
                            <option>Emanuel Ramirez</option>
                            <option>Sneider Carvajal</option>
                            <option>Ainer Arboleda</option>
                        </select>
                        <br><br>
                        <input type="text" name="operario" class="input-text" placeholder="Otro">

                        <label>Número de orden de servicio</label>
                        <input class="input-text" name="numero_servico" type="number" placeholder="Tu respuesta">
                        
                        <label>Actividad realizada</label>
                        <input class="input-text" name="actividad_realizada" type="text" placeholder="Tu respuesta">

                        <label>Tipo en trasporte</label>
                        <select class="input-text" id="tipo_transporte" name="tipo_transporte" required>
                            <option>Elije</option>
                            <option>Por horas</option>
                            <option>Por trasporte</option>
                        </select>
                        <br><br>
                        <input type="text" class="input-text" placeholder="otro" name="tipo_transporte">

                        <label>Total horas de servicio (Para servicio por horas)</label>
                        <input class="input-text" name="total_horas_servicio" type="text" placeholder="Tu respuesta">

                        <label>Valor de la hora</label>
                        <input class="input-text" name="valor_hora" type="number" placeholder="Tu respuesta">

                        <label>Número de factura  Cimbrados</label>
                        <input class="input-text" name="numero_factura_cimbrados" type="text" placeholder="Tu respuesta">

                        <label>Número de factura  Tramont</label>
                        <input class="input-text" name="numero_factura_tramont" type="text" placeholder="Tu respuesta">

                        <label>fecha programada del servicio</label>
                        <input class="input-text" name="fecha_programada_servicio" type="date" placeholder="Tu respuesta">
                    </div>
            </div> <!-- este es el contenedor-campos-->

                  <div class="alinear-derecha flex">                         
                        <input class="boton w-sm-100" type="submit" value="Enviar">
                   </div>
                </fieldset>
                </form>
            </div>
        </div>
    </main> 
    <footer class="footer">
        <p class="footer__texto">Cimbrados - Todos los derechos Reservados 2024.</p>
    </footer>   

    <script>
        document.getElementById('btnMostrarSeccion').addEventListener('click', function () {
            var diligenciaLogistica = document.getElementById('diligenciaLogistica');
            var displayStyle = window.getComputedStyle(diligenciaLogistica).display;
    
            if (displayStyle === 'none' || displayStyle === '') {
                diligenciaLogistica.style.display = 'block';
            } else {
                diligenciaLogistica.style.display = 'none';
            }
        });
    </script>
    
</body>
</html>