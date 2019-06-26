<style>
    .img-equipment{
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
                    <li class="active"><?=$title?></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1><?=$title?></h1>
            </div>
        </div>
    </div>
</section>

<div class="container">

    <div class="row">
        <div class="col-md-12">

            <ul class="nav nav-pills sort-source" data-sort-id="portfolio" data-option-key="filter">
                <li data-option-value="*" class="active"><a href="#">Show All</a></li>
                <li data-option-value=".crane"><a href="#">Crane</a></li>
                <li data-option-value=".prime"><a href="#">Prime Mover</a></li>
                <li data-option-value=".barge"><a href="#">Barge</a></li>
                <li data-option-value=".forklift"><a href="#">Forklift</a></li>
                <li data-option-value=".lowbed"><a href="#">Lowbed</a></li>
            </ul>

            <hr>

            <div class="row">

                <div class="sort-destination-loader sort-destination-loader-showing">
                    <ul class="image-gallery sort-destination lightbox" data-sort-id="portfolio" data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">
                        <?php foreach ($crane as $value) { ?>
                        <li class="col-md-3 col-sm-6 col-xs-12 isotope-item crane">
                            <div class="image-gallery-item">
                                <a href="<?=base_url('assets/upload/image/'.$value->gambar)?>" class="lightbox-portfolio">
                                    <span class="thumb-info">
                                        <span class="thumb-info-wrapper">
                                            <img src="<?=base_url('assets/upload/image/'.$value->gambar)?>" class="img-responsive img-equipment" alt="">
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </li>
                        <?php } ?>

                        <?php foreach ($prime as $primes) { ?>
                        <li class="col-md-3 col-sm-6 col-xs-12 isotope-item prime">
                            <div class="image-gallery-item">
                                <a href="<?=base_url('assets/upload/image/'.$primes->gambar)?>" class="lightbox-portfolio">
                                    <span class="thumb-info">
                                        <span class="thumb-info-wrapper">
                                        <img src="<?=base_url('assets/upload/image/'.$primes->gambar)?>" class="img-responsive img-equipment" alt="">
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </li>
                        <?php } ?>

                        <?php foreach ($barge as $barges) { ?>
                        <li class="col-md-3 col-sm-6 col-xs-12 isotope-item barge">
                            <div class="image-gallery-item">
                                <a href="<?=base_url('assets/upload/image/'.$barges->gambar)?>" class="lightbox-portfolio">
                                    <span class="thumb-info">
                                        <span class="thumb-info-wrapper">
                                        <img src="<?=base_url('assets/upload/image/'.$barges->gambar)?>" class="img-responsive img-equipment" alt="">
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </li>
                        <?php } ?>

                        <?php foreach ($forklift as $forklifts) { ?>
                        <li class="col-md-3 col-sm-6 col-xs-12 isotope-item forklift">
                            <div class="image-gallery-item">
                                <a href="<?=base_url('assets/upload/image/'.$forklifts->gambar)?>" class="lightbox-portfolio">
                                    <span class="thumb-info">
                                        <span class="thumb-info-wrapper">
                                        <img src="<?=base_url('assets/upload/image/'.$forklifts->gambar)?>" class="img-responsive img-equipment" alt="">
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </li>
                        <?php } ?>

                        <?php foreach ($lowbed as $lowbeds) { ?>
                        <li class="col-md-3 col-sm-6 col-xs-12 isotope-item lowbed">
                            <div class="image-gallery-item">
                                <a href="<?=base_url('assets/upload/image/'.$lowbeds->gambar)?>" class="lightbox-portfolio">
                                    <span class="thumb-info">
                                        <span class="thumb-info-wrapper">
                                        <img src="<?=base_url('assets/upload/image/'.$lowbeds->gambar)?>" class="img-responsive img-equipment" alt="">
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