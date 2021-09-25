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
						<a href="<?php echo site_url('admin/mapels/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/mapel/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="name">Kode Mapel</label>
								<div>
									<input class="form-control" type="text" name="input_kode" value="<?php echo set_value('input_kode'); ?>"
								  placeholder="Masukan Kode Mapel" />
								</div>
								
							</div>

							<div class="form-group">
								<label for="price">Nama Mapel</label>
								<div>
									<input class="form-control" type="text" name="input_nama_mapel" value="<?php echo set_value('input_nama_mapel'); ?>"
								 type="text"  placeholder="Masukan Nama Mapel" />
								</div>							
								
							</div>

							<div class="form-group">
								<label for="name">Jumlah Jam</label>
								<div>
									
									<select name="input_jml_jam"  class="form-control" values="<?php echo set_value('input_jml_jam'); ?>">
            					    <option>--Pilih Jumlah Jam--</option>
            					    <option>2 jam</option>
            					    <option>3 jam</option>
            					    <option>4 jam</option>
            					    <option>6 jam</option>
            					    <option>8 jam</option>
           							</select>
								
								</div>
								
							</div>

							

							<input class="btn btn-success" type="submit" name="submit" value="Simpan">
      						
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
