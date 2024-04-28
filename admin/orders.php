<?php include "./header.php";
$order = $db->query("SELECT * FROM `orders` Inner Join `products` on orders.productId=products.id  Inner Join `category` on category.id=products.categoryId");
?>


<main class="py-6 bg-surface-secondary">
   <div class="container-fluid">
      <div class="card">
         <div class="card-header border-bottom">
            <div class="row align-items-center">
               <div class="col-sm col-12">
                  <h5 class="mb-0">Orders Details</h5>
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
                           <th>Order Id</th>
                           <th>Product Name</th>
                           <th>Category</th>
                           <th>Price</th>
                           <th>Quantity</th>
                           <th>Status</th>
                           <th>Product Date</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php $_ = 1;
                        while ($data = $order->fetch_assoc()) {
                           ?>
                           <tr>
                              <td><?php echo $_ ?></td>
                              <td><?php echo $data['orderId'] ?></td>
                              <td><?php echo $data['name'] ?></td>
                              <td><?php echo $data['category'] ?></td>
                              <td>₹ <?php echo $data['total'] ?></td>
                              <td><?php echo $data['qty'] ?></td>
                              <td style="color: red">
                                 <?php echo $data['bookStatus'] ? "In Stock" : "Booked" ?>
                              </td>
                              <td><?php echo date('d M, Y', strtotime($data['createdAt'])); ?></td>
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

<?php include "./footer.php" ?>