<?php
    require_once(dirname(dirname(__FILE__)).'/connection.php');
    header('Content-Type: application/json; charset=utf-8');


    function getOrders(){
        $conn = connection();

        // prepare and bind
        $stmt = $conn->prepare("
        SELECT * FROM ept_beauty.orders;");

        // set parameters and execute
        $stmt->execute();
        $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

        $stmt->close();
        $conn->close();

        return $result;

    }


?>