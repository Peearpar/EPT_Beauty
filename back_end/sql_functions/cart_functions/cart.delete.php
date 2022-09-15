<?php
    define('__ROOT__2', dirname(dirname(__FILE__)));
    require_once(__ROOT__2.'/connection.php');
    header('Content-Type: application/json; charset=utf-8');

    function deleteCart(
        $id
        )
    {
        $conn = connection();

        // prepare and bind
        $stmt = $conn->prepare("DELETE FROM `ept_beauty`.`carts`
        WHERE id = ?;");
        $stmt->bind_param("i",
        $id);

        // set parameters and execute
        $stmt->execute();

        echo json_encode(
            [
                'is_complete' => true,
                'message' => 'cart delete complete',
                'data' => [],
            ]
        );
 
        $stmt->close();
        $conn->close();
    }

    function deleteAllCart(
        $idList
        )
    {
        $conn = connection();

        // prepare and bind
        $in  = str_repeat('?,', count($idList) - 1) . '?';
        $types = str_repeat('i', count($idList));
        $stmt = $conn->prepare("DELETE FROM `ept_beauty`.`carts`
        WHERE id IN ($in);");
        $stmt->bind_param($types, ...$idList);

        // set parameters and execute
        $stmt->execute();
 
        $stmt->close();
        $conn->close();
    }

?>