<?php include "inc/header.php"; ?>
<?php include 'inc/left-sidebar.php'; ?>
<?php include '../classes/PostClass.php'; ?>



<?php
$post = new PostClass();
$gatId = base64_decode($_GET['id']);
if (!isset($gatId) || $gatId == NULL) {
  header('Location:post.php');
} else {
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $updatePro = $post->update($_POST, $_FILES, $gatId);
  }
}
$data = $post->showById($gatId);
$result = $data->fetch_assoc();
?>

<div class="col-sm-10">
  <div class="card border-dark mh-600">
    <h6 class="alert alert-info mb-0"><strong>Edit post</strong></h6>

    <h6 class="text-warning">
      <?php
      if (isset($updatePro)) {
        echo $updatePro;
      }
      ?>
    </h6>
    
    <div class="row">
      <div class="mx-2 col-sm-6 m-auto card p-3">
        <form action="" method="POST" enctype="multipart/form-data">
          <label for="Name">Name</label>
          <input class="form-control" value="<?php echo $result['name'] ?>" name="name" type="text" placeholder="post Name">
          <input value="<?php echo $result['image'] ?>" name="oldImage" type="hidden">
          <div class="form-group">
            <label for="Category">Category</label>
            <select class="form-control" name="category" id="Category">
              <option value="">----Select----</option>
              <option <?php echo $result["category"] == 'Sweets' ?? "selected"; ?> value="Sweets">Sweets</option>
              <option <?php echo $result["category"] == 'Ghee' ?? "selected"; ?> value="Ghee">Ghee</option>
              <option <?php echo $result["category"] == 'Yogurt' ?? "selected"; ?> value="Yogurt">Yogurt</option>
            </select>
          </div>
          <div class="form-group d-flex">
            <div class="w-50">
              <label for="Price">Price</label>
              <input class="form-control" name="price" type="number" value="<?php echo $result["price"]?>" required min="0" placeholder="Price">
            </div>
            <div class="w-50">
              <label for="offerprice">Offer Price</label>
              <input class="form-control" name="offerprice" type="number" value="<?= $result["offerprice"] ?>" min="0" placeholder="Offer Price">
            </div>
          </div>
          <label for="Name">Image</label>
          <input class="form-control" name="image" type="file" placeholder="post Name">
          <br>
          <td><img class='' height="50" width="50" src="<?= $result['image']; ?>" alt=""></td>
          <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" placeholder="Description" id="description" cols="30" rows="3"><?= $result["description"] ?></textarea>
          </div>
          <a class="btn btn-info mt-3" href="post.php">Back</a>
          <input class="btn btn-success mt-3 float-right" type="submit" value="Update post">
        </form>
      </div>
    </div>
  </div>
  <?php include 'inc/footer.php'; ?>