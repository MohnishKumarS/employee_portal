<?php
include('../layouts/header.php');
?>
<?php

// if (!isset($_SESSION['login'])) {
//     header("Location: login.php"); // Redirect to login if not logged in
//     exit();
// }
?>
<div class="container-fluid">
  <div class="row">
    <!-- sidebar -->
    <?php include('../user/layouts/sidebar.php'); ?>
    <!-- overlay to close sidebar on small screens -->
    <div class="w-100 vh-100 position-fixed overlay d-none" id="sidebar-overlay"></div>
    <!-- note: in the layout margin auto is the key as sidebar is fixed -->
    <div class="col-md-9 col-lg-10 ml-md-auto px-0">
      <!-- top nav -->
      <nav class="w-100 d-flex px-4 py-2 mb-4 shadow-sm">
        <!-- close sidebar -->
        <button class="btn py-0 d-lg-none" id="open-sidebar">
          <span class="bi bi-list text-primary h3"></span>
        </button>
        <div class="dropdown ml-auto">
          <button class="btn py-0 d-flex align-items-center" id="logout-dropdown" data-toggle="dropdown" aria-expanded="false">
            <span class="bi bi-person text-primary h4"></span>
            <span class="bi bi-chevron-down ml-1 mb-2 small"></span>
          </button>
          <div class="dropdown-menu dropdown-menu-right border-0 shadow-sm" aria-labelledby="logout-dropdown">
            <a class="dropdown-item" href="<?= $url ?>logout.php">Logout</a>

          </div>
        </div>
      </nav>
      <!-- main content -->
      <main class="container-fluid">


        <div class="jumbotron jumbotron-fluid rounded bg-white border-0 shadow-sm border-left px-4">
          <div class="container">
            <div class="row align-items-center justify-content-center">
         
             <div class="col-md-4  col-sm-6 bg-info text-white p-3 text-center">
             <div class="column-content justify-content-center">

                      <div class="">
                      <img src="https://static.vecteezy.com/system/resources/previews/019/900/306/non_2x/happy-young-cute-illustration-face-profile-png.png" class="rounded" alt="..." style="
    width: 150px;
    height: auto;
">
          </div>
             </div>
             <div class="column-content  ">
                 <h2>DINESH</h2>
                 <p> WEB DEVELOPER  </p>

             </div>
              </div>
              <div class="col-md-8  col-sm-6 text-bg-light p-3">
                  <div class="d-flex flex-row justify-content-around  align-items-center flex-wrap">
                        <div class="col-12 col-md-4">
                              <div class="column-content p-3">
                                <h3>Email</h3>
                                <p>adin1@gmail.com</p>
                              </div>
                            </div>
                            <div class="col-12 col-md-4">
                              <div class="column-content p-3">
                              <h3>Phone</h3>
                              <p>0979787878</p>
                              </div>
                            </div>
                            <div class="col-12 col-md-4">
                              <div class="column-content p-3">
                              <h3>AGe</h3>
                              <p>25</p>
                              </div>
                            </div>
                            <div class="col-12 col-md-4">
                              <div class="column-content p-3">
                              <h3>Date of join</h3>
                              <p>25/11/2024</p>
                              </div>
                            </div>
                            <div class="col-12 col-md-4">
                              <div class="column-content p-3">
                              <h3>Location</h3>
                              <p>chennai</p>
                              </div>
                            </div>
                            <div class="col-12 col-md-4">
                              <div class="column-content p-3">
                              <h3>Bload group</h3>
                              <p>Ab-</p>
                              </div>
                            </div>
                  </div>
              </div>

             

            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
</div>


<?php
include('../layouts/footer.php');
?>