<?php

    class ContactoModel 
    {
        private static $contactos = [];


        public static function agregarContacto($contacto) 
        {
            // Cargar contactos existentes
            if (file_exists("contactos.json")) 
            {
                self::$contactos = unserialize(file_get_contents("contactos.json"));
            }

            // Agregar el nuevo
            self::$contactos[] = $contacto;

            // Guardar todo el array actualizado
            file_put_contents("contactos.json", serialize(self::$contactos));
            return true;
        }


        public static function obtenerContactos() 
        {
            if (file_exists("contactos.json")) 
            {
                self::$contactos = unserialize(file_get_contents("contactos.json"));
            }
            return self::$contactos;
        }
    }

?>