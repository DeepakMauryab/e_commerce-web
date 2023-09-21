<?php

include "../connect.php";
session_start();

$productId = $_POST['id'];
$isCart = $_POST['isCart'];

if ($isCart) {
    $check = $db->query("DELETE FROM `cart` WHERE id = $productId");
    if ($check) {
        echo "Product Removed from Cart";
    } else {
        echo "";
    }
} else {
    $check = $db->query("DELETE FROM `wishlist` WHERE id = $productId");
    if ($check) {
        echo "Product Removed from Wishlist";
    } else {
        echo "";
    }
}