<?php include "./layout/header.php" ?>
<div class="productShow">
    <div class="container section">
        <div class="flex  gap-2">
            <div class="imagesShow w-50">
                <div class="exzoom" id="exzoom">
                    <div class="exzoom_img_box">
                        <ul class='exzoom_img_ul'>
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
                        Category Name
                    </p>
                    <h2 class="name">
                        product name
                    </h2>
                    <p class="flex priceSet gap-half items-center"><span>&#x20B9;
                            <?php //echo $data['price'] ?>100.00
                        </span> <del>
                            <?php //echo $data['price'] + 100 ?>200.00
                        </del></p>

                    <div class="stock">In Stock</div>

                    <ul class="mt-2 mb-2" >
                        Other Information
                        <li><i class="bi bi-check-all"></i> this is first info</li>
                        <li><i class="bi bi-check-all"></i> this is first info</li>
                        <li><i class="bi bi-check-all"></i> this is first info</li>
                        <li><i class="bi bi-check-all"></i> this is first info</li>
                        <li><i class="bi bi-check-all"></i> this is first info</li>
                    </ul>

                    <div class="buttons flex gap-1">
                        <button class="btn-theme" >Add To Cart</button>
                        <button class="btn-theme" >Buy It Now</button>

                    </div>
                </div>
                <div>
                    <button name="<?php //echo $data['prd_id'] ?>" class="addToWish wish-btn addWishViewPage"><i
                            class="bi bi-heart"></i></button>
                </div>
            </div>
        </div>


    </div>
</div>


<?php
 include "./layout/AlsoLike.php" ;
 include "./layout/footer.php" ;
 ?>