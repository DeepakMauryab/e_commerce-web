<?php
include "./connect.php";
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';


$mail = new PHPMailer(true);


if (isset($_POST['confirmOrder'])) {

    $user = $_SESSION['user'];
    $userData= $db->query("SELECT * FROM `users` WHERE id=$user")->fetch_assoc();

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
        try {

            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'cslab4086@gmail.com';
            $mail->Password = 'jafuojfygskvswol';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465;


            $mail->setFrom('cslab4086@gmail.com', 'Online Store');
            $mail->addAddress($userData['email'], $userData['name']);
            $mail->addAddress('deepakmaurya8396@gmail.com');
            $mail->isHTML(true);
            $mail->AddEmbeddedImage('approved.png', 'approved', 'approved.png'); 
            $mail->Subject = 'Thanks for Shopping On Online Store';
            $mail->Body = '<div>
            <img style="width:80px; height:80px; margin-left: 40px;" src="cid:approved" />
            <h3 style="margin-left: 40px;">Your Order is Confirmed</h3>
            </div>';
            

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
        $_SESSION['order'] = array("orderId" => $orderId, "user" => $user, "paymode" => $payMethod);
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