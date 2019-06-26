<style>
    .img-equipment {
        width: 250px;
        height: 170px;
    }
</style>
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

                <ul class="nav nav-pills sort-source" data-sort-id="portfolio" data-option-key="filter">
                    <li data-option-value="*" class="active"><a href="#">Show Gallery Photo</a></li>
                </ul>

                <hr>

                <div class="row">

                    <div class="sort-destination-loader sort-destination-loader-showing">
                        <ul class="image-gallery sort-destination lightbox" data-sort-id="portfolio" data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">
                            <?php foreach ($foto_galeri as $value) { ?>
                                <li class="col-md-3 col-sm-6 col-xs-12 isotope-item websites">
                                    <div class="image-gallery-item">
                                        <a href="<?= base_url('assets/upload/image/') . $value->gambar ?>" class="lightbox-portfolio">
                                            <span class="thumb-info">
                                                <span class="thumb-info-wrapper">
                                                    <img src="<?= base_url('assets/upload/image/') . $value->gambar ?>" class="img-responsive" alt="">
                                                    <span class="thumb-info-action">
                                                        <span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>