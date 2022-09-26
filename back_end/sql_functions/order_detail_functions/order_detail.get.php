<?php
    require_once(dirname(dirname(__FILE__)).'/connection.php');
    header('Content-Type: application/json; charset=utf-8');


    function getOrderDetailByOrderId($order_id){
        $conn = connection();

        // prepare and bind
        $stmt = $conn->prepare("
        SELECT *, 
        order_detail.id as ord_id ,
        order_detail.price as ord_price ,
        order_detail.discount as ord_discount ,
        categories.name as cat_name ,
        products.name as prod_name 

        FROM ept_beauty.order_detail
        INNER JOIN products
        ON order_detail.product_id = products.id
        INNER JOIN categories
        ON products.category_id = categories.id
        where order_detail.order_id = ?;");

        // set parameters and execute
        $stmt->bind_param("i",
        $order_id);

        $stmt->execute();
        $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

        $protocol = stripos($_SERVER['SERVER_PROTOCOL'],'https') === 0 ? 'https' : 'http';
        $url =  $protocol . "://{$_SERVER['HTTP_HOST']}/EPT_Beauty/";
        $escaped_url = htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' );

        $output_datas = [];
        foreach ($result as $value) {
            $output_data['id'] = $value['ord_id'];
            $output_data['order_id'] = $value['order_id'];
            $output_data['category_name'] = $value['cat_name'];
            $output_data['prod_name'] = $value['prod_name'];
            $output_data['path_img'] = $escaped_url . $value['path_img'];
            $output_data['short_path_img'] = $value['path_img'];
            $output_data['price'] = $value['ord_price'];
            $output_data['qty'] = $value['qty'];
            $output_data['discount'] = $value['ord_discount'];
            $output_data['created_at'] = $value['created_at'];

            array_push($output_datas, $output_data);
        }

        $stmt->close();
        $conn->close();

        return $output_datas;

    }


?>