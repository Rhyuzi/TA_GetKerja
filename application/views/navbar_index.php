

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

<body>

<nav class="navbar navbar-expand navbar-dark  static-top" style=" background-color: rgba(130,130,130,0.5);">   

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
        <a class="nav-link" href="<?php echo site_url('client/bidang'); ?>">Bidang</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Kontak</a>
      </li>
     
         
        </ul>
</div>
    

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        
    </form>

        

<?php $this->load->view("client/_partials/js.php") ?>
<?php $this->load->view("client/_partials/head.php") ?>
</nav>
</body>
