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
        <h1>REPORTE DIARIO </h1>

        <div class="camisa">
            <img class="camisa__imagen" src="./img/reporte-diario.jpg" alt="Imagen del Producto">

            <div class="camisa__contenido">
                <form id="miFormulario" class="formulario" >
                    <fieldset>
                        <h3>Ingresar Informacion</h3>

                    <div class="contenedor-campos1">
                    <div class="campo">
                        <label>Nombre</label>
                        <select class="input-text" id="nombre" name="nombre" required>
                            <option>Selecionar trabajador</option>
                            <option>ANDRES FELIPE CORTEZ RESTREPO</option>
                            <option>ARLEY ANTONIO CORTES TABORDA</option>
                            <option>BEATRIZ ARELLY VILLA CALLE</option>
                            <option>BLANDON BLANDON EDUARD</option>
                            <option>BONILLA GIRALDO OSCAR IVAN</option>
                            <option>CARLOS ALBERTO CARDENAS PERUGA</option>
                            <option>CASTAÑEDA QUIROZ JOHN KENEDIR</option>
                            <option>CLAVIJO MONA ALVARO DE JESUS</option>
                            <option>CRISTIAN DAVID CLAVIJO MONCADA</option>
                            <option>CRISTO SALOMON RUIZ ACEVEDO</option>
                            <option>DEIVER YEISINIO MENESES ARGEL</option>
                            <option>DIANA LUCIA BARON RIOS</option>
                            <option>DIANA PATRICIA SALDARRIAGA ZUL</option>
                            <option>DIDIER FERNEY CLAVIJO TABORDA</option>
                            <option>EDWIN SANCHEZ SANCHEZ</option>
                            <option>EMANUEL RAMIREZ MONTOYA</option>
                            <option>ESNEYDER A. CARVAJAL CHALARCA</option>
                            <option>EZEN JAWER GONZALEZ CUERVO</option>
                            <option>FABIO NELSON RIVERA TORO</option>
                            <option>FELIX MEDINA LEYTON</option>
                            <option>FERNANDO MONTOYA ORTIZ</option>
                            <option>FRANCISCO J. URIBE RODRIGUEZ</option>
                            <option>FREDY ALONSO PANIAGUA ESTRADA</option>
                            <option>GABRIEL JAIME PEÑA VALLEJO</option>
                            <option>GOMEZ GOMEZ YEFERSON ALEXANDER</option>
                            <option>GOMEZ OSPINA JHOJAN</option>
                            <option>GONZALO DE JESUS MEJIA MONSALVE</option>
                            <option>GRISALES COSSIO JHONY</option>
                            <option>GUILLERMO LEON LOAIZA GRACIANO</option>
                            <option>HAROL RENE BEDOYA CASTAÑO</option>
                            <option>HECTOR EDGARDO MARIN GAÑAN</option>
                            <option>HENAO TOMAS</option>
                            <option>JAIR ESTRADA ARREDONDO</option>
                            <option>JASSIR BALANTA ALVAREZ</option>
                            <option>JATTIN DE JESUS FERIA RUIZ</option>
                            <option>JAVIER CARVAJAL RUEDA</option>
                            <option>JESSICA JOHANA BLANDON VALENCI</option>
                            <option>JHON ALEXANDER VELEZ ARBOLEDA</option>
                            <option>JOHN KENEDIR CASTAÑEDA QUIROZ</option>
                            <option>JONATAN STIVEN ESTRADA POSADA</option>
                            <option>JORGE HUMBERTO GARZON PATIÑO</option>
                            <option>JOSE FABIAN QUINTERO MARIN</option>
                            <option>JOSE IGNACIO SANCHEZ RESTREPO</option>
                            <option>JOSE JULIAN ARBOLEDA MEJIA</option>
                            <option>JUAN CAMILO OROZCO OQUENDO</option>
                            <option>JUAN DAVID RODRIGUEZ ROJAS</option>
                            <option>JUAN ESTEBAN ARANGO MORENO</option>
                            <option>JUAN ESTEBAN MUÑOZ URIBE</option>
                            <option>JUAN ESTEBAN RESTREPO LUJAN</option>
                            <option>JUAN FELIPE BETANCUR MARTINEZ</option>
                            <option>JUAN FELIPE CAICEDO SIERRA</option>
                            <option>JUAN PABLO CASTRO URIBE</option>
                            <option>JUAN PABLO MENDOZA ALZATE</option>
                            <option>JULIANA VILLA USUGA</option>
                            <option>JUNIOR DANIEL MOLINA CESPEDES</option>
                            <option>LOPEZ ESPINOSA LUIS HERNANDO</option>
                            <option>LUIS ALBERTO MUÑOZ OSPINA</option>
                            <option>LUIS EDUARDO FRANCO ZULUAGA</option>
                            <option>LUIS EFREN HENAO ZULETA</option>
                            <option>LUIS FERNANDO HERNANDEZ BELLO</option>
                            <option>LUIS GUILLERMO RAMOS RAMIREZ</option>
                            <option>LUIS LEON</option>
                            <option>LUJAN TUBERQUIA PUERTA</option>
                            <option>MANUEL ALEJANDRO CARVAJAL</option>
                            <option>MARCOS BERRIO MELENDEZ</option>
                            <option>MARTA ISABEL SERNA ROMAN</option>
                            <option>MARTIN ELIAS REGINO GAVIRIA</option>
                            <option>MAURICIO LONDOÑO VELEZ</option>
                            <option>MELISSA MANTILLA LONDOÑO</option>
                            <option>MESA YEISON ALEJANDRO</option>
                            <option>MIGUEL ARCANGEL CRUZ RUIZ</option>
                            <option>MILDREY ZAPATA MARTINEZ</option>
                            <option>MOLINA HERNANDEZ EUCLIDES DE JESUS</option>
                            <option>MONCADA JORGE ALBERTO</option>
                            <option>MOVILLA MOLINA ALEXANDER HELI</option>
                            <option>NATALIS RUIZ URIBE</option>
                            <option>NILO ARROYO</option>
                            <option>OMAR SANCHEZ</option>
                            <option>OMAR YOVANNY AGUIRRE MESA</option>
                            <option>ORLANDO FRANCO LOPEZ</option>
                            <option>ORLANDO RESTREPO SALAZAR</option>
                            <option>OSCAR DIEGO GALLEGO MUÑOZ</option>
                            <option>PAULA ANDREA CESPEDES GUIRAL</option>
                            <option>PAYARES BARRIOS OSNAIDER</option>
                            <option>PEDRO PABLO DIAZ BALDOVINO</option>
                            <option>PEREZ CIFUENTES GILBERTO DE JESUS</option>
                            <option>RAMIRO BUSTAMANTE RESTREPO</option>
                            <option>RENDON RESTREPO JOHN JAIME</option>
                            <option>RICARDO LEON ROJAS BUSTAMANTE</option>
                            <option>RIGOBERTO TORO HERNANDEZ</option>
                            <option>ROBERTO CARLOS RUA</option>
                            <option>RODRIGUEZ ROBINSON ALBERTO</option>
                            <option>SANTIAGO DUQUE GALEANO</option>
                            <option>SANTIAGO QUIROZ ARANGO</option>
                            <option>SARA MARIA GUTIERREZ DEOSSA</option>
                            <option>SERGIO ARANGO MORENO</option>
                            <option>SERGIO IVAN PALACIOS PALACIOS</option>
                            <option>VALERIA CESPEDES GUIRAL</option>
                            <option>VANESSA SALAZAR JARAMILLO</option>
                            <option>WALTER VANEGAS MUNERA</option>
                            <option>WILSON JAVIER OQUENDO ROLDAN</option>
                            <option>YAZMIN ALEJANDRA HOLGUIN CARDO</option>
                            <option>YESID RICARDO RUEDA</option>
                            <option>YUDI MAZO UNO A</option>
                            <option>JUAN CAMILO CASTRO</option>
                                <!-- Puedes agregar más opciones según sea necesario -->
                            </select>
                    </div>
                    <div class="campo">
                        <label for="area">Mes</label>
                        <select class="input-text" id="mes" name="mes" required>
                        <option>Seleciona mes</option>
                        <option>ENERO</option>
                        <option>FEBRERO</option>
                        <option>MARZO</option>
                        <option>ABRIL</option>
                        <option>MAYO</option>
                        <option>JUNIO</option>
                        <option>JULIO</option>
                        <option>AGOSTO</option>
                        <option>SEPTIEMBRE</option>
                        <option>OCTUBRE</option>
                        <option>NOVIEMBRE</option>
                        <option>DICIEMBRE</option>
                            <!-- Puedes agregar más opciones según sea necesario -->
                        </select>
                    </div>

                    
                    <div class="campo">
                        <label>Dia</label>
                        <select class="input-text" id="dia" name="dia" required>
                            <option>Dia de la semana</option>
                            <option>LUNES</option>
                            <option>MARTES</option>
                            <option>MIERCOLES</option>
                            <option>JUEVES</option>
                            <option>VIERNES</option>
                            <option>SABADO</option>
                            <option>DOMINGO</option>
                                <!-- Puedes agregar más opciones según sea necesario -->
                            </select>
                    </div>


                    <div class="campo select">
                        <label>Area</label>
                        <select class="input-text" id="area" name="area" required onchange="handleAreaChange(this)">
                          <option>Estado actual</option>
                          <option>Activo en planta</option>
                          <option>Activo obra</option>
                          <option>Inactivida</option>
                        </select>
                      </div>


                    <div class="campo oculto"  id="campoActivoObra">
                        <h3>Activo obra</h3>
                        <select class="input-text" id="obra" name="obra" required>
                            <option>Seleciona obra </option>
                            <option>ANDERCOL</option>
                            <option>HERBARIO</option>
                            <option>TERRAH</option>
                            <option>BAHIA GRANDE</option>
                            <option>RIVANA</option>
                            <option>MIXA</option>
                            <option>WAKE TESORO</option>
                            <option>WAKE 2</option>
                            <option>AIRES DEL BOSQUE</option>
                            <option>VALLE VERDE  TORRE 1</option>
                            <option>GRAND</option>
                            <option>FLATS</option>
                            <option>CERRO CLARO</option>
                            <option>ORIGEN ETAPA 3</option>
                            <option>CANTO</option>
                            <option>CELESTE</option>
                            <option>LAURENT</option>
                            <option>AKI</option>
                            <option>LA CUMBRE</option>
                            <option>BRUJA MAGICA</option>
                            <option>CAMAGUA</option>
                            <option>Otro cual?</option>
                                <!-- Puedes agregar más opciones según sea necesario -->
                            </select>
                            <br>
                            <br>
                        <select class="input-text" id="actividad_obra" name="actividad_obra" required>
                            <option>Actividad obra </option>
                            <option>MANTENIMIENTO PREVENTIVO</option>
                            <option>PERMISOS DE ALTURA</option>
                            <option>INSPECCION</option>
                            <option>CARGUE Y DESCARGUE</option>
                            <option>OPERACION MAQUINA</option>
                            <option>SEÑALERO</option>
                            <option>MONTAJE</option>
                            <option>REALCE</option>
                            <option>DESMONTAJE</option>
                            <option>MANTENIMIENTO CORRECTIVO</option>
                            <option>SOLDADURA</option>
                            <option>VISITA TECNICA</option>
                            <option>MONTAJE PANALES OBRA</option>
                            <option>TG TRASLADO GUARNE</option>
                            <option>ALAMCENAMIENTO</option>
                            <option>OTRA CUAL?</option>
                                <!-- Puedes agregar más opciones según sea necesario -->
                            </select>
                    </div>

                    <div class="campo oculto" id="campoActivoPlanta" >
                        <h3>Activo planta</h3>
                        <select class="input-text" id="centro_costos" name="centro_costos" required>
                            <option>Seleciona centro de costos</option>
                            <option>CC 01 TACOS, CERCHAS , FORMALETAS Y TORRES DE CARGA</option>
                            <option>CC 03 EQUIPO CON OPERARIO<opption>
                            <option>CC 05 MONTAJES Y DESMONTAJES</option>
                            <option>CC 06 TALLERES</option>
                            <option>CC 15 ADM</option>
                            <option>PT PREFABRICADOS</option>
                            <option>LG LINEA GRIS</option>
                            <option>LB LINEA BLANCA</option>
                            <option>GRC GRC</option>
                            <option>SF V SANTA FE VACIADO</option>
                            <option>SF P SANTA FE PULIDA</option>
                            <option>SF L SANTA FE LECHADO</option>
                            <option>SF PI SANTA FE PINTURA</option>
                            <option>LOG Logistica</option>
                            <option>OTRA CUAL? </option>
                                <!-- Puedes agregar más opciones según sea necesario -->
                        </select>
                        <br>
                        <br>
                        <select class="input-text" id="actividad_planta" name="actividad_planta" required>
                            <option>Seleciona actividad </option>
                            <option>MANTENIMIENTO PREVENTIVO</option>
                            <option>PERMISOS DE ALTURA</option>
                            <option>INSPECCION</option>
                            <option>CARGUE Y DESCARGUE</option>
                            <option>OPERACION MAQUINA  </option>
                            <option>SEÑALERO</option>
                            <option>MONTAJE</option>
                            <option>REALCE</option>
                            <option>DESMONTAJE</option>
                            <option>MANTENIMIENTO CORRECTIVO</option>
                            <option>SOLDADURA</option>
                            <option>VISITA TECNICA</option>
                            <option>MONTAJE PANALES OBRA</option>
                            <option>TG TRASLADO GUARNE</option>
                            <option>SF V SANTA FE VACIADO</option>
                            <option>ORGANIZACION PLANTA</option>
                            <option>ALAMCENAMIENTO</option>
                            <option>PINTURA</option>
                            <option>OTRO CUAL?</option>
                                <!-- Puedes agregar más opciones según sea necesario -->
                        </select>
                    </div>
                    
                    <div class="campo oculto" id="campoInactivo">
                        <h3>Inactivo</h3>
                        <select class="input-text" id="causa_inactividad" name="causa_inactividad" required>
                            <option>Causa</option>
                            <option>VAC VACACIONES</option>
                            <option>INC INCAPACIDAD</option>
                            <option>Se SUSPENDIDO</option>
                            <option>PNR PERMISO NO REMUNERADO</option>
                            <option>CP COMPENSATORIO</option>
                            <option>EXAMENES MEDICOS OCUPACIONALES</option>
                            <option>CAMPO CURSO DE ALTURA</option>
                                <!-- Puedes agregar más opciones según sea necesario -->
                            </select>
                    </div>
                    </div> <!-- este es el contenedor-campos-->

                  <div class="alinear-derecha flex">                         
                        <input id="guardar" class="boton w-sm-100" type="submit" value="Enviar" name='observaciones' name="formSubmitted" required>
                   </div>
                </fieldset>
                </form>
            </div>
        </div>
    </main>

    <footer class="footer">
        <p class="footer__texto">Cimbrados - Todos los derechos Reservados 2024.</p>
    </footer>
    <script src="./js/reporte_diario.js"></script> 
    <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>  
</body>
</html>