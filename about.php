<?php include "inc/header.php"; ?>

<!-- Page Title
		============================================= -->
<section id="page-title" class="page-title-parallax page-title-dark include-header" style="padding: 250px 0; background-image: url('assets/images/d4.jpg'); background-size: cover; background-position: center center; background-size:contain; background-attachment:local">

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

            <section>
                <div class="row">
                    <div class="col-12">
                        <div class="clearfix">
                            <?php
                            $data = $aboutPageClass->showById();
                            $result = $data->fetch_assoc();
                            echo html_entity_decode($result['about']);
                            ?>
                        </div>
                    </div>
                </div>
            </section>
        </div>



    </div>
    </div>
</section><!-- #content end -->


<?php include "inc/footer.php"; ?>