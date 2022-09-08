<?php
    define('__ROOT__', dirname(dirname(__FILE__)));
    require_once(__ROOT__.'/connection.php');
    header('Content-Type: application/json; charset=utf-8');


    function getProductById($id){
        $conn = connection();

        // prepare and bind
        $stmt = $conn->prepare("
        SELECT *
        FROM `ept_beauty`.`products`
        WHERE id = ?");

        // set parameters and execute
        $stmt->bind_param("i",
        $id);

        $stmt->execute();
        $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

        $protocol = stripos($_SERVER['SERVER_PROTOCOL'],'https') === 0 ? 'https' : 'http';
        $url =  $protocol . "://{$_SERVER['HTTP_HOST']}/EPT_Beauty/";
        $escaped_url = htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' );

        $output_data = [];
        foreach ($result as $value) {
            $output_data['id'] = $value['id'];
            $output_data['category_id'] = $value['category_id'];
            $output_data['name'] = $value['name'];
            $output_data['path_img'] = $escaped_url . $value['path_img'];
            $output_data['short_path_img'] = $value['path_img'];
            $output_data['price'] = $value['price'];
            $output_data['description'] = $value['description'];
            $output_data['discount'] = $value['discount'];
            $output_data['stock'] = $value['stock'];
            $output_data['is_active'] = $value['is_active'];
            $output_data['created_at'] = $value['created_at'];
        }

        $stmt->close();
        $conn->close();

        return $output_data;

    }


?>