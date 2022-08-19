<?php include "inc/header.php"; ?>
<?php include 'inc/left-sidebar.php'; ?>
<?php
spl_autoload_register(function ($classes) {
  include_once "./../classes/" . $classes . ".php";
});
?>
<div class="col-sm-10">
  <div class="card mh-600">
    <h1 class="mb-0 alert alert-info"><strong>Categorys</strong>
      <!-- <a href="addPost.php" class="btn btn-info">
        <i class="fa fa-plus" aria-hidden="true"></i>
        Add New Item</a> -->
      <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_form">
        Add New Item
      </button>
    </h1>
    <?php
    $post = new CategoryClass();
    if (isset($_GET['delid'])) {
      $gatId = base64_decode($_GET['delid']);
      $delsuccess = $post->del($gatId);
    }
    if (isset($delsuccess)) {
      echo $delsuccess;
    }
    ?>
    <div class="d-flex">
      <table class="m-2 table table-hover table-bordered table-striped w-98">
        <thead class='w-100'>
          <tr class='w-100'>
            <th>No</th>
            <th>Post Name</th>
            <th>Price</th>
            <th>Image</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $getItem = $post->show();
          $i = 0;
          if ($getItem) {
            while ($result = $getItem->fetch_assoc()) {
              $i++;
          ?>
              <tr>
                <td><?= $i ?></td>
                <td><?= ucwords($result['name']); ?></td>
                <td><?= $result['price'] ?></td>
                <td><img class='' height="50" width="50" src="<?= $result['image']; ?>" alt="<?= $result['image']; ?>"></td>
                <td>
                  <span>
                    <a href="editPost.php?id=<?= base64_encode($result['id']); ?>"><i class="fa fa-pencil-square-o btn btn-info btn-sm" aria-hidden="true"></i></a>
                    <a onclick="return confirm('Are You Sure To Delete')" href="?delid=<?= base64_encode($result['id']); ?>"><i class="fa fa-trash btn btn-danger btn-sm" aria-hidden="true"></i></a>
                  </span>
                </td>
              </tr>
          <?php }
          } ?>
        </tbody>
      </table>
    </div>
    <div class="modal fade" id="modal_form" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle"> Add New Item </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <label for="name">Name</label>
            <input name="name" type="text" id="name" placeholder="Name" class="form-control">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include 'inc/footer.php'; ?>