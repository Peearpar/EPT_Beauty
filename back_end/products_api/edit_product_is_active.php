<?php 
    require_once '../sql_functions/products_functions/product.edit.php';
    session_start();

    if(!isset($_SESSION['token'][$_POST['user_email']]['is_validate']))
    {
        echo json_encode(
            [
                'is_complete' => false,
                'message' => "You don't have permission 1",
                'data' => []
            ]
        );

        return;
    }

    if(!$_SESSION['token'][$_POST['user_email']]['is_validate'])
    {
        echo json_encode(
            [
                'is_complete' => false,
                'message' => "You don't have permission 2",
                'data' => []
            ]
        );

        return;

    }

    return editProductIsActive(
        $_POST['id'],
        $_POST['is_active']
    )


?>