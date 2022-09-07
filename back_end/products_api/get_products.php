<?php 
    require_once '../sql_functions/products_functions/product.get.all.php';

    echo json_encode(
        [
            'is_complete' => true,
            'message' => 'users',
            'data' => getProducts()
        ]
    );
    return;
?>