<?php
$folderName = "/ShoppingStore/";
$host = $_SERVER['HTTP_HOST'];
$baseurl = "http://" . $host . $folderName;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "onlinestore";

// Create connection
$db = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}


?>