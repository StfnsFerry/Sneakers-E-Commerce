<?= $this->extend('layouts/index');?>
<?= $this->section('content');?>

<section id="home" class="home">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-6">
            <div class="home-text">
              <h4>Big sale up to 20% off</h4>
              <h1>This Nike <br />Air Jordan<br />Dior <span>-</span></h1>
              <p>
                An Exclusive selection this season's trends
                <span>exclusively online</span>
              </p>
              <div class="price">
                <h3>$ 199.00</h3>
              </div>
              <a href="<?=base_url('/shop')?>">
                <button type="button" class="btn btn-outline-dark">
                  Shop Now
                </button>
              </a>
            </div>
          </div>
          <div class="col-6">
            <div class="home-img" style="background-image: url(<?= base_url('assets/img/homebg.png')?>) no-repeat; background-size: cover;"><img src="<?= base_url('assets/img/shoe1.png')?>" alt="" /></div>
          </div>
        </div>
        <div class="infograph d-flex">
          <ul class="info">
            <li class="info-item">20k+</li>
            <p>Orders Completed</p>
          </ul>
          <ul class="info">
            <li class="info-item">40k+</li>
            <p>Regular Visitor</p>
          </ul>
          <ul class="info">
            <li class="info-item">15k+</li>
            <p>Happy Customers</p>
          </ul>
        </div>
    </section>
    <section id="explore-more">
      <div class="container">
        <div class="explore">
          <div class="row exp">
            <div class="col-6 exp-pict" style="background-image: url(<?=base_url('assets/img/exp-img.png')?>); background-size: cover; background-position: center;"></div>
            <div class="col-6 exp-desc">
              <h4>WE PROVIDE</h4>
              <h1>MODERN SHOES</h1>
              <p>
                Design for the way you live your life. Atoms are beautiful in<br />
                their simplicity, supporting your feet with absolute comfort.
              </p>
              <a href="<?=base_url('/shop')?>">
                <button type="button" class="btn btn-outline-dark">
                  Explore More <i class="bx bx-chevron-right mb-0 ms-1"></i>
                </button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="new">
      <div class="container">
        <div class="content-new">
          <div class="title-new">
            <h1><span>NEW</span> ARRIVALS</h1>
            <p>Step into style with our newest shoe arrivals.</p>
          </div>
          <div class="shop-content">
            <?php foreach( $produk as $produk){
            ?>
            <div class="product-box" id="box_<?= $produk['id']?>">
              <a href="/detail-produk/<?=$produk['id']?>">
                <img
                  src="<?= $produk['foto']?>"
                  class="product-img"
                />
              </a>
              <h2 class="product-title"><?= $produk['nama_produk']?></h2>
              <span class="price">Rp <?= number_format($produk['harga'],0,',','.')?></span>
              <i class="bx bx-shopping-bag add-cart"></i>
            </div>
              <?php
              }
            ?>
        </div>
        <a href="<?= base_url('/newarrival')?>">
          <button type="button" class="btn btn-outline-dark">
            See More <i class="bx bx-chevron-right mb-0 ms-1"></i>
          </button>
        </a>
      </div>
    </section>
   <?= $this->endSection();?>