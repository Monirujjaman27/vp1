<?php include "inc/header.php"; ?>
<?php include "inc/slider.php"; ?>
<!-- Content
		============================================= -->
<section id="content">
    <div class="content-wrap">

        <div class="container">
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
                $getdata = $services_class->showLimit();
                if ($getdata) {
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
                <?php }
                } ?>

            </div>


            <!-- Sweets -->

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
                <div class="col-lg-4">
                    <div class="card_bg">
                        <div class="product_image">
                            <a href=""><img height="300px" width="100%" class="pakage_image" src="Admin/assets/img/coconut-gulab-jaman-300x300.jpg"></a>
                        </div>
                        <div class="product_details text-center">
                            <h1 class="p_details--title text-center">1 Kg coconut-gulab-jaman</h1>
                            <p class="content_details--text text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat esse repellat totam! At</p>
                            <div class="product_price--area">
                                <span class="regular_price">৳80</span> <del>৳100</del>
                            </div>
                            <a href="" class="btn btn-warning mt-2 book_now-btn text-white font-weight-bold">Check In</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card_bg">
                        <div class="product_image">
                            <a href=""><img height="300px" width="100%" class="pakage_image" src="Admin/assets/img/Mawa_Laddu_new-600x600.jpg"></a>
                        </div>
                        <div class="product_details text-center">
                            <h1 class="p_details--title text-center">1 Kg coconut-gulab-jaman</h1>
                            <p class="content_details--text text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat esse repellat totam! At</p>
                            <div class="product_price--area">
                                <span class="regular_price">৳80</span> <del>৳100</del>
                            </div>
                            <a href="" class="btn btn-warning mt-2 book_now-btn text-white font-weight-bold">Check In</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card_bg">
                        <div class="product_image">
                            <a href=""><img height="300px" width="100%" class="pakage_image" src="Admin/assets/img/Motichur_Laddu_new-600x600.jpg"></a>
                        </div>
                        <div class="product_details text-center">
                            <h1 class="p_details--title text-center">1 Kg coconut-gulab-jaman</h1>
                            <p class="content_details--text text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat esse repellat totam! At</p>
                            <div class="product_price--area">
                                <span class="regular_price">৳80</span> <del>৳100</del>
                            </div>
                            <a href="" class="btn btn-warning mt-2 book_now-btn text-white font-weight-bold">Check In</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card_bg">
                        <div class="product_image">
                            <a href=""><img height="300px" width="100%" class="pakage_image" src="Admin/assets/img/Well-Food-Rosh-Golla.jpg"></a>
                        </div>
                        <div class="product_details text-center">
                            <h1 class="p_details--title text-center">1 Kg coconut-gulab-jaman</h1>
                            <p class="content_details--text text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat esse repellat totam! At</p>
                            <div class="product_price--area">
                                <span class="regular_price">৳80</span> <del>৳100</del>
                            </div>
                            <a href="" class="btn btn-warning mt-2 book_now-btn text-white font-weight-bold">Check In</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card_bg">
                        <div class="product_image">
                            <a href=""><img height="300px" width="100%" class="pakage_image" src="Admin/assets/img/Well-Lalmohon.jpg"></a>
                        </div>
                        <div class="product_details text-center">
                            <h1 class="p_details--title text-center">1 Kg coconut-gulab-jaman</h1>
                            <p class="content_details--text text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat esse repellat totam! At</p>
                            <div class="product_price--area">
                                <span class="regular_price">৳80</span> <del>৳100</del>
                            </div>
                            <a href="" class="btn btn-warning mt-2 book_now-btn text-white font-weight-bold">Check In</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card_bg">
                        <div class="product_image">
                            <a href=""><img height="300px" width="100%" class="pakage_image" src="Admin/assets/img/Well-Food-Rosh-Golla.jpg"></a>
                        </div>
                        <div class="product_details text-center">
                            <h1 class="p_details--title text-center">1 Kg coconut-gulab-jaman</h1>
                            <p class="content_details--text text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat esse repellat totam! At</p>
                            <div class="product_price--area">
                                <span class="regular_price">৳80</span> <del>৳100</del>
                            </div>
                            <a href="" class="btn btn-warning mt-2 book_now-btn text-white font-weight-bold">Check In</a>
                        </div>
                    </div>
                </div>


            </div>
            <!-- Yogurt -->

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
                <div class="col-lg-4">
                    <div class="card_bg">
                        <div class="product_image">
                            <a href=""><img height="300px" width="100%" class="pakage_image" src="Admin/assets/img/Turkish_strained_yogurt.jpg"></a>
                        </div>
                        <div class="product_details text-center">
                            <h1 class="p_details--title text-center">1 Kg Yogurt</h1>
                            <p class="content_details--text text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat esse repellat totam! At</p>
                            <div class="product_price--area">
                                <span class="regular_price">৳80</span> <del>৳100</del>
                            </div>
                            <a href="" class="btn btn-warning mt-2 book_now-btn text-white font-weight-bold">Check In</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card_bg">
                        <div class="product_image">
                            <a href=""><img height="300px" width="100%" class="pakage_image" src="Admin/assets/How-to-Make-Yogurt-7-500x375.jpg"></a>
                        </div>
                        <div class="product_details text-center">
                            <h1 class="p_details--title text-center">1 Kg coconut-gulab-jaman</h1>
                            <p class="content_details--text text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat esse repellat totam! At</p>
                            <div class="product_price--area">
                                <span class="regular_price">৳80</span> <del>৳100</del>
                            </div>
                            <a href="" class="btn btn-warning mt-2 book_now-btn text-white font-weight-bold">Check In</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card_bg">
                        <div class="product_image">
                            <a href=""><img height="300px" width="100%" class="pakage_image" src="Admin/assets/img/download.jpeg"></a>
                        </div>
                        <div class="product_details text-center">
                            <h1 class="p_details--title text-center">1 Kg coconut-gulab-jaman</h1>
                            <p class="content_details--text text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat esse repellat totam! At</p>
                            <div class="product_price--area">
                                <span class="regular_price">৳80</span> <del>৳100</del>
                            </div>
                            <a href="" class="btn btn-warning mt-2 book_now-btn text-white font-weight-bold">Check In</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card_bg">
                        <div class="product_image">
                            <a href=""><img height="300px" width="100%" class="pakage_image" src="Admin/assets/img/images.jpeg"></a>
                        </div>
                        <div class="product_details text-center">
                            <h1 class="p_details--title text-center">1 Kg coconut-gulab-jaman</h1>
                            <p class="content_details--text text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat esse repellat totam! At</p>
                            <div class="product_price--area">
                                <span class="regular_price">৳80</span> <del>৳100</del>
                            </div>
                            <a href="" class="btn btn-warning mt-2 book_now-btn text-white font-weight-bold">Check In</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card_bg">
                        <div class="product_image">
                            <a href=""><img height="300px" width="100%" class="pakage_image" src="Admin/assets/img/1434575166114.jpeg"></a>
                        </div>
                        <div class="product_details text-center">
                            <h1 class="p_details--title text-center">1 Kg coconut-gulab-jaman</h1>
                            <p class="content_details--text text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat esse repellat totam! At</p>
                            <div class="product_price--area">
                                <span class="regular_price">৳80</span> <del>৳100</del>
                            </div>
                            <a href="" class="btn btn-warning mt-2 book_now-btn text-white font-weight-bold">Check In</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card_bg">
                        <div class="product_image">
                            <a href=""><img height="300px" width="100%" class="pakage_image" src="Admin/assets/img/yt1.jpeg"></a>
                        </div>
                        <div class="product_details text-center">
                            <h1 class="p_details--title text-center">1 Kg coconut-gulab-jaman</h1>
                            <p class="content_details--text text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat esse repellat totam! At</p>
                            <div class="product_price--area">
                                <span class="regular_price">৳80</span> <del>৳100</del>
                            </div>
                            <a href="" class="btn btn-warning mt-2 book_now-btn text-white font-weight-bold">Check In</a>
                        </div>
                    </div>
                </div>


            </div>

        </div>

    </div>
</section><!-- #content end -->

<?php include "inc/footer.php"; ?>