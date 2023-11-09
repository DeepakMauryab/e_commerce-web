<?php include "./layout/header.php";

$productId = $_GET['product_id'];
$data = $db->query("SELECT *,products.id as prd_id FROM `products` JOIN category on products.categoryId= category.id WHERE products.id='{$_GET["product_id"]}'")->fetch_assoc();
?>




<div class="productShow">
    <div class="container section">
        <div class="flex  gap-2">
            <div class="imagesShow w-50">
                <div class="exzoom" id="exzoom">
                    <div class="exzoom_img_box">
                        <ul class='exzoom_img_ul'>
                            <li>
                                <figure><img src="<?php echo $AssetsUrl . $data['image1'] ?>" alt=""></figure>
                            </li>
                            <li>
                                <figure><img src="<?php echo $baseurl ?>Assets/images/ad1.jpg" alt=""></figure>
                            </li>
                            <li>
                                <figure><img src="<?php echo $baseurl ?>Assets/images/ad1.jpg" alt=""></figure>
                            </li>
                            <li>
                                <figure><img src="<?php echo $baseurl ?>Assets/images/ad1.jpg" alt=""></figure>
                            </li>
                            <li>
                                <figure><img src="<?php echo $baseurl ?>Assets/images/ad1.jpg" alt=""></figure>
                            </li>
                        </ul>
                    </div>
                    <div class="exzoom_nav"></div>
                </div>

            </div>
            <div class="contentShow w-50 flex jt-between mt-1">
                <div class="content">
                    <p class="categoryTitle">
                        <?php echo $data['category'] ?>
                    </p>
                    <h2 class="name">
                        <?php echo $data['name'] ?>
                    </h2>
                    <p class="flex priceSet gap-half items-center"><span>&#x20B9;
                            <?php echo $data['price'] ?>
                        </span> <del>
                            <?php echo $data['price'] + 100 ?>
                        </del></p>

                    <div class="stock <?php echo $data['availbility'] ? "" : "noStock" ?>">
                        <?php echo $data['availbility'] ? "In Stock" : "Out Stock" ?>
                    </div>

                    <ul class="mt-2 mb-2">
                        Other Information
                        <li><i class="bi bi-check-all"></i> Who uses the product.</li>
                        <li><i class="bi bi-check-all"></i> What problems it solves.</li>
                        <li><i class="bi bi-check-all"></i> How it fits into the customer’s daily life.</li>
                        <li><i class="bi bi-check-all"></i> How it could improve their quality of life.</li>
                        <li><i class="bi bi-check-all"></i> Including reviews to support the description.</li>




                    </ul>

                    <div class="buttons flex gap-1">
                        <button class="btn-theme addToCart <?php echo $data['availbility'] ? "" : "disabledBtn" ?>" <?php echo $data['availbility'] ? "" : "disabled" ?> name="<?php echo $data['prd_id'] ?>">Add To Cart</button>
                        <button class="btn-theme addToCart <?php echo $data['availbility'] ? "" : "disabledBtn" ?>" <?php echo $data['availbility'] ? "" : "disabled" ?> name="<?php echo $data['prd_id'] ?>">Buy It Now</button>

                    </div>
                </div>
                <div>
                    <button name="<?php echo $data['prd_id'] ?>" class="addToWish wish-btn addWishViewPage"><i
                            class="bi bi-heart"></i></button>
                </div>
            </div>
        </div>


    </div>
</div>


<?php
include "./layout/AlsoLike.php";
include "./layout/footer.php";
?>