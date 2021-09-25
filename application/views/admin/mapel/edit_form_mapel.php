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

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('admin/mapels/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">
						<form action="<?php base_url(" admin/mapel/ubah" .$client->noid) ?>" method="post"
							enctype="multipart/form-data" >

	


							<div class="form-group">
								<label for="name">Username</label>
								<input class="form-control" type="text" name="input_userid" value="<?php echo set_value('input_userid', $client->user_id); ?>">
								
							</div>


							<div class="form-group">
								<label for="price">Nama</label>
								<input class="form-control" type="text" name="input_nama" value="<?php echo set_value('input_nama', $client->nama); ?>">
							</div>


							<div class="form-group">
								<label for="price">Alamat</label>
								<input class="form-control" type="text" name="input_alamat" value="<?php echo set_value('input_alamat', $client->alamat); ?>">
							</div>

							<div class="form-group">
								<label for="price">Tanggal Lahir</label>
								<input class="form-control" type="text" name="input_tanggal_lahir" value="<?php echo set_value('input_tanggal_lahir', $client->tanggal_lahir); ?>">
							</div>

							<div class="form-group">
								<label for="price">Tempat Lahir</label>
								<input class="form-control" type="text" name="input_tempat_lahir" value="<?php echo set_value('input_tempat_lahir', $client->tempat_lahir); ?>">
							</div>

							<div class="form-group">
								<label for="price">Email</label>
								<input class="form-control" type="text" name="input_email" value="<?php echo set_value('input_email', $client->alamat); ?>">
							</div>

							<div class="form-group">
								<label for="price">No Handphone</label>
								<input class="form-control" type="text" name="input_nohp" value="<?php echo set_value('input_nohp', $client->nohp); ?>">
							</div>

							<div class="form-group">
								<label for="price">Level</label>
								<input class="form-control" type="text" name="input_level" value="<?php echo set_value('input_level', $client->level); ?>">
							</div>
														
							<input class="btn btn-success" type="submit" name="submit" value="Ubah">
					
							
						</form>

					</div>


				</div>
				

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->

		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
