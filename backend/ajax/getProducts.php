<?php

include "../connect.php";


$catId = $_POST['catId'];
$stock = $_POST['stock'];
$min = $_POST['min'];
$max = $_POST['max'];

$products = array();

$filterQuery = "";

if ($catId && $stock && $min && $max) {
    $filterQuery = "Where categoryId IN ($catId) AND availbility= $stock AND price BETWEEN $min AND $max ";
} else if ($stock && $catId) {
    $filterQuery = "Where categoryId IN ($catId) AND availbility= $stock";
} else if ($catId && ($min || $max)) {
    $filterQuery = "Where categoryId IN ($catId) AND price BETWEEN $min AND $max";
} else if ($stock && ($min || $max)) {
    $filterQuery = "Where availbility= $stock AND price BETWEEN $min AND $max";
} else if ($stock) {
    $filterQuery = "where availbility= $stock";
} else if ($catId) {
    $filterQuery = "Where categoryId IN ($catId)";
} else if ($min || $max) {
    $filterQuery = "Where price BETWEEN $min AND $max";
}
$products = $db->query("SELECT *,products.id AS prd_id, category.id AS cat_id FROM `products` Inner JOIN category on
    products.categoryId= category.id $filterQuery")->fetch_all(MYSQLI_ASSOC);

echo json_encode($products);