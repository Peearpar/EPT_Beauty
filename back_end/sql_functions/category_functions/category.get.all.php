<?php
    define('__ROOT__', dirname(dirname(__FILE__)));
    require_once(__ROOT__.'/connection.php');
    header('Content-Type: application/json; charset=utf-8');


    function getCategories(){
        $conn = connection();

        // prepare and bind
        $stmt = $conn->prepare("
        SELECT *
        FROM `ept_beauty`.`categories`");

        // set parameters and execute
        $stmt->execute();
        $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

        $stmt->close();
        $conn->close();

        return $result;

    }


?>