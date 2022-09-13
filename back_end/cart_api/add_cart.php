<?php
    require_once '../sql_functions/cart_functions/cart.insert.php';
    require_once '../sql_functions/cart_functions/cart.update.php';
    require_once '../sql_functions/products_functions/product.get.php';
    session_start();

    if(!isset($_SESSION['token'][$_POST['user_email']]))
    {
        echo json_encode(
            [
                'is_complete' => false,
                'message' => "Something wrong!!",
                'data' => []
            ]);
        return ;
    }

    $user_id = $_SESSION['token'][$_POST['user_email']]['user_id'];
    $product_id = $_POST['product_id'];
    $qty = 1;

    if(!getProductById($product_id)) {
        echo json_encode(
            [
                'is_complete' => false,
                'message' => "Product not Found!!",
                'data' => []
            ]);
        return ;
    }

    if(!getProductById($product_id)['is_active']) {
        echo json_encode(
            [
                'is_complete' => false,
                'message' => "Product is disable",
                'data' => []
            ]);
        return ;
    }

    $check_result = checkCart($user_id, $product_id);
    if ($check_result['counts'] > 0) {
        return updateCart(
            $check_result['qty'] + 1,
            $check_result['id']
        );
    }

    return insertCart(
        $user_id,
        $product_id,
        $qty
    );
?>