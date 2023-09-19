<?php include "./pages/layout/header.php" ?>

<!-- slider section start -->

<div class="slider">
  <figure><img src="./Assets/slider/slider1.jpg" alt="" />
    <div class="content">
      <h5 data-aos="fade-left" data-aos-duration="3000">We Are Since 2023</h5>
      <h1 data-aos="fade-right" data-aos-duration="3000">Online Shopping Store</h1>
      <h6 data-aos="fade-left" data-aos-duration="3000">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, sit quibusdam quae exercitationem eligendi,
        tenetur saepe adipisci quas enim quisquam consequuntur non maiores neque provident facilis itaque nemo magnam
        error!
      </h6>
      <button class="action_btn" data-aos="fade-up" data-aos-duration="3000">Read More <i
          class="bi bi-arrow-right"></i></button>
    </div>
  </figure>
  <figure><img src="./Assets/slider/slider2.jpg" alt="" />
    <div class="content">
      <h5 data-aos="fade-left" data-aos-duration="3000">We Are Since 2023</h5>
      <h1 data-aos="fade-right" data-aos-duration="3000">Online Shopping Store</h1>
      <h6 data-aos="fade-left" data-aos-duration="3000">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, sit quibusdam quae exercitationem eligendi,
        tenetur saepe adipisci quas enim quisquam consequuntur non maiores neque provident facilis itaque nemo magnam
        error!
      </h6>
      <button class="action_btn" data-aos="fade-up" data-aos-duration="3000">Read More <i
          class="bi bi-arrow-right"></i></button>
    </div>
  </figure>
  <figure><img src="./Assets/slider/slider1.jpg" alt="" />
    <div class="content">
      <h5 data-aos="fade-left" data-aos-duration="3000">We Are Since 2023</h5>
      <h1 data-aos="fade-right" data-aos-duration="3000">Online Shopping Store</h1>
      <h6 data-aos="fade-left" data-aos-duration="3000">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, sit quibusdam quae exercitationem eligendi,
        tenetur saepe adipisci quas enim quisquam consequuntur non maiores neque provident facilis itaque nemo magnam
        error!
      </h6>
      <button class="action_btn" data-aos="fade-up" data-aos-duration="3000">Read More <i
          class="bi bi-arrow-right"></i></button>
    </div>
  </figure>
</div>
<!-- slider section end -->

<div class="category relative">
  <div class="container section">
    <h1 class="heading">Our Categories</h1>
    <div class="boxes">
    <?php
      for ($i = 0; $i < 4; $i++) { ?>
      <a href="#" class="category_box" data-aos="fade-up" data-aos-duration="<?php echo $i-1 ?>000">
        <figure class="zoomBox">
          <img src="./Assets/products/prd1.jpg" alt="product1" />
        </figure>
        <div class="content">
          <p>Category Name</p>
          <button>Show More</button>
        </div>
      </a>
      <?php
      }
      ?>
    </div>
  </div>
</div>

<!-- ad section start -->
<div class="ads">
  <div class=" section flex">
    <div class="right">
      <figure data-aos="zoom-in" data-aos-duration="2000"><img src="./Assets/images/ad1.jpg" alt=""></figure>
    </div>
    <div class="left flex jt-center flex-column">
      <h1>Our Services</h1>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus a quasi porro id impedit, dicta, aperiam
        repellendus quas veritatis, harum itaque quo laborum aliquid culpa tenetur neque illum assumenda et!</p>
      <button class="mt-2 button-Theme">Show Products <span><i class="bi bi-arrow-right"></i></span></button>
    </div>

  </div>
</div>
<!-- ad section end -->

<div class="products mt-2 relative">
  <div class="container section">
    <h1 class="heading">Our Products</h1>
    <div class="boxes">
      <?php
      for ($i = 0; $i < 8; $i++) { ?>
        <div class="product_box relative" data-aos="zoom-in" data-aos-duration="2000">
          <div class="img">
            <figure>
              <img src="./Assets/products/iphone1.png" alt="" />
              <img src="./Assets/products/iphone2.png" alt="" class="secondImg" />
          </div>
          </figure>
          <div class="content">
            <p class="name">Apple iPhone 12</p>
            <p class="categoryTitle">Mobile</p>
            <p class="flex jt-end price items-center"><span>&#x20B9; 500.00</span> <del>700.00</del></p>
            <div class="buttons">
              <button class="addToCart"><span><i class="bi bi-cart-fill"></i>Add to Cart</span> <span><i
                    class="bi bi-cart"></i></span> <span><i class="bi bi-clipboard-check-fill"></i>Added to
                  Cart</span></button>
            </div>
          </div>
          <button class="wish-btn"><i class="bi bi-heart"></i></button>
        </div>
        <?php
      }
      ?>
    </div>
    <div class="flex jt-center mt-2">
      <a href="#" class="button-Theme">Show More Products</a>
    </div>
  </div>
</div>

<!-- ad section start -->
<div class="ads adsNew">
  <div class=" section flex">
    <div class="left flex jt-center flex-column">
      <h1>Our Offers</h1>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus a quasi porro id impedit, dicta, aperiam
        repellendus quas veritatis, harum itaque quo laborum aliquid culpa tenetur neque illum assumenda et!</p>
      <button class="mt-2 button-Theme">Show Products <span><i class="bi bi-arrow-right"></i></span></button>
    </div>
    <div class="right">
      <figure data-aos="zoom-in" data-aos-duration="2000"><img src="./Assets/products/prd5.jpg" alt=""></figure>
    </div>
  </div>
</div>
<!-- ad section end -->

<!-- map section start -->
<div class="map w-100 h-50vh over-hidden">
  <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3557.1987419028505!2d80.8935510738001!3d26.928913259397216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399956564d730943%3A0xa3f27afc8ce7218b!2sKhwaja%20Moinuddin%20Chishti%20Language%20University!5e0!3m2!1sen!2sin!4v1694973396196!5m2!1sen!2sin"
    class="w-100 h-100" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!-- map section end -->

<!-- footer start -->
<?php include "./pages/layout/footer.php" ?>