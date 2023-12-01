<?= $this->extend('layouts/index');?>
<?= $this->section('content');?>

    <section id="shop" class="shop">
        <div class="container">
            <h2 class="section-title">Shop Product</h2>
            <?php foreach ($toko as $tokoItem):
            ?>
            <div class="seller-shop mb-5">
              <div class="seller-header mb-3 d-flex justify-content-between align-items-center">
                <div class="seller-info d-flex justify-content-center align-items-center">
                  <div class="avatar me-3">
                    <img src="<?= base_url();?>assets/img/<?= $tokoItem['user_image']?>" class="img-fluid">
                  </div>
                  <div class="text">
                    <p class="seller-title mb-0"><?= $tokoItem['username']?></p>
                    <p class="seller-username mb-0"><?= $tokoItem['username']?></p>
                  </div>
                </div>
                <a href="" class="btn btn-light">Kunjungi Toko</a>
              </div>
              <div class="shop-content">
                <?php foreach($produk[$tokoItem['id']] as $produkItem): ?>
                  <div class="product-box" id="box">
                      <a href="detail-produk/<?=$produkItem['id']?>">
                        <img src="<?= $produkItem['foto']?>" class="product-img">
                      </a>
                      <h2 class="product-title"><?= $produkItem['nama_produk']?></h2>
                      <span class="price">Rp <?= number_format($produkItem['harga'],0,',','.')?></span>
                      <i class="bx bx-shopping-bag add-cart"></i>
                  </div> 
                  <?php endforeach; ?>  
              </div>
            </div>  
            <?php 
            endforeach; ?>   
        </div>
    </section>
<?= $this->endSection();?>
