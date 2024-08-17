<?php

include('header.php');
?>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first mt-3">
      <img src="<?= $url ?>images/logo.svg" alt="logo" width="150" class="img-fluid" id="icon">
    </div>

    <div class="px-3">
      <!-- Login Form -->

      <div class="my-3">
        <h4>Register Form</h4>
      </div>
      <?php
      if (isset($_SESSION['success_msg'])) {
        echo '<div class="alert alert-success">' . $_SESSION['success_msg'] . '</div>';
        unset($_SESSION['success_msg']);
      }
      if (isset($_SESSION['error_msg'])) {
        echo '<div class="alert alert-danger">' . $_SESSION['error_msg'] . '</div>';
        unset($_SESSION['error_msg']);
      }
      ?>
      <form method="POST" action="user-register.php">
        <div class="row mb-3">
          <div class="col-md-12">
            <label for="" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" required>
          </div>

        </div>
        <div class="row mb-3">
          <div class="col-md-12">
            <label for="" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" required>
          </div>

        </div>
        <div class="row mb-3">

          <div class="col-md-12">
            <label for="" class="form-label">Password</label>
            <input type="text" name="password" class="form-control" required>
          </div>
        </div>
        <!-- <div class="row mb-3">
               
            <div class="col-md-12">
            <label for="" class="form-label">Phone</label>
            <input type="text" name="Phone" class="form-control" maxlength="10" required>
            </div>
        </div> -->

        <div class="row mb-3">
          <div class="col-md-12 text-cente">
            <input type="submit" name="register_submit" value="Submit">
          </div>
        </div>
      </form>

    </div>


    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="text-link" href="login.php">Already have account? Login</a>
    </div>

  </div>
</div>


<?php
include('footer.php');
?>