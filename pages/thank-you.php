<?php include "./layout/header.php";
if (!isset($_SESSION['user'])) {
    ?>
    <script>window.history.back()</script>
    <?php

}
if (!isset($_SESSION['order'])) {
    ?>
    <script>location.replace('../')</script>
    <?php
}

if (function_exists('date_default_timezone_set')) {
    date_default_timezone_set("Asia/Kolkata");
}

?>


<div class="container section text-center ThankYou">
    <h1 class="m-2 text-green border-b-1">Thank You !</h1>
    <p>Your Order id
        <span class="text-green border-b-1">
            <?php echo $_SESSION['order']['orderId'] ?>
        </span> has been placed !
    </p>
    <div class="date flex gap-3 mt-1 jt-center ">
        <p class="flex gap-half"> <i class="bi bi-calendar-check text-red"></i>Order Date -
            <?php echo date('d M Y') ?>
        </p>
        <p class="flex gap-half"> <i class="bi bi-stopwatch text-yellow"></i>Order Time -
            <?php echo date('h:i:s a') ?>
        </p>
    </div>



    <div class=" mb-1 contactInfo flex gap-3 mt-1 jt-center items-center container section">
        <div class="contact-box">
            <i class="bi bi-truck"></i>
            <div class="content flex flex-column items-center">
                <h3 class="mb-2">Shipping Address</h3>
                <a href="#" onclick="return false">SARSETHU, HASWAPARA, BARABANKI, sarsethu, 13, 34, India-225306</a>
            </div>
        </div>

        <div class="contact-box">
            <i class="bi bi-credit-card"></i>
            <div class="content flex flex-column items-center">
                <h3 class="mb-2">Payment Method</h3>
                <a href="#" onclick="return false" class="flex gap-1">
                    <?php echo $_SESSION['order']['paymode'] == 1 ? '<i class="bi bi-wallet"></i> Online Payment' : '<i class="bi bi-cash-coin"></i> Cash On Delivery' ?>
                </a>
            </div>
        </div>
    </div>
    <a href="<?php echo $baseurl ?>pages/shop.php"><button class="btn-theme">Continue Shopping</button></a>
</div>


<!-- $_SESSION['order']['user'] -->



<?php include "./layout/footer.php" ?>
<script>
    Swal.fire("Order Placed!", "We will Send Your Product At Your Home :)", "success");
</script>

<?php
unset($_SESSION['order']);