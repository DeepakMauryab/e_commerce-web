<footer>
  <div class="sections flex jt-between gap-2">
    <div class="first">
      <h3>Online Store</h3>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
      <div class="all-box mt-1">
        <div class="flex gap-1">
          <span><i class="fa-solid fa-location-dot"></i></span>
          <a class="text-white" href="address:  60 Grant Ave. Carteret NJ 0708">
            <p>Kmclu University</p>
          </a>
        </div>
        <div class="flex gap-1">
          <span><i class="fa-regular fa-envelope"></i></span>
          <a class="text-white" href="mailto: info@amicuscorpolegem.com">
            <p>info@webstore.com</p>
          </a>
        </div>
        <div class="flex gap-1">
          <span><i class="fa-solid fa-square-phone"></i></span>
          <p><a class="text-white" href="tel: 9616429977">+91 9956199561</a></p>
        </div>
      </div>
    </div>
    <div class=" second links">
      <h5>Services</h5>
      <ul>
        <?php $category = $db->query('SELECT * FROM `category` limit 5');
        $Iscategory = $category->num_rows;
        if ($Iscategory > 0) {
          $_ = 0;
          while ($data = $category->fetch_assoc()) { ?>
            <li class="flex items-center "><a href="#"><i class="fa-solid fa-hand-point-right"></i>
                <?php echo $data['category'] ?>
              </a></li>
            <?php
          }
        }
        ?>

      </ul>
    </div>
    <div class=" third links">
      <h5>Legal</h5>
      <ul>
        <li><a href="#">Terms and conditions</a></li>
        <li><a href="#">License agreement</a></li>
        <li><a href="#">Privacy policy</a></li>
        <li><a href="#">Copyright information</a></li>
        <li><a href="#">Cookies policy</a></li>
      </ul>
    </div>
    <div class=" fourth links">
      <h5>Support</h5>
      <ul>
        <li><a href="#">FAQ</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>
  </div>
  <div class="shareIcons">
    <ul>
      <li><a href="#" style="--icon-color: 	#4267B2;"><i class="bi bi-facebook"></i></a></li>
      <li><a href="#" style="--icon-color: orange;"><i class="bi bi-instagram"></i></a></li>
      <li><a href="#" style="--icon-color: #1DA1F2;"><i class="bi bi-twitter"></i></a></li>
      <li><a href="#" style="--icon-color: red;"><i class="bi bi-youtube"></i></a></li>
    </ul>
  </div>
</footer>
<!-- footer end -->

<div class="bottom-bar">
  <p class="text-center">Copyright © 2023, Online Shopping Store Designed & Developed by BCA 3rd Year</p>
</div>


<!-- js links -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<script src="https://shrawasticards.com/javascript/jquery.exzoom.js"></script>
<script src="https://niralaherbal.com/js/jquery.exzoom.js"></script>
<script>
  AOS.init();
</script>
<script src="<?php echo $baseurl ?>js/main.js"></script>
<script src="<?php echo $baseurl ?>js/validation.js"></script>


<?php
$ajaxJsPath = $_SERVER['DOCUMENT_ROOT'] . $folderName . "pages/layout/ajaxJS.php";
include_once ($ajaxJsPath);
?>
</body>

</html>