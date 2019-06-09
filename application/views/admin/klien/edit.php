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
        echo form_open_multipart('admin/klien/edit/'.$klien->id);  
        ?>
        <div class="box-body">
          <div class="form-group">
            <label>Kategori Gambar</label>
            <?= form_dropdown('id_kategori', $kategori, $klien->id_kategori, 'class="form-control"') ?>        
          </div>
          <div class="form-group">
            <label>Nama Perusahaan</label>
            <input type="text" class="form-control" name="nama_perusahaan" value="<?= $klien->nama_perusahaan ?>" placeholder="Nama Perusahaan">
          </div>
          <div class="form-group">
            <label>Telepon</label>
            <input type="text" class="form-control" name="telepon" value="<?= $klien->telepon ?>" placeholder="Telepon">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="email" value="<?= $klien->email ?>" placeholder="Email">
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" id="alamat" class="form-control"><?= $klien->alamat ?></textarea>
          </div>
          <div class="form-group">
            <?php 
              if ($klien->gambar != '') {
                  $gambar = base_url('assets/upload/image/'.$klien->gambar);
                  echo "<img src=".$gambar." class='img-thumbnail' width='130px' height='100px' ><br/>";
              } else {
                echo "Tidak ada gambar<br/>";
              }
            ?>
            <!-- <img src="<?= $gambar;?>" class="img-thumbnail" width="130px" height="100px" ><br/> -->
            <label>Gambar</label>
            <input type="file" name="gambar" class="form-control" value="<?= $klien->gambar ?>">
          </div>
          <div class="form-group">
            <label>Status</label>
            <?= form_dropdown('status', $status, $klien->status, 'class="form-control"') ?>        
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
