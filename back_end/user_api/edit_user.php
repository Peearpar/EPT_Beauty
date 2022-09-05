<?php 
    require_once '../sql_functions/user_functions/user.edit.php';

    $id = $_POST['id'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $district = $_POST['district'];
    $sub_district = $_POST['sub_district'];
    $zip_code = $_POST['zip_code'];
    $address = $_POST['address'];
    $credit = $_POST['credit'];
    $role = $_POST['role'];

    return editUser(
        $id,
        $name, 
        $surname, 
        $district, 
        $sub_district, 
        $zip_code, 
        $address, 
        $credit, 
        $role
    );
?>