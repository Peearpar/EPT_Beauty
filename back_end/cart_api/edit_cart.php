<?php 
    require_once '../sql_functions/cart_functions/cart.update.php';
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

    if($_POST['qty'] <= 0)
    {
        echo json_encode(
            [
                'is_complete' => false,
                'message' => "can't update cart with qty <= 0",
                'data' => []
            ]);
        return ;
    }

    return updateCart(
        $_POST['qty'],
        $_POST['cart_id']
    );
?>