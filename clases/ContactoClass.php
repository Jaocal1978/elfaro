<?php

    class ContactoClass 
    {
        private string $rut;
        private string $nombre;
        private string $email;
        private string $mensaje;
        
        public function set_rut($rut)
        {
            $this->rut = $rut;
        }
        public function set_nombre($nombre)
        {
            $this->nombre = $nombre;
        }
        public function set_email($email)
        {
            $this->email = $email;
        }
        
        public function set_mensaje($mensaje)
        {
            $this->mensaje = $mensaje;
        }
        public function get_rut()
        {
            return $this->rut;
        }

        public function get_nombre()
        {
            return $this->nombre;
        }

        public function get_email()
        {
            return $this->email;
        }
       
        public function get_mensaje()
        {
            return $this->mensaje;
        }

        public function __construct($rut, $nombre, $email, $mensaje)
        {
            $this->rut = $rut;
            $this->nombre = $nombre;
            $this->email = $email;
            $this->mensaje = $mensaje;
        }
        
    }

?>