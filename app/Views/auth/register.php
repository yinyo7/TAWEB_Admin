<?= $this->extend('auth/templates/index'); ?>
<?= $this->section('content'); ?>
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-6 text-center mb-5">
         <img src="images/logo0.png" width="250" height="100">
      </div>
   </div>
   <div class="row justify-content-center">
      <div class="col-md-6 col-lg-5">
         <div class="login-wrap p-4 p-md-5">
            <div class="icon d-flex align-items-center justify-content-center">
               <span class="fa fa-user-o"></span>
            </div>
            <h3 class="text-center mb-4"><?= lang('Auth.register') ?></h3>

            <?= view('Myth\Auth\Views\_message_block') ?>

            <form action="<?= route_to('register') ?>" method="post" class="login-form">
               <?= csrf_field() ?>
               <div class="form-group d-flex">
                  <input type="Email" class="form-control rounded-left <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>" autocomplete="off" required>
               </div>
               <div class="form-group">
                  <input type="text" class="form-control rounded-left <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>" autocomplete="off" required>
               </div>
               <div class="form-group d-flex">
                  <input type="password" name="password" class="form-control rounded-left <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" autocomplete="off" required>
               </div>
               <div class="form-group d-flex">
                  <input type="password" name="pass_confirm" class="form-control rounded-left <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Konfirmasi Password') ?>" autocomplete="off" required>
               </div>
               <div class="form-group d-md-flex">
                  <div class="w-100 text-md-right">
                     <p><a href="<?= route_to('login') ?>"><?= lang('Sudah punya akun?') ?> <?= lang('Login') ?></a></p>
                  </div>
               </div>
               <div class="form-group">
                  <button type="submit" class="btn btn-primary rounded submit p-3 px-5"><?= lang('Registrasi') ?></button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
<?= $this->endSection(); ?>