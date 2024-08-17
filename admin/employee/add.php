<?php
include(__DIR__ . '/../../layouts/header.php');
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
    <div class="col-md-3 col-lg-2 px-0 position-fixed h-100 bg-white shadow-sm sidebar" id="sidebar">
      <!-- <h1 class="bi bi-bootstrap text-primary d-flex my-4 justify-content-center"></h1> -->
      <div class="bi text-primary d-flex justify-content-center"> <img src="<?= $url ?>assets/images/logo.svg"
          alt="logo" width="100" height="100"> </div>
      <div class="list-group rounded-0">
        <a href="#" class="list-group-item list-group-item-action active border-0 d-flex align-items-center">
          <span class="bi bi-border-all"></span>
          <span class="ml-2"> Admin Dashboard</span>
        </a>
        <a href="#" class="list-group-item list-group-item-action border-0 align-items-center">
          <span class="bi bi-box"></span>
          <span class="ml-2">Projects</span>
        </a>

        <button
          class="list-group-item list-group-item-action border-0 d-flex justify-content-between align-items-center"
          data-toggle="collapse" data-target="#sale-collapse">
          <div>
            <span class="bi bi-cart-dash"></span>
            <span class="ml-2">Employee</span>
          </div>
          <span class="bi bi-chevron-down small"></span>
        </button>
        <div class="collapse" id="sale-collapse" data-parent="#sidebar">
          <div class="list-group">
            <a href="<?= $url ?>admin/employee/add.php" class="list-group-item list-group-item-action border-0 pl-5">Add
              Employee</a>
            <a href="#" class="list-group-item list-group-item-action border-0 pl-5">Sale Orders</a>
          </div>
        </div>

        <button
          class="list-group-item list-group-item-action border-0 d-flex justify-content-between align-items-center"
          data-toggle="collapse" data-target="#purchase-collapse">
          <div>
            <span class="bi bi-cart-plus"></span>
            <span class="ml-2">Purchase</span>
          </div>
          <span class="bi bi-chevron-down small"></span>
        </button>
        <div class="collapse" id="purchase-collapse" data-parent="#sidebar">
          <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action border-0 pl-5">Sellers</a>
            <a href="#" class="list-group-item list-group-item-action border-0 pl-5">Purchase Orders</a>
          </div>
        </div>
      </div>
    </div>
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
          <button class="btn py-0 d-flex align-items-center" id="logout-dropdown" data-toggle="dropdown"
            aria-expanded="false">
            <span class="bi bi-person text-primary h4"></span>
            <span class="bi bi-chevron-down ml-1 mb-2 small"></span>
          </button>
          <div class="dropdown-menu dropdown-menu-right border-0 shadow-sm" aria-labelledby="logout-dropdown">
            <a class="dropdown-item" href="logout.php">Logout</a>
            <a class="dropdown-item" href="#">Settings</a>
          </div>
        </div>
      </nav>
      <!-- main content -->
      <main class="container-fluid">
        <div class="add-employee">
          <h4 class="text-center mb-3">Create New Employee</h4>

          <div class="mt-4">
            <form action="" method="post">
              <div class="row">
                <div class="col-lg-12 mb-3">
                  <label class="form-label">Emp ID</label>
                  <input type="text" class="form-control" name="emp_id">

                </div>
                <div class="col-lg-6 mb-3">
                  <label class="form-label">Name</label>
                  <input type="text" class="form-control" name="emp_name">

                </div>
                <div class="col-lg-6 mb-3">
                  <label class="form-label">Department</label>
                  <select class="form-select" name="emp_dep">
                    <option selected value="">Choose</option>
                    <option value="Developer">Developer</option>
                    <option value="Designer">Designer</option>
                    <option value="Technical Support">Technical Support</option>
                    <option value="Content Writer">Content Writer</option>
                  </select>

                </div>
                <div class="col-lg-6 mb-3">
                  <label class="form-label">mobile</label>
                  <input type="text" class="form-control" name="emp_mobile">

                </div>
                <div class="col-lg-6 mb-3">
                  <label class="form-label">Date of joining</label>
                  <input type="text" class="form-control" name="emp_doj">

                </div>
                <div class="col-lg-6 mb-3">
                  <label class="form-label">Email Id</label>
                  <input type="text" class="form-control" name="emp_email">

                </div>
                <div class="col-lg-6 mb-3">
                  <label class="form-label">Password</label>
                  <input type="text" class="form-control" name="emp_pass">

                </div>
                <div class="col-12">
                  <div>
                    <button class="btn btn-outline-success">Submit</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </main>
    </div>
  </div>
</div>


<?php
include('../../layouts/footer.php');
?>