<?php include "inc/header.php"; ?>
<?php include "inc/slider.php"; ?>
<!-- Content
		============================================= -->
<section id="content">
    <div class="content-wrap">

        <div class="container">
            <?php
            $getdata = $post_class->showLimit('Ghee');
            if ($getdata) {
            ?>
                <div class="row mt-5">
                    <div class="col-12 text-center">
                        <div class="section_heading--area mb-4">
                            <span>G</span>
                            <span>H</span>
                            <span>E</span>
                            <span>E</span>
                        </div>
                    </div>
                </div>
                <div class="row col-mb-50 mb-0">
                    <?php
                    while ($result = $getdata->fetch_assoc()) {
                    ?>
                        <div class="col-lg-4">
                            <div class="card_bg">
                                <div class="product_image">
                                    <a href="booking.php?id=<?= base64_encode($result['id']); ?>"><img height="300px" width="100%" class="pakage_image" src="Admin/<?= $result['image']; ?>"></a>
                                </div>
                                <div class="product_details text-center">
                                    <h1 class="p_details--title text-center"><?= ucfirst($result['name']); ?></h1>
                                    <p class="content_details--text text-center"><?= substr(ucfirst($result['description']), 0, 80); ?></p>
                                    <div class="product_price--area">
                                        <span class="regular_price">৳ <?= $result['offerprice']; ?></span> <del>৳<?= $result['price']; ?></del>
                                    </div>
                                    <a href="booking.php?id=<?= base64_encode($result['id']); ?>" class="btn btn-warning mt-2 book_now-btn text-white font-weight-bold">Check In</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>

            <!-- Sweets -->
            <?php
            $getdata = $post_class->showLimit('Sweets');
            if ($getdata) {
            ?>
                <div class="row mt-5">
                    <div class="col-12 text-center">
                        <div class="section_heading--area mb-4">
                            <span>S</span>
                            <span>W</span>
                            <span>E</span>
                            <span>E</span>
                            <span>T</span>
                            <span>S</span>

                        </div>
                    </div>
                </div>
                <div class="row col-mb-50 mb-0">
                    <?php
                    while ($result = $getdata->fetch_assoc()) {
                    ?>
                        <div class="col-lg-4">
                            <div class="card_bg">
                                <div class="product_image">
                                    <a href="booking.php?id=<?= base64_encode($result['id']); ?>"><img height="300px" width="100%" class="pakage_image" src="Admin/<?= $result['image']; ?>"></a>
                                </div>
                                <div class="product_details text-center">
                                    <h1 class="p_details--title text-center"><?= ucfirst($result['name']); ?></h1>
                                    <p class="content_details--text text-center"><?= substr(ucfirst($result['description']), 0, 80); ?></p>
                                    <div class="product_price--area">
                                        <span class="regular_price">৳ <?= $result['offerprice']; ?></span> <del>৳<?= $result['price']; ?></del>
                                    </div>
                                    <a href="booking.php?id=<?= base64_encode($result['id']); ?>" class="btn btn-warning mt-2 book_now-btn text-white font-weight-bold">Check In</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
            <!-- Yogurt -->
            <?php
            $getdata = $post_class->showLimit('Yogurt');
            if ($getdata) {
            ?>
                <div class="row mt-5">
                    <div class="col-12 text-center">
                        <div class="section_heading--area mb-4">
                            <span>Y</span>
                            <span>o</span>
                            <span>G</span>
                            <span>U</span>
                            <span>R</span>
                            <span>T</span>

                        </div>
                    </div>
                </div>
                <div class="row col-mb-50 mb-0">
                    <?php
                    while ($result = $getdata->fetch_assoc()) {
                    ?>

                        <div class="col-lg-4">
                            <div class="card_bg">
                                <div class="product_image">
                                    <a href="booking.php?id=<?= base64_encode($result['id']); ?>"><img height="300px" width="100%" class="pakage_image" src="Admin/<?= $result['image']; ?>"></a>
                                </div>
                                <div class="product_details text-center">
                                    <h1 class="p_details--title text-center"><?= ucfirst($result['name']); ?></h1>
                                    <p class="content_details--text text-center"><?= substr(ucfirst($result['description']), 0, 80); ?></p>
                                    <div class="product_price--area">
                                        <span class="regular_price">৳ <?= $result['offerprice']; ?></span> <del>৳<?= $result['price']; ?></del>
                                    </div>
                                    <a href="booking.php?id=<?= base64_encode($result['id']); ?>" class="btn btn-warning mt-2 book_now-btn text-white font-weight-bold">Check In</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>
</section><!-- #content end -->

<?php include "inc/footer.php"; ?>