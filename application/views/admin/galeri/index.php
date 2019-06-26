<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?= $title ?>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active"><?= $title ?></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <!-- Main row -->
  <div class="row">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('sukses'); ?>"></div>
    <section class="col-lg-12 connectedSortable">
      <!-- quick email widget -->
      <div class="box box-info">
        <div class="box-header">
          <?= form_open('admin/galeri/index', 'class="form-inline"');  ?>
          <div class="form-group">
            <input type="text" name="search" class="form-control" placeholder="Pencarian">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary"><span class="fa fa-search"></span></button>
            <a href="" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i> Refresh</a>
          </div>
          <?= form_close(); ?>
        </div>
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <th>No</th>
              <th>Kategori</th>
              <th>Judul</th>
              <th>Gambar</th>
              <th>Status</th>
              <th>
                <a href="<?= base_url('admin/galeri/tambah') ?>" class="btn btn-success btn-xs"><i class="fa fa-plus"></i> Tambah</a>
              </th>
            </tr>
            <?php
            if (empty($result)) {
              echo "<tr>
                      <td colspan=6 style=text-align:center>Data tidak ditemukan</td>
                    </tr>";
            } else {
              $no = $this->uri->segment('4') + 1;
              foreach ($result as $value) {
                ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <!-- <td class="left"><?= $data['status_agenda'][$value->status_kegiatan] ?></td> -->
                  <td><?= $value->nama_kategori ?></td>
                  <td><?= $value->judul ?></td>
                  <td><img src="<?= base_url('assets/upload/image/thumbs/' . $value->gambar) ?>" width="100px" /></td>
                  <td><?= $status[$value->status] ?></td>
                  <td>
                    <a href="<?= base_url('admin/galeri/edit/' . $value->id) ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                    <a href="<?= base_url('admin/galeri/hapus/' . $value->id) ?>" class="btn btn-danger btn-xs tombol-hapus"><i class="fa fa-trash-o"></i> Delete </a>
                  </td>
                </tr>
              <?php
            }
          }
          ?>
          </table>
        </div><!-- box-body -->
        <div class="box-footer clearfix">
          <div class="col-md-10" style="margin-top:30px;">
            Jumlah Data : <?= $jmldata ?>
          </div>
          <div class="col-md-2 pull-right">
            <?= $halaman ?>
          </div>
        </div>
      </div><!-- box box-info -->
    </section>
  </div>
  <!-- /.row (main row) -->