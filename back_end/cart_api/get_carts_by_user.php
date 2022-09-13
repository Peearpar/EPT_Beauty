<?php 
    require_once '../sql_functions/cart_functions/cart.get.all.php';
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

    echo json_encode(
        [
            'is_complete' => true,
            'message' => 'carts',
            'data' => getByid($user_id)
        ]
    );
    return;
?>