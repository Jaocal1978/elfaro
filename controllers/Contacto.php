<?php

    require_once('../clases/ContactoClass.php');
    require_once('../models/ContactoModel.php');

    header('Content-Type: application/json; charset=utf-8');

    



    if ($_SERVER['REQUEST_METHOD'] === 'POST') 
    {
        $contacto = new ContactoClass(
            $_POST['rut'] ?? '',
            $_POST['nombre'] ?? '',
            $_POST['email'] ?? '',
            $_POST['mensaje'] ?? ''
        );

        ContactoModel::agregarContacto($contacto);

        echo json_encode([
            "success" => true,
            "mensaje" => "Datos recibidos correctamente",
            "contacto" => [
                "rut" => $contacto->get_rut(),
                "nombre" => $contacto->get_nombre(),
                "email" => $contacto->get_email(),
                "mensaje" => $contacto->get_mensaje()
            ]
        ]);
        exit;
    }

    
    if ($_SERVER['REQUEST_METHOD'] === 'GET') 
    {
        $contactos = ContactoModel::obtenerContactos();
        $contactoArray = [];

        foreach ($contactos as $c) 
        {
            $contactoArray[] = [
                "rut" => $c->get_rut(),
                "nombre" => $c->get_nombre(),
                "email" => $c->get_email(),
                "mensaje" => $c->get_mensaje()
            ];
        }

        echo json_encode([
            "exito" => true,
            "contactos" => $contactoArray
        ]);
        exit;
    }
    
?>