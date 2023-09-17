<?php

include "./connect.php";

if (isset($_POST['register'])) {

    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);


    $userExit = $db->query("SELECT * FROM `users` WHERE `email`= '$email' OR `mobile`= '$mobile'")->num_rows;
    if ($userExit) {
        ?>
        <script>
            alert("user Already Exist");
            window.history.back();
        </script>
        <?php
        return;
    } else {
        $result = $db->query("INSERT INTO `users`( `mobile`, `email`, `password`) VALUES (
            '$mobile',
            '$email',
            '$password'
            )");
        if ($result) {
            ?>
            <script>
                alert("Successfull operation");
                window.history.back();
            </script>
            <?php
        } else {
            ?>
            <script>
                alert("some error occured");
                window.history.back();
            </script>
            <?php
        }

    }

} else {
    $emailMobile = $_POST['emailMobile'];
    $password = $_POST['password'];
    $user = $db->query("SELECT * FROM `users` WHERE `email`= '$emailMobile' OR `mobile`= '$emailMobile'");
    $data = $user->fetch_assoc();
    $row = $user->num_rows;

    if ($row > 0) {
        $verify = password_verify($password, $data['password']);
        if ($verify) {
            ?>
            <script>
                alert("login Successfull");
                window.history.back();
            </script>
            <?php
        } else {
            ?>
            <script>
                alert("wrong password");
                window.history.back();
            </script>
            <?php
        }
        
    } else {
        ?>
        <script>
            alert("please register first");
            window.history.back();
        </script>
        <?php
    }
}