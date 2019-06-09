<!-- Content Header (Page header) -->
<section class="content-header">
<h1>
  <?=$title?>
</h1>
<ol class="breadcrumb">
  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
  <li class="active">  <?=$title?> </li>
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
        echo form_open('login/change_pass');  
        ?>
        <div class="box-body">
          <div class="form-group">
            <label>Password Lama</label>
            <input type="password" class="form-control" name="old_pass" placeholder="Password Lama">
          </div>
          <div class="form-group">
            <label>Password Baru</label>
            <input type="password" class="form-control" name="new_pass" placeholder="Password Lama">
          </div>
          <div class="form-group">
            <label>Password Konfrimasi</label>
            <input type="password" class="form-control" name="confirm_pass" placeholder="Password Konfrimasi">
          </div>
        </div>
        <!-- /.box-body -->
      <div class="box-footer clearfix">
          <input type="submit" class="btn btn-primary btn-sm" value="Save">
      </div>
      <?php
        echo form_close();
      ?>
    </div><!-- box box-info -->
  </section>
</div>
<!-- /.row (main row) -->
