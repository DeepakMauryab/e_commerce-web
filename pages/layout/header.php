<!DOCTYPE html>
<html lang="en">
<?php
$host = $_SERVER['HTTP_HOST'];
$host_upper = strtoupper($host);
$path = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$baseurl = "http://" . $host . "/\\online Shopping Store/\\";
?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- <link rel="stylesheet" href="./css/style.css" /> -->
    <!-- <link rel="stylesheet" href="./css/common.css" /> -->
    <link rel="stylesheet" href="<?php echo $baseurl ?>css/style.css" />
    <link rel="stylesheet" href="<?php echo $baseurl ?>css/common.css" />
    <link rel="stylesheet" href="./css/utilities.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <title>Online Store</title>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
</head>

<body>
    <div class="topHead">
        <span>All Your Favourite Is Here!</span>
    </div>
    <!-- header section start -->
    <header>
        <nav id="sticky_header">
            <div class="logo p-half">
                <a href="./">
                    <h4>Online Store</h4>
                </a>
            </div>
            <div class="nav-tab">
                <ul class="nav-item flex gap-1">
                    <li class="nav-link text-liner p-half"><a href="#">Home</a></li>
                    <li class="nav-link text-liner p-half"><a href="#">Shop</a></li>
                    <li class="nav-link text-liner p-half dropParent">
                        <a href="#">Categories</a>
                        <ul class="dropdown">
                            <li><a href="#">Men Category</a></li>
                            <li><a href="#">Women Category</a></li>
                            <li><a href="#">Grocery Category</a></li>
                        </ul>
                    </li>
                    <li class="nav-link text-liner p-half"><a href="#">About</a></li>
                    <li class="nav-link text-liner p-half"><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="nav-icons flex gap-1 p-half">
                <a href="./pages/login.html"><i class="bi bi-person"></i></a>
                <a href="<?php echo $baseurl ?>pages/wish-list.php" class="relative"><i class="bi bi-heart"></i>
                    <span class="count">0</span>
                </a>
                <a href="<?php echo $baseurl ?>pages/cart.php" class="relative"><i class="bi bi-cart"></i>
                    <span class="count">0</span>
                </a>
            </div>
        </nav>
    </header>
    <!--header section end -->