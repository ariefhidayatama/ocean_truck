<!--Tambah TinyMCE -->
<script type="text/javascript" src="<?php echo base_url('assets/tinymce/js/tinymce/tinymce.min.js') ?>"></script>
<script>
    tinymce.init({
    selector: 'textarea',
    height: 150,
    theme: 'modern',
    plugins: [
    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
    'searchreplace wordcount visualblocks visualchars code fullscreen',
    'insertdatetime media nonbreaking save table contextmenu directionality',
    'emoticons template paste textcolor colorpicker textpattern imagetools'
    ],
    toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
    toolbar2: 'print preview media | forecolor backcolor emoticons',
    image_advtab: true,
    templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
    ],
    content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
    ]
    });
</script>
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
        echo form_open_multipart('admin/artikel/edit/'.$artikel->id);  
        ?>
        <div class="box-body">
          <div class="form-group">
            <label>Kategori Artikel</label>
            <select class="form-control" name="id_kategori">
            <?php foreach ($kategori as $result) { ?>
                <option value="<?php echo $result->id ?>">
                    <?php echo $result->nama_kategori ?>
                </option>
            <?php } ?>
            </select>          
          </div>
          <div class="form-group">
            <label>Judul Artikel</label>
            <input type="text" class="form-control" name="judul" value="<?= $artikel->judul ?>" placeholder="Judul Artikel">
          </div>
          <div class="form-group">
            <label>Isi Artikel</label>
            <textarea name="isi" id="isi" class="form-control"><?= $artikel->isi ?></textarea>
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
