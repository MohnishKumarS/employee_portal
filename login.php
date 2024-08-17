<?php
  include('./layouts/header.php');
?>

<div class="wrapper fadeInDown ">
  <div id="formContent " class="shadow px-3">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first text-center">
    <img src="<?= $url?>assets/images/logo.svg" alt="logo" width="130"> 
   
    </div>

    <!-- Login Form -->
    <?php
      if (isset($_SESSION['error_msg'])) {
        echo '<div class="alert alert-danger">' . $_SESSION['error_msg'] . '</div>';
        unset($_SESSION['error_msg']);
      }
      ?>
    <div class="text-center"> <h4>login</h4></div>
    <form  method="post" action="user-register.php">
    
       
        <div class="row mb-3">
        <div class="col-md-12"><b>Email </b>
        <input type="email" name="email" class="form-control" required>
        </div>
       
        </div>
        <div class="row mb-3">
        <div class="col-md-12"><b> Password</b>
        <input type="text" name="password" class="form-control" required>
        </div>
      
        </div>
       
        <div class="row mb-3 " style="margin-top:1%" >
        <div class="col-md-12 text-cente">
        <input type="submit" name="login_submit" value="Submit">
        </div>
        </div>
</form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>


<?php
  include('./layouts/footer.php');
?>
