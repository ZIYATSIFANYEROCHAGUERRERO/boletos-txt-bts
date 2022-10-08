<?php

    require_once('helper/clsConexion.php'); 
    
    class Usuario{
        private $_nombre;
        private $_correo;
        private $_contrasena;
        private $_foto;
        private $_perfil;
        private $_estatus;

        /*CReado adicional por mi
           //traer los datos de la base de datos 
        public function setLogin($correo, $contrasena){
            
            $this->_correo=$correo;
            $this->_contrasena=$contrasena;
        }*/

        //recupera vista delos datos
        public function setDatos($correo,$nombre,$contrasena,$foto){
            
            $this->_correo=$correo;
            $this->_nombre=$nombre;
            $this->_contrasena=$contrasena;
            $this->_foto=$foto;
        }


        //insertar
        public function insertarUsuario(){
            $nombreFoto= $this->_foto['foto']['name'];
            $ruta= 'vista/catalogo/clientes'.$nombreFoto;
            move_uploaded_file($this->_foto['foto']['tmp_name'],$ruta);
            
            $sql="insert into usuarios VALUES ('$this->_correo','$this->_nombre',sha2('$this->_contrasena',256),'$ruta',1,2)";
             
            $res=$this->_aplicarQuery($sql);    
            return $res;
            
        }
       

        public function login(){

            $this->_correo=htmlentities($this->_correo, ENT_QUOTES);
            
            $sql="SELECT nombre, foto, perfil FROM usuarios WHERE correo = '$this->_correo' &&
             contrasena=sha2('$this->_contrasena',256)";

            $res=$this->_aplicarQuery($sql); 
            $valor=$res->fetch_assoc();
            return $valor;
            
        }

     
        private function _aplicarQuery($consulta){
            $objConexion= new Conexion();
            $res=$objConexion->ejecutarConsulta($consulta);
            $objConexion= $objConexion->cerrarConexion();
            return $res;
        }
           
    }
?>