<?php
    class InicioModelo extends Model{
        private $usuario;
        private $contrasena;
        private $rol;
        
        public function __construct(){
            parent::__construct();
        }
        public function getUsuario(){
            return $this->usuario;
        }
        public function getContrasena(){
            return $this->contrasena;
        }
        public function getRol(){
            return $this->rol;
        }
        public function setUsuario($usuario){
            $this->usuario = $usuario;
        }
        public function setContrasena($contrasena){
            $this->contrasena = $contrasena;
        }
        public function setRol($rol){
            $this->rol = $rol;
        }

        public function validarLogin(){
            $rol = "";
             $sql = "SELECT id_rol FROM usuario WHERE usuario ='".$this->usuario."' 
            AND clave='".$this->contrasena."'";
            $datos = $this->getDb()->conectar()->query($sql);
            while($fila = $datos->fetch_assoc()){
                $rol = $fila['id_rol'];
            }
            return $rol;
        }
    }
