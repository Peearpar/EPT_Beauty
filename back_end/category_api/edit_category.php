<?php 
    require_once '../sql_functions/category_functions/category.edit.php';

    session_start();
    if(isset($_SESSION['token'][$_POST['user_email']]['is_validate']))
    {
        if($_SESSION['token'][$_POST['user_email']]['is_validate'])
        {
            $id = $_POST['id'];
            $name = $_POST['name'];
        
            return editCategory(
                $id,
                $name
            );
        }
    }
?>