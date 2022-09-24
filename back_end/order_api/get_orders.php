<?php 
    require_once '../sql_functions/order_functions/order.get.all.php';

    session_start();

    if(!isset($_SESSION['token'][$_POST['user_email']]['is_validate']) 
    || !$_SESSION['token'][$_POST['user_email']]['is_validate'])
    {
        echo json_encode(
            [
                'is_complete' => false,
                'message' => 'You have not permission',
                'data' => []
            ]
        );
        return;
    }

    echo json_encode(
        [
            'is_complete' => true,
            'message' => 'orders',
            'data' => getOrders()
        ]
    );
    return;
?>