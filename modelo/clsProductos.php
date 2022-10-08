<?php

    require_once('helper/clsConexion.php'); 

    class Productos{
        //Definir atributos
        private $_modelo;
        private $_nombre;
        private $_descripcion;
        private $_precio;
        private $_stock;
        private $_foto;
        private $_estatus;

        //Seteo de datos
        public function setDatos($modelo,$nombre,$descripcion,$precio,$stock,$foto){
            
            $this->_modelo=$modelo;
            $this->_nombre=$nombre;
            $this->_descripcion=$descripcion;
            $this->_precio=$precio;
            $this->_stock=$stock;
            $this->_foto=$foto;
        }


        //metodo para insertar Producto
        public function altaProducto(){
            $nombreFoto= $this->_foto['foto']['name'];
            $ruta= 'vista/catalogo/productos'.$nombreFoto;
            move_uploaded_file($this->_foto['foto']['tmp_name'],$ruta);
            
            $sql="insert into productos VALUES ('$this->_modelo','$this->_nombre','$this->_descripcion','$this->_precio','$this->_stock','$ruta',1)";
             
            $res=$this->_aplicarQuery($sql);    
            return $res;
        }

        public function productos(){
            
            $sql="SELECT * FROM productos WHERE estatus=1";             
            $res=$this->_aplicarQuery($sql);    
            return $res;
        }

        //Aplicar Query
        private function _aplicarQuery($consulta){
            $objConexion= new Conexion();
            $res=$objConexion->ejecutarConsulta($consulta);
            $objConexion= $objConexion->cerrarConexion();
            return $res;
        }

        //Cancelar Producto -  metodo para cambiar el estatus del producto 
        public function cancelarProducto(){

            $sql = "UPDATE productos SET estatus = 0 WHERE modelo = '$this->_modelo'";
            $this->_aplicarQuery($sql);
            return;

        }
        
    }
    
?>