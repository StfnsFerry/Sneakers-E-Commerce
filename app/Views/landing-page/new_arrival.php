<?= $this->extend('layouts/index');?>
<?= $this->section('content');?>

    <section id="home" class="new-arr">
      <div class="container">
        <div class="new-img">
          <div
            id="carouselExampleAutoplaying"
            class="carousel slide"
            data-bs-ride="carousel"
          >
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="<?=base_url('assets/img/new-arr.jpg')?>" class="d-block w-100" alt="..." />
              </div>
              <div class="carousel-item">
                <img src="<?=base_url('assets/img/new-arr2.jpg')?>" class="d-block w-100" alt="..." />
              </div>
              <div class="carousel-item">
                <img src="<?=base_url('assets/img/new-arr3.jpg')?>" class="d-block w-100" alt="..." />
              </div>
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#carouselExampleAutoplaying"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#carouselExampleAutoplaying"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="first-look">
          <div class="title-new">
            <p>First Look</p>
            <h1>NIKE AIR MAX PULSE</h1>
            <p>
              Extreme comfort. Hyper durable. Max volume. Introducing the Air
              Max Pulse<br />
              —designed to push you past your limits and help you go to the max.
            </p>
          </div>
          <div class="slider-new">
            <h4>Best of Air Max</h4>
          </div>
          <div class="wrapper-new">
            <?php foreach ($produk as $produk){

            ?>
              <div class="product-box" id="box">
                <a href="/detail-produk/<?=$produk['id']?>">
                  <img src="<?= $produk['foto']?>" class="product-img">
                </a>
                <h2 class="product-title"><?= $produk['nama_produk']?></h2>
                <span class="price">Rp <?= number_format($produk['harga'],0,',','.')?></span>
                <i class="bx bx-shopping-bag add-cart"></i>
              </div>
              <?php
              }
            ?>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="featured">
          <div class="featured-img">
            <img src="<?=base_url('assets/img/fea-1.jpg')?>" />
          </div>
          <div class="title-new">
            <h1>FLIGHT ESSENTIALS</h1>
            <p>
              Your built-to-last, all-week wears—but with style only Jordan
              Brand can deliver.
            </p>
          </div>
          <h4>The Essentials</h4>
          <div class="fea-content">
            <div class="row">
              <div class="col-4">
                <img src="<?=base_url('assets/img/fea-men.jpg')?>" alt="" />
              </div>
              <div class="col-4">
                <img src="<?=base_url('assets/img/fea-wmen.jpg')?>" alt="" />
              </div>
              <div class="col-4">
                <img src="<?=base_url('assets/img/fea-kids.jpg')?>" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="new">
      <div class="container">
        <div class="content-new">
          <div class="title-new">
            <h1>STEP INTO WHAT FEELS GOOD</h1>
            <p>
              Cause everyone should know the feeling of running in that perfect
              pair.
            </p>
          </div>
          <div class="wrapper-new">
          <?php foreach ($item as $item){
          ?>
            <div class="product-box" id="box_<?= $item['id']?>">
              <a href="/detail-produk/<?=$item['id']?>">
                <img src="<?= $item['foto']?>" class="product-img">
              </a>
              <h2 class="product-title"><?= $item['nama_produk']?></h2>
              <span class="price">Rp <?= number_format($item['harga'],0,',','.')?></span>
              <i class="bx bx-shopping-bag add-cart"></i>
            </div>
            <?php
            }
          ?>
          </div>     
          <a href="/collection">
            <button type="button" class="btn btn-outline-dark collec">
              See Collections <i class="bx bx-chevron-right mb-0 ms-1"></i>
            </button>
          </a>
        </div>
      </div>
    </section>
<?= $this->endSection();?>
