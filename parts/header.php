<div class="header-section">
  <div class="container">
    <div class="row">
      <div class="col-md-2 col-sm-3">
        <div class="logo">
          <a href="/">
            <img src="images/logo.png" alt="Nilex">
          </a>
        </div>
      </div>
      <div class="col-md-7 col-sm-6 nav-col">
        <div class="main-navigation">
          <?php include 'parts/navigation.php'; ?>
        </div>
      </div>
      <div class="col-md-3 col-sm-7 right-col">
        <div class="right-actions">
          <div class="search">
            <a href="#">
              <span class="f-nsp f-nsp-search"></span>
            </a>
          </div>
          <div class="demo-now">
            <a href="#" class="btn primary">
              Demo now
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-2 toogle-nav-col">
        <button class="sidebar-toggle" type="button" data-pos="right" data-nav="#sidebar" data-effect="sidebar-effect-4" aria-hidden="true">
          <i class="fa fa-bars"></i>
        </button>
        <div id="sidebar" class="sidebar-container">
          <div class="sidebar-container-header">
            <h2>Navigation</h2>
            <button type="button" class="close-sidebar" data-dismiss="modal" aria-hidden="true">
              <i class="fa fa-times"></i>
            </button>
          </div>
          <div class="sidebar-container-body">
            <?php include 'parts/navigation.php'; ?>
          </div>
          </div>
      </div>
    </div>
  </div>
</div>

