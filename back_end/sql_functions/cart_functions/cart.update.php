<?php
    define('__ROOT__2', dirname(dirname(__FILE__)));
    require_once(__ROOT__2.'/connection.php');
    header('Content-Type: application/json; charset=utf-8');

    function updateCart(
        $qty,
        $id
        )
    {
        $conn = connection();

        // prepare and bind
        $stmt = $conn->prepare("UPDATE `ept_beauty`.`carts`
        SET
        `qty` = ?
        WHERE `id` = ?;");
        $stmt->bind_param("ii",
        $qty, $id);

        // set parameters and execute
        $stmt->execute();

        echo json_encode(
            [
                'is_complete' => true,
                'message' => 'cart update complete',
                'data' => [],
            ]
        );
 
        $stmt->close();
        $conn->close();
    }

?>