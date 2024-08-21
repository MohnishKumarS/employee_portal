<?php
include(__DIR__ . '/../config/index.php');
require(HEADER);

?>
<?php

// if (!isset($_SESSION['login'])) {
//     header("Location: login.php"); // Redirect to login if not logged in
//     exit();
// }
?>
<div class="container-fluid">
  <div class="row">

    <!-- sidebar & header -->
    <?php
    require(__DIR__ . '/layouts/sidebar.php');
    ?>
    

    <!-- main content -->
    <main class="container-fluid">
      <section class="row">
        <div class="col-md-6 col-lg-4">
          <!-- card -->
          <article class="p-4 rounded shadow-sm border-left mb-4">
            <a href="#" class="d-flex align-items-center">
              <span class="bi bi-box h5"></span>
              <h5 class="ml-2">Products</h5>
            </a>
          </article>
        </div>
        <div class="col-md-6 col-lg-4">
          <article class="p-4 rounded shadow-sm border-left mb-4">
            <a href="#" class="d-flex align-items-center">
              <span class="bi bi-person h5"></span>
              <h5 class="ml-2">Customers</h5>
            </a>
          </article>
        </div>
        <div class="col-md-6 col-lg-4">
          <article class="p-4 rounded shadow-sm border-left mb-4">
            <a href="#" class="d-flex align-items-center">
              <span class="bi bi-person-check h5"></span>
              <h5 class="ml-2">Sellers</h5>
            </a>
          </article>
        </div>
      </section>

      <div class="jumbotron jumbotron-fluid rounded bg-white border-0 shadow-sm border-left px-4">
        <div class="container">
          <h1 class="display-4 mb-2 text-primary">Simple</h1>
          <p class="lead text-muted">Simple Admin Dashboard with Bootstrap.</p>
        </div>
      </div>
    </main>
  </div>
</div>
</div>


<?php
include(__DIR__.'/../layouts/footer.php');
?>