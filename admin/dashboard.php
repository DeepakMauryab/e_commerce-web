<?php include "./header.php";
$products = $db->query('SELECT *,products.id AS prd_id, category.id AS cat_id FROM `products` Inner JOIN category on products.categoryId= category.id  order by prd_id desc');

?>


<main class="py-6 bg-surface-secondary">
   <div class="container-fluid">
      <div class="card">
         <div class="card-header border-bottom">
            <div class="row align-items-center">
               <div class="col-sm col-6">
                  <h5 class="mb-0">Products Details</h5>

               </div>
               <div class="col-sm col-6 justify-content-end d-flex">
                  <a href="./other-settings.php" class="btn btn-sm btn-primary">Add Product</a>

               </div>

            </div>
         </div>
         <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
               <div class="form-group table-box card-header">
                  <table id="example" class="table table-striped nowrap" style="width:100%">
                     <thead>
                        <tr>
                           <th>Sr. No.</th>
                           <th>Product Name</th>
                           <th>Image</th>
                           <th>Category</th>
                           <th>Price</th>
                           <th>Status</th>
                           <th>Product Date</th>
                           <th>Action</th>
                           <th hidden>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php $_ = 1;
                        while ($data = $products->fetch_assoc()) {
                           ?>
                           <tr>
                              <form action="#" method="post">
                                 <td><?php echo $_ ?></td>
                                 <td><?php echo $data['name'] ?></td>
                                 <td>
                                    <figure style="width:100px;"><img src="../backend/images/<?php echo $data['image1'] ?>"
                                          alt=""></figure>
                                 </td>
                                 <td><?php echo $data['category'] ?></td>
                                 <td>₹ <?php echo $data['price'] ?></td>
                                 <td style="color: <?php echo $data['availbility'] ? "green" : "red" ?>">
                                    <?php echo $data['availbility'] ? "In Stock" : "Out Stock" ?>
                                 </td>
                                 <td><?php echo date('d M, Y', strtotime($data['createdAt'])); ?></td>
                                 <td> <button name="deleteProduct" type="submit" class="btn btn-danger btn-sm"><i
                                          class="bi bi-trash"></i></button></td>
                                 <td><input type="number" hidden name="id" value="<?php echo $data['prd_id']; ?>"></td>
                              </form>
                           </tr>
                           <?php $_++;
                        } ?>

                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</main>
</div>



<!--  -->
<?php include "./footer.php";

if (isset($_POST['deleteProduct'])) {
   $id = $_POST['id'];

   $query = "DELETE FROM `products` WHERE id=$id";

   $result = $db->query($query);
   if (!$result) {
      ?>
      <script>
         alert("Some Error Occured, While removing Products");
      </script>
      <?php
      return;
   }
   ?>
   <script>
      alert("Product deleted Successfull");
      location.replace('./dashboard.php')
   </script>
   <?php


}

?>