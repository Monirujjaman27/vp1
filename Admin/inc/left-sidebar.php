<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-2 bg-white p-0">
        <div class="card">
          <div class="card-header <?php if (basename($_SERVER['SCRIPT_NAME']) == 'dashboard.php') {
                                    echo 'bg-primary';
                                  } else {
                                    echo 'bg-info';
                                  } ?>">
            <strong><a class="text-dark" href="dashboard.php"><i class="fa fa-home" aria-hidden="true"></i> Dashboard</a></strong>
          </div>
          <div class="px-3 py-2 card-header <?php if (basename($_SERVER['SCRIPT_NAME']) == 'pakages.php') {
                                              echo 'bg-primary';
                                            } ?>">
            <h6 class="mb-0"><a class="text-dark" href="pakages.php"><i class="fa fa-paper-plane" aria-hidden="true"></i> Pakages</a></h6>
          </div>
          <div class="px-3 py-2 card-header <?php if (basename($_SERVER['SCRIPT_NAME']) == 'service.php') {
                                              echo 'bg-primary';
                                            } ?>">
            <h6 class="mb-0"><a class="text-dark" href="service.php"><i class="fa fa-handshake-o" aria-hidden="true"></i> Service</a></h6>
          </div>
          <div class="px-3 py-2 card-header <?php if (basename($_SERVER['SCRIPT_NAME']) == 'orders.php' || basename($_SERVER['SCRIPT_NAME']) == 'addSlider.php' || basename($_SERVER['SCRIPT_NAME']) == 'editSlider.php') {
                                              echo 'bg-primary';
                                            } ?>">
            <h6 class="mb-0"><a class="text-dark" href="orders.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Orders</a></h6>
          </div>
          <div class="px-3 py-2 card-header <?php if (basename($_SERVER['SCRIPT_NAME']) == 'sliders.php' || basename($_SERVER['SCRIPT_NAME']) == 'addSlider.php' || basename($_SERVER['SCRIPT_NAME']) == 'editSlider.php') {
                                              echo 'bg-primary';
                                            } ?>">
            <h6 class="mb-0"><a class="text-dark" href="sliders.php"><i class="fa fa-sliders" aria-hidden="true"></i> Sliders</a></h6>
          </div>
          <div class="px-3 py-2 card-header <?php if (basename($_SERVER['SCRIPT_NAME']) == 'gallery.php' || basename($_SERVER['SCRIPT_NAME']) == 'addGallery.php' || basename($_SERVER['SCRIPT_NAME']) == 'editSlider.php') {
                                              echo 'bg-primary';
                                            } ?>">
            <h6 class="mb-0"><a class="text-dark" href="gallery.php"><i class="fa fa-file-image-o" aria-hidden="true"></i> Gallery</a></h6>
          </div>
          <div class="px-3 py-2 card-header <?php if (basename($_SERVER['SCRIPT_NAME']) == 'contactmessage.php') {
                                              echo 'bg-primary';
                                            } ?>">
            <h6 class="mb-0"><a class="text-dark" href="contactmessage.php"><i class="fa fa-comments" aria-hidden="true"></i> Contact Message</a></h6>
          </div>
          <div class="px-3 py-2 card-header <?php if (basename($_SERVER['SCRIPT_NAME']) == 'subscribers.php') {
                                              echo 'bg-primary';
                                            } ?>">
            <h6 class="mb-0"><a class="text-dark" href="subscribers.php"><i class="fa fa-file-text" aria-hidden="true"></i> Subscribers</a></h6>
          </div>
          <div class="px-3 py-2 card-header <?php if (basename($_SERVER['SCRIPT_NAME']) == 'settings.php') {
                                              echo 'bg-primary';
                                            } ?>">
            <h6 class="mb-0"><a class="text-dark" href="settings.php"><i class="fa fa-cog" aria-hidden="true"></i> Settings</a></h6>
          </div>
          <div class="px-3 py-2 card-header <?php if (basename($_SERVER['SCRIPT_NAME']) == 'about-us.php') {
                                              echo 'bg-primary';
                                            } ?>">
            <h6 class="mb-0"><a class="text-dark" href="about-us.php"><i class="fa fa-info" aria-hidden="true"></i> About Us Page</a></h6>
          </div>
        </div>
      </div>