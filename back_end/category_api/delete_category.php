<?php 
    require_once '../sql_functions/category_functions/category.delete.php';

    session_start();

    $id = $_POST['id'];
    if(isset($_SESSION['token'][$_POST['user_email']]['is_validate']))
    {
        if($_SESSION['token'][$_POST['user_email']]['is_validate'])
        {
            $result = checkCategoryInUse($id);
            if($result['counts'] > 0)
            {
                echo json_encode(
                    [
                        'is_complete' => false,
                        'message' => 'This Category in uses',
                        'data' => []
                    ]
                );
                return;
            }
            return deleteCategory($id);
        }
    }


?>