<?php 
    require_once '../sql_functions/user_functions/user.delete.php';

    $id = $_POST['id'];

    return deleteUser($id);
?>