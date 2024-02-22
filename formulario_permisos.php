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
        <h1>SOLICITUD AUSENCIA </h1>

        <div class="camisa">
            <img class="camisa__imagen" src="https://www.sesamehr.mx/wp-content/uploads/2023/05/solicitud-permiso-laboral.webp" alt="Imagen del Producto">

            <div class="camisa__contenido">
                <form id="miFormulario" class="formulario">
                    <fieldset>
                        <h3>Ingresar Informacion</h3>

                <div class="contenedor-campos1">
                    <div class="campo">
                        <label>Nombre *</label>
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
                        <label>Cedula *</label>
                        <input class="input-text" type="number" name="cedula" placeholder="cedula" required>
                    </div>
                    <div class="campo">
                        <label>Cargo *</label>
                        <select class="input-text" id="cargo" name="cargo" required>
                            <option>Seleciona cargo</option>
                            <option>GERENTE</option>
                            <option>DIRECCION</option>
                            <option>COORDINADOR</option>
                            <option>JEFE DE AREA</option>
                            <option>MECANICO</option>
                            <option>AUXILIAR I</option>
                            <option>AUXILIAR II</option>
                            <option>AUXILIAR DE CONTROL</option>
                            <option>OPERADOR III</option>
                            <option>ANALISTA</option>
                            <option>CONDUCTOR</option>
                            <option>SOLDADOR</option>
                            <option>INSPECTOR</option>
                            <option>SEÑALERO</option>
                            <option>APRENDIZ</option>
                            <option>OFICIAL</option>
                            <option>RESIDENTE DE OBRA</option>
                            <option>ASESOR COMERCIAL</option>
                                <!-- Puedes agregar más opciones según sea necesario -->
                        </select>
                    </div>
                    
                    <div class="campo select">
                        <label for="">Motivo de la solicitud *</label>
                        <select class="input-text" id="motivo_solicitud" name="motivo_solicitud" required onchange="handleAreaChange(this)">
                            <option>Selecionar</option>
                            <option>PERMISO</option>
                            <option>VACACIONES</option>
                            <option>COMPENSATORIO O TRABAJO EN CASA</option>
                            <!-- Puedes agregar más opciones según sea necesario -->
                        </select>
                    </div>


                    <div  class="campo oculto" id="campoPermiso">

                        <h3>Permiso</h3>

                            <label for="">Fecha *</label>
                            <input class="input-text" type="date" name="fecha_permiso" required>

                            <label for="">Tiempo *</label>
                            <select class="input-text" id="tiempo" name="tiempo" required>
                                <option>Selecionar</option>
                                <option>MAÑANA</option>
                                <option>TARDE</option>
                                <option>TODO EL DIA</option>
                            </select>

                            <label for="">Total tiempo de ausencia *</label>
                            <select class="input-text" id="tiempo_ausencia" name="tiempo_ausencia" required>
                                <option>Selecionar</option>
                                <option>1 HORA</option>
                                <option>2 HORAS</option>
                                <option>3 HORAS</option>
                                <option>4 HORAS</option>
                                <option>5 HORAS</option>
                                <option>6 HORAS</option>
                                <option>8 HORAS</option>
                                <option>UN DIA</option>
                                <option>DOS DIAS</option>
                                <option>TRES DIAS</option>
                                <option>CUATRO DIAS</option>
                                <option>CINCO DIAS</option>
                                <option>SEIS DIAS Y MAS...</option>
                                <!-- Puedes agregar más opciones según sea necesario -->
                            </select>

                            <label for="">Tipo de permiso *</label>
                            <select class="input-text" id="tipo_permiso" name="tipo_permiso" required>
                                <option>Selecionar</option>
                                <option>URGENCIAS, ME DIRIJO A IPS</option>
                                <option>LICENCIA LUTO</option>
                                <option>CALAMIDAD</option>
                                <option>VUELTA PERSONAL</option>
                                <option>SERVICIO DE JURADO O LICENCIA POR ASUNTOS JURIDICOS</option>
                                <option>SOLICITUD DE LICENCIA NO REMUNERADA</option>
                                <option>CITA ODONTOLOGICA URGENCIAS</option>
                                <option>CITA ODONTOLOGICA</option>
                                <option>CITA MEDICA GENERAL</option>
                                <option>CITA MEDICA PRIORITARIA</option>
                                <option>CITA MEDICA CON ESPECIALISTA</option>
                                <option>ESTUDIO</option>
                                <option>VOTACION<option>
                                <option>MEDIO DIA DE CUMPLEAÑOS (ADM)<option>
                                <option>DIA DE FAMILIA<option>
                                <!-- Puedes agregar más opciones según sea necesario -->
                            </select>

                            <label>Observacion</label>
                            <input name="observacion" class="input-text" required>

                            <label>Motivo permiso *</label>
                            <input class="input-text" name="motivo_permiso" required>  

                            <label for="">Su jefe inmediato ya esta enterado? *</label>
                            <select class="input-text" id="jefe_inmediato_enterado" name="jefe_inmediato_enterado" required>
                                <option></option>
                                <option>SI</option>
                                <option>NO</option>
                                <!-- Puedes agregar más opciones según sea necesario -->
                            </select>

                            <label>Propuesta de pago, si aplica</label>
                            <input class="input-text" name="propuesta_pago" required>
                    </div>

                    

                    <div class="campo oculto" id="campoVacaciones">

                        <h3>VACACIONES</h3>

                            <label for="">Fecha inicio de vacaciones *</label>
                            <input class="input-text" type="date" name="fecha_inicio_vacaciones" required>

                            <label for="">Fecha final de vacaciones *</label>
                            <input class="input-text" type="date" name="fecha_final_vacaciones" required>
                        
                            <label for="">Solicitud para dias compensados *</label>
                            <select class="input-text" id="" name="dias_compensados" required>
                                <option></option>
                                <option>SI</option>
                                <option>NO</option>
                                <!-- Puedes agregar más opciones según sea necesario -->
                            </select>

                            <label for="">Total dias a compensar solicitados *</label>
                            <input class="input-text" type="text" name="total_dias_compensar" required>

                            <label for="">Su jefe inmediato esta enterado *</label>
                            <select class="input-text" id="" name="dias_compensados" required>
                                <option></option>
                                <option>SI</option>
                                <option>NO</option>
                                <!-- Puedes agregar más opciones según sea necesario -->
                            </select>
                    </div>

                    
                    <div class="campo oculto" id="campoCompensatorio">

                        <h3>COMPENSATORIO O TRABAJO EN CASA</h3>

                            <label for="">FEHA DEL COMPESATORIO o TRABAJO EN CASA *</label>
                            <input class="input-text" type="date" name="fecha_compensatorio" required>

                            <label for="">FECHA DE LOS DOMINGOS LABORADOS Y/O MOTIVOS DEL COMPENSATORIO, O DIA EN QUE TRABAJARA EN CASA *</label>
                            <input class="input-text" type="text" name="motivos_compensatorio" required>

                    </div>


                </div> <!-- este es el contenedor-campos-->

                <div class="alinear-derecha flex">                         
                    <input id="guardar" class="boton w-sm-100" type="submit" value="Enviar" required>
                </div>
                </fieldset>
            </form>
        </div>
    </div>
</main> 

    <script src="js/solicitud_ausencia.js"></script>
    <footer class="footer">
        <p class="footer__texto">Cimbrados - Todos los derechos Reservados 2024.</p>

    </footer> 
    
    <script src="./js/permisos.js"></script> 
    <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script> 

    
</body>
</html>