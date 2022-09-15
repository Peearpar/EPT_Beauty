<?php
    require_once(dirname(dirname(__FILE__)) .'/connection.php');
    header('Content-Type: application/json; charset=utf-8');

    function editUser(
        $id,
        $name, 
        $surname,
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
        $stmt = $conn->prepare("
        UPDATE `ept_beauty`.`users`
        SET
        `name` = ?,
        `surname` = ?,
        `district` = ?,
        `sub_district` = ?,
        `zip_code` = ?,
        `address` = ?,
        `credit` = ?,
        `role` = ?
        WHERE `id` = ?;");

        $stmt->bind_param("ssssssdsi",
        $name, 
        $surname,
        $district, 
        $sub_district, 
        $zip_code, 
        $address, 
        $credit, 
        $role,
        $id);

        // set parameters and execute
        $stmt->execute();

        $stmt->close();
        $conn->close();
    }

?>