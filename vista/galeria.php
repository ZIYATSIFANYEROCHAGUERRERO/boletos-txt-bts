<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="vista/css/estilos.css"></link>
     <link rel="shortcut icon" href="vista/img/icono1.jpg" type="image/x-icon">
  
    <title>MVC</title>
</head>
<body>
    <header>
        <h1>BOLETOS </h1>
    </header>
    <nav id="menuPrincipal">
        <a  class="opcionMenu" href="?peticion=home">Home</a>
   
        <a class="opcionMenu" href="?peticion=galeria">Productos</a>
        <a class="opcionMenu" href="?peticion=IniciarSesion">Inicio de Sesión</a>
    </nav>
    <section>
    <?php
          while($producto = $datos-> fetch_assoc()){
            echo '<div id="productos">
                <img src="'.$producto['foto'].'"/>
                <h3>Modelo</h3>
                <span>'.$producto['modelo'].'</span>
                </div>';
              }
          ?>


    
    </section>

    <section class="contenedor sobre-nosotros">
            <h1 class="titulo">Nuestros productos disponibles</h1>
            <div class="contenedor-sobre-nosotros">
                <img src="vista/img/8.jpg" alt="" class="imagen-about-us">
                <img src="vista/img/5.jpg" alt="" class="imagen-about-us">
                <div class="contenido-textos">
                    <h1>Contamos con boletos para estos asombrosos grupos.</h1>
                        
                    <h4>(si no hay nada no hay disponibles por el momento)</h4>
                    <p>Espera fechas proximas. </p>
                </div>
            </div>
        </section>
</body>
</html>