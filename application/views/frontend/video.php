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
                <?php foreach ($video as $value) { ?>
                    <div class="col-md-6">
                        <div class="embed-responsive-borders">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe frameborder="0" allowfullscreen="" src="https://www.youtube.com/embed/<?= $value->video ?>"></iframe>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

    </div>

</div>