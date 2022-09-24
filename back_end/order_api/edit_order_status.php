<?php 
    require_once '../sql_functions/order_functions/order.edit.php';
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

    editOrdersStatus($_POST['status'], $_POST['order_id']);

    echo json_encode(
        [
            'is_complete' => true,
            'message' => "Update status to " . $_POST['status'],
            'data' => []
        ]
    );

    return;
?>