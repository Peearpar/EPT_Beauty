<?php 
    require_once '../sql_functions/products_functions/product.get.all.php';

    if (isset($_GET['limit']) && is_numeric($_GET['limit'])) {
        $cur = date("Y-m-d");
        $d = new DateTime($cur);
        $d->modify('first day of January');
        $start_date = $d->format('Y-m-d');
        $d->modify('last day of December');
        $end_date = $d->format('Y-m-d');

        echo json_encode(
            [
                'is_complete' => true,
                'message' => 'product best seller',
                'data' => getBestSellerOfTheMonthProducts($_GET['limit'], $start_date, $end_date)
            ]
        );
        return;
    }

    echo json_encode(
        [
            'is_complete' => false,
            'message' => 'limit is invalid',
            'data' => []
        ]
    );
    return;

?>