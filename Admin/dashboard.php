<?php include "inc/header.php"; ?>
<?php include 'inc/left-sidebar.php'; ?>
<?php include '../classes/appointment.php'; ?>
<?php
include_once($filepath . './../config/config.php');
?>

<?php
$database = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$appointMentQuary = "SELECT * From subscribers ORDER BY id DESC";
$contactQuary = "SELECT * From contactmessage ORDER BY id DESC";
$serviceQuary = "SELECT * From services ORDER BY id DESC";
$appointData = mysqli_query($database, $appointMentQuary);
$contactMessageCount = mysqli_query($database, $contactQuary);
$serviceCount = mysqli_query($database, $serviceQuary);
?>
<div class="col-sm-10">
  <div class="card mh-600">
    <div class="container">
      <h6 class="my-3"><strong>Dashboard </strong></h6>
      <div class="card">

      </div>
    </div>
  </div>
  <?php include 'inc/footer.php'; ?>