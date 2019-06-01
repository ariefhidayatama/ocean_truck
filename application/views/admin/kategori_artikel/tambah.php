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
        echo form_open('admin/kategori_artikel/tambah');  
        ?>
        <div class="box-body">
          <div class="form-group">
            <label>Kategori Artikel</label>
            <input type="text" class="form-control" name="nama_kategori" placeholder="Kategori">
          </div>
          <div class="form-group">
            <label>Keterangan</label>
            <textarea name="keterangan" class="form-control" rows="3" placeholder="Keterangan"></textarea>
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
