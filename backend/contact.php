<?php

include "./connect.php";

if (isset($_POST['contact'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $insert = $db->query("INSERT INTO `contact`(`name`, `email`, `message`) VALUES (
        '$name',
        '$email',
        '$message'
    )");
    if ($insert) {
        ?>
        <script>
            alert("Thanks for Submitting, We will connect You soon !");
            window.history.back();
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("Something Went Wrong, Please Try again Later");
            window.history.back();
        </script>
        <?php
    }
} else {
    ?>
    <script>
        window.history.back();
    </script>
    <?php
}