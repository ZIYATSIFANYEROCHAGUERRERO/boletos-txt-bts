<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="vista/css/estilos.css"></link>    
    <script src="/vista/js/sha256.js"></script>
    <script src="/vista/js/funciones.js"></script>
    
    <title>MVC</title>
</head>
<body>
   
    <nav id="menuPrincipal">
        <a  class="opcionMenu" href="?peticion=home">Home</a>
     
        <a class="opcionMenu" href="?peticion=galeria">Galeria</a>
        <a class="opcionMenu" href="?peticion=IniciarSesion">Inicio de Sesión</a>
    </nav>
    <section>
        <h2>Login</h2>
        <form method="post" action="">
            <input type="email" name="correo" placeholder="Introduce tu correo"></input>
            <input type="password" name="contrasena" id="pass" placeholder="Introduce tu contraseña"></input>
            <input type="hidden" name="peticion" value="ingresar">

            <input type="submit" onclick="encriptar()" value="Ingresar">
        </form>
        <p>
            <?php
                if(isset($correo)){
                    echo 'Inició Sesión';
                }
            ?>
        </p>
        
        <a href="?peticion=registroUsuario" class="opcion">Registrate</a> 
    </section>

    <section>
    <img src="vista/img/6.jpg" alt="" class="imagen-about-us">
     <img src="vista/img/5.jpg" alt="" class="imagen-about-us">
    </section>
    
</body>
</html>