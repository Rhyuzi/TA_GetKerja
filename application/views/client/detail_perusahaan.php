<?php $this->load->view("client/_partials/navbar.php") ?>

<body background="<?php echo base_url(). 'assets/images.jpg'; ?>">
<style>
	body{
		background-size: 80%;
	}
	.data{
		min-height: 300px;
		text-decoration: none;
		background-color: white;
		margin-top: 50px;

	}
	.data-detail{
		font-size: 30px;
	}

</style>
		
		<div id="portfolio">
  <div class="container">
    <div class="section-title text-center center">
      <h2>Detail Perusahaan</h2>
      <hr>
    </div>
  
  
  
	
	<div id="container" style="background-color: grey;font-size: 20px;">
 


<div class="text-white" style="width: 1000px;">
  <div style="width: 1110px;margin-top: 20px;border: 2px solid #3498db;">
         <?php foreach ($data_perusahaan as $data): ?>
      <div style="border: 2px solid #3498db;">
      <h1 class="data-detail text-white"><strong><?= $data["nama_perusahaan"]; ?></strong></h1>
				<h4 class="data-detail text-white"><strong>CEO <?= $data["ceo_perusahaan"]; ?></strong></h4>
				<h6 class="data-detail pl-4 text-white">Jurusan : <?= $data["nama_bidang"];?></h6>
				<h6 class="data-detail pl-4 text-white">Alamat : <?= $data["alamat"]; ?></h6>
				<h6 class="data-detail pl-4 text-white">Kota : <?= $data["kota"]; ?></h6>
        	<div style="margin-left: 200px;">
				<h3 class="data-detail text-white">Keterangan</h3>
				<h4 class="data-detail keterangan text-white col md-5" style="border: 1px solid"><?= $data["keterangan"]; ?></h4>

				
</div>
        </div>
      <?php endforeach; ?>  
  </div>
</div>
</div>
</div>
  </div>
</body>
<?php $this->load->view("client/_partials/modal.php") ?>
<?php $this->load->view("client/_partials/js.php") ?>
<?php $this->load->view("client/_partials/head.php") ?>