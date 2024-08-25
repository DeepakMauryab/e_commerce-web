<?php include "./header.php";
$products = $db->query('SELECT * FROM `contact`');

?>


<main class="py-6 bg-surface-secondary">
   <div class="container-fluid">
      <div class="card">
         <div class="card-header border-bottom">
            <div class="row align-items-center">
               <div class="col-sm col-12">
                  <h5 class="mb-0">Customer Query</h5>

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
                           <th>Name</th>
                           <th>Email</th>
                           <th>Message</th>

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

                                 <td><?php echo $data['email'] ?></td>
                                 <td><?php echo $data['message'] ?></td>

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
<?php include "./footer.php" ?>