<?php include "./layout/header.php";
$category = $db->query('SELECT * FROM `category`');
$Iscategory = $category->num_rows;
$products = $db->query('SELECT *,products.id AS prd_id, category.id AS cat_id FROM `products` Inner JOIN category on products.categoryId= category.id');
$Isproducts = $products->num_rows;
?>

<div class="shop">
    <div class="container flex jt-between gap-1">
        <div class="sidebar w-20 flex flex-column gap-1">
            <div class="filter1 filter">
                <p>Price</p>
                <div class="panel">
                    <div class="flex price-input gap-2">
                        <div class="range-slider">
                            <label for="minPrice">Min Price</label>
                            <input type="number" name="" id="minPrice" value="1" class="form-control input-min">
                        </div>
                        <div class="range-slider">
                            <label for="maxPrice">Max Price</label>
                            <input type="number" name="" id="maxPrice" value="500" class="form-control input-max">
                        </div>
                    </div>
                    <div class="slider">
                        <div class="progress"></div>
                    </div>
                    <div class="range-input" id="ranger">
                        <input type="range" name="" id="minBtn" class="range-min" min="1" max="500" value="1">
                        <input type="range" name="" id="maxBtn" class="range-max" min="1" max="500" value="500">
                    </div>
                </div>
            </div>
            <hr>
            <div class="filter2 filter">
                <p>Category</p>
                <?php
                if ($Iscategory > 0) {
                    $_ = 0;
                    while ($data = $category->fetch_assoc()) { ?>
                        <div class="flex items-center gap-1 mb-half">
                            <input type="checkbox" name="" id="<?php echo $data['id'] ?>" value="<?php echo $data['id'] ?>">
                            <label for="<?php echo $data['id'] ?>">
                                <?php echo $data['category'] ?>
                            </label>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
            <hr>
            <div class="filter3 filter">
                <p>Availability</p>
                <div class="flex items-center gap-1 mb-half">
                    <input type="checkbox" name="" id="inStock" value="">
                    <label for="inStock">
                        In Stock
                    </label>
                </div>
                <div class="flex items-center gap-1">
                    <input type="checkbox" name="" id="outStock" value="">
                    <label for="outStock">
                        Out Stock
                    </label>
                </div>

            </div>
        </div>
        <div class="product-Listing w-80">
            <h3>Our Products <small>(<?php echo $Isproducts ?>)</small></h3>
            <!-- <p>Showing  out of <?php //echo $Isproducts ?> Products</p> -->
            <div class="boxes">
            <?php
            if ($Isproducts > 0) {
                $_ = 0;
                while ($data = $products->fetch_assoc()) {
                    ?>
                    <div class="product_box relative" data-aos="zoom-in" data-aos-duration="2000">
                        <div class="img">
                            <figure>
                                <img src="<?php echo $AssetsUrl . $data['image1'] ?>" alt="" />
                                <img src="<?php echo $baseurl?>Assets/products/iphone2.png" alt="" class="secondImg" />
                        </div>
                        </figure>
                        <div class="content">
                            <p class="name">
                                <?php echo $data['name'] ?>
                            </p>
                            <p class="categoryTitle">
                                <?php echo $data['category'] ?>
                            </p>
                            <p class="flex jt-end price items-center"><span>&#x20B9;
                                    <?php echo $data['price'] ?>
                                </span> <del>
                                    <?php echo $data['price'] + 100 ?>
                                </del></p>
                            <div class="buttons">
                                <button name="<?php echo $data['prd_id'] ?>" class="addToCart"><span><i
                                            class="bi bi-cart-fill"></i>Add to
                                        Cart</span> <span><i class="bi bi-cart"></i></span> <span><i
                                            class="bi bi-clipboard-check-fill"></i>Added to
                                        Cart</span></button>
                            </div>
                        </div>
                        <button name="<?php echo $data['prd_id'] ?>" class="wish-btn"><i class="bi bi-heart"></i></button>
                    </div>
                    <?php
                }
            }
            ?>
            </div>
        </div>
    </div>
</div>

<?php include "./layout/footer.php" ?>