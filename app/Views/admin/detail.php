<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="breadcrumbs">
   <div class="breadcrumbs-inner">
      <div class="row m-0">
         <div class="col-sm-4">
            <div class="page-header float-left">
               <div class="page-title">
                  <h1>Dashboard</h1>
               </div>
            </div>
         </div>
         <div class="col-sm-8">
            <div class="page-header float-right">
               <div class="page-title">
                  <ol class="breadcrumb text-right">
                     <li><a href="#">Dashboard</a></li>
                     <li class="active">Detail</li>
                  </ol>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="content">
   <div class="animated fadeIn">
      <div class="row">
         <div class="col-md-4">
            <div class="card">
               <div class="card-header">
                  <strong class="card-title mb-3">Profile Card</strong>
               </div>
               <div class="card-body">
                  <div class="mx-auto d-block">
                     <img class="rounded-circle mx-auto d-block" src="/images/<?= $pegawai['foto']; ?>" alt="Card image cap">
                     <h5 class="text-sm-center mt-2 mb-1"><?= $pegawai['nama']; ?></h5>
                  </div>
                  <hr>
                  <div class="location"><i class="fa fa-map-marker"></i><h class="ml-3"></h><?= $pegawai['tempat_lahir']; ?>, <?= $pegawai['alamat']; ?></div>
                  <div class="agama"><i class="fa fa-heart"></i><h class="ml-2"></h><?= $pegawai['agama']; ?></div>
                  <div class="no_tlp"><i class="fa fa-phone"> </i><h class="ml-3"></h><?= $pegawai['no_tlp']; ?></div>
                  <div class="jenis_kelamin"><i class="fa fa-venus-mars"> </i><h class="ml-2"></h><?= $pegawai['jenis_kelamin']; ?></div>
                  <div class="pendidikan_terakhir"><i class="fa fa-graduation-cap"> </i><h class="ml-2"></h><?= $pegawai['pendidikan_terakhir']; ?></div>
                  <div class="kewarganegaraan"><i class="fa fa-flag"> </i><h class="ml-3"></h><?= $pegawai['kewarganegaraan']; ?></div>
                  <?php if (in_groups('admin')) : ?>
                     <a href="/admin/ubah/<?= $pegawai['id']; ?>" class="btn btn-warning tampilModal">Edit</a>
                     <a href="/admin/hapus/<?= $pegawai['id']; ?>" class="btn btn-danger">Delete</a>
                  <?php endif; ?>
                  <br><br>
                  <a href="/">Kembali ke daftar daftar tabel</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?= $this->endSection(); ?>