<?php

    require_once("../clases/usuarioClass.php");
    require_once("../models/UsuarioModel.php");
    header('Content-Type: application/json');
    

    // Procesar la solicitud POST para agregar un nuevo usuario
    if($_SERVER['REQUEST_METHOD'] === 'POST') 
    {
        $usuario = new UsuarioClass(
            $_POST['rut'],
            $_POST['nombre'],
            $_POST['apellido'],
            $_POST['email'],
            $_POST['telefono'],
            $_POST['direccion'],
            $_POST['ciudad'],
            $_POST['region'],
            $_POST['plan']
        );

        // Guardar el usuario utilizando el modelo
        UsuarioModel::agregarUsuario($usuario);

        // Para probar que llegan los datos, devuelves el objeto como JSON
        echo json_encode([
            "exito" => true,
            "mensaje" => "Datos recibidos correctamente",
            "usuario" => [
                "rut" => $usuario->get_rut(),
                "nombre" => $usuario->get_nombre(),
                "apellido" => $usuario->get_apellido(),
                "email" => $usuario->get_email(),
                "telefono" => $usuario->get_telefono(),
                "direccion" => $usuario->get_direccion(),
                "ciudad" => $usuario->get_ciudad(),
                "region" => $usuario->get_region(),
                "plan" => $usuario->get_plan()
            ]
        ]);
    }

    // Procesar la solicitud GET para listar o buscar usuarios
    if ($_SERVER['REQUEST_METHOD'] === 'GET') 
    {
        $action = $_GET['action'] ?? 'listar';

        if($action === 'listar') 
        {
            $usuarios = UsuarioModel::obtenerUsuarios();
            $usuariosArray = [];
            foreach ($usuarios as $u) 
            {
                $usuariosArray[] = [
                    "rut" => $u->get_rut(),
                    "nombre" => $u->get_nombre(),
                    "apellido" => $u->get_apellido(),
                    "email" => $u->get_email(),
                    "telefono" => $u->get_telefono(),
                    "direccion" => $u->get_direccion(),
                    "ciudad" => $u->get_ciudad(),
                    "region" => $u->get_region(),
                    "plan" => $u->get_plan()
                ];
            }
            echo json_encode(["exito" => true, "usuarios" => $usuariosArray]);
            exit;
        }

        if($action === 'buscar') 
        {
            $rut = $_GET['rut'] ?? '';
            $usuario = UsuarioModel::obtenerUsuarioPorRut($rut);

            if($usuario) {
                echo json_encode([
                    "exito" => true,
                    "usuarios" => [[
                        "rut" => $usuario->get_rut(),
                        "nombre" => $usuario->get_nombre(),
                        "apellido" => $usuario->get_apellido(),
                        "email" => $usuario->get_email(),
                        "telefono" => $usuario->get_telefono(),
                        "direccion" => $usuario->get_direccion(),
                        "ciudad" => $usuario->get_ciudad(),
                        "region" => $usuario->get_region(),
                        "plan" => $usuario->get_plan()
                    ]]
                ]);
            } 
            else 
            {
                echo json_encode(["exito" => false, "usuarios" => []]);
            }
            exit;
        }
    }

    // Procesar la solicitud PUT para actualizar un usuario existente
    if ($_SERVER['REQUEST_METHOD'] === 'PUT') 
    {
        header('Content-Type: application/json');
        $putData = json_decode(file_get_contents("php://input"), true);

        $usuario = new UsuarioClass(
            $putData['rut'],
            $putData['nombre'],
            $putData['apellido'],
            $putData['email'],
            $putData['telefono'],
            $putData['direccion'],
            $putData['ciudad'],
            $putData['region'],
            $putData['plan']
        );

        if (UsuarioModel::actualizarUsuario($usuario)) 
        {
            echo json_encode(["exito" => true, "mensaje" => "Usuario actualizado correctamente"]);
        } 
        else 
        {
            echo json_encode(["exito" => false, "mensaje" => "No se pudo actualizar el usuario"]);
        }
        exit;
    }

    //Eliminar usuarios se puede implementar con el método DELETE
    if ($_SERVER['REQUEST_METHOD'] === 'DELETE') 
    {
        header('Content-Type: application/json');
        $deleteData = json_decode(file_get_contents("php://input"), true);
        $rut = $deleteData['rut'] ?? '';

        if (UsuarioModel::eliminarUsuario($rut)) 
        {
            echo json_encode(["exito" => true, "mensaje" => "Usuario eliminado correctamente"]);
        } 
        else 
        {
            echo json_encode(["exito" => false, "mensaje" => "No se pudo eliminar el usuario"]);
        }
        exit;
    }

?>