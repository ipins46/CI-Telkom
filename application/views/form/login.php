<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/login.css">

    <title>Onero Store</title>
  </head>
  <body style="background-color: #061F40;">

    <section class="login">
      <div class="container">
          <div class="card-new">
            <h3 class="text-center text-white mb-5">Onero Store Admin</h3>
            <div class="mb-3">
              <input type="username" class="form-control" id="exampleFormControlInput1" placeholder="Username">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="password">
            </div>
            <a href="<?php echo base_url(); ?>/Home">
              <button class="btn">Login</button>
            </a>

          </div>
      </div>
    </section>

    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>

