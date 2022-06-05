    <section class="breadcrumbs">
      <div class="container">
        <nav aria-label="breadcrumb" class="list mt-4">
          <ol class="breadcrumb p-3">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/Home">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cart</li>
          </ol>
        </nav>
      </div>
    </section>

    <section class="cart">
      <div class="container">
        <div class="row row-cart">
          <div class="col  table-responsive mt-4 mx-3">
            <table class="table">
              <thead class="table-warning">
                <tr>
                  <th scope="col" class="th-header">Gambar</th>
                  <th scope="col" class="th-header">Produk</th>
                  <th scope="col" class="th-header">Jumlah</th>
                  <th scope="col" class="th-header">Subtotal</th>
                  <th scope="col" class="th-header">Hapus</th>
                </tr>
              </thead>
              <tbody class="align-middle">
                <tr>
                  <td><img src="<?php echo base_url(); ?>assets//img/product/baju-1.jpg" class="img-cart"></td>
                  <td>Baju polos <br> Rp. 10.000</td>
                  <td>
                    <button type="button" class="btn btn-dark btn-sm"><i class="fas fa-minus"></i></button>
                    <span class="mx-4">100</span>
                    <button type="button" class="btn btn-dark btn-sm"><i class="fas fa-plus"></i></button>
                  </td>
                  <td>Rp. 1.000.000</td>
                  <th scope="row"><a href="#"><i class="fas fa-trash-alt text-danger fs-4"></i></a></th>
                </tr>
                <tr>
                  <td><img src="<?php echo base_url(); ?>assets//img/product/camera-1.jpg" class="img-cart"></td>
                  <td>Camera Sony <br> Rp. 10.000</td>
                  <td>
                    <button type="button" class="btn btn-dark btn-sm"><i class="fas fa-minus"></i></button>
                    <span class="mx-4">100</span>
                    <button type="button" class="btn btn-dark btn-sm"><i class="fas fa-plus"></i></button>
                  </td>
                  <td>Rp. 1.000.000</td>
                  <th scope="row"><a href="#"><i class="fas fa-trash-alt text-danger fs-4"></i></a></th>
                </tr>
                <tr>
                  <td><img src="<?php echo base_url(); ?>assets//img/product/sepatu-1.jpg" class="img-cart"></td>
                  <td>Sepatu Aero <br> Rp. 10.000</td>
                  <td>
                    <button type="button" class="btn btn-dark btn-sm"><i class="fas fa-minus"></i></button>
                    <span class="mx-4">100</span>
                    <button type="button" class="btn btn-dark btn-sm"><i class="fas fa-plus"></i></button>
                  </td>
                  <td>Rp. 1.000.000</td>
                  <th scope="row"><a href="#"><i class="fas fa-trash-alt text-danger fs-4"></i></a></th>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="row row-cart">
          <div class="col table-responsive">
            <table class="table ms-auto text-center mb-5 mt-3 mx-3" id="table-checkout">
              <thead class="table-warning">
                <tr>
                  <th scope="col" colspan="2" class="th-header">Total Keranjang Belanja</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="fw-bold th-header">Grand Total</td>
                  <td class="th-header">Rp. 3.000.000</td>
                </tr>
                <tr>
                  <td class="th-header">
                    <div class="btn-product mx-4 d-grid">
                      <a href="<?php echo base_url(); ?>/ProductList" class="btn btn-dark text-white btn-sm "><i class="fas fa-shopping-basket fs-6 me-2"></i>Continue Shopping</a>
                    </div>
                  </td>
                  <td class="th-header">
                    <div class="btn-product mx-4 d-grid">
                      <a href="<?php echo base_url(); ?>/Checkout" class="btn btn-dark text-white btn-sm "><i class="fas fa-check-circle fs-6 me-2"></i>Checkout</a>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>