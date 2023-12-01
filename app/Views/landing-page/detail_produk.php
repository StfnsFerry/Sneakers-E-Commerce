<?= $this->extend('layouts/index');?>
<?= $this->section('content');?>
    <section id="detail">
      <div class="container">
        <div class="detail_produk">
          <div class="back">
            <div class="icon">
                <a href="/shop"><i class="fas fa-regular fa-arrow-left"></i></a>
            </div>
            <div class="title">
                <p>Back to Shop</p>
                <h3>Details Product</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <div class="produk-img">
                <img
                  src="<?=$produk['foto']?>"
                  class="produk_img"
                />
              </div>
            </div>
            <div class="col-6">
              <div class="detail-box">
                <div class="desc-produk">
                  <h1><?=$produk['nama_produk']?></h1>
                  <span>Rp <?= number_format($produk['harga'],0,',','.')?></span>
                  <p>
                  <?=$produk['deskripsi']?>
                  </p>
                </div>
                <div class="size-guide">
                  <div class="add-to">
                    <a href="/checkout/<?= $produk['id']?>">
                      <button type="button" class="btn btn-outline-dark add">
                        Checkout
                      </button>
                    </a>
                    <button type="button" class="btn btn-outline-dark fav">
                      Favorite<i class="bx bx-heart"></i>
                    </button>
                  </div>
                  <p class="disc mt-4">
                    This product is excluded from site <br />promotions and
                    discounts.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="more-like">
          <div class="slider-new">
            <h4>You Might Also Like</h4>
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
        </div>
        </div>
      </div>
    </section>
 <?= $this->endSection();?>