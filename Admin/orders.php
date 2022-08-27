<?php include "inc/header.php"; ?>
<?php include '../classes/OrderClass.php'; ?>

<?php include 'inc/left-sidebar.php'; ?>
<div class="col-sm-10">
  <div class="card border-dark mh-600">
    <h5 class="mb-0 alert alert-info"><strong>Orders</strong> </h5>
    <?php
    $service = new OrderClass();
    if (isset($_GET['delid'])) {
      $gatId = base64_decode($_GET['delid']);
      $delsuccess = $service->del($gatId);
    }
    if (isset($_GET['changeid'])) {
      $gatId = base64_decode($_GET['changeid']);
      $delsuccess = $service->ChangeStatus($gatId, $_GET['status']);
    }
    ?>
    <div class="table-responsive d-flex">
      <table class="m-2 table table-hover table-bordered table-striped w-98">
        <thead class='w-100'>
          <tr class='w-100'>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Pakage Name</th>
            <th>Pakage Price</th>
            <th>Pakage Offer Price</th>
            <th>Date</th>
            <th>Requirements</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $getItem = $service->show();
          $i = 0;
          if ($getItem) {
            while ($result = $getItem->fetch_assoc()) {
              $i++;
          ?>
              <tr>
                <td><?= $i ?></td>
                <td><?= $result['name']; ?></td>
                <td><?= $result['email']; ?></td>
                <td><?= $result['phone']; ?></td>
                <td><?= $result['pakage_name']; ?></td>
                <td><?= $result['price']; ?></td>
                <td><?= $result['offerprice']; ?></td>
                <td><?= $result['date']; ?></td>
                <td><?= $result['requirements']; ?></td>
                <td><a onclick="return confirm('Are You Sure To Change The Status')" href="?changeid=<?= base64_encode($result['id']) . '&status=' . $result['status']; ?>">
                    <?php if ($result['status'] == 1) {
                      echo "<span class='badge badge-warning'>Panding</span>";
                    } else {
                      echo '<span class="badge badge-success">Complete</span>';
                    } ?>
                  </a>
                </td>
                <td>
                  <span>
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