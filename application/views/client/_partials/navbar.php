

<?php $this->load->view("client/_partials/head.php") ?>
    <head>
        <style>
            body{
                color: white;
            }
            
            a{
                text-decoration: none;
            }
            ul{
                text-align: right;
            }
            li{
                font-size: 20px;
            }

        </style>
    </head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">



            

<nav id="menu" class="navbar navbar-expand navbar-dark  static-top" style=" background-color: rgba(130,130,130,0.5);">   

    <a class="navbar-brand mr-1 btn btn-outline-secondary" style="margin-left: 10px;font-size: 30px;" href="<?php echo site_url('client/beranda'); ?>"><i class="fa fa-building"></i>
    <strong>GetKerja</strong></a>

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav col-md-9">
      <li class="nav-item active col-md-10">
        <a class="nav-link" href="<?php echo site_url('client/beranda') ?>">Beranda</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('client/perusahaan') ?>">Perusahaan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('client/lowongan'); ?>">Lowongan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('client/kontak')?>">Kontak</a>
      </li>
      
     
         
        </ul>
</div>
    <!-- Navbar Search -->
    

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        
    </form>

        

        <li class="nav-item dropdown no-arrow">
            <a class="btn btn-outline-light" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <i class="fas fa-user-circle fa-fw"></i> <?php echo $this->session->userdata('ses_nama'); ?>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?php echo site_url('client/status'); ?>">List Status Cv</a>
                <a class="dropdown-item" href="<?php site_url('login'); ?>" data-toggle="modal" data-target="#logoutModal">Logout</a>

            </div>
        </li>
    </ul>
</nav>
</body>
