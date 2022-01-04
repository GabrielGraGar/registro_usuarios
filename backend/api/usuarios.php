<?php

    //localhost: 8080/.../api/usuarios.php
    header("Content-Type: application/json")

    //recibir peticiones del usuario
    switch($_SERVER['REQUEST_METHOD']){

        case 'POST':
            $_POST= json_decode(file_get_contents('php://imput'),true);
            $resultado['mensaje']= "Guardar informacion:". json_encode($_POST);
            echo json_encode($resultado);
        break;

        case 'GET':
            if(isset($_GET['id'])){
                $resultado['mensaje']= 'Retornar el usuario con el id: '. $_GET['id'];
                echo json_encode($resultado);
            }
            else{
                $resultado['mensaje']= 'Retornar todos los usuarios'; 
                echo json_encode($resultado);
            }
                  
        break;

        case 'PUT':
            $_PUT= json_decode(file_get_contents('php://imput'),true);
            $resultado['mensaje']= 'Actualizar el usuario con el id: '. $_GET['id'] . ', informacion a actualizar: '. json_encode($_PUT);
            echo json_encode($resultado);
            break;

        case 'DELETE':
            $resultado['mensaje']= 'Eliminar un usuario con el id: '. $_GET['id'];
            echo json_encode($resultado);
        break;

    }

?>
