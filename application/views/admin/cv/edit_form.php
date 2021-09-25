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

						<a href="<?php echo site_url('admin/products/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">
						<form action="<?php base_url(" admin/product/ubah" .$tbl_record_perusahaan->noid) ?>" method="post"
							enctype="multipart/form-data" >

	

							<div class="form-group">
								<label for="name">No ID</label>
								<input class="form-control" type="text" name="input_noid" value="<?php echo set_value('input_noid', $tbl_record_perusahaan->noid); ?>" readonly>
								
							</div>

							<div class="form-group">
								<label for="name">Nama Perusahaan</label>
								<input class="form-control" type="text" name="input_nama_perusahaan" value="<?php echo set_value('input_nama_perusahaan', $tbl_record_perusahaan->nama_perusahaan); ?>">
								
							</div>


							<div class="form-group">
								<label for="name">CEO Perusahaan</label>
								<input class="form-control" type="text" name="input_ceo" value="<?php echo set_value('input_ceo', $tbl_record_perusahaan->ceo_perusahaan); ?>">
								
							</div>

							<div class="form-group">
								<label for="name">Bidang</label>
								<input class="form-control" type="text" name="input_bidang" value="<?php echo set_value('input_bidang', $tbl_record_perusahaan->bidang_perusahaan); ?>">
								
							</div>
								
							</div>

							<div class="form-group">
								<label for="name">Alamat</label>
								<textarea class="form-control" name="input_alamat" value="<?php echo set_value('input_alamat', $tbl_record_perusahaan->alamat); ?>"></textarea>
							
							</div>

							<div class="form-group">
								<label for="name">Kota</label>
								<input class="form-control" type="text" name="input_kota" value="<?php echo set_value('input_kota', $tbl_record_perusahaan->kota); ?>">
								
							</div>

							
							<div class="form-group">
								<label for="name">Keterangan Perusahaan</label>
								<textarea class="form-control" name="input_keterangan" value="<?php echo set_value('input_keterangan', $tbl_record_perusahaan->keterangan); ?>"></textarea>
								
							</div>

							<input class="btn btn-success" type="submit" name="submit" value="Ubah">
							      <a href="<?php echo base_url(); ?>">
							 <a href="<?php echo site_url('admin/products/') ?>">
								<button type="button" class="btn btn-danger">Batal</button>
							</a>
							
						</form>

					</div>

			


				</div>
				<!-- /.container-fluid -->

				

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->

		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
