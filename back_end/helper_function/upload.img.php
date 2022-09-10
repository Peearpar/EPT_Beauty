<?php
    function uploadProduct($path_img)
    {
        $target_dir = "../images/";
        $target_file = uniqid() . "_" . basename($path_img["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $is_upload = true;
    
        // Check if file already exists
        if (file_exists($target_file)) {
            echo json_encode(
                [
                    'is_complete' => false,
                    'message' =>  "Sorry, file already exists.",
                    'data' => []
                ]
            );
            $is_upload = false;
        }
    
        // check imgtype
        if($imageFileType != "jpg" &&
        $imageFileType != "png" &&
        $imageFileType != "jpeg" &&
        $imageFileType != "webp" &&
        $imageFileType != "gif" ) {
    
            echo json_encode(
                [
                    'is_complete' => false,
                    'message' =>  "Sorry, only JPG, JPEG, PNG & GIF files are allowed." . $imageFileType,
                    'data' => []
                ]
            );
            $is_upload = false;
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
            $is_upload = false;
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
    
            $is_upload = false;
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
    
            $is_upload = false;
    
        }

        $output_data = [];
        $output_data['is_upload'] = $is_upload;
        $output_data['target_file'] = null;

        if ($is_upload ){
            move_uploaded_file($path_img["tmp_name"], $target_dir . $target_file);
            $output_data['target_file'] = $target_file;
        }

        return $output_data;
    }

    // แบ่ง path ให้รูปภาพ
    function deleteImg($filename) {
        $temp_arr = explode("/",$filename);
        $temp_arr[0] = '..';
        $pathImg = implode('/', $temp_arr);
        if (file_exists($pathImg)) {
            unlink($pathImg);
            return true;
        }
        return false;
    }
?>