<?php include "inc/header.php"; ?>

<!-- Page Title
		============================================= -->
<section id="page-title" class="page-title-parallax page-title-dark include-header" style="padding: 250px 0; background-image: url('assets/images/d4.jpg'); background-size: cover; background-position: center center;" data-bottom-top="background-position:0px 400px;" data-top-bottom="background-position:0px -500px;">
    <div class="container clearfix">
        <h1>About Us</h1>
        <span>Everything you need to know about our Company</span>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Pakages</li>
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