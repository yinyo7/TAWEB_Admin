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
                     <li class="active">Data table</li>
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
         <div class="col-md-12">
            <div class="card">
               <div class="card-header">
                  <strong class="card-title">Data Table</strong>
               </div>
               <div class="card-body">
                  <?php if (session()->getFlashdata('pesan')) : ?>
                     <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('pesan'); ?>
                     </div>
                  <?php endif; ?>
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                     <thead>
                        <tr>
                           <th>#</th>
                           <th>Nama</th>
                           <th>Detail</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php $id = 1; ?>
                        <?php foreach ($pegawai as $p) : ?>
                           <tr>
                              <td><?= $id++; ?></td>
                              <td><?= $p['nama']; ?></td>
                              <td>
                                 <a href="/admin/detail/<?= $p['id']; ?>" class="btn btn-success">Detail</a>
                              </td>
                           </tr>
                        <?php endforeach; ?>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>

</div>

<?= $this->endSection(); ?>