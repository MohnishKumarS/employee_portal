<?php
include(__DIR__ . '/../../config/index.php');
require(HEADER);
require MODEL_PATH."/Employee.php";
?>

<?php

$emp = new Employee();


if (isset($_POST['employee_update_submit'])) {
  // print_r($_POST);
  $data = [
    'emp_id' => $_POST['emp_id'],
    'emp_name' => $_POST['emp_name'],
    'emp_dep' => $_POST['emp_dep'],
    'emp_mobile' => $_POST['emp_mobile'],
    'emp_doj' => $_POST['emp_doj'],
    'emp_email' => $_POST['emp_email'],
  ];

  $result = $emp->update($data,$_POST['id']);

  // print_r($result);

  if ($result) {
    $_SESSION['status'] = 'success';
    $_SESSION['message'] = 'Employee updated successfully';
    header('Location:'.$url.'admin/employee/list.php');
    exit();
  } else {
    $_SESSION['status'] = 'error';
    $_SESSION['message'] = 'Failed to update employee';
    // header('Location:'.$url.'admin/employee/list.php');
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
          <h4 class="text-center mb-3">Update Employee</h4>

          <?php
          if(isset($_GET['id'])){
            $emp_id = $_GET['id'];
            $res = $emp->edit($emp_id);
              // echo "<pre>";
              // print_r($res);
          
          }
       
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
                  <input type="text" class="form-control" name="emp_id" value="<?=$res['emp_id'] ?>">
                  <input type="hidden" class="form-control" name="id" value="<?=$res['id'] ?>">

                </div>
                <div class="col-lg-6 mb-3">
                  <label class="form-label">Name</label>
                  <input type="text" class="form-control" name="emp_name" value="<?=$res['emp_name'] ?>">

                </div>
                <div class="col-lg-6 mb-3">
                  <label class="form-label">Department</label>
                  <select class="form-select" name="emp_dep">
                    <option selected value="">Choose</option>
                    <option value="Developer" <?= $res['emp_dep'] == 'Developer' ? 'selected' : ''?>>Developer</option>
                    <option value="Designer" <?= $res['emp_dep'] == 'Designer' ? 'selected' : ''?>>Designer</option>
                    <option value="Technical Support" <?= $res['emp_dep'] == 'Technical Support' ? 'selected' : ''?>>Technical Support</option>
                    <option value="Content Writer" <?= $res['emp_dep'] == 'Content Writer' ? 'selected' : ''?>>Content Writer</option>
                  </select>

                </div>
                <div class="col-lg-6 mb-3">
                  <label class="form-label">mobile</label>
                  <input type="text" class="form-control" name="emp_mobile" value="<?=$res['emp_mobile'] ?>">

                </div>
                <div class="col-lg-6 mb-3">
                  <label class="form-label">Date of joining</label>
                  <input type="date" class="form-control" name="emp_doj" value="<?=$res['emp_doj'] ?>">

                </div>
                <div class="col-lg-6 mb-3">
                  <label class="form-label">Email Id</label>
                  <input type="text" class="form-control" name="emp_email" value="<?=$res['emp_email'] ?>">

                </div>
                <div class="col-lg-6 mb-3">
                  <label class="form-label">Password</label>
                  <input type="text" class="form-control" name="emp_pass" required disabled>

                </div>
                <div class="col-12">
                  <div class="my-4 text-center ">
                    <button class="btn btn-outline-success w-25" type="submit" name="employee_update_submit">Update</button>
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