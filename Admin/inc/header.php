<?php
include '../classes/defaultSettings.php';

include '../lib/session.php';
Session::checkSession();
$setting = new defaultSettings();
$stMt = $setting->showById(null);
$setDta= $stMt->fetch_assoc();
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="assets/img/fav.jpg" type="image/x-icon">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- Icons/Glyphs -->

  <!--  summernote css -->
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

  <link rel="icon" href="<?= $setDta['logo'] ?>" type="image/gif" sizes="16x16">
  <title>Admin Panel</title>
</head>

<body class="dashboard-body">
  <?php
  if (isset($_GET['action']) && $_GET['action'] == 'delete-success') {
    // var_dump(6);
    session::set('success', '');
  } elseif (isset($_GET['action']) && $_GET['action'] == 'delete-warning') {
    session::set('warning', '');
  }
  ?>

  <?php if (isset($_SESSION['success']) && $_SESSION['success'] !== '') { ?>
    <div class="alert alert-success alert-dismissible fade show text-capitalize">
      <?= $_SESSION['success'] ?>
      <a href="?action=delete-success" id="rmv_success" type="button" class="close">
        <span aria-hidden="false">&times;</span>
      </a>
    </div>
  <?php } ?>
  <?php if (isset($_SESSION['warning']) && $_SESSION['warning'] !== '') { ?>
    <div class="alert alert-warning alert-dismissible fade show">
      <?= session::get('warning') ?>
      <a href="?action=delete-warning" type="button" class="close">
        <span aria-hidden="false">&times;</span>
      </a>
    </div>
  <?php } ?>