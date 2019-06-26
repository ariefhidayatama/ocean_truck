<div role="main" class="main">

    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active"><?= $title ?></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1><?= $artikel->judul ?></h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div style="text-align:center">
                    <span class="img-thumbnail">
                        <img src="<?= base_url('assets/upload/image/' . $artikel->gambar) ?>" class="img-responsive rounded" alt="" height="65%" width="100%">
                    </span>
                </div>
            </div>
            <p style="margin-top:15px;"><?= $artikel->isi ?></p>
        </div>

    </div>

</div>