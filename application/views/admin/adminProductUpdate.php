<section class="adminProductInsert">
  <div class="container">
    <h3 class="mt-4">Admin Product Update</h3>
    <nav aria-label="breadcrumb" class="list mt-4">
      <ol class="breadcrumb p-3">
        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/Home">Home</a></li>
        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/ProducList">Products</a></li>
        <li class="breadcrumb-item active" aria-current="page">Update</li>
      </ol>
    </nav>

    <form action="<?php echo base_url('AdminProductList/fungsiEdit') ?>"  method="POST">
    <input type="hidden" name="id" value="<?php echo $queryPdtDtl->id ?> ">
      <div class="row">
        <div class="col-md-6 mb-3">
          <table class="table">
            <tr>
              <td>
                <label for="title">Title</label>
              </td>
              <td>
                <input type="text" class="form-control" name="title" id="title" placeholder="" value="<?php echo $queryPdtDtl->title ?>" required="">
              </td>
            </tr>

            <tr>
              <td>
              <label for="description">Description</label>
              </td>
              <td>
              <textarea class="form-control" id="description" rows="3"></textarea>
              </td>
            </tr>
  
            <tr>
              <td>
                <label for="price">Price</label>
              </td>
              <td>
                <input type="text" class="form-control" name="price" id="price" value="<?php echo $queryPdtDtl->price ?>" placeholder="" required="">
              </td>
            </tr>

            <tr>
              <td>
                <label for="quantity">Quantity</label>
              </td>
              <td>
                <input type="text" class="form-control" name="quantity" id="quantity" value="<?php echo $queryPdtDtl->quantity ?>" placeholder="" required="">
              </td>
            </tr>

            <tr>
              <td>
              <label for="image">Image</label>
              </td>
              <td>
              <input class="form-control mt-2" type="file" name="image" id="image">
              </td>
            </tr>

            <tr>
              <td>
              <label for="featured">Featured</label>
              </td>
              <td>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="featured" id="featured" value="<?php echo $queryPdtDtl->featured ?>" checked>
                <label class="form-check-label" for="featured">
                  Featured
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="featured" id="unfeatured" value="<?php echo $queryPdtDtl->featured ?>">
                <label class="form-check-label" for="unfeatured">
                Unfeatured
                </label>
              </div>
              </td>
            </tr>

            <tr>
              <td>
              <label for="show_hide">Show / Hide</label>
              </td>
              <td>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="show_hide" id="show" value="<?php echo $queryPdtDtl->show_hide ?>" checked>
                <label class="form-check-label" for="show">
                  Show
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="show_hide" id="hide" value="<?php echo $queryPdtDtl->show_hide ?>">
                <label class="form-check-label" for="hide">
                Hide
                </label>
              </div>
              </td>
            </tr>

            <tr>
              <td class="text-center">
              <div class="btn-product mb-3" style="text-align: right;">
                  <a href="<?php echo base_url(); ?>/AdminProductList" class="btn btn-dark text-white btn-sm">Cancel</a>
                </div>
              </td>
              <td>
                <button class="btn btn-dark text-white btn-sm">Update</button>
              </td>
            </tr>
            
          </table>

        </div>
      </div>

      <hr class="mb-4">
      
    </form>
  </div>
</section>