<?php
    define('__ROOT__', dirname(dirname(__FILE__)));
    require_once(__ROOT__.'/connection.php');
    header('Content-Type: application/json; charset=utf-8');

    function deleteUser($id)
    {
        $conn = connection();

        // prepare and bind
        $stmt = $conn->prepare("
        DELETE FROM `ept_beauty`.`users`
        WHERE id = ?;");

        $stmt->bind_param("i",
        $id);

        // set parameters and execute
        $stmt->execute();

        echo json_encode(
            [
                'is_complete' => true,
                'message' => 'user delete complete',
                'data' => [],
            ]
        );

        $stmt->close();
        $conn->close();
    }

?>