<?php
    require_once '../sql_functions/products_functions/product.insert.php';
    require_once '../helper_function/upload.img.php';
    session_start();

    $salt = 'EPT-BEAUTY';
    $category_id = $_POST['category_id'];
    $name  = $_POST['name'];
    $price  = $_POST['price'];
    $description  = $_POST['description'];
    $discount  = $_POST['discount'];
    $stock = $_POST['stock'];

    $path_img  = $_FILES['path_img'];


    $upload = uploadProduct($path_img);

    if ($upload['is_upload']) {

        $path_img_insert = "back_end/images/" . $upload['target_file'];
        insertProduct(
            $category_id, 
            $name, 
            $path_img_insert, 
            $price, 
            $description, 
            $discount, 
            $stock
        );
    } 
    else {

        echo json_encode(
            [
                'is_complete' => false,
                'message' =>  "Sorry, there was an error uploading your file.",
                'data' => []
            ]
        );
    }

?>