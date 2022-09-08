<?php 
    require_once '../sql_functions/products_functions/product.get.php';

    echo json_encode(
        [
            'is_complete' => true,
            'message' => 'product',
            'data' => getProductById($_POST['id'])
        ]
    );
    return;
?>