<?php
    require_once '../sql_functions/user_functions/user.get.php';
    require_once('../helper_function/user.validate.php');
    session_start();

    $salt = 'EPT-BEAUTY';

    $email  = $_POST['email'];
    $password  = md5($_POST['password'] . $_POST['email'] . $salt);

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

    // $_SESSION["token"][$email] = md5(uniqid(microtime(), true) . $email); ///// set token

    echo json_encode(
    [
        'is_complete' => true,
        'message' => 'Login success',
        'data' => [
            'token' => fetchToken($email, $result), ///// ได้รับ token เมื่อ login เสร็จแล้ว
            'email' => $email,
            'name' => $result['name'],
            'credit' => $result['credit'],
            'role' => $result['role'],
        ]
    ]
    );
    return;

?>