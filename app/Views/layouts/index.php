<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sneakers e-Commerce</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/sneakers.css')?>" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
    />
    <link href="<?= base_url("sb-admin-2/vendor/fontawesome-free/css/all.min.css") ?>" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet"
    />
    <link href="<?= base_url('assets/css/sb-admin-2.min.css')?>" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  </head>
  </head>
  <body>
    <header class="header">
      <p class="logo">Sneakers<span>.</span></p>
      <div class="bx bx-menu" id="menu-icon"></div>

      <ul class="navlist mb-0 ps-0">
        <li><a href="<?= base_url('/home')?>">HOME</a></li>
        <li><a href="<?= base_url('/newarrival')?>">NEW ARRIVALS</a></li>
        <li><a href="<?= base_url('/shop')?>">SHOP</a></li>
        <li><a href="<?= base_url('/collection')?>">COLLECTION</a></li>
      </ul>

      <div class="nav-icon">
        <a href=""><i class="bx bx-search"></i></a>
        <a href=""><i class="bx bx-cart"></i></a>
        <div class="dropdown no-arrow">
          <a
            href="#"
            role="button"
            id="dropdownMenuLink"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >
            <p class="sort mb-0">
              <i class="bx bx-user"></i>
            </p>
          </a>
          <div
            class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
            aria-labelledby="dropdownMenuLink"
          >
            <div class="dropdown-header">Pilih:</div>
            <?php if (logged_in()) : ?>
              <a class="dropdown-item" href="">Profile</a>
              <li><hr class="dropdown-divider"></li>
              <a class="dropdown-item" href="/logout">Logout</a>  
            <?php else : ?>
              <a class="dropdown-item" href="/login">Login</a> 
            <?php endif; ?>     
          </div>
        </div>   
      </div>
    </header>
     
    <?= $this->renderSection('content'); ?>
    
    <section id="contact">
      <div class="container">
        <div class="subscribe">
          <h1 class="title mb-0">Join Our <span>News Letters</span></h1>
          <p class="desc">
            Sign up for our newsletter today and embark on a fashionable journey
            where every step is<br />
            an expression of your unique style. Join us and step up your shoe
            game <span>now!</span>
          </p>
          <div class="email mb-3">
            <input
              type="email"
              class="form-control"
              id="email"
              placeholder="Insert your mail here"
            />
            <button type="button" class="btn btn-outline-dark">Send</button>
          </div>
        </div>
        <div class="footer">
          <hr />
          <p class="copyright">
            © 2023 <span>Sneakers e-Commerce</span>. All rights reserved
          </p>
        </div>
      </div>
    </section>
    <script src="<?=base_url('assets/vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?=base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
    <script src="<?= base_url('assets/js/script.js')?>"></script>  
  </body>
</html>
