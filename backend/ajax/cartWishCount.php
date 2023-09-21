<?php

include "../connect.php";
session_start();

$productId = $_POST['isCart'];

if (isset($_SESSION['user'])) {
    $userId = $_SESSION['user'];
    if ($productId) {
        $check = $db->query("SELECT * from `cart` where userId=$userId")->num_rows;
        echo $check;

    } else {
        $check = $db->query("SELECT * from `wishlist` where userId=$userId")->num_rows;
        echo $check;

    }
}else{
    echo 0;
}