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

    <h2><strong><?= $artikel->judul?></strong></h2>

    <div class="row">
        <div class="col-md-12">
            <p><?= $artikel->isi?></p>
        </div>
    </div>

</div>

</div>