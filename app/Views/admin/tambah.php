<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="breadcrumbs">
   <div class="breadcrumbs-inner">
      <div class="row m-0">
         <div class="col-sm-4">
            <div class="page-header float-left">
               <div class="page-title">
                  <h1>Tambah</h1>
               </div>
            </div>
         </div>
         <div class="col-sm-8">
            <div class="page-header float-right">
               <div class="page-title">
                  <ol class="breadcrumb text-right">
                     <li><a href="#">Dashboard</a></li>
                     <li class="active">Tambah</li>
                  </ol>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="content">
   <!-- Animated -->
   <div class="animated fadeIn">
      <!-- Widgets  -->
      <div class="row">
         <div class="col-lg-12">
            <div class="card">
               <div class="card-header">Form Tambah</div>
               <div class="card-body card-block">
                  <form action="admin/save" method="post" enctype="multipart/form-data">
                     <?= csrf_field(); ?>
                     <div class="form-group">
                        <div class="input-group">
                           <div class="input-group-addon"><i class="fa fa-user"></i></div>
                           <input type="text" id="nama" name="nama" placeholder="Nama" class="form-control" autofocus>
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="input-group">
                           <div class="input-group-addon"><i class="fa fa-home"></i></div>
                           <input type="text" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat lahir" class="form-control">
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="input-group">
                           <div class="input-group-addon"><i class="fa fa-map-marker"></i></div>
                           <input type="text" id="alamat" name="alamat" placeholder="Alamat" class="form-control">
                        </div>
                     </div>
                     <div class="form-group">
                     <div class="input-group mb-3">
                         <label class="input-group-text" for="inputGroupSelect01"><i class="fa fa-heart"></i></label>
                         <select class="form-select" id="inputGroupSelect01" id="agama" name="agama">
                         <option value="Islam">Islam</option>
                         <option value="Kristen">Kristen</option>
                         <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        </select> 
                     </div>
                     </div>
                     <div class="form-group">
                        <div class="input-group">
                           <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                           <input type="text" id="no_tlp" name="no_tlp" placeholder="No Telepon" class="form-control">
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="input-group">
                           <div class="input-group-addon"><i class="fa fa-venus-mars"></i></div>
                           <input type="text" id="jenis_kelamin" name="jenis_kelamin" placeholder="Jenis kelamin" class="form-control">
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="input-group">
                           <div class="input-group-addon"><i class="fa fa-graduation-cap"></i></div>
                           <input type="text" id="pendidikan_terakhir" name="pendidikan_terakhir" placeholder="Pendidikan terakhir" class="form-control">
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="input-group">
                           <div class="input-group-addon"><i class="fa fa-flag"></i></div>
                           <input type="text" id="kewarganegaraan" name="kewarganegaraan" placeholder="Kewarganegaraan" class="form-control">
                        </div>
                     </div>
                     <div class="input-group">
                        <input type="file" id="foto" name="foto" class="form-control">
                        <label class="input-group-text" for="inputGroupFile02">Upload foto</label>
                     </div>
                     <div class="form-actions form-group mt-3"><button type="submit" class="btn btn-success btn-tambah">Tambah</button></div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?= $this->endSection(); ?>