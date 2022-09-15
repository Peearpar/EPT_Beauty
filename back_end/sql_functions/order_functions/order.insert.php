<?php
    require_once(dirname(dirname(__FILE__)) .'/connection.php');
    header('Content-Type: application/json; charset=utf-8');

    function insertOrder(
        $user_id
        )
    {
        $conn = connection();

        // prepare and bind
        $stmt = $conn->prepare("INSERT INTO `ept_beauty`.`orders`
        (`user_id`)
        VALUES
        (?);");
        $stmt->bind_param("i",
        $user_id);

        // set parameters and execute
        $stmt->execute();

        $order_id = $stmt->insert_id;
 
        $stmt->close();
        $conn->close();

        return $order_id;
    }

?>