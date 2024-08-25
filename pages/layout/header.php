<!DOCTYPE html>
<html lang="en">
<?php

// echo $_COOKIE['user'];
session_start();
$folderName = "/ShoppingStore/";
$host = $_SERVER['HTTP_HOST'];
$baseurl = "http://" . $host . $folderName;
$AssetsUrl = "http://" . $host . $folderName . "backend/images/";
$path1 = $_SERVER['DOCUMENT_ROOT'] . $folderName . "backend/connect.php";
include_once ($path1);
$category = $db->query('SELECT * FROM `category`');
$Iscategory = $category->num_rows;
?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://niralaherbal.com/css/jquery.exzoom.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="<?php echo $baseurl ?>css/style.css" />
    <link rel="stylesheet" href="<?php echo $baseurl ?>css/common.css" />
    <link rel="stylesheet" href="<?php echo $baseurl ?>css/utilities.css" />
    <link rel="icon" type="image/x-icon" href="<?php echo $baseurl ?>Assets/logo/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <title>Online Store</title>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <!-- <link rel="stylesheet" href="https://shrawasticards.com/style/jquery.exzoom.css" /> -->
</head>

<body>

    <div class="popupParent">
        <div class="form">
            <button>X</button>
        </div>
    </div>


    <!-- loader section  -->
    <div class="all_center" id="loader">

        <lottie-player style="width: 200px; height:200px;" src="<?php echo $baseurl ?>Assets/lottie/loader.json"
            background="transparent" speed="1" loop autoplay></lottie-player>
    </div>
    <div class="all_center" id="AddCartAnim">
        <lottie-player style="width: 500px; height:500px;" src="<?php echo $baseurl ?>Assets/lottie/cart.json"
            background="transparent" speed="1" loop autoplay></lottie-player>
    </div>
    <div class="topHead">
        <span>All Your Favourite Is Here!</span>
    </div>
    <!-- header section start -->
    <header>
        <nav id="sticky_header">
            <div class="logo p-half">
                <a href="<?php echo $baseurl ?>">
                    <h4>Online Store</h4>
                    <!-- <figure> <img src="../Assets/logo/logo.png" alt=""></figure> -->
                </a>
            </div>
            <div class="nav-tab">
                <ul class="nav-item flex gap-1">
                    <li class="nav-link text-liner p-half"> <a href="<?php echo $baseurl ?>">Home</a></li>
                    <li class="nav-link text-liner p-half"><a href="<?php echo $baseurl ?>pages/shop.php">Shop</a></li>
                    <li class="nav-link text-liner p-half dropParent">
                        <a href="#">Categories</a>
                        <ul class="dropdown">
                            <?php
                            if ($Iscategory > 0) {
                                $_ = 0;
                                while ($data = $category->fetch_assoc()) { ?>
                                    <li>
                                        <a href="<?php echo $baseurl . 'pages/shop.php?catId=' . $data['id'] ?>">
                                            <?php echo $data['category'] ?>
                                        </a>
                                    </li>
                                    <?php
                                }
                            }
                            ?>
                        </ul>
                    </li>
                    <li class="nav-link text-liner p-half"><a href="<?php echo $baseurl ?>pages/about-us.php">About</a>
                    </li>
                    <li class="nav-link text-liner p-half"><a
                            href="<?php echo $baseurl ?>pages/contact-us.php">Contact</a></li>
                </ul>
            </div>
            <div class="nav-icons flex gap-1 p-half">
                <a
                    href="<?php echo $baseurl ?>pages/<?php echo empty($_SESSION['user']) ? "login" : "user-profile" ?>.php"><i
                        class="bi bi-person"></i></a>
                <a href="<?php echo $baseurl ?>pages/wish-list.php" class="relative"><i class="bi bi-heart"></i>
                    <span class="count" id="countWish">0</span>
                </a>
                <a href="<?php echo $baseurl ?>pages/cart.php" class="relative"><i class="bi bi-cart"></i>
                    <span class="count" id="countCart">0</span>
                </a>
            </div>
        </nav>
    </header>




    <!--header section end -->