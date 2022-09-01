<?php
    define('__ROOT__', dirname(dirname(__FILE__)));
    require_once(__ROOT__.'/connection.php');
    header('Content-Type: application/json; charset=utf-8');


    function login($email,$password){
        $conn = connection();

        // prepare and bind
        $stmt = $conn->prepare("
        SELECT count(*) AS counts, name, credit
        FROM `ept_beauty`.users
        WHERE email = ?
        AND password = ?");

        $stmt->bind_param("ss",
        $email,$password);

        // set parameters and execute
        $stmt->execute();
        $result = $stmt->get_result()->fetch_assoc();

        $stmt->close();
        $conn->close();

        return $result;

    }
    

?>