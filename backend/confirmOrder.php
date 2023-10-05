<?php
include "./connect.php";
session_start();

if (isset($_POST['confirmOrder'])) {

    $user = $_SESSION['user'];

    $cartData = $db->query("SELECT * FROM `cart` Where userId= $user")->fetch_all(MYSQLI_ASSOC);

    $payMethod = $_POST['payMethod'];

    $orderId = "Nash" . floor(microtime(true) * 1000) . "@kmc";
    $i = 0;
    foreach ($cartData as $row) {
        $cartDataInsert = $db->query("INSERT INTO `orders`(`orderId`, `userId`, `productId`, `payMode`, `paymentStatus`, `bookStatus`, `qty`, `total`) VALUES (
                '$orderId',
                $user,
                {$row['productId']},
                $payMethod,
                0,
                0,
                {$row['quantity']},
                {$row['total']}
            )");
        if ($cartDataInsert) {
            $i++;
            $db->query("DELETE FROM `cart` WHERE `cart`.`id` = {$row['id']}");
        }

    }
    if (count($cartData) == $i) {
        $_SESSION['order'] = array("orderId" =>$orderId, "user"=>$user , "paymode"=> $payMethod);
        echo "<script> 
            location.replace('../pages/thank-you.php') </script>";
    } else {
        ?>
        <script> alert('Something Went Wrong');
            window.history.back(); </script>
        <?php
    }
}


?>