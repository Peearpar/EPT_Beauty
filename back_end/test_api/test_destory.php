<?php
    header('Content-Type: application/json; charset=utf-8');
    session_start();
    session_destroy();

    echo json_encode(
        [
            'is_complete' => true,
            'message' => 'session destroy',
            'data' => []
        ]
    );
    return;

?>
