<?php

include "../connect.php";
session_start();

$productId = $_POST['id'];
$isCart = $_POST['isCart'];


$query = "";


if ($isCart) {
    $query = "cart";
    $msg = "Cart";
} else {
    $query = "wishlist";
    $msg = "Wishlist";
}
$check = $db->query("DELETE FROM `$query` WHERE id = $productId");
$row = $db->query("SELECT * FROM $query WHERE userId= {$_SESSION['user']}")->num_rows;
if ($check) {
    echo json_encode(array("Product Removed from $msg", $row));
} else {
    echo "[]";
}