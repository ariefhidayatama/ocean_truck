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
        echo form_open('admin/menu/edit/'.$detail->id);  
        ?>
        <div class="box-body">
          <div class="form-group">
          <label>Nama Menu</label>
            <input type="text" class="form-control" name="menu_title" placeholder="Nama Menu" value="<?= $detail->menu_title ?>">
          </div>
          <div class="form-group">
            <label>Link Menu</label>
            <input type="text" class="form-control" name="link" placeholder="Link Menu" value="<?= $detail->link ?>">
          </div>
          <div class="form-group">
            <label>Jenis Menu</label>
            <select name="parent" class="form-control">
                <option value="0">Parent Menu</option>
                <?php
                  foreach ($parent as $par){
                    echo "<option value='$par->id'";
                    echo $detail->parent == $par->id?'selected':'';
                    echo ">$par->menu_title</option>";
                  }
                ?>
            </select>
          </div>
          <div class="form-group">
            <label>SEO Menu</label>
            <input type="text" class="form-control" name="menu_title_seo" placeholder="SEO Menu" value="<?= $detail->menu_title_seo ?>">
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
