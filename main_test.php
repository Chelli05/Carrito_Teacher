<?php

    $action = $_GET['action'];

    switch ($action) {
        case 'login':
           echo "haciendo  login";
            break;

        case 'add_to_cart':
            echo "Añadir al carro.";
            break;

        default:
            echo "Invalid action!";
    }

?>