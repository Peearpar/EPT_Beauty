<?php
    define('__ROOT__', dirname(dirname(__FILE__)));

    require_once(__ROOT__ .'/connection.php');
    header('Content-Type: application/json; charset=utf-8');

    function editCategory(
        $id,
        $name
    )
    {
        $conn = connection();

        // prepare and bind
        $stmt = $conn->prepare("
        UPDATE `ept_beauty`.`categories`
        SET
        `name` = ?
        WHERE `id` = ?;");

        $stmt->bind_param("si",
        $name, 
        $id);

        // set parameters and execute
        $stmt->execute();

        echo json_encode(
            [
                'is_complete' => true,
                'message' => 'category edit complete',
                'data' => [],
            ]
        );

        $stmt->close();
        $conn->close();
    }

?>