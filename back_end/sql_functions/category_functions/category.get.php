<?php
    define('__ROOT__', dirname(dirname(__FILE__)));
    require_once(__ROOT__.'/connection.php');
    header('Content-Type: application/json; charset=utf-8');


    function getByid($id){
        $conn = connection();

        // prepare and bind
        $stmt = $conn->prepare("
        SELECT *
        FROM `ept_beauty`.`categories`
        WHERE id = ?");

        $stmt->bind_param("i",
        $id);

        // set parameters and execute
        $stmt->execute();
        $result = $stmt->get_result()->fetch_assoc();

        $stmt->close();
        $conn->close();

        return $result;

    }

?>