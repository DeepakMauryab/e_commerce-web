<?php include "./layout/header.php";
if (!isset($_SESSION['user'])) {
    ?>
    <script>window.history.back()</script>
    <?php
}

$user = $_SESSION['user'];
$cartTotal = $db->query("SELECT SUM(total) FROM `cart` Where userId= $user")->fetch_assoc()['SUM(total)'];
$tax = $db->query("SELECT amount FROM `taxSetting` Where `taxName`='productPrice'")->fetch_assoc()['amount'];
$shipping = $db->query("SELECT amount FROM `taxSetting` Where `taxName`='shipping'")->fetch_assoc()['amount'];

?>


<div class="container section checkout">
    <h1 class="heading mb-2">Complete Your Payment</h1>
    <form method="post" action="../backend/confirmOrder.php" class="flex gap-5">
        <div class="left">
            <div class="first">
                <h4>Shipping Address</h4>
                <div class="flex gap-1">
                    <div>
                        <input type="radio" id="address" checked>
                        <label for="address">SARSETHU, HASWAPARA, BARABANKI, sarsethu, 13, 34, India-225306</label>
                    </div>
                    <button><i class="bi bi-pencil-square"></i></button>
                </div>
            </div>
        </div>
        <hr>
        <div class="right">
            <div class="first">
                <h4>Order Summary</h4>
                <div class="content-price">
                    <div>
                        <p class="flex jt-between"><span>Product Price:</span> <span> &#x20B9;
                                <?php echo $cartTotal ?>.00
                            </span></p>
                        <p class="flex jt-between"><span>Tax Amount:</span> <span> &#x20B9;
                                <?php echo $cartTotal * $tax / 100 ?>.00
                            </span></p>
                        <p class="flex jt-between"><span>Tax Amount:</span> <span> &#x20B9;
                                <?php echo $shipping ?>.00
                            </span></p>
                        <p class="flex jt-between"><span>Grand Total:</span> <span> &#x20B9;
                                <?php echo $cartTotal + $cartTotal * $tax / 100 + $shipping ?>.00
                            </span></p>
                    </div>
                </div>
            </div>

            <div class="first">

                <h4>Choose Method</h4>
                <div class="form-group">
                    <input type="radio" id="payMethod" checked name="payMethod" value="2">
                    <label for="payMethod">Cash on Delivery</label>
                </div>
                <div class="form-group">
                    <input type="radio" id="payMethod2" name="payMethod" value="1">
                    <label for="payMethod2">Online</label>
                </div>
            </div>
            <button class="btn-theme" name="confirmOrder">Confirm Your Order</button>

        </div>
    </form>
</div>






<?php include "./layout/footer.php" ?>