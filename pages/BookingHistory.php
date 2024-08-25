<div class="heading w-100 flexImp jt-between mb-1">
    <h2>Booking History</h2>
    <!-- <h2>Booking History</h2> -->
</div>


<?php
if ($_SESSION['user']) {
    $user = $_SESSION['user'];
    $order = $db->query("SELECT * FROM `orders` Inner Join `products` on orders.productId=products.id WHERE userId=$user  ");
    while ($data = $order->fetch_assoc()) {
        ?>
        <div class="bookings">
            <div class="firstsection">
                <div class="first">
                    <figure><img src="<?php echo $AssetsUrl. $data['image1'] ?>" alt=""></figure>
                </div>
                <div class="second">
                    <h6>
                        <?php echo $data['name'] ?>
                    </h6>
                    <h3 class="title">
                        <?php echo $data['name'] ?>
                    </h3>
                    <p>
                        <?php echo $data['price'] ?>
                    </p>
                    <p>
                        <?php echo $data['createdAt'] ?>
                    </p>
                    <p>
                        <?php echo $data['qty'] ?>
                    </p>

                </div>
            </div>
            <div class="third">
                <h6>status</h6>
                <button>cancle</button>
                <br>
                <h5>Booking Id</h5>
                <h4>
                    <?php echo $data['orderId'] ?>
                </h4>
            </div>
        </div>

    <?php }
} ?>