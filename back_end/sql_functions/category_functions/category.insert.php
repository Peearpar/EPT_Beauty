<?php
    define('__ROOT__', dirname(dirname(__FILE__)));
    require_once(__ROOT__.'/connection.php');
    header('Content-Type: application/json; charset=utf-8');

    function insertCategory(
        $name
        )
    {
        $conn = connection();

        // prepare and bind
        $stmt = $conn->prepare("INSERT INTO `ept_beauty`.`categories`
        (
        `name`)
        VALUES
        (?);");
        $stmt->bind_param("s",
        $name);

        // set parameters and execute
        $stmt->execute();

        echo json_encode(
            [
                'is_complete' => true,
                'message' => 'category insert complete',
                'data' => [],
            ]
        );
 
        $stmt->close();
        $conn->close();
    }

    function checkCategoryDuplicate($name){
        $conn = connection();

        // prepare and bind
        $stmt = $conn->prepare("SELECT count(*) AS counts FROM ept_beauty.categories
        WHERE `name` = ?;");
        $stmt->bind_param("s", 
        $name);

        // set parameters and execute
        $stmt->execute();
        $result = $stmt->get_result()->fetch_assoc();

        $stmt->close();
        $conn->close();

        return $result;
    }


    function insertAdnim(
        $name,
        $surname,
        $email,
        $password,
        $district,
        $sub_district,
        $zip_code,
        $address,
        $credit,
        $role
        )
    {
        $conn = connection();

        // prepare and bind
        $stmt = $conn->prepare("INSERT INTO `ept_beauty`.`users`
        (
        `name`,
        `surname`,
        `email`,
        `password`,
        `district`,
        `sub_district`,
        `zip_code`,
        `address`,
        `credit`,
        `role`)
        VALUES
        (?,
        ?,
        ?,
        ?,
        ?,
        ?,
        ?,
        ?,
        ?,
        ?);");
        $stmt->bind_param("ssssssssds",
        $name,
        $surname,
        $email,
        $password,
        $district,
        $sub_district,
        $zip_code,
        $address,
        $credit,
        $role);

        // set parameters and execute
        $stmt->execute();

        echo json_encode(
            [
                'is_complete' => true,
                'message' => 'user insert complete',
                'data' => [],
            ]
        );
 
        $stmt->close();
        $conn->close();
    }
    

?>