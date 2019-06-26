<div role="main" class="main">

    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Blog</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>Full Width</h1>
                </div>
            </div>
        </div>
    </section>



    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="blog-posts" id="content">

                    <?php foreach ($news as $value) { ?>

                        <?php
                        $tgl = tgl_indo($value->create_at);
                        ?>

                        <article class="post post-large">
                            <div class="post-image">
                                <div class="owl-carousel owl-theme" data-plugin-options="{'items':1}">
                                    <div style="text-align:center">
                                        <div class="img-thumbnail">
                                            <img class="img-responsive" src="<?= base_url('assets/upload/image/' . $value->gambar) ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="post-date">
                                <span class="day"><?= substr($value->create_at, 8, 2) ?></span>
                                <span class="month"><?= substr($tgl, 10, 3); ?></span>
                            </div>

                            <div class="post-content">

                                <h2 class="baris" kode="<?= $value->id ?>"><?= $value->judul ?></h2>
                                <p><?= substr($value->isi, 0, 250) ?> [...]</p>

                                <div class="post-meta">
                                    <span><i class="fa fa-user"></i> By <a href="#">Admin</a> </span>
                                    <a href="<?= base_url('home/detail-artikel/' . $value->id); ?>" class="btn btn-xs btn-primary pull-right">Read more...</a>
                                </div>

                            </div>
                        </article>
                    <?php } ?>

                </div>
                <div class="blog-post" id="lihat"></div>
            </div>
            <div style="text-align:center">
                <button type="button" id="load_more" class="btn btn-warning">Load More <i class="fa fa-angle-double-down"></i></button>
            </div>

        </div>

    </div>

</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#load_more').on('click', function(e) {
            e.preventDefault();
            let last_id = $(".baris:last").attr("kode");

            $.ajax({
                url: '<?= base_url('home/load_data/?id=') ?>' + last_id,
                success: function(html) {
                    console.log(html);
                    if (html) {
                        $('#content').append(html);

                    }
                }
            });
        });
    });
</script>