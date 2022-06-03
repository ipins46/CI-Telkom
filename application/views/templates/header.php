<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/app.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fontawesome-v5/css/all.min.css">
    <title>Onero Store</title>
  </head> 
  <body>

    <section class="header">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="<?php echo base_url(); ?>/Home">
            <img src="<?php echo base_url(); ?>assets/img/loga.png" alt="" width="50" height="50" class="me-2">
            Onero <strong>Store</strong>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <form class="d-flex ms-auto my-4 my-lg-0">
              <input class="form-control me-2" type="search" placeholder="Search Item" aria-label="Search">
              <button class="btn btn-light" type="submit"><i class="fas fa-search"></i></button>
            </form>

            <a class="cart ms-auto" href="<?php echo base_url(); ?>/Cart"><i class="fas fa-shopping-cart"></i></a>
            
            <ul class="navbar-nav ms-auto">
              <li class="nav-item mx-5">
                <a class="nav-link" href="<?php echo base_url(); ?>/ProductList">Products</a>
              </li>
              <li>
                <a href="<?php echo base_url(); ?>/Login" class="btn btn-login me-lg-2 ms-lg-2 my-2 my-lg-0">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </section>