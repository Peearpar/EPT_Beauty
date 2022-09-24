<?php
    require_once(dirname(dirname(__FILE__)).'/connection.php');
    header('Content-Type: application/json; charset=utf-8');


    function editOrdersStatus($status, $order_id){
        $conn = connection();

        // prepare and bind
        $stmt = $conn->prepare("
        UPDATE `ept_beauty`.`orders`
        SET
        `status` = ?
        WHERE `id` = ?;");

        $stmt->bind_param("si",
        $status,
        $order_id);

        // set parameters and execute
        $stmt->execute();


        $stmt->close();
        $conn->close();

    }


?>