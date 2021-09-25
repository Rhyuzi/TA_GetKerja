<?php $this->load->view("client/_partials/navbar.php") ?>
<?php $this->load->view("client/_partials/body.php") ?>
<link href="<?php echo base_url('css/bootstrap/style.css') ?>" rel="stylesheet">
<style>
	.data{
		margin-top: 20px;
		margin: 20px;
		min-height: 60px;
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
<body style="background-color: white;color: black">

<section class="site-section bg-light">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-8 text-center">
            <h2 class="text-black h1 site-section-heading text-center">Perusahaan</h2>
            <p class="lead">Perusahaan yang Telah terdaftar</p>
          </div>
        </div>
      </div>
      <div class="categories">
    		<?php foreach ($data_perusahaan as $data): ?>

    			<div class="data col-lg-3">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?= base_url(); ?>index.php/client/perusahaan/detail/<?= $data["noid"]?>" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4><?= $data["nama_perusahaan"]; ?></h4>
              </div>
			  <h5><center><?= $data["nama_perusahaan"]; ?></center></h5>
				<h6><center>CEO : <?= $data["ceo_perusahaan"]; ?></center></h6>
				<h6><center>Bidang : <?= $data["nama_bidang"]; ?></center></h6>
				<h6><center>Kota : <?= $data["kota"]; ?></center></h6>
			</a> </div>
          </div>
        </div>
        <?php endforeach; ?> 


        
    </section>

	
	
	
	
	<div class="row">
        <div class="col">
            <!--Tampilkan pagination-->
            <?php echo $pagination; ?>
        </div>
    </div>
   
</body>

<?php $this->load->view("client/_partials/modal.php") ?>
<?php $this->load->view("client/_partials/js.php") ?>
<?php $this->load->view("client/_partials/head.php") ?>