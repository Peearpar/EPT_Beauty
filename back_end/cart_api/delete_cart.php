<?php 
    require_once '../sql_functions/cart_functions/cart.delete.php';
    session_start();

    if(!isset($_SESSION['token'][$_POST['user_email']]))
    {
        echo json_encode(
            [
                'is_complete' => false,
                'message' => "Something wrong!!",
                'data' => []
            ]);
        return ;
    }

    $user_id = $_SESSION['token'][$_POST['user_email']]['user_id'];

    return deleteCart(
        $_POST['cart_id']
    );
?>