<?php
    require_once '../sql_functions/user_functions/user.get.php';
    session_start();

    $email  = $_POST['email'];
    $password  = $_POST['password'];

    $result = login($email,$password);
    if($result['counts'] == 0)
    {
        echo json_encode(
            [
                'is_complete' => false,
                'message' => 'Email or Password are wrong!!',
                'data' => []
            ]
        );
        return;
    }

    $_SESSION[$email."_ticket"] = $email . "_ticket"; ///// set token
    echo json_encode(
    [
        'is_complete' => true,
        'message' => 'Login success',
        'data' => [
            'token' => $_SESSION[$email."_ticket"], ///// ได้รับ token เมื่อ login เสร็จแล้ว
            'email' => $email,
            'name' => $result['name'],
            'credit' => $result['credit'],
        ]
    ]
    );
    return;

?>