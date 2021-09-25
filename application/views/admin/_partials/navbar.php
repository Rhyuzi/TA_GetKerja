<nav class="navbar navbar-expand navbar-dark  static-top" style="background-color: grey;">

    
<button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" style="font-size: 30px;" href="#">
        <i class="fas fa-bars"></i>
    </button>

    <a class="btn btn-outline-light" style="font-size: 20px;" href="<?php echo site_url('admin') ?>" >
                <i class="fas fa-home fa-fw"></i>GetKerja</a>


    
    </button>

    

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
        

        

        <li class="nav-item dropdown no-arrow">
            <a class="btn btn-outline-light" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <i class="fas fa-user-circle fa-fw"></i> <?php echo $this->session->userdata('ses_nama') ?>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                
                <a class="dropdown-item" href="<?php echo site_url('login'); ?>" data-toggle="modal" data-target="#logoutModal">Logout</a>
            </div>
        </li>
    </ul>

</nav>
