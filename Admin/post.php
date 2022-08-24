<?php include "inc/header.php"; ?>
<?php include 'inc/left-sidebar.php'; ?>
<?php
spl_autoload_register(function ($classes) {
  include_once "./../classes/" . $classes . ".php";
});
?>
<div class="col-sm-10">
  <div class="card mh-600">
    <h6 class="mb-0 alert alert-info"><strong>Posts</strong>
      <a href="addPost.php" class="btn btn-info">
        <i class="fa fa-plus" aria-hidden="true"></i>
        New Post</a>
      </h1>
      <?php
      $post = new PostClass();
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
              <th>Category</th>
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
                  <td><?= $result['category']; ?></td>
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

  </div>
  <?php include 'inc/footer.php'; ?>