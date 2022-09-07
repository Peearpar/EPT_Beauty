<?php 
    require_once '../sql_functions/category_functions/category.insert.php';
    session_start();
    $salt = 'EPT-BEAUTY';
    $name = $_POST['name'];

    if(isset($_SESSION['token'][$_POST['user_email']]['is_validate']))
    {
        if($_SESSION['token'][$_POST['user_email']]['is_validate'])
        {
            $result = checkCategoryDuplicate($name);
            if($result['counts'] > 0)
            {
                echo json_encode(
                    [
                        'is_complete' => false,
                        'message' => 'Name Duplicate',
                        'data' => []
                    ]
                );
                return;
            }
            return insertCategory(
                $name
            );

        }

        echo json_encode(
            [
                'is_complete' => false,
                'message' => "You don't have permission",
                'data' => []
            ]
        );
    }

?>