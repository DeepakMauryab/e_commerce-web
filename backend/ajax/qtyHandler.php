<?php

include "../connect.php";
session_start();

$productId = $_POST['id'];
$state = $_POST['state'];
$isCart = $_POST['isCart'];

function qtyHandle($productId, $db, $state, $table)
{
    $sendArr = array();
    $data = $db->query("SELECT * FROM `$table` WHERE id = $productId")->fetch_assoc();
    $product = $db->query("SELECT * from `products` where id = {$data['productId']}")->fetch_assoc();
    $finalQty = $data['quantity'];
    if ($state) {
        $finalQty += 50;
    } else {
        if ($finalQty > 50) {
            $finalQty -= 50;

        } else {
            array_push($sendArr, $finalQty);
            array_push($sendArr, $data['total']);
            echo json_encode($sendArr);
            exit();
        }
    }
    $total = $finalQty * $product['price'];
    $check = $db->query("UPDATE `$table` SET `quantity`= $finalQty ,`total`= $total WHERE id = $productId");
    if ($check) {
        array_push($sendArr, $finalQty);
        array_push($sendArr, $total);
        echo json_encode($sendArr);
    }
}

if ($isCart) {
    qtyHandle($productId, $db, $state, 'cart');
} else {
    qtyHandle($productId, $db, $state, 'wishlist');
}