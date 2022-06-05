<section class="adminProductInsert">
  <div class="container">
    <h3 class="mt-4">Admin Product Insert</h3>
    <nav aria-label="breadcrumb" class="list mt-4">
      <ol class="breadcrumb p-3">
        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/Home">Home</a></li>
        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/ProducList">Products</a></li>
        <li class="breadcrumb-item active" aria-current="page">Insert</li>
      </ol>
    </nav>

    <form action="<?php echo base_url('AdminProductList/fungsiAdd') ?>" method="POST">
      <div class="row">
        <div class="col-md-6 mb-3">
          <table class="table">
            <tr>
              <td>
                <label for="title">Title</label>
              </td>
              <td>
                <input type="text" class="form-control" name="title" id="title" placeholder="" value="" required="">
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
                <input type="text" class="form-control" name="price" id="price" placeholder="" required="">
              </td>
            </tr>

            <tr>
              <td>
                <label for="quantity">Quantity</label>
              </td>
              <td>
                <input type="text" class="form-control" name="quantity" id="quantity" placeholder="" required="">
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
                <input class="form-check-input" type="radio" name="featured" id="featured" value="featured" checked>
                <label class="form-check-label" for="featured">
                  Featured
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="featured" id="unfeatured" value="unfeatured">
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
                <input class="form-check-input" type="radio" name="show_hide" id="show" value="show" checked>
                <label class="form-check-label" for="show">
                  Show
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="show_hide" id="hide" value="hide">
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
                <button class="btn btn-dark text-white btn-sm">Submit</button>
              </td>
            </tr>
            
          </table>

        </div>
      </div>

      <hr class="mb-4">
      
    </form>
  </div>
</section>