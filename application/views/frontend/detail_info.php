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
                    <h1><?= $title ?></h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="blog-posts single-post">
                    <?php
                    $tgl = tgl_indo($artikel->create_at);
                    ?>
                    <article class="post post-large blog-single-post">
                        <div class="post-image">
                            <div style="text-align:center">
                                <div class="img-thumbnail">
                                    <?php if ($artikel->gambar != '') { ?>
                                        <img class="img-responsive" src="<?= base_url('assets/upload/image/' . $artikel->gambar) ?>" alt="">
                                    <?php } ?>

                                </div>
                            </div>
                        </div>

                        <div class="post-date">
                            <span class="day"><?= substr($artikel->create_at, 8, 2) ?></span>
                            <span class="month"><?= substr($tgl, 10, 3); ?></span>
                        </div>

                        <div class="post-content">
                            <h2><a href="blog-post.html"><?= $artikel->judul ?></a></h2>
                            <div class="post-meta">
                                <span><i class="fa fa-user"></i> By <a href="#">Admin</a> </span>
                            </div>
                            <p><?= $artikel->isi ?></p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</div>