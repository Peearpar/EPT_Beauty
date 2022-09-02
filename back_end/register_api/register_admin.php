<?php 
    require_once '../sql_functions/user_functions/user.insert.php';
    
    $name = $_POST['name'];
    $surname  = $_POST['surname'];
    $email  = $_POST['email'];
    $password  = $_POST['password'];
    $district = $_POST['district'];
    $sub_district = $_POST['sub_district'];
    $zip_code = $_POST['zip_code'];
    $address = $_POST['address'];
    $credit = $_POST['credit'];
    $role = $_POST['role'];

    $result = checkUserDuplicate($email);
    if($result['counts'] > 0)
    {
        echo json_encode(
            [
                'is_complete' => false,
                'message' => 'Email Duplicate',
                'data' => []
            ]
        );
        return;
    }

    return insertAdnim(
        $name,
        $surname,
        $email,
        $password,
        $district,
        $sub_district,
        $zip_code,
        $address,
        $credit,
        $role

    );

?>