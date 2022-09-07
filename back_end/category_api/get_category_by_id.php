<?php 
    require_once '../sql_functions/category_functions/category.get.php';

    $id = $_POST['id'];
    $data = getByid($id);
    $is_complete = true;
    $message = 'category';
    if($data === null)
    {
        $is_complete = false;
        $message = 'not found category!';
    }
    echo json_encode(
        [
            'is_complete' => $is_complete,
            'message' => $message,
            'data' => $data
        ]
    );
    return;
?>