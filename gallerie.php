<?php include "inc/header.php"; ?>
<!-- Page Title
		============================================= -->
<section id="page-title" class="page-title-parallax page-title-dark include-header" style="padding: 250px 0; background-image: url('assets/images/d1.jpg'); background-size: cover; background-position: center center;" data-bottom-top="background-position:0px 400px;" data-top-bottom="background-position:0px -500px;">

    <div class="container clearfix">
        <h1>Galleries</h1>
        <span>Everything you need to know about our Company</span>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Galleries</li>
        </ol>
    </div>

</section><!-- #page-title end -->

<!-- Content
		============================================= -->
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section_heading--area mb-4">
                        <span>G</span>
                        <span>A</span>
                        <span>L</span>
                        <span>L</span>
                        <span>E</span>
                        <span>R</span>
                        <span>Y</span>
                    </div>
                </div>
            </div>
            <div class="row">

                <?php
                $getdata = $gallery_class->showLimit();
                if ($getdata) {
                    while ($result = $getdata->fetch_assoc()) {
                ?>
                        <div class="gallery_wrapper product col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="grid-inner">
                                <div class="product-image">
                                    <a href="demo-furniture-single.html"><img height="300px" class="" src="Admin/<?= $result['image']; ?>"></a>
                                    <div class="bg-overlay">
                                        <div class="mt-3">
                                            <h1 class="p_details--title text-center text-warning"><?= $result['name']; ?></h1>
                                            <div class="text-center">
                                                <p class="px-2 text-white ling-height-1-5 m-0"><?= $result['description']; ?></p>
                                                <a href="allgallery.php" class="btn btn-warning mt-2 book_now-btn text-white font-weight-bold rounded-0">View More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php }
                } ?>
            </div>
            <h6 class="text-center">
                <a href="allgallery.php" class="btn btn-warning mt-2 book_now-btn text-white font-weight-bold rounded-0">View All</a>
            </h6>
        </div>
    </div>
</section><!-- #content end -->


<?php include "inc/footer.php"; ?>