<?php 
    require_once '../sql_functions/category_functions/category.get.all.php';

    echo json_encode(
        [
            'is_complete' => true,
            'message' => 'users',
            'data' => getCategories()
        ]
    );
    return;
?>