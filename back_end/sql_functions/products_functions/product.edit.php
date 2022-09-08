<?php
    define('__ROOT__2', dirname(dirname(__FILE__)));

    require_once(__ROOT__2 .'/connection.php');
    header('Content-Type: application/json; charset=utf-8');

    function editProduct(
        $id,
        $category_id,
        $name,
        $path_img,
        $price,
        $description,
        $discount,
        $stock
    )
    {
        $conn = connection();

        // prepare and bind
        $stmt = $conn->prepare("
        UPDATE `ept_beauty`.`products`
        SET
        `category_id` = ?,
        `name` = ?,
        `path_img` = ?,
        `price` = ?,
        `description` = ?,
        `discount` = ?,
        `stock` = ?
        WHERE `id` = ?;");

        $stmt->bind_param("issdsiii",
        $category_id,
        $name,
        $path_img,
        $price,
        $description,
        $discount,
        $stock,
        $id);

        // set parameters and execute
        $stmt->execute();

        echo json_encode(
            [
                'is_complete' => true,
                'message' => 'product edit complete',
                'data' => [],
            ]
        );

        $stmt->close();
        $conn->close();
    }

    function editProductIsActive(
        $id,
        $isActive
    )
    {
        $conn = connection();

        // prepare and bind
        $stmt = $conn->prepare("
        UPDATE `ept_beauty`.`products`
        SET
        `is_active` = ?
        WHERE `id` = ?;");

        $stmt->bind_param("ii",
        $isActive,
        $id);

        // set parameters and execute
        $stmt->execute();

        echo json_encode(
            [
                'is_complete' => true,
                'message' => 'product edit complete',
                'data' => [],
            ]
        );

        $stmt->close();
        $conn->close();
    }

?>