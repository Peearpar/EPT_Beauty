<?php
    define('__ROOT__', dirname(dirname(__FILE__)));
    require_once(__ROOT__.'/connection.php');
    header('Content-Type: application/json; charset=utf-8');

    function insertProduct(
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
        $stmt = $conn->prepare("INSERT INTO `ept_beauty`.`products`
        (`category_id`
        , `name`, 
        `path_img`, 
        `price`, 
        `description`, 
        `discount`, 
        `stock`)
        VALUES
        (?,?,?,?,?,?,?);");
        $stmt->bind_param("issdsii",
        $category_id, 
        $name, 
        $path_img, 
        $price, 
        $description, 
        $discount, 
        $stock);

        // set parameters and execute
        $stmt->execute();

        echo json_encode(
            [
                'is_complete' => true,
                'message' => 'products insert complete',
                'data' => [],
            ]
        );
 
        $stmt->close();
        $conn->close();
    }

?>