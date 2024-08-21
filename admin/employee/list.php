<?php
include(__DIR__ . '/../../config/index.php');
require(HEADER);
require MODEL_PATH."/Employee.php";
?>

<?php
  if(isset($_GET['del_id'])){
    $empId = $_GET['del_id'];
    $emp = new Employee();
    $res = $emp->delete($empId);
    if ($res) {
      $_SESSION['status'] = 'success';
      $_SESSION['message'] = 'Employee deleted successfully';
      header('Location:'.$url.'admin/employee/list.php');
      exit();
    } else {
      $_SESSION['status'] = 'error';
      $_SESSION['message'] = 'Failed to delete employee';
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
      <?php
      if (isset($_SESSION['status'])) {
        echo "<div class='alert alert-" . $_SESSION['status'] . "'>" . $_SESSION['message'] . "</div>";
        unset($_SESSION['status']);
      }
      ?>

      <div class="add-employee">
        <h4 class="text-center mb-5">Employee List</h4>

        <div>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Emp ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $emp = new Employee();
              $empList = $emp->list();
              // echo "<pre>";
              // print_r($emp->list());
              $i = 1;
              if (empty($emp)) {
                echo "<tr><td colspan='5'>No employee found.</td></tr>";
              } else {
                foreach ($empList as $val) {  ?>
                  <tr>
                    <th scope="row"><?php echo $i++; ?></th>
                    <td><?php echo htmlspecialchars($val['emp_id']); ?></td>
                    <td><?php echo htmlspecialchars($val['emp_name']); ?></td>
                    <td><?php echo htmlspecialchars($val['emp_email']); ?></td>
                    <td><?php echo htmlspecialchars($val['emp_dep']); ?></td>
                    <td>
                      <!-- Example action, you can modify as needed -->
                      <a href="edit.php?id=<?php echo $val['id']; ?>" class="btn btn-info">Edit</a>
                      <a href="list.php?del_id=<?php echo $val['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this employee?');">Delete</a>
                    </td>
                  </tr>
              <?php   }
              }
              ?>


            </tbody>
          </table>
        </div>

      </div>
    </main>
  </div>
</div>
</div>



<?php
include('../../layouts/footer.php');
?>