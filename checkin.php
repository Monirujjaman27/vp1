<?php include "inc/header.php"; ?>

<?php
$gatId = base64_decode($_GET['id']);
if (!isset($gatId) || $gatId == NULL) {
    header('Location:galery.php');
} else {
    $data = $post_class->showById($gatId);
    $result = $data->fetch_assoc();
}
?>

<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section_heading--area mb-4">
                        <span>C</span>
                        <span>H</span>
                        <span>E</span>
                        <span>C</span>
                        <span>K</span>
                        <span class="mx-1 bg-white"></span>
                        <span>I</span>
                        <span>N</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-8">
                    <h2 class="forn-weight-bold"><?= ucfirst($result['name']); ?></h2>
                    <div class="d-flex product_price--area mb-4">
                        <h4 class="forn-weight-bold m-0">Price:</h4>
                        <?php if ($result['offerprice']) { ?>
                            <span class="regular_price ml-1">৳ <?= $result['offerprice']; ?></span> <del><?= $result['price'] ?? '৳' . $result['price']; ?></del>
                        <?php } else { ?>
                            <span class="regular_price ml-1">৳ <?= $result['price']; ?></span>
                        <?php } ?>
                    </div>

                    <p><?= ucfirst($result['description']); ?></p>
                </div>
                <div class="col-sm-13 col-md-4 m-auto">
                    <div class="form">
                        <form action="" method="POST">
                            <?php
                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                if (empty($_POST['name'])) {
                                    echo "<span class='text-danger'>Enter Your name  </span>";
                                } elseif (empty($_POST['email'])) {
                                    echo "<span class='text-danger'>Enter Your Email  </span>";
                                } elseif (empty($_POST['date'])) {
                                    echo "<span class='text-danger'>Please Enter Date And Time  </span>";
                                } elseif (!empty($_POST['phone'] && strlen($_POST['phone']) !== 11)) {
                                    echo "<span class='text-danger'>Phone Number Must be Generate Then 11 Digit </span>";
                                } else {
                                    echo  $order_class->add($_POST);
                                }
                            }
                            ?>
                            <input type="hidden" name="pakage_name" value="<?= ucfirst($result['name']); ?>">
                            <input type="hidden" name="price" value="<?= $result['price']; ?>">
                            <input type="hidden" name="offerprice" value="<?= $result['offerprice']; ?>">
                            <div class="form-group">
                                <label for="Name">Name</label>
                                <input name="name" type="text" placeholder="Name" value="<?php echo isset($_POST["name"]) ? $_POST["name"] : ''; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" placeholder="Email" value="<?php echo isset($_POST["email"]) ? $_POST["email"] : ''; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" placeholder="Phone" value="<?php echo isset($_POST["phone"]) ? $_POST["phone"] : ''; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="datetime-local" name="date" placeholder="date" value="<?php echo isset($_POST["date"]) ? $_POST["date"] : ''; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="requirements">requirements</label>
                                <textarea name="requirements" placeholder="Requirements" class="form-control" id="" cols="" rows=""><?php echo isset($_POST["requirements"]) ? $_POST["requirements"] : ''; ?></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Order Now" class="btn btn-primary rounded-0">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- #content end -->


<?php include "inc/footer.php"; ?>