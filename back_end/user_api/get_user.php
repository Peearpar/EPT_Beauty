<?php 
    require_once '../sql_functions/user_functions/user.get.all.php';

    echo json_encode(
        [
            'is_complete' => true,
            'message' => 'users',
            'data' => getUsers()
        ]
    );
    return;
?>