<?php
    require_once '../sql_functions/products_functions/product.insert.php';
    session_start();
    $salt = 'EPT-BEAUTY';
    $category_id = $_POST['category_id'];
    $name  = $_POST['name'];
    $price  = $_POST['price'];
    $description  = $_POST['description'];
    $discount  = $_POST['discount'];
    $stock = $_POST['stock'];

    $path_img  = $_FILES['path_img'];

    $target_dir = "../images/";
    $target_file = uniqid() . "_" . basename($path_img["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if file already exists
    if (file_exists($target_file)) {
        echo json_encode(
            [
                'is_complete' => false,
                'message' =>  "Sorry, file already exists.",
                'data' => []
            ]
        );
        return;
    }

    // check imgtype
    if($imageFileType != "jpg" && 
    $imageFileType != "png" && 
    $imageFileType != "jpeg" && 
    $imageFileType != "gif" ) {

        echo json_encode(
            [
                'is_complete' => false,
                'message' =>  "Sorry, only JPG, JPEG, PNG & GIF files are allowed." . $imageFileType,
                'data' => []
            ]
        );
        return;
    }

    // Check file size
    if ($path_img["size"] >= 5000000) {
        echo json_encode(
            [
                'is_complete' => false,
                'message' =>  "Sorry, your file is too large. > 5mb",
                'data' => []
            ]
        );
        return;
    }

    if(!isset($_SESSION['token'][$_POST['user_email']]['is_validate']))
    {
        echo json_encode(
            [
                'is_complete' => false,
                'message' => "You don't have permission 1",
                'data' => []
            ]
        );

        return;
    }

    if(!$_SESSION['token'][$_POST['user_email']]['is_validate'])
    {
        echo json_encode(
            [
                'is_complete' => false,
                'message' => "You don't have permission 2",
                'data' => []
            ]
        );

        return;

    }

    if (move_uploaded_file($path_img["tmp_name"], $target_dir . $target_file)) {

        $path_img_insert = "back_end/images/" . $target_file;
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