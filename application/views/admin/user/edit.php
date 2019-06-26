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
        echo validation_errors('<div class="alert alert-warning">', '</div>');

        // open form
        echo form_open_multipart('admin/user/edit/' . $user->id);
        ?>
        <div class="box-body">
          <div class="form-group">
            <label>Nama User</label>
            <input type="text" class="form-control" name="nama" value="<?= $user->nama ?>" placeholder="Nama User">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="email" value="<?= $user->email ?>" placeholder="Email">
          </div>
          <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" name="username" value="<?= $user->username ?>" placeholder="Username">
          </div>
          <div class="form-group">
            <?php
            if ($user->gambar != '') {
              $gambar = base_url('assets/upload/image/' . $user->gambar);
              echo "<img src=" . $gambar . " class='img-thumbnail' width='130px' height='100px' ><br/>";
            } else {
              echo "Tidak ada gambar<br/>";
            }
            ?>
            <!-- <img src="<?= $gambar; ?>" class="img-thumbnail" width="130px" height="100px" ><br/> -->
            <label>Gambar</label>
            <input type="file" name="gambar" class="form-control" value="<?= $user->gambar ?>">
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