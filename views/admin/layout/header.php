Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo base_url() ?>admin/dasbor" class="nav-link">Admin Page | Basis Data</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <img src="https://scontent-cgk1-1.cdninstagram.com/v/t51.2885-19/s150x150/95954296_252803422592991_86177638325944320_n.jpg?_nc_ht=scontent-cgk1-1.cdninstagram.com&_nc_cat=103&_nc_ohc=xuiU6pz4508AX8WiAla&oh=fd44775d3aa12f19f60d0de6164d0c5e&oe=5F25BBFD" class="user-image img-circle elevation-2" alt="User Image">
          <span class="d-none d-md-inline"><?php echo $this->session->userdata('USERNAME'); ?></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header bg-primary">
            <img src="https://scontent-cgk1-1.cdninstagram.com/v/t51.2885-19/s150x150/95954296_252803422592991_86177638325944320_n.jpg?_nc_ht=scontent-cgk1-1.cdninstagram.com&_nc_cat=103&_nc_ohc=xuiU6pz4508AX8WiAla&oh=fd44775d3aa12f19f60d0de6164d0c5e&oe=5F25BBFD" class="img-circle elevation-2" alt="User Image">

            <p>
              <?php echo $this->session->userdata('USERNAME'); ?>
              <!-- <small><?php echo date('07 06 2020') ?></small> -->
              <!-- <h4>June 7, 2020</h4> -->
            </p>
          </li>
          <!-- Menu Footer-->
          <li class="user-footer">
            <a href="#" class="btn btn-default btn-flat">Profile</a>
            <a href="<?php echo base_url('login/logout') ?>" class="btn btn-default btn-flat float-right">Sign out</a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container