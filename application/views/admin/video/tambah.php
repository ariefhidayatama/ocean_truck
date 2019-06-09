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
        echo form_open_multipart('admin/video/tambah');  
        ?>
        <div class="box-body">
          <div class="form-group">
            <label>Kategori</label>
            <?= form_dropdown('id_kategori', $kategori, '', 'class="form-control"') ?>        
          </div>
          <div class="form-group">
            <label>Judul Video</label>
            <input type="text" class="form-control" name="judul" placeholder="Judul Video">
          </div>
          <div class="form-group">
            <label>Link Youtube (Copy kode terakhir setelah tanda = ) </label>
            <span class="input-group-addon">https://www.youtube.com/watch?v=</span>
            <input type="text" name="video" class="form-control" placeholder="Copy kode terakhir setelah tanda =">
          </div>
          <div class="form-group">
            <label>Status</label>
            <?= form_dropdown('status', $status, '', 'class="form-control"') ?>        
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
