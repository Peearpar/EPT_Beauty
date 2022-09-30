<?php
    require_once(dirname(dirname(__FILE__)).'/connection.php');
    header('Content-Type: application/json; charset=utf-8');


    function getUsers(){
        $conn = connection();

        // prepare and bind
        $stmt = $conn->prepare("
        SELECT id, name, surname, email, credit, role, created_at
        FROM `ept_beauty`.users");

        // set parameters and execute
        $stmt->execute();
        $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

        $stmt->close();
        $conn->close();

        return $result;

    }


?>