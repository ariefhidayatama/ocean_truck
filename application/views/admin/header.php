<?php
$this->simple_login->cek_login();

$gambar = $this->session->userdata('gambar');
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $title ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/adminlte/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/adminlte/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/adminlte/font-awesome-4.7.0/fonts/fontawesome-webfont.woff">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/adminlte/bootstrap/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/adminlte/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/adminlte/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/adminlte/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/adminlte/plugins/morris/morris.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- Favicon -->
  <link rel="shortcut icon" href="<?= base_url() ?>assets/favicon.ico" type="image/x-icon" />


</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>T</b>ruck</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>OCEAN</b> TRUCK</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account: style can be found in dropdown.less -->

            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?= base_url('assets/upload/image/' . $gambar) ?>" class="user-image" alt="User Image" />
                <span class="hidden-xs"><?php echo strtoupper($this->session->userdata('username')); ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="<?= base_url('assets/upload/image/' . $gambar) ?>" class="img-circle" alt="User Image" />
                  <p>
                    <?php echo strtoupper($this->session->userdata('username')); ?>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="<?= base_url('login/change_pass') ?>" class="btn btn-default btn-flat">Change Password</a>
                  </div>
                  <div class="pull-right">
                    <a href="<?= base_url('login/logout') ?>" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>

          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="<?= base_url('assets/upload/image/' . $gambar) ?>" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p><?php echo strtoupper($this->session->userdata('username')); ?></p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="active treeview">
            <a href="<?= base_url('admin/dashboard') ?>">
              <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>
          </li>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-th"></i> <span>Content</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?= base_url('admin/kategori_artikel/index') ?>"><i class="fa fa-circle-o"></i> Kategori</a></li>
              <li><a href="<?= base_url('admin/artikel/index') ?>"><i class="fa fa-circle-o"></i> Artikel</a></li>
              <li><a href="<?= base_url('admin/galeri/index') ?>"><i class="fa fa-circle-o"></i> Galeri Foto</a></li>
              <li><a href="<?= base_url('admin/video/index') ?>"><i class="fa fa-circle-o"></i> Galeri Video</a></li>
              <li><a href="<?= base_url('admin/klien/index') ?>"><i class="fa fa-circle-o"></i> Klien</a></li>
            </ul>
          </li>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-cogs"></i> <span>Setting</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?= base_url('admin/konfigurasi/index') ?>"><i class="fa fa-circle-o"></i> Konfigurasi</a></li>
              <li><a href="<?= base_url('admin/menu/index') ?>"><i class="fa fa-circle-o"></i> Menu Frontend</a></li>
              <li><a href="<?= base_url('admin/user/index') ?>"><i class="fa fa-circle-o"></i> Menu User</a></li>
            </ul>
          </li>

        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

      <!-- <style>
  #loading {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url(../../assets/loading.gif) 50% 50% no-repeat #ffffff;
  }
</style>
<div id="loading"></div> -->