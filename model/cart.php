<?php

function add_item($key, $quantity) {//
    $pro = new products();
    $pros = $pro->getProductById($key);
    //$soluongtonkho = $pros['kho'];
    if (isset($_SESSION['cartview'][$key])) {
        $quantity +=$_SESSION['cartview'][$key]['qty'];
        update_item($key, $quantity);
        return;
    }

    echo $cost = $pros['ProPrice'];
    $total = $cost * $quantity;
    $item = array(
        'img'   => $pros['ProImages'],
        'name' => $pros['ProName'],
        'cost' => $cost,
        'qty' => $quantity,
        'total' => $total
    );

    $_SESSION['cartview'][$key] = $item;
}

function update_item($key, $quantity) {
    $quantity = (int) $quantity;
    if ($quantity <= 0) {
        unset($_SESSION['cartview'][$key]);
    } else {
        $_SESSION['cartview'][$key]['qty'] = $quantity;
        $total = $_SESSION['cartview'][$key]['cost'] * $_SESSION['cartview'][$key]['qty'];
        $_SESSION['cartview'][$key]['total'] = $total;
    }
}

function get_subtotal() {
    $subtotal = 0;
    
    foreach ($_SESSION['cartview'] as $item) {
        $subtotal += $item['total'];
    }
    $subtotal = number_format($subtotal, 2);
    return $subtotal;
}

?>
