<?= $this->extend('layouts/index');?>
<?= $this->section('content');?>
    <div class="background-log" style="background: url('<?= base_url('assets/img/log-bg.png')?>') no-repeat center; background-size: cover;"></div>
    <div class="content-log" style="background: url('<?= base_url('assets/img/log-bg.png')?>') no-repeat center; background-size: cover;">
      <div class="content">
        <h2 class="logo">Sneakers e-Commerce</h2>

        <div class="text-sci">
          <h2>Greetings,<br /><span>Shoe Enthusiasts!</span></h2>
          <p>
            Start exploring today and find the shoes that will make you feel<br />
            confident, and ready to conquer the world.
          </p>
          <div class="social-icons">
            <a href="#"><i class="bx bxl-facebook"></i></a>
            <a href="#"><i class="bx bxl-instagram"></i></a>
            <a href="#"><i class="bx bxl-twitter"></i></a>
          </div>
        </div>
      </div>
      <div class="logreg-box">
        <div class="form-box login">
        <form action="<?= url_to('login') ?>" method="post">
						<?= csrf_field() ?>
            <h2><?=lang('Auth.loginTitle')?></h2>

            <?= view('Myth\Auth\Views\_message_block') ?>

            <?php if ($config->validFields === ['email']): ?>
            <div class="form-floating">
                <span class="icon"><i class="bx bxs-envelope"></i></span>
                <input type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" id="floatingInput" placeholder="<?=lang('Auth.email')?>">
                <div class="invalid-feedback">
                    <?= session('errors.login') ?>
                </div>
                <label for="floatingInput"><?=lang('Auth.email')?></label>
            </div>
            <?php else: ?>
            <div class="form-floating">
                <span class="icon"><i class="bx bxs-envelope"></i></span>
                <input type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" id="floatingInput" placeholder="<?=lang('Auth.emailOrUsername')?>">
                <div class="invalid-feedback">
                    <?= session('errors.login') ?>
                </div>
                <label for="floatingInput"><?=lang('Auth.emailOrUsername')?></label>
            </div>   

            <?php endif; ?>
            <div class="form-floating">
                <span class="icon"><i class="bx bxs-lock-alt"></i></span>
                <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>" id="floatingPassword" placeholder="<?=lang('Auth.password')?>">
                <div class="invalid-feedback">
                    <?= session('errors.password') ?>
                </div>
                <label for="floatingPassword"><?=lang('Auth.password')?></label>
            </div>
            
            <button type="submit" class="btn w-100 btn-dark"><?=lang('Auth.loginAction')?></button>

            <div class="login-register">
            <?php if ($config->allowRegistration) : ?>
              <p>
                <a href="<?= url_to('register') ?>"><?=lang('Auth.needAnAccount')?></a>
              </p>
            <?php endif; ?>
            </div>
          </form>
        </div>
      </div>
    </div>
<?= $this->endSection();?>