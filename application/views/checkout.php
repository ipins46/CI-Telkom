    <section class="payment">
      <div class="container">
        <div class="row mt-4">
          <div class="col-md-12 order-md-1">
            <h4 class="mb-3">Checkout</h4>
            <form class="needs-validation" novalidate="">
              <div class="row">
                <div class="col-md-6 mb-3">
                  <div class="mb-3">
                    <label for="Name">Name</label>
                    <input type="text" class="form-control" id="Name" placeholder="" value="" required="">
                  </div>

                  <div class="mb-3">
                    <label for="Phone">Phone</label>
                    <input type="text" class="form-control" id="Phone" placeholder="+62..." value="" required="">
                  </div>

                  <div class="mb-3">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" placeholder="Jl..." required="">
                    <div class="invalid-feedback">
                      Please enter your shipping address.
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="country">Country</label>
                      <select class="custom-select d-block w-50 py-1" id="country" required="">
                        <option value="">Select Country</option>
                        <option>Indonesia</option>
                        <option>Thailand</option>
                        <option>Filipina</option>
                      </select>
                      <div class="invalid-feedback">
                        Please select a valid country.
                      </div>
                    </div>
                    <div class="col-md-6 mb-3 ml-3">
                      <label for="city">City</label>
                      <select class="custom-select d-block w-50 py-1" id="city" required="">
                        <option value="">Select City</option>
                        <option>Jakarta</option>
                        <option>Surabaya</option>
                        <option>Bekasi</option>
                      </select>
                      <div class="invalid-feedback">
                        Please provide a valid city.
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="subDistrict">Sub District</label>
                      <select class="custom-select d-block w-50 py-1" id="subDistrict" required="">
                        <option value="">Select Sub District</option>
                        <option>Cengkareng</option>
                        <option>Kalideres</option>
                        <option>Tegal Alur</option>
                      </select>
                      <div class="invalid-feedback">
                        Please select a valid sub district.
                      </div>
                    </div>
                    <div class="col-md-6 mb-3 ml-3">
                      <label for="zipCode">Zip Code</label>
                      <input type="text" class="form-control w-50" id="zipCode" placeholder="" value="" required="">
                      <div class="invalid-feedback">
                        Please provide a valid zip code.
                      </div>
                    </div>
                  </div>
      
                  <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="apa@aja.com">
                    <div class="invalid-feedback">
                      Please enter a valid email address for shipping updates.
                    </div>
                  </div>
                </div>
              </div>

              <hr class="mb-4">
              
            </form>
          </div>
        </div>
      </div>
    </section>

    <section class="cart">
      <div class="container">
        <div class="row row-cart">
          <h4>Cart</h4>
          <div class="col  table-responsive mt-4 mx-3">
            <table class="table">
              <thead class="table-warning">
                <tr">
                  <th scope="col" class="th-header">Gambar</th>
                  <th scope="col" class="th-header">Produk</th>
                  <th scope="col" class="th-header">Jumlah</th>
                  <th scope="col" class="th-header">Subtotal</th>
                </tr>
              </thead>
              <tbody class="align-middle">
                <tr>
                  <td><img src="<?php echo base_url(); ?>assets/img/product/baju-1.jpg" class="img-cart"></td>
                  <td>Baju polos <br> Rp. 10.000</td>
                  <td>
                    <span class="mx-4">100</span>
                  </td>
                  <td>Rp. 1.000.000</td>
                </tr>
                <tr>
                  <td><img src="<?php echo base_url(); ?>assets/img/product/camera-1.jpg" class="img-cart"></td>
                  <td>Camera Sony <br> Rp. 10.000</td>
                  <td>
                    <span class="mx-4">100</span>
                  </td>
                  <td>Rp. 1.000.000</td>
                </tr>
                <tr>
                  <td><img src="<?php echo base_url(); ?>assets/img/product/sepatu-1.jpg" class="img-cart"></td>
                  <td>Sepatu Aero <br> Rp. 10.000</td>
                  <td>
                    <span class="mx-4">100</span>
                  </td>
                  <td>Rp. 1.000.000</td>
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
                      <a href="<?php echo base_url(); ?>/Cart" class="btn btn-dark text-white btn-sm"><i class="fas fa-shopping-cart fs-6 me-2"></i>Back to Cart</a>
                    </div>
                  </td>
                  <td class="th-header">
                    <div class="btn-product mx-4 d-grid">
                      <a href="<?php echo base_url(); ?>/ConfirmPayment" class="btn btn-dark text-white btn-sm "><i class="far fa-money-bill-alt fs-6 me-2"></i>Confirm Payment</a>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>