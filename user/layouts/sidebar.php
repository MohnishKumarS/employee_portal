<div class="col-md-3 col-lg-2 px-0 position-fixed h-100 bg-white shadow-sm sidebar" id="sidebar">
      <!-- <h1 class="bi bi-bootstrap text-primary d-flex my-4 justify-content-center"></h1> -->
     <div class="bi text-primary d-flex justify-content-center">      <img src="<?=$url ?>assets/images/logo.svg" alt="logo" width="100" height="100"> </div>
      <div class="list-group rounded-0">
        <a href="#" class="list-group-item list-group-item-action active border-0 d-flex align-items-center">
          <span class="bi bi-border-all"></span>
          <span class="ml-2"> Employee Dashboard</span>
        </a>
       

        <button class="list-group-item list-group-item-action border-0 d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#sale-collapse">
          <div>
            <span class="bi bi-cart-dash"></span>
            <span class="ml-2">User</span>
          </div>
          <span class="bi bi-chevron-down small"></span>
        </button>
        <div class="collapse" id="sale-collapse" data-parent="#sidebar">
          <div class="list-group">
            <a href="./profile.php" class="list-group-item list-group-item-action border-0 pl-5"> Profile </a>
            <a href="#" class="list-group-item list-group-item-action border-0 pl-5">Leave</a>
          </div>
        </div>

        <button class="list-group-item list-group-item-action border-0 d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#purchase-collapse">
          <div>
            <span class="bi bi-cart-plus"></span>
            <span class="ml-2">Tickets</span>
          </div>
          <span class="bi bi-chevron-down small"></span>
        </button>
        <div class="collapse" id="purchase-collapse" data-parent="#sidebar">
          <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action border-0 pl-5">Tickets</a>
            <a href="#" class="list-group-item list-group-item-action border-0 pl-5">Finished</a>
          </div>
        </div>
      </div>
    </div>