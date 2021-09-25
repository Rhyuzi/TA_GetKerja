
 	<?php $this->load->view("client/_partials/navbar.php") ?>
 	<?php $this->load->view("client/_partials/body.php") ?>
	<!DOCTYPE html>
<html>
<style>
	.data{
		min-height: 60px;
		margin-left: 6%;
		display: inline-block;
		text-decoration: none;
		background-color: rgba(130,130,130,0.5);
	}
	.data:hover{
		background: #2ecc71;
	}
	hr{
		-moz-border-bottom-colors:none;
		-moz-border-image:none;
		-moz-border-left-colors:none;
		-moz-border-right-colors:none;
		-moz-border-bottom-colors:none;

	}
	#portfolio{
		margin-top: 20%;
	}
</style>
<head>
	<title>E-Voting</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
	<meta name="viewport" content="width=device-width,scale=initial-scale">
</head>
<body>
 	


    <section class="section ft-feature-1 text-dark bg-light" style="margin-top: 200px;">
      <div class="container">
        <div class="row align-items-stretch">
          <div class="col-12 bg-black w-100 ft-feature-1-content">
            <div class="row align-items-center">
              <div class="col-lg-5">
                <div class="h-100">
                  <div class="mb-5 d-flex align-items-center">
                    <div>
                      <a href="https://vimeo.com/317571768" class="popup-vimeo d-block play"><span class="icon-play"></span></a>
                    </div>
                    <h2><center>Selamat Datang Di GetKerja</center></h2>
                  </div>
                  <img src="<?php echo base_url(). 'images/about_1.jpg'; ?>" alt="Image" class="img-feature img-fluid">
                </div>
              </div>
              <div class="col-lg-3 ml-auto">
                <div class="mb-5">
                  <h3 class="d-flex align-items-center"><span class="fa fa-building mr-2"></span><span>Perusahaan</span></h3>
                  <p>Perusahaan yang terdaftar di seluruh kota di Indonesia</p>
                  <p><a href="#" class="text-dark">Read More</a></p>
                </div>

                <div>
                  <h3 class="d-flex align-items-center"><span class="fas fa-address-book mr-2"></span><span>Lowongan</span></h3>
                  <p>Cari lowongan kerja yang sudah Disediakan</p>
                  <p><a href="#">Read More</a></p>
                </div>

              </div>
              <div class="col-lg-3">
                <div class="mb-5">
                  <h3 class="d-flex align-items-center"><span class="fas fa-address-card mr-2"></span><span>Kirim Cv</span></h3>
                  <p>Kirim Cv kepada perusahaan yang membutuhkan pekerja</p>
                  <p><a href="#">Read More</a></p>
                </div>

                <div>
                  <h3 class="d-flex align-items-center"><span class="fab fa-accusoft mr-2"></span><span>Mudah Digunakan</span></h3>
                  <p>Mudah digunakan karena menggunakan desain yang simple</p>
                  <p><a href="#">Read More</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="site-section bg-light">
      <div class="container" style="padding-top: 20px;">
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <div class="p-3 box-with-humber">
              <div class="number-behind">01.</div>
              <h2>Visi</h2>
              <p>Membuat sebuah perubahan dalam mempermudah kehidupan dan mengatakan sesungguhnya hidup itu mudah jika kita membuat suatu perubahan</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="p-3 box-with-humber">
              <div class="number-behind">02.</div>
              <h2>Misi</h2>
              <p>Membuat manusia yang berpotensi tinggi bekerja sesuai bidangnya masing-masing</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="p-3 box-with-humber">
              <div class="number-behind">03.</div>
              <h2>Filosofi</h2>
              <p>Jika kita orang lain bisa melakukannya mengapa kita tidak mencobanya</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section bg-light">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-8 text-center">
            <h2 class="text-black h1 site-section-heading text-center">Perusahaan</h2>
            <p class="lead">Perusahaan yang Telah terdaftar</p>
          </div>
        </div>
      </div>
      <<?php foreach ($data_perusahaan as $data): ?>
      <div class="data col-lg-3">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?= base_url(); ?>index.php/client/perusahaan/detail/<?= $data["noid"]?>" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4><?= $data["nama_perusahaan"]; ?></h4>
              </div>
			  <h5><center><?= $data["nama_perusahaan"]; ?></center></h5>
				<h6><center>CEO : <?= $data["ceo_perusahaan"]; ?></center></h6>
				<h6><center>Kota : <?= $data["kota"]; ?></center></h6>  
			</a> </div>
          </div>
        </div>
        <?php endforeach; ?> 

          <div class="col-12 text-center mt-5">
            <a href="<?php echo site_url('client/perusahaan') ?>" class="btn btn-primary btn-md">Tampilkan Semua Perusahaan</a>
          </div>

          
        </div>
      </div>
    </section>
<footer class="sticsadky-footer btn-blcok" style="position: left; text-align: center; height: 80px; width: 100%; background-color: grey;margin-top: 10px;">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
    	<br>
      <span>Copyright Azi Rahayu 2019 </span>
    </div>
  </div>
</footer>

	
</body>
</html>
<?php $this->load->view("client/_partials/modal.php") ?>
<?php $this->load->view("client/_partials/js.php") ?>
<?php $this->load->view("client/_partials/head.php") ?>
