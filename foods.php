<?php include "inc/header.php"; ?>

<?php
$getdata = $post_class->showLimit('Ghee');
?>
<!-- Page Title
		============================================= -->
<section id="page-title" class="page-title-parallax page-title-dark include-header" style="padding: 250px 0; background-image: url('assets/images/d4.jpg'); background-size: cover; background-position: center center;" data-bottom-top="background-position:0px 400px;" data-top-bottom="background-position:0px -500px;">
    <div class="container clearfix">
        <h1>Foods</h1>
        <span>Everything you need to know about our Company</span>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Foods</li>
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
                        <span>f</span>
                        <span>O</span>
                        <span>O</span>
                        <span>D</span>
                        <span>S</span>
                    </div>
                </div>
            </div>
            <div class="row col-mb-50 mb-0">
                <?php
                $getItem = $post_class->show();
                $i = 0;
                if ($getItem) {
                    while ($result = $getItem->fetch_assoc()) {
                        $i++;
                ?>
                        <div class="col-lg-4">
                            <div class="card_bg">
                                <div class="product_image">
                                    <a href="checkin.php?id=<?= base64_encode($result['id']); ?>"><img height="300px" width="100%" class="pakage_image" src="Admin/<?= $result['image']; ?>"></a>
                                </div>
                                <div class="product_details text-center">
                                    <h1 class="p_details--title text-center"><?= ucfirst($result['name']); ?></h1>
                                    <p class="content_details--text text-center"><?= substr(ucfirst($result['description']), 0, 80); ?></p>
                                    <div class="product_price--area">
                                        <?php if ($result['offerprice']) { ?>
                                            <span class="regular_price ml-1">৳ <?= $result['offerprice']; ?></span> <del><?= $result['price'] ?? '৳' . $result['price']; ?></del>
                                        <?php } else { ?>
                                            <span class="regular_price ml-1">৳ <?= $result['price']; ?></span>
                                        <?php } ?>
                                    </div>
                                    <a href="checkin.php?id=<?= base64_encode($result['id']); ?>" class="btn btn-warning mt-2 book_now-btn text-white font-weight-bold">Check In</a>
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