<!-- Content Header (Page header) -->
<section class="content-header">
<h1>
  <?= $title; ?>
</h1>
<ol class="breadcrumb">
  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
  <li class="active"><?= $title; ?></li>
</ol>
</section>

<!-- Main content -->
<section class="content">
<!-- Main row -->
<div class="row">
  <section class="col-lg-12 connectedSortable">
                <!-- quick email widget -->
    <div class="box box-info">
      <div class="box-header">
      </div>
        <?php
        // validasi input
        echo validation_errors('<div class="alert alert-warning">','</div>');

        // open form
        echo form_open_multipart('admin/konfigurasi/edit/'.$konfigurasi->id); 
        ?>
        <div class="box-body">
          <div class="form-group">
            <label>Nama Perusahaan</label>
            <input type="text" class="form-control" name="nama_perusahaan" placeholder="Nama Perusahaan" value="<?= $konfigurasi->nama_perusahaan ?>">
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control"><?= $konfigurasi->alamat ?></textarea>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" placeholder="Email" value="<?= $konfigurasi->email ?>">
          </div>
          <div class="form-group">
            <label>Telepon</label>
            <input type="text" class="form-control" name="telepon" placeholder="Telepon" value="<?= $konfigurasi->telepon ?>">
          </div>
          <div class="form-group">
            <label>Fax</label>
            <input type="text" class="form-control" name="fax" placeholder="Fax" value="<?= $konfigurasi->fax ?>">
          </div>
          <div class="form-group">
            <label>Jam Kantor</label>
            <input type="text" class="form-control" name="jam_kantor" placeholder="Jam Kantor" value="<?= $konfigurasi->jam_kantor ?>">
          </div>
          <div class="form-group">
            <label>Gambar</label>
            <input type="file" name="gambar" class="form-control">
          </div>
        </div>
        <!-- /.box-body -->
      <div class="box-footer clearfix">
          <input type="submit" name="submit" class="btn btn-primary btn-sm" value="Save">
      </div>
      <?php
        echo form_close();
      ?>
    </div><!-- box box-info -->
  </section>
</div>
<!-- /.row (main row) -->
