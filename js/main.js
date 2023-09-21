$(".slider").slick({
  dots: true,
  infinite: true,
  speed: 500,
  cssEase: "linear",
  fade: true,
  arrows: true,
  speed: 700,
  autoPlay: true,
  prevArrow:
    '<svg class="prev" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M20 40C8.9543 40 -2.7141e-06 31.0457 -1.74846e-06 20C-7.8281e-07 8.9543 8.95431 -2.7141e-06 20 -1.74846e-06C31.0457 -7.8281e-07 40 8.9543 40 20C40 31.0457 31.0457 40 20 40ZM16.1206 13.5198C15.7554 13.1055 15.1632 13.1055 14.798 13.5198L9.58704 19.4308C9.22182 19.8451 9.22182 20.5168 9.58704 20.931L14.798 26.8421C15.1632 27.2563 15.7554 27.2563 16.1206 26.8421C16.4858 26.4278 16.4858 25.7561 16.1206 25.3418L12.4912 21.2248L29.6865 21.2248C30.2388 21.2248 30.6865 20.7771 30.6865 20.2248C30.6865 19.6725 30.2388 19.2248 29.6865 19.2248L12.4138 19.2248L16.1206 15.02C16.4858 14.6057 16.4858 13.934 16.1206 13.5198Z" fill="#7C8B9C"/></svg>',
  nextArrow:
    '<svg width="40" class="next" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M20 3.49691e-06C31.0457 5.4282e-06 40 8.95431 40 20C40 31.0457 31.0457 40 20 40C8.9543 40 1.56562e-06 31.0457 3.49691e-06 20C5.4282e-06 8.95431 8.95431 1.56562e-06 20 3.49691e-06ZM23.8794 26.4802C24.2446 26.8945 24.8368 26.8945 25.202 26.4802L30.413 20.5692C30.7782 20.1549 30.7782 19.4833 30.413 19.069L25.202 13.1579C24.8368 12.7437 24.2446 12.7437 23.8794 13.1579C23.5142 13.5722 23.5142 14.2439 23.8794 14.6582L27.5088 18.7752L10.3135 18.7752C9.7612 18.7752 9.31348 19.2229 9.31348 19.7752C9.31348 20.3275 9.76119 20.7752 10.3135 20.7752L27.5862 20.7752L23.8794 24.98C23.5142 25.3943 23.5142 26.066 23.8794 26.4802Z" fill="#7C8B9C"/></svg>',
});

function getOffset(el) {
  var _x = 0;
  var _y = 0;
  while (el && !isNaN(el.offsetLeft) && !isNaN(el.offsetTop)) {
    _x += el.offsetLeft - el.scrollLeft;
    _y += el.offsetTop - el.scrollTop;
    el = el.offsetParent;
  }
  return { top: _y, left: _x };
}

document.addEventListener("scroll", () => {
  if (!document.querySelector("header").getBoundingClientRect().top) {
    document
      .querySelector("header")
      .querySelector("nav")
      .classList.add("Active_Navbar");
  } else {
    document
      .querySelector("header")
      .querySelector("nav")
      .classList.remove("Active_Navbar");
  }
});

// const ajaxRequest = (file, parameter) => {
//   let data;
//   const xhttp = new XMLHttpRequest();
//   xhttp.open("POST", `../backend/ajax/${file}.php`, true);
//   xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
//   xhttp.send(parameter);
//   xhttp.onreadystatechange = () => {
//     if (xhttp.readyState == 4 && xhttp.status == 200) {
//       data = xhttp.responseText;
//     }
//   };
//   return data;
// };
// adding to wishlist with ajax
Array.from(document.querySelectorAll(".wish-btn")).forEach((btn) => {
  btn.addEventListener("click", function () {
    const xhttp = new XMLHttpRequest();
    xhttp.open("POST", "./backend/ajax/addWish.php", true);
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
          Swal.fire("Good job!", "Product Removed from Wishlist", "success");
        }
        wishCount();
      }
    };
  });
});

// adding to cart with ajax
if (document.querySelectorAll(".addToCart")?.length > 0) {
  Array.from(document.querySelectorAll(".addToCart"))?.forEach((btn) => {
    btn.addEventListener("click", function () {
      const xhttp = new XMLHttpRequest();
      xhttp.open("POST", "./backend/ajax/addCart.php", true);
      xhttp.setRequestHeader(
        "Content-type",
        "application/x-www-form-urlencoded"
      );
      xhttp.send("id=" + this.name);
      xhttp.onreadystatechange = () => {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
          if (xhttp.responseText === "y") {
            Swal.fire("Good job!", "Product Added To Cart", "success");
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
}

const countRowCart = () => {
  let req = new XMLHttpRequest();
  req.open("post", "./backend/ajax/cartWishCount.php", true);
  req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  req.send("isCart=" + 1);
  req.onreadystatechange = () => {
    if (req.readyState == 4 && req.status == 200) {
      document.getElementById("countCart").innerHTML = req.responseText;
    }
  };
};
countRowCart();
const wishCount = () => {
  let req = new XMLHttpRequest();
  req.open("post", "./backend/ajax/cartWishCount.php", true);
  req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  req.send("isCart=" + 0);
  req.onreadystatechange = () => {
    if (req.readyState == 4 && req.status == 200) {
      document.getElementById("countWish").innerHTML = req.responseText;
    }
  };
};
wishCount();

const incDecAjax = (id, state, element, cart, setTotal) => {
  const xhttp = new XMLHttpRequest();
  xhttp.open("POST", "../backend/ajax/qtyHandler.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("state=" + state + "&id=" + id + "&isCart=" + cart);
  xhttp.onreadystatechange = () => {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      const data = JSON.parse(xhttp.responseText);
      element.value = data[0];
      setTotal.innerHTML = data[1];
    }
  };
};

Array.from(document.querySelectorAll(".inc"))?.forEach((btn) => {
  btn.addEventListener("click", function () {
    incDecAjax(
      this.name,
      1,
      this.parentElement.querySelector("input"),
      this.value,
      this.parentElement.parentElement.parentElement.querySelector(".totalSet")
    );
  });
});

Array.from(document.querySelectorAll(".dec"))?.forEach((btn) => {
  btn.addEventListener("click", function () {
    incDecAjax(
      this.name,
      0,
      this.parentElement.querySelector("input"),
      this.value,
      this.parentElement.parentElement.parentElement.querySelector(".totalSet")
    );
  });
});
Array.from(document.querySelectorAll(".removeCart"))?.forEach((btn) => {
  btn.addEventListener("click", function () {
    const xhttp = new XMLHttpRequest();
    xhttp.open("POST", "../backend/ajax/deleteCartWish.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("id=" + this.name + "&isCart=" + this.value);
    xhttp.onreadystatechange = () => {
      if (xhttp.readyState == 4 && xhttp.status == 200) {
        if (xhttp.responseText) {
          this.parentElement.parentElement.remove();
          Swal.fire("Good job!", xhttp.responseText, "success");
        } else {
          Swal.fire("Some Error!", "Please Try Again Later", "error");
        }
      }
    };
  });
});
