<?php 
    require_once '../sql_functions/products_functions/product.get.all.php';

    if (isset($_GET['limit']) && is_numeric($_GET['limit'])) {
        echo json_encode(
            [
                'is_complete' => true,
                'message' => 'product best seller',
                'data' => getBestSellerProducts($_GET['limit'])
            ]
        );
        return;
    }

    echo json_encode(
        [
            'is_complete' => false,
            'message' => 'limit is invalid',
            'data' => []
        ]
    );
    return;

?>