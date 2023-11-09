<?php $products = $db->query('SELECT *,products.id AS prd_id, category.id AS cat_id FROM `products` Inner JOIN category on products.categoryId= category.id  order by prd_id desc limit 8');
$Isproducts = $products->num_rows; ?>

<h1 class="text-center mt-5">You May Also Like</h1>

<div class="boxes alsoLikeSlider container mb-1">
    <?php
    if ($Isproducts > 0) {
        $_ = 0;
        while ($data = $products->fetch_assoc()) {
            ?>
            <a href="<?php echo $baseurl ?>pages/product-view.php?product_id=<?php echo $data['prd_id'] ?>"
                class="product_box relative" data-aos="zoom-in" data-aos-duration="2000">
                <div class="img">
                    <figure>
                        <img src="<?php echo $AssetsUrl . $data['image1'] ?>" alt="" />
                        <img src="<?php echo $baseurl ?>Assets/products/iphone2.png" alt="" class="secondImg" />
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
                        <button name="<?php echo $data['prd_id'] ?>" class="addToCart"><span><i class="bi bi-cart-fill"></i>Add
                                to
                                Cart</span> <span><i class="bi bi-cart"></i></span> <span><i
                                    class="bi bi-clipboard-check-fill"></i>Added to
                                Cart</span></button>
                    </div>
                </div>
                <button name="<?php echo $data['prd_id'] ?>" class="wish-btn addToWish"><i class="bi bi-heart"></i></button>
            </a>
            <?php
        }
    }
    ?>
</div>