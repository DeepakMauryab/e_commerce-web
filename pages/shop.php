<?php include "./layout/header.php";
$category = $db->query('SELECT * FROM `category`');
$Iscategory = $category->num_rows;
?>


<div class="shop">
    <div class="container flex jt-between gap-1">
        <div class="sidebar w-20 flex flex-column gap-1" id="sideBarFilter">
            <div class="filter1 filter">
                <p>Price</p>
                <div class="panel">
                    <div class="flex price-input gap-2">
                        <div class="range-slider">
                            <label for="minPrice">Min Price</label>
                            <input type="number" name="min" id="minPrice" value="1" class="form-control input-min">
                        </div>
                        <div class="range-slider">
                            <label for="maxPrice">Max Price</label>
                            <input type="number" name="max" id="maxPrice" value="1000" class="form-control input-max">
                        </div>
                    </div>
                    <div class="slider">
                        <div class="progress"></div>
                    </div>
                    <div class="range-input" id="ranger">
                        <input type="range" name="min" id="minBtn" class="range-min" min="1" max="1000" value="1">
                        <input type="range" name="max" id="maxBtn" class="range-max" min="1" max="1000" value="1000">
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
                            <input type="checkbox" name="cat" id="<?php echo $data['id'] ?>" value="<?php echo $data['id'] ?>">
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
                    <input type="checkbox" name="stock" id="inStock" value="1">
                    <label for="inStock">
                        In Stock
                    </label>
                </div>
                <!-- <div class="flex items-center gap-1">
                    <input type="radio" name="stock" id="outStock" value="0">
                    <label for="outStock">
                        Out Stock
                    </label>
                </div> -->

            </div>
        </div>
        <div class="product-Listing w-80">
            <h3>Our Products <small>(
                    <span id="prtCount">
                    </span> )
                </small></h3>
            <!-- <p>Showing  out of <?php //echo $Isproducts ?> Products</p> -->
            <div class="boxes" id="products">

            </div>
        </div>
    </div>
</div>


<?php include "./layout/footer.php" ?>
<?php
if (isset($_GET['catId'])) {

    $catId = htmlspecialchars($_GET["catId"])
        ?>
    <script>
        setAllProducts(<?php echo $catId ?>);
        Array.from(document.querySelectorAll("input")).forEach(item => {

            if (item.value == <?php echo $catId ?> && item.name === "cat") {
                catArr.push('<?php echo $catId ?>')
                item.checked = true;
            }
        })
    </script>
    <?php
} else {
    ?>
    <script>
        setAllProducts()
    </script>
    <?php
}
?>