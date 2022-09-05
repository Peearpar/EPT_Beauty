<?php 
    require_once '../sql_functions/user_functions/user.get.php';

    $id = $_POST['id'];

    $data = getByid($id);
    $is_complete = true;
    $message = 'users';

    if($data === null)
    {
        $is_complete = false;
        $message = 'not found user!';
    }
    echo json_encode(
        [
            'is_complete' => $is_complete,
            'message' => $message,
            'data' => $data
        ]
    );
    return;
?>