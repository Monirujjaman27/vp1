<?php include "inc/header.php"; ?>
<!-- Page Title
		============================================= -->
<section id="page-title" class="page-title-parallax page-title-dark include-header" style="padding: 250px 0; background-image: url('assets/images/b1.jpg'); background-size: cover; background-position: center center;" data-bottom-top="background-position:0px 400px;" data-top-bottom="background-position:0px -500px;">

    <div class="container clearfix">
        <h1>Contact Us</h1>
        <span>Everything you need to know about our Company</span>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
        </ol>
    </div>

</section><!-- #page-title end -->

<section id="content">
    <div class="content-wrap">
        <div class="container">


            <div class="row">
                <!-- Contact Form Overlay
					============================================= -->
                <div class="contact-form-overlay col-md-8 offset-md-2 p-5">

                    <div class="fancy-title title-border">
                        <h3>Send us an Email</h3>
                    </div>

                    <div class="form-widget">

                        <div class="form-result"></div>
                        <?php

                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            if (empty($_POST['email']) || empty($_POST['name']) || empty($_POST['phone']) || empty($_POST['message'])) {
                                echo "<span class='text-danger'>All Field is Required  </span>";
                            } else {
                                echo $contact_message_class->contact($_POST);
                                $_POST['email'] = '';
                                $_POST['name'] = '';
                                $_POST['phone'] = '';
                                $_POST['message'] = '';
                            }
                        }
                        ?>
                        <!-- Contact Form
							============================================= -->
                        <form class="row mb-0" id="template-contactform" name="template-contactform"  action="" method="post" novalidate="novalidate">

                            <div class="col-md-6 form-group">
                                <label for="template-contactform-name">Name <small>*</small></label>
                                <input type="text" id="template-contactform-name" name="name" value="<?php echo isset($_POST["name"]) ? $_POST["name"] : ''; ?>" class="sm-form-control required">

                            </div>

                            <div class="col-md-6 form-group">
                                <label for="template-contactform-email">Email <small>*</small></label>
                                <input type="email" id="template-contactform-email" name="email" value="<?php echo isset($_POST["email"]) ? $_POST["email"] : ''; ?>" class="required email sm-form-control">

                            </div>

                            <div class="w-100"></div>

                            <div class="col-md-6 form-group">
                                <label for="template-contactform-phone">Phone</label>
                                <input type="text" id="template-contactform-phone" name="phone" value="<?php echo isset($_POST["phone"]) ? $_POST["phone"] : ''; ?>" class="sm-form-control">

                            </div>



                            <div class="col-12 form-group">
                                <label for="template-contactform-message">Message <small>*</small></label>

                                <textarea class="required sm-form-control" id="template-contactform-message" name="message" rows="6" cols="30"><?php echo isset($_POST["message"]) ? $_POST["message"] : ''; ?></textarea>

                            </div>

                            <div class="col-12 form-group d-none">
                                <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control">
                            </div>

                            <div class="col-12 form-group">
                                 <button class="button button-3d m-0" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>

                            </div>

                            <input type="hidden" name="prefix" value="template-contactform-">

                        </form>
                    </div>

                </div><!-- Contact Form Overlay End -->
            </div>

        </div>
    </div>
</section>

<!-- Footer
		============================================= -->

<?php include "inc/footer.php"; ?>