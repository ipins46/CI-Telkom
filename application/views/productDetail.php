    <section class="breadcrumbs">
      <div class="container">
        <nav aria-label="breadcrumb" class="list mt-4">
          <ol class="breadcrumb p-3">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/Home">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/ProductList">Products</a></li>
            <li class="breadcrumb-item active" aria-current="page">ProductDetail</li>
          </ol>
        </nav>
      </div>
    </section>

    <section class="singleProduct">
      <div class="container">
        <div class="row row-product">
          <div class="col-lg-5">
            <figure class="figure">
              <img src="<?php echo base_url(); ?>assets/img/product/baju-1.jpg" class="figure-img img-fluid img-product">
            </figure>
          </div>

          <div class="col-lg-7">
            <h4>Baju Pria Warna Hitam</h4>
            <div class="garisJudul"></div>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Delectus quod dolorem tempore tenetur facilis! Similique, voluptate dolorem voluptas, possimus, quo ullam vero accusantium soluta ipsa earum quis porro repellendus illum.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Delectus quod dolorem tempore tenetur facilis! Similique, voluptate dolorem voluptas, possimus, quo ullam vero accusantium soluta ipsa earum quis porro repellendus illum.</p>
            <h3 class="text-muted mt-5 mb-3">Rp. 10.000</h3>

            <div class="row">
              <div class="col-3">
                <div class="tombol">
                  <button type="button" class="btn btn-dark btn-sm"><i class="fas fa-minus"></i></button>
                  <span class="mx-4">100</span>
                  <button type="button" class="btn btn-warning btn-sm"><i class="fas fa-plus text-white"></i></button>
                </div>
              </div>

              <div class="col-9">
                <div class="btn-product">
                  <a href="<?php echo base_url(); ?>/Cart" class="btn btn-dark text-white me-2"><i class="fas fa-shopping-cart fs-6 me-2"></i> Add to Cart</a>
                </div>
              </div>
            </div>
            
              
              
          </div>
        </div>
      </div>
    </section>

    <section class="product">
      <div class="container my-4">
        <div class="title-product">
          <h5 class="text">Other Products</h5>
        </div>
        <div class="row mt-3">
          <div class="col-lg-3 col-md-2 col-sm-4 col-6 mt-2">
            <div class="card">
              <img src="<?php echo base_url(); ?>assets/img/product/baju-1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h6 class="card-title">Baju 1</h6>
                
                <p class="card-text mt-2">Rp. 10.000</p>
                <a href="<?php echo base_url(); ?>/ProductDetail" class="btn btn-dark d-grid">Add to Cart</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-2 col-sm-4 col-6 mt-2">
            <div class="card">
              <img src="<?php echo base_url(); ?>assets/img/product/celana-1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h6 class="card-title">Celana 1</h6>
                
                <p class="card-text mt-2">Rp. 10.000</p>
                <a href="<?php echo base_url(); ?>/ProductDetail" class="btn btn-dark d-grid">Add to Cart</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-2 col-sm-4 col-6 mt-2">
            <div class="card">
              <div class="kotak">
                <img src="<?php echo base_url(); ?>assets/img/product/sepatu-1.jpg" class="card-img-top" alt="...">
              </div>
              <div class="card-body">
                <h6 class="card-title">Sepatu 1</h6>
                
                <p class="card-text mt-2">Rp. 10.000</p>
                <a href="<?php echo base_url(); ?>/ProductDetail" class="btn btn-dark d-grid">Add to Cart</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-lg-3 col-md-2 col-sm-4 col-6 mt-2">
            <div class="card">
              <img src="<?php echo base_url(); ?>assets/img/product/baju-1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h6 class="card-title">Baju 1</h6>
                
                <p class="card-text mt-2">Rp. 10.000</p>
                <a href="<?php echo base_url(); ?>/ProductDetail" class="btn btn-dark d-grid">Add to Cart</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-2 col-sm-4 col-6 mt-2">
            <div class="card">
              <img src="<?php echo base_url(); ?>assets/img/product/celana-1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h6 class="card-title">Celana 1</h6>
                
                <p class="card-text mt-2">Rp. 10.000</p>
                <a href="<?php echo base_url(); ?>/ProductDetail" class="btn btn-dark d-grid">Add to Cart</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-2 col-sm-4 col-6 mt-2">
            <div class="card">
              <div class="kotak">
                <img src="<?php echo base_url(); ?>assets/img/product/sepatu-1.jpg" class="card-img-top" alt="...">
              </div>
              <div class="card-body">
                <h6 class="card-title">Sepatu 1</h6>
                
                <p class="card-text mt-2">Rp. 10.000</p>
                <a href="<?php echo base_url(); ?>/ProductDetail" class="btn btn-dark d-grid">Add to Cart</a>
              </div>
            </div>
          </div>
        </div>
        <div class="seemore my-4">
          <a href="<?php echo base_url(); ?>/ProductList">See more...</a>
        </div>
      </div>
    </section>