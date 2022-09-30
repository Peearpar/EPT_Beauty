<?php 
    require_once '../sql_functions/products_functions/product.get.all.php';
    require_once '../sql_functions/category_functions/category.get.all.php';
    require_once '../sql_functions/order_functions/order.get.all.php';
    require_once '../sql_functions/user_functions/user.get.all.php';

        // $count_product = getProducts();
        // echo count ($count_product);

    echo json_encode(
        [
            'is_complete' => true,
            'message' => 'Overview',
            'data' => ['products' => count(getProducts()),'categories' => count(getCategories()),'order' => count(getOrders()),'users' => count(getUsers())]
        ]
    );

    return;
?>