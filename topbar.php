<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark custom-navbar shadow-sm">
  <div class="container">

    <!-- Brand Logo -->
    <a class="navbar-brand d-flex align-items-center" href="./">
      <img src="B_B.png" alt="Logo" height="60" style="margin-top: -15px; margin-right: 10px;">
    </a>

    <!-- Toggle Button (Mobile View) -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar Links -->
    <div class="collapse navbar-collapse" id="mainNavbar">
      <ul class="navbar-nav ml-auto align-items-center">

        <li class="nav-item">
          <a class="nav-link nav-home text-white font-weight-bold" href="./">Home</a>
        </li>

        <?php if (!isset($_SESSION['login_id'])): ?>
          <li class="nav-item">
            <a class="nav-link nav-login text-white font-weight-bold" href="login.php" id="login">Signin</a>
          </li>
        <?php else: ?>

          <li class="nav-item">
            <a class="nav-link nav-login text-white font-weight-bold" href="index.php?page=my_order" id="login">My Orders</a>
          </li>

          <!-- Cart Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white font-weight-bold" data-toggle="dropdown" href="#" role="button">
              <div class="badge badge-danger cart-count">0</div>
              <i class="fa fa-shopping-cart"></i> Cart
            </a>
            <div class="dropdown-menu dropdown-menu-right p-2" style="min-width: 300px;">
              <div id="cart_product" class="cart-list"></div>
              <div class="text-center mt-2">
                <a href="index.php?page=cart" class="btn btn-sm btn-primary btn-block text-white">
                  <i class="fa fa-edit"></i> View Cart
                </a>
              </div>
            </div>
          </li>

          <!-- Account Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white font-weight-bold" data-toggle="dropdown" href="#" role="button">
              <i class="fa fa-user mr-1"></i> <?php echo ucwords($_SESSION['login_firstname']) ?>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="signup.php" id="manage_my_account">
                <i class="fa fa-cog"></i> Manage Account
              </a>
              <a class="dropdown-item" href="admin/ajax.php?action=logout2">
                <i class="fa fa-power-off"></i> Logout
              </a>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link nav-home text-white font-weight-bold" href="Contact Us2.php">Contact Us</a>
          </li>

        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>

<!-- Styles -->
<style>
  .cart-img {
    width: 25%;
    max-height: 13vh;
    overflow: hidden;
    padding: 3px;
  }
  .cart-img img {
    width: 100%;
  }
  .cart-qty {
    font-size: 14px;
  }
  .custom-navbar {
  background-color: #1f4037; /* Change to any hex or RGB color */
}

</style>

<!-- Script -->
<script>
  $(document).ready(function(){
    var page = '<?php echo isset($_GET['page']) ? $_GET['page'] : 'home' ?>';
    if($('.nav-link.nav-'+page).length > 0){
      $('.nav-link.nav-'+page).addClass('active');

      if($('.nav-link.nav-'+page).hasClass('tree-item')){
        $('.nav-link.nav-'+page).closest('.nav-treeview').siblings('a').addClass('active');
        $('.nav-link.nav-'+page).closest('.nav-treeview').parent().addClass('menu-open');
      }

      if($('.nav-link.nav-'+page).hasClass('nav-is-tree')){
        $('.nav-link.nav-'+page).parent().addClass('menu-open');
      }
    }

    $('.manage_account').click(function(){
      uni_modal('Manage Account','manage_user.php?id='+$(this).attr('data-id'))
    });
  });
</script>
