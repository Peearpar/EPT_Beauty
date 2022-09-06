<?php
    require_once('../helper_function/user.validate.php');
    header('Content-Type: application/json; charset=utf-8');
    session_start();

    $is_complete = false;
    $message = "You don't have permission";

    if(isset($_POST['user_email']) && isset($_POST['token']))
    {
        $user_email = $_POST['user_email'];
        $token = $_POST['token'];
        if(matchToken($user_email, $token))
        {
            $is_complete = true;
            $message = "Welcome!";
        }
    }
    echo json_encode(
        [
            'is_complete' => $is_complete,
            'message' => $message,
            'data' => []
        ]
    );
?>