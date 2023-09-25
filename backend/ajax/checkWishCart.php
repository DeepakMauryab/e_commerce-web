<?php

include "../connect.php";
session_start();

$productId = $_POST['id'];
$reqType = $_POST['isCart'];


if (isset($_SESSION['user'])) {
    $userId = $_SESSION['user'];
    if ($reqType) {
        $check = $db->query("SELECT * from `cart` where productId= $productId AND userId=$userId")->num_rows;
        if ($check) {
            echo "Y";
        } else {
            echo "N";
        }

    } else {
        $check = $db->query("SELECT * from `wishlist` where productId= $productId AND userId=$userId")->num_rows;
        if ($check) {
            echo "Y";
        } else {
            echo "N";
        }

    }
} else {
    echo 0;
}