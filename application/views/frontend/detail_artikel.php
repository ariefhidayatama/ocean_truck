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
                                    <img class="img-responsive" src="<?= base_url('assets/upload/image/' . $artikel->gambar) ?>" alt="">
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

                            <div class="post-block post-comments clearfix">
                                <h3 class="heading-primary"><i class="fa fa-comments"></i>Comments (<?= $count ?>)</h3>
                                <?= $comment ?>
                            </div>

                            <div class="post-block post-leave-comment">
                                <h3 class="heading-primary">Leave a comment</h3>

                                <form action="<?= base_url('home/add_comment/' . $artikel->id) ?>" method="post">
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label>Your name *</label>
                                                <input type="text" value="<?= set_value("nama") ?>" maxlength="100" class="form-control" name="nama" id="nama">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Your email address *</label>
                                                <input type="email" value="<?= set_value("email") ?>" maxlength="100" class="form-control" name="email" id="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>Comment *</label>
                                                <textarea maxlength="5000" rows="10" class="form-control" name="comment" id="comment" value="<?= set_value("comment") ?>"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type='hidden' name='parent_id' value="0" id="parent_id" />
                                            <input type='hidden' name='id_artikel' id="parent_id" value="<?= set_value('id_artikel', $artikel->id) ?>" id='parent_id' />
                                            <input type="submit" value="Post Comment" class="btn btn-primary btn-lg" data-loading-text="Loading...">
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </article>
                </div>
            </div>

        </div>

    </div>

</div>

<script type='text/javascript'>
    $(function() {
        $("a.reply").on('click', function(e) {
            e.preventDefault();
            let id = $(this).attr("id");
            $("#parent_id").attr("value", id);
            $("#nama").focus();
        });
    });
</script>