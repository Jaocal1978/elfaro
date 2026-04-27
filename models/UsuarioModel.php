<?php
    class UsuarioModel
    {
        private static $usuarios = [];

        public static function agregarUsuario($usuario) 
        {
            // Cargar usuarios existentes
            if (file_exists("usuarios.json")) 
            {
                self::$usuarios = unserialize(file_get_contents("usuarios.json"));
            }

            // Agregar el nuevo
            self::$usuarios[] = $usuario;

            // Guardar todo el array actualizado
            file_put_contents("usuarios.json", serialize(self::$usuarios));
            return true;
        }

        public static function obtenerUsuarios() 
        {
            if (file_exists("usuarios.json")) 
            {
                self::$usuarios = unserialize(file_get_contents("usuarios.json"));
            }
            return self::$usuarios;
        }

        public static function obtenerUsuarioPorRut($rut) 
        {
            $usuarios = self::obtenerUsuarios();

            foreach ($usuarios as $usuario) 
            {
                
                if ($usuario->get_rut() === $rut) 
                {
                    return $usuario;
                }
            }
            return null; // Si no se encuentra
        }

        //Actualizar usuario 
        public static function actualizarUsuario($usuarioActualizado) 
        {
            $usuarios = self::obtenerUsuarios();
            foreach ($usuarios as $index => $usuario) 
            {
                if($usuario->get_rut() === $usuarioActualizado->get_rut()) 
                {
                    $usuarios[$index] = $usuarioActualizado;
                    file_put_contents("usuarios.json", serialize($usuarios));
                    return true;
                }
            }
            return false;
        }

        //Eliminar usuario
        public static function eliminarUsuario($rut) 
        {
            $usuarios = self::obtenerUsuarios();
            foreach ($usuarios as $index => $usuario) 
            {
                if($usuario->get_rut() === $rut) 
                {
                    array_splice($usuarios, $index, 1);
                    file_put_contents("usuarios.json", serialize($usuarios));
                    return true;
                }
            }
            return false;
        }
    }
?>