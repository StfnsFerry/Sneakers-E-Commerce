<?= $this->extend('layouts/index');?>
<?= $this->section('content');?>
    <section id="home">
      <div class="container">
        <div class="produk-content">
            <div class="back">
                <div class="icon">
                    <a href="/detail-produk/<?=$produk['id']?>"><i class="fas fa-regular fa-arrow-left"></i></a>
                </div>
                <div class="title">
                    <p>Back to Product</p>
                    <h3>Checkout</h3>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-6 deliver">
              <div class="form-pengiriman">
                <form action="" method="POST">
                  <h1 class="mb-4">Enter your name and address:</h1>

                  <div class="input-box">
                    <input
                      type="text"
                      name="nama"
                      placeholder="Name"
                      required
                    />
                  </div>
                  <div class="input-box">
                    <input
                      type="text"
                      name="alamat"
                      placeholder="Address"
                      required
                    />
                  </div>
                  <div class="input-box">
                    <input
                      type="text"
                      name="no_hp"
                      placeholder="Phone Number"
                      required
                    />
                  </div>
                  <div class="add-to">
                    <a href="">
                        <button class="btn btn-outline-dark fav">Continue</button>
                    </a>
                  </div>     
                </form>
              </div>
            </div>
            <div class="col-6 deliver">
              <div class="order-sum">
                <h1 class="mb-4">Order Summary</h1>
                <div class="subtotal d-flex justify-content-between">
                  <p class="text">Subtotal</p>
                  <p class="text">Rp <?= number_format($produk['harga'],0,',','.')?></p>
                </div>
                <div class="delivery d-flex justify-content-between">
                  <p class="text mb-0">Delivery/Shipping</p>
                  <p class="text mb-0">Rp 20.000</p>
                </div>
                <hr />
                <div class="total d-flex justify-content-between">
                  <p class="mb-0 fw-bold">Total</p>
                  <p class="mb-0 fw-bold">Rp <?= number_format($produk['harga']+20000,0,',','.')?></p>
                </div>
                <hr />
                <div class="notes w-100 mt-4 mb-4">
                  <p class="mb-0">
                    (The total reflects the price of your order, including all
                    duties and taxes)
                  </p>
                </div>

                <h1 class="mb-3">Arrives Mon, 27 Mar - Wed, 12 Apr</h1>

                <div class="prod-det d-flex">
                  <div class="img">
                    <img src="<?= $produk['foto']?>"/>
                  </div>
                  <div class="desc p-4">
                    <p class="text mb-1 fw-bold"><?= $produk['nama_produk']?></p>
                    <p class="text mb-1">Qty 1</p>
                    <p class="text mb-1">Rp <?= number_format($produk['harga'],0,',','.')?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
 <?= $this->endSection();?>