<script>
    // adding tooltip on cart and wishlist nav icons count start
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
    Array.from(document.querySelectorAll(".wish-btn")).forEach((btn) => {
        btn.addEventListener("click", function () {
            const xhttp = new XMLHttpRequest();
            xhttp.open("POST", "<?php echo $baseurl ?>backend/ajax/addWish.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("id=" + this.name);
            xhttp.onreadystatechange = () => {
                if (xhttp.readyState == 4 && xhttp.status == 200) {
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
                                location.replace("./pages/login.php");
                            }
                        });
                    } else {
                        this.querySelector("i").classList.add("bi-heart");
                        this.querySelector("i").classList.remove("bi-heart-fill");
                        Swal.fire({
                            title: "Good job!",
                            text: "Product Removed from Wishlist",
                            icon: "success",
                            showCancelButton: true,
                            confirmButtonColor: "#3085d6",
                            cancelButtonColor: "#d33",
                            confirmButtonText: "Login",
                        }).then((result) => {
                            if (result.isConfirmed) {
                                location.replace("./pages/login.php");
                            }
                        });
                    }
                    wishCount();
                }
            };
        });
    });
    // adding to cart with ajax
    
    Array.from(document.querySelectorAll(".addToCart"))?.forEach((btn) => {
        btn.addEventListener("click", function () {
            const xhttp = new XMLHttpRequest();
            xhttp.open("POST", "<?php echo $baseurl ?>backend/ajax/addCart.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("id=" + this.name);
            xhttp.onreadystatechange = () => {
                if (xhttp.readyState == 4 && xhttp.status == 200) {
                    if (xhttp.responseText === "y") {
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
                                location.replace("<?php echo $baseurl ?>pages/login.php");
                            }
                        });
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
                                location.replace("./pages/login.php");
                            }
                        });
                    } else {
                        Swal.fire("Good job!", "Product Removed from Cart", "success");
                    }
                    this.classList.toggle("AddedCart");
                    countRowCart();
                }
            };
        });
    });
</script>