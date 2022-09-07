<?php
    define('__ROOT__', dirname(dirname(__FILE__)));
    require_once(__ROOT__.'/connection.php');
    header('Content-Type: application/json; charset=utf-8');

    function checkCategoryInUse($id)
    {
        $conn = connection();

        // prepare and bind
        $stmt = $conn->prepare("
        SELECT count(*) as counts
        FROM `ept_beauty`.`products`
        WHERE `category_id` = ?;");

        $stmt->bind_param("i", $id);

        // set parameters and execute
        $stmt->execute();

        $result = $stmt->get_result()->fetch_assoc();

        $stmt->close();
        $conn->close();

        return $result;
    }
    function deleteCategory($id)
    {
        $conn = connection();

        // prepare and bind
        $stmt = $conn->prepare("
        DELETE FROM `ept_beauty`.`categories`
        WHERE id = ?;");

        $stmt->bind_param("i",
        $id);

        // set parameters and execute
        $stmt->execute();

        echo json_encode(
            [
                'is_complete' => true,
                'message' => 'category delete complete',
                'data' => [],
            ]
        );

        $stmt->close();
        $conn->close();
    }

?>