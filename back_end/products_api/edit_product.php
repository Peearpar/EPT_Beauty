<?php 
    require_once '../sql_functions/products_functions/product.edit.php';
    require_once '../sql_functions/products_functions/product.get.php';
    require_once '../helper_function/upload.img.php';
    session_start();

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

    $product = getProductById($_POST['id']);


    if(!isset($_FILES['path_img']))
    {
        return editProduct(
            $_POST['id'], 
            $_POST['category_id'], 
            $_POST['name'], 
            $product['short_path_img'], 
            $_POST['price'], 
            $_POST['description'], 
            $_POST['discount'], 
            $_POST['stock']
        );
    }

    if(!deleteImg($product['short_path_img']))
    {
        echo json_encode(
            [
                'is_complete' => false,
                'message' => "Delete Img Error!!",
                'data' => []
            ]);

        return;
    }
    $upload = uploadProduct($_FILES['path_img']);
    if($upload['is_upload'])
    {
        $product['short_path_img'] = "back_end/images/" . $upload['target_file'];
        return editProduct(
            $_POST['id'], 
            $_POST['category_id'], 
            $_POST['name'], 
            $product['short_path_img'], 
            $_POST['price'], 
            $_POST['description'], 
            $_POST['discount'], 
            $_POST['stock']
        );
    }


?>