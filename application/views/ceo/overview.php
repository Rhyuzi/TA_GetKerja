<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("ceo/_partials/head.php") ?>
</head>
<body id="page-top">

<?php $this->load->view("ceo/_partials/navbar.php") ?>

<div id="wrapper">

	<?php $this->load->view("ceo/_partials/sidebar.php") ?>

	<div id="content-wrapper">

		<div class="container-fluid">

        <!-- 
        karena ini halaman overview (home), kita matikan partial breadcrumb.
        Jika anda ingin mengampilkan breadcrumb di halaman overview,
        silahkan hilangkan komentar (//) di tag PHP di bawah.
        -->
		<?php $this->load->view("ceo/_partials/breadcrumb.php") ?>

		<div class="row">
			<div class="col-xl-3 col-sm-6 mb-3">
			<div class="card text-white bg-primary o-hidden h-100">
				<div class="card-body">
				<div class="card-body-icon">
					<i class="fas fa-fw fa-list"></i>
				</div>
				<div class="mr-5"><?php echo $count?> Jumlah CV client</div>
				</div>
				<a class="card-footer text-white clearfix small z-1" href="<?php echo site_url("admin/cv")?>">
				<span class="float-left">Lihat lebih Detail</span>
				<span class="float-right">
					<i class="fas fa-angle-right"></i>
				</span>
				</a>
			</div>
			</div>
			
			<div class="col-xl-3 col-sm-6 mb-3">
			<div class="card text-white bg-danger o-hidden h-100">
				<div class="card-body">
				<div class="card-body-icon">
					<i class="fas fa-fw fa-life-ring"></i>
				</div>
				<div class="mr-5"><?php echo $count_lowongan?> Lowongan Kerja ditambahkan!</div>
				</div>
				<a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('admin/lowongan')?>">
				<span class="float-left">Lihat lebih Detail</span>
				<span class="float-right">
					<i class="fas fa-angle-right"></i>
				</span>
				</a>
			</div>
			</div>
		</div>


		</div>
		<!-- /.container-fluid -->




	</div>
	<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->


<?php $this->load->view("ceo/_partials/scrolltop.php") ?>
<?php $this->load->view("ceo/_partials/modal.php") ?>
<?php $this->load->view("ceo/_partials/js.php") ?>
    
</body>
</html>
