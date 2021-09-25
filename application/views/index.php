<!DOCTYPE html>
<html>
<head>
	<title>GetKerja</title>
	<link href="<?php echo base_url().'assets/style.css'?>" rel="stylesheet">
	<script src="<?php echo base_url(). 'assets/jquery-3.3.1.min.js' ?>"></script>
	<meta name="viewport" content="width=device-width,scale=initial-scale">
</head>
<body>
 	<?php $this->load->view("navbar_index.php") ?>
	<center>
		<div class="centerTextHead mon">
			GetKerja Menyelesaikan masalah mencari pekerjaan
		</div>
		<div class="textKet roboto">
			Mengatasi masalah mencari pekerjaan dengan cara modern. Menggunaka teknologi aplikasi berbasis website mulai dari pencarian pekerjaan , perusahaan  , dll.
		</div>
		
	</center>
	<div class="heroImage">
		
	</div>

	<center>
		<div id="Tujuan"></div>
		<div class="heading2 mon">
			Mengatasi masalah jika anda membutuhkan pekerjaan
		</div>
		<img src="<?php echo base_url(). 'assets/img/boxVote.jpg'; ?>" width="400px">
		<div class="textKet roboto">
			Cari perusahaan yang mempunyai lowongan kerja , Cari perusahaan yang ingin anda tempati.
		</div>
		<br><br>
	</center>

	<div class="heroImage2"></div>
	<div id="Fitur"></div>
	<center>

		<div class="landing3">
			<div class="heading2 headingFitur mon">
				Fitur yang kami sediakan
			</div>
			<div class="boxFitur roboto ib vt">
				<img src="<?php echo base_url(). 'assets/img/icon/pemilu.jpg'; ?>" width="200px">
				<div class="headFitur">Daftar Perusahaan</div>
				<div class="captFitur">
					Daftar perusahaan yang ada di indonesia
				</div>
			</div>
			<div class="boxFitur roboto ib vt">
				<img src="<?php echo base_url(). 'assets/img/icon/voting.jpg'; ?>" width="200px">
				<div class="headFitur">Daftar Bidang</div>
				<div class="captFitur">
					Pilih bidang pekerjaan yang anda inginkan
				</div>
			</div>
			<div class="boxFitur roboto ib vt">
				<img src="<?php echo base_url(). 'assets/img/icon/musyawarah.jpg' ?>" width="200px">
				<div class="headFitur">Kirim CV</div>
				<div class="captFitur">
					Mengirim CV kepada perusahaan yang akan anda tempati.
				</div>
			</div>
		</div>
	</center>
	<div class="heroImage3"></div>

	<center>
		<div class="landing4">
			<div class="ib vt">
				<img src="<?php echo base_url(). 'assets/img/logoLingkaran.jpg'; ?>" width="300px">
			</div>
			<div class="captLand4 heading2 ib vt roboto">
				Masuk / Daftar sekarang dan rasakan manfaatnya!
				<div class="buttonStart buttonStartL4 mon">
				<a href="<?php echo site_url('login'); ?>" id="masukBtn">Halaman Login</a>
				</div>
			</div>
		</div>
	</center>

	
	<script type="text/javascript">
		$(document).ready(function(){
			$(".nav a:nth-child(1)").click(function(){
				$("html,body").animate({scrollTop: 0},1000);
			});
			$(".nav a:nth-child(2)").click(function(){
				$("html,body").animate({scrollTop: $("#Tujuan").offset().top - 100},1000);
			});
			$(".nav a:nth-child(3)").click(function(){
				$("html,body").animate({scrollTop: $("#Fitur").offset().top - 100},1000);
			});
		})
	</script>
</body>
</html>