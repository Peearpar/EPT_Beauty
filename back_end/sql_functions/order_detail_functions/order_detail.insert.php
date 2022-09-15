<?php
    require_once(dirname(dirname(__FILE__)) .'/connection.php');
    header('Content-Type: application/json; charset=utf-8');

    function insertOrderDetail(
        $product_id,
        $order_id,
        $price,
        $discount,
        $qty
        )
    {
        $conn = connection();

        // prepare and bind
        $stmt = $conn->prepare("INSERT INTO `ept_beauty`.`order_detail`
        (
        `product_id`,
        `order_id`,
        `price`,
        `discount`,
        `qty`)
        VALUES
        (
        ?,
        ?,
        ?,
        ?,
        ?
        );");
        $stmt->bind_param("iidii",
        $product_id,
        $order_id,
        $price,
        $discount,
        $qty);

        // set parameters and execute
        $stmt->execute();
 
        $stmt->close();
        $conn->close();
    }

?>