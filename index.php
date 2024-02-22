<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/descarga.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/stylologin.css"> <!-- Asegúrate de que el nombre del archivo sea correcto, debería ser "estilos.css" -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;0,700;0,900;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Login y Registro - Cimbrados</title>
</head>
<body>

    <main>

        <div class="contenedor__todo">

        <div class="caja__trasera">
            <div class="caja__trasera-login">
                <h3>¿Ya tienes una cuenta?</h3>
                <p>Inicia sesión para acceder a los formularios</p>
                <button id="btn__iniciar-sesion">Iniciar Sesión</button>
            </div> 
            <div class="caja__trasera-register">
                <h3>¿Aún no tienes una cuenta?</h3>
                <p>Regístrate para que puedas iniciar sesión</p>
                <button id="btn__registrarse">Registrarse</button> <!-- Cambié el ID para que coincida con el script.js -->
            </div>    
        </div> 
        <!-- Formulario de login y registro -->
        <div class="contenedor__login-register">
            <!-- Login -->
            <form action="./principal.php" class="formulario__login">
                <h2>Iniciar Sesión</h2>
                <input type="text" name="usuario" placeholder="Usuario">
                <input type="password" placeholder="Contraseña">
                <button>Entrar</button>
            </form>
        
            <!-- Registro -->
            <form action="./principal.html" method="post"   class="formulario__register">
                <h2>Registrarse</h2>
                <input type="number" placeholder="Cedula" name="cedula">
                <input type="text" placeholder="Nombre completo" name="nombre_completo">
                <input type="text" placeholder="Correo Electrónico" name="correo">
                <input type="text" placeholder="Usuario" name="usuario">
                <input type="password" placeholder="Contraseña" name="contrasena"> <!-- Cambié el tipo de input a password para la contraseña -->
                
                <button>Registrarse</button>
            </form>
        </div>
        </div>
    </main>
    
    <script src="./js/login.js"></script>
    <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script> 
</body>
</html>
