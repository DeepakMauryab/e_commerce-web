<?php include "./layout/header.php";

$cartData = $db->query('SELECT *, cart.id as cardId FROM `cart` JOIN `products` on products.id= cart.productId');
$isCart = $cartData->num_rows;
?>


<div class="container section">


    <div class="wrap cf cartDesign">
        <h1 class="projTitle">Shopping Cart</h1>
        <?php
        if ($isCart > 0) { ?>
            <div class="headingCart">
                <h1>My Cart <small id="cartcount">
                        <?php echo "(" . $isCart . ")" ?>
                    </small></h1>
                <a href="#" class="continue">Continue Shopping</a>
            </div>
            <div class="cart">

                <table class="cartTable">
                    <thead>
                        <th>Product</th>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>price</th>
                        <th>Total</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <?php while ($data = $cartData->fetch_assoc()) { ?>
                            <tr>
                                <td>
                                    <figure> <img src="<?php echo $AssetsUrl . $data['image1'] ?>" alt="" class="itemImg" />
                                    </figure>

                                </td>
                                <td>
                                    <?php echo $data['name'] ?>
                                </td>
                                <td>
                                    <div class="incDec">

                                        <button class='dec' value="1" name="<?php echo $data['cardId'] ?>"><i
                                                class="bi bi-patch-minus"></i></button>
                                        <input type="number" class="qty" placeholder="0" disabled
                                            value="<?php echo $data['quantity'] ?>" />
                                        <button class='inc' value="1" name="<?php echo $data['cardId'] ?>"><i
                                                class="bi bi-patch-plus"></i></button>
                                    </div>
                                </td>
                                <td>₹
                                    <?php echo $data['price'] ?>
                                </td>
                                <td>₹
                                    <span class="totalSet">
                                        <?php echo $data['total'] ?>
                                    </span>
                                </td>
                                <td> <button class="removeCart" value="1" name="<?php echo $data['cardId'] ?>"><i
                                            class="bi bi-trash-fill"></i></button></td>
                            </tr>

                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>


            <div class="subtotal cf">
                <ul>
                    <li><span class="label">Subtotal:</span><span class="value">₹35.00</span></li>

                    <li><span class="label">Shipping:</span><span class="value">₹5.00</span></li>

                    <li><span class="label">Tax:</span><span class="value">₹4.00</span></li>
                    <li class="totalRow final"><span class="label">Total:</span><span class="value">₹44.00</span></li>
                    <li><a href="#" class="btn continue">Checkout</a></li>
                </ul>
            </div>

            <?php
        } else {
            ?>
            <div class="dataNotFound">
                <figure>
                    <img src="../Assets/images/cart1.png" alt="">
                </figure>

                <div class="flex gap-1"> <a href="<?php echo $baseurl ?>pages/login.php"><i
                            class="bi bi-person"></i>Login</a>
                    <a href="#"><i class="bi bi-bag-check"></i> Shop</a>
                </div>
            </div>
            <?php

        }
        ?>
    </div>
</div>
<!-- footer start -->
<?php include "./layout/footer.php" ?>