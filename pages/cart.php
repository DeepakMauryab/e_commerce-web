<?php include "./layout/header.php" ?>


<div class="container section">


    <div class="wrap cf cartDesign">
        <h1 class="projTitle">Shopping Cart</h1>
        <div class="headingCart">
            <h1>My Cart</h1>
            <a href="#" class="continue">Continue Shopping</a>
        </div>
        <div class="cart">
            <ul class="tableHead">
                <li class="prodHeader">Product</li>
                <li class="">Quantity</li>
                <li>Total</li>
                <li class="text-end" >Action</li>
            </ul>
            <ul class="cartWrap">
                <li>
                    <figure> <img src="<?php echo $baseurl ?>Assets/products/prd1.jpg" alt="" class="itemImg" />
                    </figure>
                    <h5>Item Name 1</h5>
                </li>
                <li class="incDec">
                    <button><i class="bi bi-patch-minus"></i></button>
                    <input type="text" class="qty" placeholder="0" disabled />
                    <button><i class="bi bi-patch-plus"></i></button>

                </li>
                <li>
                    <p>$15.00</p>
                </li>
                <li>
                    <button class="removeCart"><i class="bi bi-trash-fill"></i></button>
                </li>

            </ul>
        </div>

        <!-- <div class="subtotal cf">
        <ul>
            <li class="totalRow"><span class="label">Subtotal</span><span class="value">$35.00</span></li>

            <li class="totalRow"><span class="label">Shipping</span><span class="value">$5.00</span></li>

            <li class="totalRow"><span class="label">Tax</span><span class="value">$4.00</span></li>
            <li class="totalRow final"><span class="label">Total</span><span class="value">$44.00</span></li>
            <li class="totalRow"><a href="#" class="btn continue">Checkout</a></li>
        </ul>
    </div> -->
    </div>
</div>
<!-- footer start -->
<?php include "./layout/footer.php" ?>