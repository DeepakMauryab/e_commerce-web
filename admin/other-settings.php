<?php include "./header.php";
$category = $db->query('SELECT * FROM `category`'); ?>
<main class="py-6 bg-surface-secondary">
   <div class="container-fluid">
      <div class="card">
         <div class="card-header border-bottom">
            <div class="row align-items-center">
               <div class="col-sm col-12">
                  <h5 class="mb-0">Add Product</h5>
               </div>
               <div class="col-sm-auto col-12 mt-4 mt-sm-0"></div>
            </div>
         </div>
         <div class="row">
            <div class="col-12" style="min-height: 490px;">
               <div class="px-5 py-5">
                  <form method="post" class="row" enctype="multipart/form-data">
                     <div class="col-lg-4 col-md-6 col-12">
                        <div class="form-group mb-lg-5">
                           <h6 class="mb-3">Category</h6>
                           <select id="type" class="form-select" name="category" required>
                              <option value="" selected="">Select</option>
                              <?php while ($data = $category->fetch_assoc()) {
                                 ?>
                                 <option value="<?php echo $data['id'] ?>"><?php echo $data['category'] ?></option>
                                 <?php
                              }
                              ?>
                           </select>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 col-12">
                        <div class="form-group mb-lg-5">
                           <h6 class="mb-3">Product Name</h6>
                           <input type="text" class="form-control" name="name" required>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 col-12">
                        <div class="form-group mb-lg-5">
                           <h6 class="mb-3">Product Code</h6>
                           <input type="text" class="form-control" name="code" required>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 col-12">
                        <div class="form-group mb-lg-5">
                           <h6 class="mb-3">Price</h6>
                           <input type="number" class="form-control" name="price" required>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 col-12">
                        <div class="form-group mb-lg-5">
                           <h6 class="mb-3">Image 1</h6>
                           <input type="file" class="form-control" name="image[]"
                              accept="image/png, image/gif, image/jpeg" required>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 col-12">
                        <div class="form-group mb-lg-5">
                           <h6 class="mb-3">Image 1</h6>
                           <input type="file" class="form-control" name="image[]"
                              accept="image/png, image/gif, image/jpeg" required>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 col-12">
                        <div class="form-group mb-lg-5">
                           <h6 class="mb-3">Image 1</h6>
                           <input type="file" class="form-control" name="image[]"
                              accept="image/png, image/gif, image/jpeg">
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 col-12">
                        <div class="form-group mb-lg-5">
                           <h6 class="mb-3">Image 1</h6>
                           <input type="file" class="form-control" name="image[]"
                              accept="image/png, image/gif, image/jpeg">
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 col-12">
                        <div class="form-group mb-lg-5">
                           <h6 class="mb-3">Image 1</h6>
                           <input type="file" class="form-control" name="image[]"
                              accept="image/png, image/gif, image/jpeg">
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 col-12">
                        <div class="form-group mb-lg-5">
                           <h6 class="mb-3">Availablity</h6>
                           <select id="type" class="form-select" name="stock" required>
                              <option value="" selected="">Select</option>
                              <option value="0">In Stock</option>
                              <option value="1">Out Stock</option>

                           </select>
                        </div>
                        <div class="form-group">
                           <button type="submit" name="productSubmit"
                              class="btn btn-sm btn-primary"><span>Save</span></button>
                        </div>
                     </div>

                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</main>
</div>

<?php include "./footer.php";

if (isset($_POST['productSubmit'])) {
   $name = $_POST['name'];
   $category = $_POST['category'];
   $code = $_POST['code'];
   $price = $_POST['price'];
   $stock = $_POST['stock'];
   $image = $_FILES['image'];
   $totalFile = count($_FILES['image']['name']);

   $files = [];

   for ($i = 0; $i < $totalFile; $i++) {
      if ($_FILES['image']['tmp_name'][$i] != "") {
         $filename = $_FILES['image']['name'][$i];
         $tempname = $_FILES['image']['tmp_name'][$i];
         $folder = "../backend/images/" . $filename;
         if (move_uploaded_file($tempname, $folder)) {
            $upload = 1;
            $pic[$i] = $_FILES['image']['name'][$i];
         }
         array_push($files, $filename);
      }
   }

   if (!$name || !$code || !$price) {
      ?>
      <script>
         alert("Enter Details");
      </script>
      <?php
      return;
   }
   echo $query = "INSERT INTO `products`(`categoryId`, `name`, `skuCode`, `image1`, `image2`, `image3`, `image4`, `image5`, `price`, `availbility`) VALUES (
      $category,
      '$name',
      '$code',
      '$files[0]',
      '$files[1]',
      '$files[2]',
      '$files[3]',
      '$files[4]',
      $price,
      $stock

   )";
   $result = $db->query($query);
   if (!$result) {
      ?>
      <script>
         alert("Some Error Occured, While Adding Products");
      </script>
      <?php
      return;
   }
   ?>
   <script>
      alert("Product Added Successfull");
      location.replace('./dashboard.php')
   </script>
   <?php


}

?>