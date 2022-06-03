
      <section class="payment">
        <div class="container">
          <div class="row mt-4">
            <div class="col-md-12 order-md-1">
              <h4 class="mb-3">Confim Payment</h4>
              <form class="needs-validation" novalidate="">
                <div class="row">
                  <div class="col-md-6">
                    <div class="row">
                      <div class="col-4">
                        <p>Order ID</p>
                        <p class="mt-4">Account Name</p>
                        <p class="mt-4">Account Number</p>
                        <p class="mt-4">Bank Name</p>
                        <p class="mt-4">Transfer Data</p>
                        <p class="mt-4">Transfer Receipt</p>
                        
                      </div>
                      <div class="col-8">
                        <p>OD123</p>

                        <input type="text" class="form-control">

                        <input type="text" class="form-control mt-2">

                        <input type="text" class="form-control mt-2">

                        <div class="input-group date mt-2" id="datepicker">
                          <input type="text" class="form-control">
                          <span class="input-group-append w-50">
                            <span class="input-group-text bg-white py-2 w-25" >
                              <i class="far fa-calendar-alt fs-4"></i>
                            </span>
                          </span>
                        </div>

                        <input class="form-control mt-2" type="file" id="formFile">

                        <div class="btn-product my-4">
                          <a href="<?php echo base_url(); ?>/Thankyou" class="btn btn-dark text-white btn-sm" style="float: right;"><i class="fas fa-check-circle fs-6 me-2"></i>Confirm Payment</a>
                        </div>
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

      <script type="text/javascript">
          $(function() {
              $('#datepicker').datepicker();
          });
      </script>
