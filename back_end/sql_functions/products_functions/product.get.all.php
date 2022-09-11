<?php
    define('__ROOT__', dirname(dirname(__FILE__)));
    require_once(__ROOT__.'/connection.php');
    header('Content-Type: application/json; charset=utf-8');


    function getProducts(){
        $conn = connection();

        // prepare and bind
        $stmt = $conn->prepare("
        SELECT *, categories.name as cat_name, 
        products.name as prod_name,
        products.created_at as prod_created_at,
        products.id as prod_id
        FROM ept_beauty.products
        INNER JOIN `categories`
        ON products.category_id = categories.id;");

        // set parameters and execute
        $stmt->execute();
        $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

        $protocol = stripos($_SERVER['SERVER_PROTOCOL'],'https') === 0 ? 'https' : 'http';
        $url =  $protocol . "://{$_SERVER['HTTP_HOST']}/EPT_Beauty/";
        $escaped_url = htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' );

        $output_datas = [];
        foreach ($result as $value) {
            $output_data['id'] = $value['prod_id'];
            $output_data['category_id'] = $value['category_id'];
            $output_data['category_name'] = $value['cat_name'];
            $output_data['name'] = $value['prod_name'];
            $output_data['path_img'] = $escaped_url . $value['path_img'];
            $output_data['short_path_img'] = $value['path_img'];
            $output_data['price'] = $value['price'];
            $output_data['description'] = $value['description'];
            $output_data['discount'] = $value['discount'];
            $output_data['stock'] = $value['stock'];
            $output_data['is_active'] = $value['is_active'];
            $output_data['created_at'] = $value['prod_created_at'];

            array_push($output_datas, $output_data);
        }

        $stmt->close();
        $conn->close();

        return $output_datas;

    }


?>