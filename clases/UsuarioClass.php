<?php

    class UsuarioClass
    {

        private string $rut;
        private string $nombre;
        private string $apellido;
        private string $email;
        private string $telefono;
        private string $direccion;
        private string $ciudad;
        private string $region;
        private string $plan;
        

        public function set_rut($rut)
        {
            $this->rut = $rut;
        }
        public function set_nombre($nombre)
        {
            $this->nombre = $nombre;
        }
        public function set_apellido($apellido)
        {
            $this->apellido = $apellido;
        }
        public function set_email($email)
        {
            $this->email = $email;
        }
        public function set_telefono($telefono)
        {
            $this->telefono = $telefono;
        }
        public function set_direccion($direccion)
        {
            $this->direccion = $direccion;
        }
        public function set_ciudad($ciudad)
        {
            $this->ciudad = $ciudad;
        }
        public function set_region($region)
        {
            $this->region = $region;
        }
        public function set_plan($plan)
        {
            $this->plan = $plan;
        }

        public function get_rut()
        {
            return $this->rut;
        }

        public function get_nombre()
        {
            return $this->nombre;
        }
        public function get_apellido()
        {
            return $this->apellido;
        }
        public function get_email()
        {
            return $this->email;
        }
        public function get_telefono()
        {
            return $this->telefono;
        }
        public function get_direccion()
        {
            return $this->direccion;
        }
        public function get_ciudad()
        {
            return $this->ciudad;
        }
        public function get_region()
        {
            return $this->region;
        }
        public function get_plan()
        {
            return $this->plan;
        }

        public function __construct($rut, $nombre, $apellido, $email, $telefono, $direccion, $ciudad, $region, $plan)
        {
            $this->rut = $rut;
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->email = $email;
            $this->telefono = $telefono;
            $this->direccion = $direccion;
            $this->ciudad = $ciudad;
            $this->region = $region;
            $this->plan = $plan;
        }
        
    }

?>