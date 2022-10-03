<?php 
    require_once '../sql_functions/products_functions/product.get.php';

    if(!isset($_GET['page']) || !isset($_GET['pageSize'])) {
        echo json_encode(
            [
                'is_complete' => false,
                'message' => "page or pageSize are required",
                'data' => []
            ]
        );
        return;
    }

    if($_GET['page'] <= 0 || $_GET['pageSize'] <= 0) {
        echo json_encode(
            [
                'is_complete' => false,
                'message' => "page or pageSize can't less or equal 0",
                'data' => []
            ]
        );
        return;
    }

    $searchText = $_GET['search_text'] = isset($_GET['search_text']) ? strtolower($_GET['search_text']) : '%';
    $pageLimit = $_GET['pageSize'] * ($_GET['page'] - 1);
    $pageSize = intval($_GET['pageSize']);
    $datas = searchProduct($searchText);
    $pageinateData = array_slice($datas, $pageLimit, $pageSize);
    $lastPage = ceil(count($datas) / $pageSize) === 0 ? 1 : ceil(count($datas) / $pageSize);
    $page = min(intval($_GET['page']), $lastPage);

    echo json_encode(
        [
            'is_complete' => true,
            'message' => 'product',
            'data' => [
                'page_size' => $pageSize,
                'hasPrev' => $page > 1,
                'hasNext' => $page < $lastPage,
                'page' => $page,
                'last_page' => $lastPage,
                'resuslt_list' => $pageinateData
            ]
        ]
    );
    return;
?>
