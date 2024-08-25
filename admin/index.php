<?php include "../backend/connect.php";
session_start();
if (isset($_SESSION['admin'])) {
  ?>
  <script>
    location.replace('./dashboard.php');
  </script>
  <?php
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Shopping</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style1.css">
</head>

<body>
  <!-- Loading screen -->
  <div id="loading">
    <img src="img/loading-icon.gif" alt="Support Module" id="loading-logo">
  </div>

  <!-- content -->
  <div id="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <form class="form-box" method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
            <div class="lgn-box">
              <div class="form-group">
                <figure class="text-center mb-0">
                  <img src="img/admin-icon.svg" class="c-logo" alt="Krisumi">
                </figure>
              </div>
              <div class="form-group text-center">
                <h3 class="mb-1 fw500 fs32">Admin</h3>
                <p class="fw400 fs18">Please enter your details</p>
              </div>
              <div class="form-group text-center mt-4">
                <input type="email" class="form-control2" placeholder="Email" name="email">
              </div>
              <div class="form-group text-center">
                <input type="password" class="form-control2" placeholder="Password" name="password">
              </div>
              <span id="showError" class="showError"></span>
              <div class="form-group text-center">
                <input type="submit" class="clgn-btn" value="Log In" name="login">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- scripts -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      setTimeout(function () {
        document.getElementById("loading").style.display = "none";
        document.getElementById("content").style.display = "block";
        document.getElementById("content").style.opacity = 1;
        document.body.style.overflow = "auto";
      }, 50);
    });

    const showError = document.getElementById('showError');

  </script>
</body>

</html>


<?php

if (isset($_POST['login'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  if (!$email || !$password) {
    ?>
    <script>
      showError.innerHTML = "All Fields are Required*";
    </script>
    <?php
  } else {
    $data = $db->query("SELECT * FROM `admin` WHERE `email` = '$email' AND `password`= '$password'");
    if ($data->num_rows) {
      $_SESSION['admin'] = $data->fetch_assoc();
      ?>
      <script>

        location.replace('./dashboard.php');
      </script>
      <?php

    } else {
      ?>
      <script>
        showError.innerHTML = "Invalid Credentials*";
      </script>
      <?php
    }
  }

}
?>
<script>
  if (showError.innerHTML.length <= 0) {
    showError.remove();
  }
</script>