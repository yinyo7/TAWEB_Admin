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
            <h3 class="text-center mb-4"><?= lang('Auth.loginTitle') ?></h3>

            <?= view('Myth\Auth\Views\_message_block') ?>

            <form action="<?= route_to('login') ?>" class="login-form" method="post">
               <?= csrf_field() ?>

               <?php if ($config->validFields === ['email']) : ?>
                  <div class="form-group">
                     <input type="text" class="form-control rounded-left <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.email') ?>" required>
                     <div class="invalid-feedback">
                        <?= session('errors.login') ?>
                     </div>
                  </div>
               <?php else : ?>
                  <div class="form-group">
                     <input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>">
                     <div class="invalid-feedback">
                        <?= session('errors.login') ?>
                     </div>
                  </div>
               <?php endif; ?>
               <div class="form-group d-flex">
                  <input type="password" name="password" class="form-control rounded-left <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" required>
                  <div class="invalid-feedback">
                     <?= session('errors.password') ?>
                  </div>
               </div>
               <div class="form-group d-md-flex">
                  <div class="w-100 text-md-right">
                     <?php if ($config->allowRegistration) : ?>
                        <a href="<?= route_to('register') ?>"><?= lang('Register') ?></a>
                     <?php endif; ?>
                  </div>
               </div>
               <div class="form-group">
                  <button type="submit" class="btn btn-primary rounded submit p-3 px-5"><?= lang('Auth.loginAction') ?></button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
<?= $this->endSection(); ?>