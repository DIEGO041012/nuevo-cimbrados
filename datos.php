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
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="header">
        <a href="principal.php">
            <img class="header__logo" src="img/logocimbrados-removebg-preview.png" alt="Logotipo">
        </a>
    </header>

    <nav class="navegacion">
       <a class="navegacion__enlace" href="./principal.php">Formularios</a>
       <a class="navegacion__enlace navegacion__enlace--activo" href="./datos.php">Base de Datos</a>
    </nav>

    <main class="contenedor">
        <h1>Datos guardados </h1>
        <div class="grid">
            <div class="producto">
                <a href="datos_reporte_diario.php">
                    <img class="producto__imagen" src="img/reporte-diario.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Mi reporte diario</p>
                        <p class="producto__precio">TI</p>
                    </div>
                </a>
            </div>  <!--.produ  cto-->
            <div class="producto">
                <a href="horas_extras.php">
                    <img class="producto__imagen" src="img/imagen-oficina.jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Programacion horas extras</p>
                        <p class="producto__precio">TI</p>
                    </div>
                </a>
            </div>  <!--.producto-->
            <div class="producto">
                <a href="datos_permisos.php">
                    <img class="producto__imagen" src="./img/Diseño sin título (6).jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Solicitud ausencia</p>
                        <p class="producto__precio">TI</p>
                    </div>
                </a>
            </div>  <!--.producto-->
            <div class="producto">
                <a href="datos_requisiciones.php">
                    <img class="producto__imagen" src="./img/Diseño sin título (11).jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Solicitud de acarreos</p>
                        <p class="producto__precio">TI</p>
                    </div>
                </a>
            </div>  <!--.producto-->
            <div class="producto">
                <a href="auxilio_movilidad.php">
                    <img class="producto__imagen" src="./img/Diseño sin título (8).jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Reporte auxilio de movilidad</p>
                        <p class="producto__precio">TI</p>
                    </div>
                </a>
            </div>  <!--.producto-->
            <div class="producto">
                <a href="solicitid_acarreos.php">
                    <img class="producto__imagen" src="./img/Diseño sin título (7).jpg" alt="imagen camisa">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Preoperacionales maquinas</p>
                        <p class="producto__precio">TI</p>
                    </div>
                </a>
            </div>  <!--.producto-->           

            <div class="grafico grafico--camisas"></div>
            
        </div>
    </main>

    <footer class="footer">
        <p class="footer__texto">Cimbrados - Todos los derechos Reservados 2024.</p>
    </footer>
    <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script> 
</body>
</html>