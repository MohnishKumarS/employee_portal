<?php
// include(__DIR__ . '/../../layouts/header.php');
include(__DIR__ . '/../../config/index.php');
require(HEADER);
require MODEL_PATH."/Employee.php";
?>

<?php

if (isset($_POST['employee_submit'])) {
  // print_r($_POST);
  $data = [
    'emp_id' => $_POST['emp_id'],
    'emp_name' => $_POST['emp_name'],
    'emp_dep' => $_POST['emp_dep'],
    'emp_mobile' => $_POST['emp_mobile'],
    'emp_doj' => $_POST['emp_doj'],
    'emp_email' => $_POST['emp_email'],
    'emp_pass' => $_POST['emp_pass']
  ];

  $emp = new Employee();

  $res = $emp->create($data);

  if ($res) {
    $_SESSION['status'] = 'success';
    $_SESSION['message'] = 'Employee added successfully';
  } else {
    $_SESSION['status'] = 'error';
    $_SESSION['message'] = 'Failed to add employee';
  }
}


?>
<div class="container-fluid">
  <div class="row">
    <!-- sidebar & header -->
    <?php
    require(__DIR__ . '/../layouts/sidebar.php');
    ?>
    

      <!-- main content -->
      <main class="container-fluid">
        <div class="add-employee">
          <h4 class="text-center mb-3">Create New Employee</h4>

          <?php
          if (isset($_SESSION['status'])) {
            echo "<div class='alert alert-" . $_SESSION['status'] . "'>" . $_SESSION['message'] . "</div>";
            unset($_SESSION['status']);
          }
          ?>


          <div class="mt-4">
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
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
                  <input type="date" class="form-control" name="emp_doj">

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
                    <button class="btn btn-outline-success" type="submit" name="employee_submit">Submit</button>
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