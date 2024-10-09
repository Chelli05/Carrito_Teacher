<?php

if (isset($_GET['action'])) {
    $action = $_GET['action'];

    switch ($action) {
        case 'login':
            if (isset($_POST['username']) && isset($_POST['password'])) {
                err=login($_POST['username'], $_POST['password']);
            } else {
                echo "Please provide username and password.";
            }
            break;

        case 'logout':
            logout();
            break;

        case 'add_to_cart':
            if (isset($_GET['item_id'])) {
                addToCart($_GET['item_id']);
            } else {
                echo "No item ID provided.";
            }
            break;

        case 'remove_from_cart':
            if (isset($_GET['item_id'])) {
                removeFromCart($_GET['item_id']);
            } else {
                echo "No item ID provided.";
            }
            break;

        case 'view_cart':
            viewCart();
            break;

        default:
            echo "Invalid action!";
    }
} else {
    echo "No action specified.";
}
?>