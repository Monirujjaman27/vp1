<?php include "inc/header.php"; ?>
<?php include 'inc/left-sidebar.php'; ?>
<?php include '../classes/AboutPageClass.php'; ?>
<?php
$aboutPageClass = new AboutPageClass();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $insert = $aboutPageClass->add($_POST);
}

$data = $aboutPageClass->showById();
$result = $data->fetch_assoc();
?>
<div class="col-sm-10">
  <div class="card border-dark mh-600">
    <h6 class="mb-0 alert alert-info"><strong>About Page Content</strong> </h6>
    <div class="card-body row">
      <div class="col-12">
        <form action="" method="POST">
          <textarea name="description" class="form-control" id="textarea"><?= $result['about'] ?></textarea>
          <input type="submit" value="Save" class="btn btn-info btn-lg mt-3">
        </form>
      </div>
    </div>
  </div>
  <?php include 'inc/footer.php'; ?>