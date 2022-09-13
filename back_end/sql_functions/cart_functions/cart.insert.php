<?php
    define('__ROOT__', dirname(dirname(__FILE__)));
    require_once(__ROOT__.'/connection.php');
    header('Content-Type: application/json; charset=utf-8');

    function insertCart(
        $user_id,
        $product_id,
        $qty
        )
    {
        $conn = connection();

        // prepare and bind
        $stmt = $conn->prepare("INSERT INTO `ept_beauty`.`carts`
        (
        `user_id`,
        `product_id`,
        `qty`)
        VALUES
        (
        ?,
        ?,
        ?);");
        $stmt->bind_param("iii",
        $user_id,
        $product_id,
        $qty);

        // set parameters and execute
        $stmt->execute();

        echo json_encode(
            [
                'is_complete' => true,
                'message' => 'cart insert complete',
                'data' => [],
            ]
        );
 
        $stmt->close();
        $conn->close();
    }

    function checkCart($user_id, $product_id) {
        $conn = connection();

        // prepare and bind
        $stmt = $conn->prepare("
        SELECT count(*) AS counts, id, qty
        FROM `ept_beauty`.carts
        WHERE user_id = ?
        AND product_id = ?
        LIMIT 1");

        $stmt->bind_param("ii",
        $user_id, $product_id);

        // set parameters and execute
        $stmt->execute();
        $result = $stmt->get_result()->fetch_assoc();

        $stmt->close();
        $conn->close();

        return $result;
    }

?>