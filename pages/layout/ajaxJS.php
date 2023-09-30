<audio hidden src="<?php echo $baseurl ?>Assets/sound/addWish.mp3" id="addWish"></audio>
<audio hidden src="<?php echo $baseurl ?>Assets/sound/addCart.mp3" id="addCart"></audio>
<audio hidden src="<?php echo $baseurl ?>Assets/sound/start.mp3" id="startupSound"></audio>

<script>

    // adding tooltip on cart and wishlist nav icons count start

    const addWishsound = document.getElementById('addWish');
    const addCartsound = document.getElementById('addCart');


    const countRowCart = () => {
        let req = new XMLHttpRequest();
        req.open("post", "<?php echo $baseurl ?>backend/ajax/cartWishCount.php", true);
        req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        req.send("isCart=" + 1);
        req.onreadystatechange = () => {
            if (req.readyState == 4 && req.status == 200) {
                document.getElementById("countCart").innerHTML = req.responseText;
            }
        };
    };
    const wishCount = () => {
        let req = new XMLHttpRequest();
        req.open("post", "<?php echo $baseurl ?>backend/ajax/cartWishCount.php", true);
        req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        req.send("isCart=" + 0);
        req.onreadystatechange = () => {
            if (req.readyState == 4 && req.status == 200) {
                document.getElementById("countWish").innerHTML = req.responseText;
            }
        };
    };
    countRowCart();
    wishCount();
    // adding tooltip on cart and wishlist nav icons count end

    // adding to wishlist with ajax
    const addToWish = (items) => {
        Array.from(items).forEach((btn) => {
            btn.addEventListener("click", function () {
                const xhttp = new XMLHttpRequest();
                xhttp.open("POST", "<?php echo $baseurl ?>backend/ajax/addWish.php", true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send("id=" + this.name);
                xhttp.onreadystatechange = () => {
                    if (xhttp.readyState == 4 && xhttp.status == 200) {
                        addWishsound.play()
                        if (xhttp.responseText === "y") {
                            Swal.fire("Good job!", "Product Added To Wishlist", "success");
                            this.querySelector("i").classList.add("bi-heart-fill");
                            this.querySelector("i").classList.remove("bi-heart");
                        } else if (xhttp.responseText === "user") {
                            Swal.fire({
                                title: "You Are Not Login!",
                                text: "Are You Want to Login?",
                                icon: "warning",
                                showCancelButton: true,
                                confirmButtonColor: "#3085d6",
                                cancelButtonColor: "#d33",
                                confirmButtonText: "Login",
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    location.replace("<?php echo $baseurl ?>pages/login.php");
                                }
                            });
                        } else {
                            this.querySelector("i").classList.add("bi-heart");
                            this.querySelector("i").classList.remove("bi-heart-fill");
                            Swal.fire("Good job!", "Product Removed from Wishlist", "success");
                        }
                        wishCount();
                    }
                };
            });
        });
    }

    addToWish(document.querySelectorAll(".wish-btn"));
    // adding to cart with ajax


    const addToCart = (items) => {
        Array.from(items)?.forEach((btn) => {
            btn.addEventListener("click", function () {



                const xhttp = new XMLHttpRequest();
                xhttp.open("POST", "<?php echo $baseurl ?>backend/ajax/addCart.php", true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send("id=" + this.name);
                xhttp.onreadystatechange = () => {
                    if (xhttp.readyState == 4 && xhttp.status == 200) {
                        addCartsound.play();
                        console.log(xhttp.responseText);
                        if (xhttp.responseText === "y") {
                            document.getElementById('AddCartAnim').style.visibility = "visible";
                            document.getElementById('AddCartAnim').style.opacity = 1;
                            setTimeout(() => {
                                document.getElementById('AddCartAnim').style.visibility = "hidden";
                                document.getElementById('AddCartAnim').style.opacity = 0;
                                Swal.fire({
                                    title: "Good job!",
                                    text: "Product Added To Cart",
                                    icon: "success",
                                    showCancelButton: true,
                                    confirmButtonColor: "#3085d6",
                                    cancelButtonColor: "#d33",
                                    confirmButtonText: "Go To Cart",
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        location.replace("<?php echo $baseurl ?>pages/cart.php");
                                    }
                                });
                            }, 3000)
                            this.classList.toggle("AddedCart");
                        } else if (xhttp.responseText === "user") {
                            Swal.fire({
                                title: "You Are Not Login!",
                                text: "Are You Want to Login?",
                                icon: "warning",
                                showCancelButton: true,
                                confirmButtonColor: "#3085d6",
                                cancelButtonColor: "#d33",
                                confirmButtonText: "Login",
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    location.replace("<?php echo $baseurl ?>pages/login.php");
                                }
                            });
                        } else {
                            Swal.fire("Good job!", "Product Removed from Cart", "success");
                            this.classList.toggle("AddedCart");
                        }
                        countRowCart();
                    }
                };
            });
        });
    }

    addToCart(document.querySelectorAll(".addToCart"));

    const checkWishCart = (btn, id, isCart) => {

        const xhttp = new XMLHttpRequest();
        xhttp.open("POST", "<?php echo $baseurl ?>backend/ajax/checkWishCart.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("id=" + id + "&isCart=" + isCart);
        xhttp.onreadystatechange = () => {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
                if (xhttp.responseText === "Y") {
                    if (isCart) {
                        btn.classList.add("AddedCart");

                    } else {
                        btn.querySelector("i").classList.add("bi-heart-fill");
                        btn.querySelector("i").classList.remove("bi-heart");
                    }
                } else {
                    if (isCart) {
                        btn.classList.remove("AddedCart");

                    } else {
                        btn.querySelector("i").classList.remove("bi-heart-fill");
                        btn.querySelector("i").classList.add("bi-heart");
                    }
                }
            }
        }
    }
    Array.from(document.querySelectorAll('.addToCart'))?.forEach((item) => {
        checkWishCart(item, item.name, 1)
    })
    Array.from(document.querySelectorAll('.wish-btn'))?.forEach((item) => {
        checkWishCart(item, item.name, 0)
    })
</script>