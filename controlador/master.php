<?php
$peticion ='home';
    extract($_REQUEST);

    require_once 'helper/clsSesion.php';
    $objSesion = new Sesion();
    if (!isset($_SESSION['usuario'])) {
        
    
        switch($peticion){
            case 'home':
                require_once 'vista/home.php';
            break;
            case 'somos':
                require_once 'vista/somos.php'; 
            break;
            case 'galeria':
                require_once 'modelo/clsProductos.php';
                $objProducto = new Productos();
                $datos = $objProducto->productos();
                require_once 'vista/galeria.php';
            break;  
        
            case 'IniciarSesion':
                require_once 'vista/login.php'; 
            break; 
            case 'registroUsuario':
                require_once 'vista/registroUsuario.php';
            break;
            case 'guardarUsuario':
                require_once 'modelo/clsUsuario.php';
                $objUsuario = new Usuario();
                $objUsuario->setDatos($correo,$nombre,$contrasena,$_FILES);
                $datos = $objUsuario->insertarUsuario();

                require_once 'vista/registroUsuario.php';
            break;
           
            case 'ingresar':
                require_once 'modelo/clsUsuario.php';
                $objUsuario = new Usuario();
                $objUsuario->setDatos($correo,null,$contrasena,null);
                $datos = $objUsuario->login();

                if (isset($datos['perfil'])) {
                    $objSesion->crearVariable('usuario',$datos);

                    if ($datos['perfil'] == 2)
                        header('location:?peticion=perfilCliente');
                        //require_once 'vista/cliente.php';
                    else
                        //require_once 'vista/admin.php';
                        header('location:?peticion=perfilAdmin');    
                }
                require_once 'vista/login.php';
                break;  

            default:
            header('location:vista/home.php');       
        }   

        
    }

  
    if (isset($_SESSION['usuario']) && $_SESSION['usuario']['perfil'] == 1) {

        switch ($peticion) {
            case 'perfilAdmin':
                require_once 'vista/admin.php';
                break;

            case 'guardarProducto':
                require_once 'modelo/clsProductos.php';
                $objProducto = new Productos();
                $objProducto->setDatos($modelo,$nombre,$descripcion,$precio,$stock,$_FILES);
                $datos = $objProducto->altaProducto();

                require_once 'vista/registroProductos.php';
                break;  

            case 'registroProductos':
                require_once 'vista/registroProductos.php'; 
                break;   

            case 'productos':
                require_once 'modelo/clsProductos.php';
                $objProducto = new Productos();
                $datos = $objProducto->productos();
                
                require_once 'vista/productos.php';
                break;
            
            case 'cancelarProducto':
                require_once 'modelo/clsProductos.php';
                $objProducto = new Productos();
                $objProducto->setDatos($modelo,null,null,null,null,null);
                $objProducto->cancelarProducto();
                $datos = $objProducto->productos();

                require_once 'vista/productos.php';
                break;

            case 'cerrar':
                $objSesion->borrarVariable('usuario');
                require_once 'vista/login.php';
                break;  
                
                default:
                header('location:?peticion=perfilAdmin');   
            case 'galeria':
                $objProducto=new Productos();
                $datos=$objProducto->productos();
                require_once'vista/galeria.php';
                break;


            
        }
    }
    if (isset($_SESSION['usuario']) && $_SESSION['usuario']['perfil'] == 2) {

        switch ($peticion) {
            case 'perfilCliente':
                require_once 'vista/cliente.php';                
                break;
            case 'galeria':
                require_once 'vista/galeria.php';
                break;
            case 'cerrar':              
                $objSesion->borrarVariable('usuario');
                require_once 'vista/login.php';
                break;    
                default:
                header('location:?peticion=perfilCliente');   
        }
    }

    
?>