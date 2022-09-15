<?php 
    require_once '../sql_functions/cart_functions/cart.get.all.php';
    require_once '../sql_functions/cart_functions/cart.delete.php';
    require_once '../sql_functions/order_functions/order.insert.php';
    require_once '../sql_functions/order_detail_functions/order_detail.insert.php';
    require_once '../sql_functions/user_functions/user.get.php';
    require_once '../sql_functions/user_functions/user.edit.php';
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

    $user = getByid($user_id);
    $carts = getCartByid($user_id);
    $cartSum = getSumCart($user_id);

    if(!isset($carts))
    {
        echo json_encode(
            [
                'is_complete' => false,
                'message' => "no product on cart",
                'data' => []
            ]);
        return ;
    }

    $checkCart = true;
    foreach ($carts as $cart) {
        if(!$cart['is_active'] || $cart['stock'] <= 0)
        {
            $checkCart = false;
        }
    }

    if(!$checkCart)
    {
        echo json_encode(
            [
                'is_complete' => false,
                'message' => "Can't process product sold out!!",
                'data' => []
            ]);
        return ;
    }

    if($user['credit'] < $cartSum)
    {
        echo json_encode(
            [
                'is_complete' => false,
                'message' => "Not have credit!!!",
                'data' => []
            ]);
        return ;
    }

    editUser(
        $user['id'],
        $user['name'], 
        $user['surname'],
        $user['district'], 
        $user['sub_district'], 
        $user['zip_code'], 
        $user['address'], 
        $user['credit'] - $cartSum, 
        $user['role']
    );

    $order_id = insertOrder($user_id);

    if(!is_numeric($order_id))
    {
        echo json_encode(
            [
                'is_complete' => false,
                'message' => "order_id is not number!",
                'data' => []
        ]);

        return;
    }

    $cartListId = [];
    foreach ($carts as $cart) {
        insertOrderDetail(
            $cart['product_id'],
            $order_id ,
            $cart['price'],
            $cart['discount'],
            $cart['qty']
        );

        array_push($cartListId, $cart['id']);
    }
    deleteAllCart(
        $cartListId
    );

    echo json_encode(
        [
            'is_complete' => true,
            'message' => "check out complete",
            'data' => []
        ]);

    return;

?>