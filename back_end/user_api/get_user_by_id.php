<?php 
    require_once '../sql_functions/user_functions/user.get.php';
    session_start();
    $id = $_POST['id'];
    $user_email = $_POST['user_email'];

    if(isset($_SESSION['token'][$user_email]['is_validate']))
    {
        if($_SESSION['token'][$user_email]['is_validate'])
        {
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
        }
    }


?>