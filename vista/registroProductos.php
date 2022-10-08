<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="vista/css/estilos.css"></link>
    <script src="vista/js/funciones.js"></script>
    <title>MVC</title>
</head>
<body>
    <header>
        <h1>Proyecto EVN401</h1>
    </header>
    <nav id="menuPrincipal">
        <a  class="opcionMenu" href="?peticion=perfilAdmin">Perfil</a>
        <a class="opcionMenu"  href="?peticion=registroProductos">Nuevo Producto</a>
        <a class="opcionMenu" href="?peticion=productos">Ver Productos</a>
        <a class="opcionMenu" href="?peticion=cerrar">Cerrar Sesión</a>
    </nav>
    <section>
    <h2>Registro Productos</h2>
    <form method="post" action="" enctype="multipart/form-data">
        <input type="text" name="modelo" placeholder="Introduce el modelo">
        <input type="text" name="nombre" placeholder="Introduce el nombre del producto">
        <textarea name="descripcion" cols="30" rows="10" placeholder="Agrega una descripcion"></textarea>
        <input type="number"  min="0.00" step="0.01" id="precio" name="precio" placeholder="Precio">
        <input type="number"  min="0" id="stock" name="stock" placeholder="Stock">
        <label>Seleccione una foto</label>
        <input type="file" name="foto">
        <input type="hidden" name="peticion" value="guardarProducto">

        <input type="submit"  value="Guardar">        
    </form>
    <p>
        <?php
           if(isset($nombre)){
                if($datos){
                    echo 'Tú registro se ha realizado con éxito';
                }else{
                    echo 'Lo sentimos no se ha podido realizar su registro';

                }
           }     
        ?>
    </p> 
    </section>

    </body>
</html>