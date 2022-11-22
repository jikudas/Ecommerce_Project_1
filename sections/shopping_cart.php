<?php
session_start();    

if (isset($_POST['pid'])) {
    // Set session variables
    $p_id = $_POST['pid'];
    $p_name = $_POST['pname'];
    $p_price = $p_total_price = $_POST['pprice'];
    $p_image = $_POST['pimage'];
    $p_quantity = 1;

    $cart = array(
        'p_id' => $p_id,
        'p_name' => $p_name,
        'p_price' => $p_price,
        'p_image' => $p_image,
        'p_total_price' => $p_total_price,
        'p_quantity' => 1
    );

    
    if (!empty($_SESSION['cart'])) {
        
        if (@$_SESSION['cart']['p_id']) {
            if (in_array($_POST['pid'], $_SESSION['cart'])) {
                $cart['p_quantity'] = $_SESSION['cart']['p_quantity'] + 1;
                $cart['p_total_price'] = $_SESSION['cart']['p_total_price'] * $cart['p_quantity'];
                // echo "<pre>";
                // print_r($cart['p_total_price']);
                // exit;
                $push = $cart;
            } else {
                $old[] = $_SESSION['cart'];
                $new[] = $cart;
                $push = array_merge($old, $new);
            }
        } else {
            $key = array_search($_POST['pid'], array_column($_SESSION['cart'], 'p_id'));
            if ($key !== false) {
                $_SESSION['cart'][$key]['p_quantity'] = $_SESSION['cart'][$key]['p_quantity'] + 1;
                $_SESSION['cart'][$key]['p_total_price'] = $_SESSION['cart'][$key]['p_total_price'] * $_SESSION['cart'][$key]['p_quantity'];
                $push = $_SESSION['cart'];
            } else {
                $old = $_SESSION['cart'];
                $new[] = $cart;
                $push = array_merge($old, $new);
            }
        }

        $_SESSION['cart'] = $push;
    } else {
        $_SESSION['cart'] = $cart;
    }
}