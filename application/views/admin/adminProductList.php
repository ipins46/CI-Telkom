<section class="adminProductList">
  <div class="container" style="height: 500px;">
    <h3 class="mt-4">Admin Product List</h3>
    <nav aria-label="breadcrumb" class="list mt-4">
      <ol class="breadcrumb p-3">
        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/Home">Home</a></li>
        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/ProducList">Products</a></li>
        <li class="breadcrumb-item active" aria-current="page">List</li>
      </ol>
    </nav>

    <div class="btn-product mb-3" style="text-align: right;">
      <a href="<?php echo base_url(); ?>AdminProductList/admin_productInsert" class="btn btn-dark text-white btn-sm "><i class="fas fa-plus fs-6 me-2"></i>Add New Product</a>
    </div>

    <table class="table table-dark table-striped table-hover" border="1">
      <thead class="table-warning">
        <tr>
          
          <th scope="col">No</th>
          <th scope="col">Title</th>
          <th scope="col">Price</th>
          <th scope="col">Quantity</th>
          <th scope="col">Show / Hide</th>
          <th scope="col">Featured</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>

      <?php 
        $count = 0;
        foreach ($queryAllPdt as $row) {
          $count = $count + 1;
      ?>

      <tr>
        <td><?php echo $count ?></td>
        <td><?php echo $row->title ?></td>
        <td><?php echo $row->price ?></td>
        <td><?php echo $row->quantity ?></td> 
        <td><?php echo $row->show_hide ?></td>
        <td><?php echo $row->featured ?></td>
        <td>
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="<?php echo base_url('AdminProductList/admin_productUpdate'); ?>/<?php echo $row->id ?>">Update</a></li>

            <li><a class="dropdown-item" href="#">Hide</a></li>
            
            <li><a class="dropdown-item" href="<?php echo base_url('AdminProductList/fungsiDelete'); ?>/<?php echo $row->id ?>">Delete</a></li>
          </ul>
        </div>
        </td>
      </tr>

      <?php 
        }
      ?>
      
    </table>
  </div>
</section>