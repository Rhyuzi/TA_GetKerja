<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<div id="content-wrapper">

			<div class="container-fluid">


				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/products/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/product/add') ?>" method="post" enctype="multipart/form-data" >

							<div class="form-group">
								<label>Nama Perusahaan</label>
								<div>
									<input class="form-control" type="text" name="input_nama_perusahaan" value="<?php echo set_value('input_nama_perusahaan'); ?>"
								 type="text"  placeholder="Masukan Nama" />
								</div>
								
								
							</div>



							<div class="form-group">
								<label>Kota</label>
								<div>
									<input class="form-control" type="text" name="input_kota" value="<?php echo set_value('input_kota'); ?>"
								 type="text"  placeholder="Masukan Kota" />
								</div>
								
								
							</div>

							<div class="form-group">
								<label>Provinsi</label>
								<div>
									<input class="form-control" type="text" name="input_provinsi" value="<?php echo set_value('input_provinsi'); ?>"
								 type="text"  placeholder="Masukan Kota" />
								</div>
								
								
							</div>

							<div class="form-group">
								<label for="name">Keterangan Perusahaan</label>
								
								<textarea class="form-control" placeholder="Masukan Keterangan Perusahaan" name="input_keterangan"
										value="<?php echo set_value('input_keterangan'); ?>"></textarea>
							
							</div>

							<input class="btn btn-success" type="submit" name="submit" value="Simpan">
							<a href="<?php echo site_url('admin/products/') ?>">
							<a href="<?php echo site_url('admin') ?>" class="btn btn-danger">Batal</a>
							</a>
      						
						</form>

					</div>

					
				</div>
				<!-- /.container-fluid -->

			

		</div>
		<!-- /#wrapper -->


		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
