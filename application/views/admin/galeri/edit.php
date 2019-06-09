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
        echo form_open_multipart('admin/galeri/edit/'.$galeri->id);  
        ?>
        <div class="box-body">
          <div class="form-group">
            <label>Kategori Gambar</label>
            <?= form_dropdown('id_kategori', $kategori, $galeri->id_kategori, 'class="form-control"') ?>        
          </div>
          <div class="form-group">
            <label>Judul Gambar</label>
            <input type="text" class="form-control" name="judul" value="<?= $galeri->judul ?>" placeholder="Judul Gambar">
          </div>
          <div class="form-group">
            <?php 
              if ($galeri->gambar != '') {
                  $gambar = base_url('assets/upload/image/'.$galeri->gambar);
              }
            ?>
            <img src="<?= $gambar;?>" class="img-thumbnail" width="130px" height="100px" ><br/>
            <label>Gambar</label>
            <input type="file" name="gambar" class="form-control" value="<?= $galeri->gambar ?>">
          </div>
          <div class="form-group">
            <label>Status</label>
            <?= form_dropdown('status', $status, $galeri->status, 'class="form-control"') ?>        
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
