<?php include "inc/header.php"; ?>
<?php include "inc/slider.php"; ?>
<!-- Content
		============================================= -->
<section id="content">
    <div class="content-wrap">

        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section_heading--area mb-4">
                        <span>S</span>
                        <span>E</span>
                        <span>R</span>
                        <span>V</span>
                        <span>I</span>
                        <span>C</span>
                        <span>E</span>
                        <span>S</span>
                    </div>
                </div>
            </div>
            <!-- Shop
            ============================================= -->
            <div id="shop" class="shop row gutter-30 col-mb-30 mt-3">

                <!-- Product 1 -->

                <?php
                $getcat = $services_class->show();
                $i = 0;
                if ($getcat) {
                    while ($result = $getcat->fetch_assoc()) {
                        $i++;
                ?>
                        <div class="product col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="grid-inner">
                                <div class="product-image">
                                    <a href="demo-furniture-single.html"><img class="p-image" src="Admin/<?= $result['image']; ?>" alt="<?= ucwords($result['image']); ?>"></a>
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
                                            <a href="#" class="btn btn-light me-2"><i class="icon-line-shopping-cart"></i></a>
                                            <a href="assets/ajax/quick-view.html" class="btn btn-light" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <div class="product-title mb-0">
                                        <h4 class="mb-0"><a class="fw-medium" href="demo-furniture-single.html"><?= ucwords($result['name']); ?> </a></h4>
                                        <h5 class="product-price fw-normal">৳ <?= ucwords($result['price']); ?></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php }
                } ?>


            </div><!-- #shop end -->
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <div class="section_heading--area mb-4">
                        <span>G</span>
                        <span>A</span>
                        <span>L</span>
                        <span>L</span>
                        <span>E</span>
                        <span>R</span>
                        <span>I</span>
                        <span>E</span>
                        <span>S</span>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <?php
                $getdata = $gallery_class->showLimit();
                if ($getdata) {
                    while ($result = $getdata->fetch_assoc()) {
                ?>
                        <div class="gallery_wrapper product col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="grid-inner">
                                <div class="product-image">
                                    <a href="allgallery.php"><img height="300px" class="" src="Admin/<?= $result['image']; ?>"></a>
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
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <div class="section_heading--area mb-4">
                        <span>P</span>
                        <span>A</span>
                        <span>K</span>
                        <span>A</span>
                        <span>G</span>
                        <span>E</span>
                        <span>S</span>
                    </div>
                </div>
            </div>
            <div class="row col-mb-50 mb-0">
                <?php
                $getdata = $pakages_class->showLimit();
                if ($getdata) {
                    while ($result = $getdata->fetch_assoc()) {

                ?>
                        <div class="col-lg-4">
                            <div class="card_bg">
                                <div class="product_image">
                                    <a href="booking.php?id=<?= base64_encode($result['id']); ?>"><img height="300px" width="100%" class="pakage_image" src="Admin/<?= $result['image']; ?>"></a>
                                </div>
                                <div class="product_details">
                                    <h1 class="p_details--title"><?= ucfirst($result['name']); ?></h1>
                                    <p class="content_details--text"><?= substr(ucfirst($result['description']), 0, 80); ?></p>
                                    <ul class="d-flex list-unstyled review_style">

                                        <li><i class="<?php if ($result['rating'] >= '1') {
                                                            echo 'icon-star';
                                                        } else {
                                                            echo 'icon-star-empty';
                                                        } ?>"></i></li>
                                        <li><i class="<?php if ($result['rating'] >= '2') {
                                                            echo 'icon-star';
                                                        } else {
                                                            echo 'icon-star-empty';
                                                        } ?>"></i></li>

                                        <li><i class="<?php if ($result['rating'] >= '3') {
                                                            echo 'icon-star';
                                                        } else {
                                                            echo 'icon-star-empty';
                                                        } ?>"></i></li>
                                        <li><i class="<?php if ($result['rating'] >= '4') {
                                                            echo 'icon-star';
                                                        } else {
                                                            echo 'icon-star-empty';
                                                        } ?>"></i></li>
                                        <li><i class="<?php if ($result['rating'] >= '5') {
                                                            echo 'icon-star';
                                                        } else {
                                                            echo 'icon-star-empty';
                                                        } ?>"></i></li>
                                    </ul>
                                    <div class="product_price--area">
                                        <span class="regular_price">৳ <?= $result['offerprice']; ?></span> <del>৳<?= $result['price']; ?></del>
                                    </div>
                                    <a href="booking.php?id=<?= base64_encode($result['id']); ?>" class="btn btn-warning mt-2 book_now-btn text-white font-weight-bold">Book Now</a>
                                </div>
                            </div>
                        </div>
                <?php }
                } ?>

            </div>
        </div>

    </div>
</section><!-- #content end -->

<?php include "inc/footer.php"; ?>