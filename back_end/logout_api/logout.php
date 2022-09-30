<?php
    header('Content-Type: application/json; charset=utf-8');
    session_start();
    unset($_SESSION['token'][$_POST['user_email']]);

    echo json_encode(
        [
            'is_complete' => true,
            'message' => 'session destroy',
            'data' => []
        ]
    );
    return;

?>
