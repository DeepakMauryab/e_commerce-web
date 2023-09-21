<?php

include "../connect.php";
session_start();

$productId = $_POST['id'];

if (isset($_SESSION['user'])) {
    $userId = $_SESSION['user'];

    if ($productId) {
        $check = $db->query("SELECT * from `cart` where productId = $productId AND userId=$userId")->num_rows;
        $product = $db->query("SELECT * from `products` where id = $productId")->fetch_assoc();
        $total = 50 * $product['price'];
        if ($check > 0) {
            $result = $db->query("DELETE FROM `cart` WHERE productId = $productId");
            if ($result) {
                echo "n";
            }
        } else {
            $result = $db->query("INSERT INTO `cart`( `productId`, `userId`, `quantity`, `total`) VALUES (
            $productId,
            $userId,
            50,
            $total
        )");
            if ($result) {
                echo "y";
            }

        }

    }
} else {
    echo "user";
}