<?php

    class usuario{
        
        private $nombre;
        private $apellido;
        private $dui; //Documento Unico de Identidad (DUI)

        public function _construct($nombre, $apellido, $dui){
            $this->nombre= $nombre;
            $this->apellido=$apellido;
            $this->dui=$apellido;
        }

        //Obtener el valor del nombre
        public function getNombre(){
            return $this->nombre;
        }

        //Establecer el nombre
        public function setNombre($nombre){
            $this->nombre=$nombre;
            return $this;
        }

        //Obtener el valor del apellido
        public function getApellido(){
            return $this->$apellido;
        }

        //Establecer el apellido
        public function setApellido($apellido){
            $this->apellido=$apellido;
            return $this;
        }

        //Obtener el valor del dui
        public function getDui(){
            return $this->dui;
        }

        //Establecer el dui
        public function setDui($dui){
            $this->dui=$dui;
            return $this;
        }

    }

?>