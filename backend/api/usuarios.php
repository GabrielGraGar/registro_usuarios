<?php>

    //localhost: 8080/.../api/usuarios.php

    //recibir peticiones del usuario
    switch($_SERVER['REQUEST_METHOD']){

        case 'POST':
            echo 'Guardar';
        break;
        case 'GET':
            echo 'Obtener';
        break;
        case 'PUT':
            echo 'Actualizar un usuario';
        break;
        case 'DELETE':
            echo 'Eliminar un usuario';
        break;

    }
    //crear

    //obtener un usuario

    //Obtener todos los usuarios

    //actualizar un usuario

    //Eliminar un usuario

?>
