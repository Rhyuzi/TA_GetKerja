<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("ceo/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("ceo/_partials/navbar.php") ?>
	<div id="wrapper">


		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("ceo/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('ceo/products/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">
						<form action="" method="post"
							enctype="multipart/form-data" >

	


							<div class="form-group">
								<label for="name">Nama Perusahaan</label>
								<input readonly class="form-control" type="text" name="input_nama_perusahaan" value="<?= $ubah["nama_perusahaan"]; ?>">
								
							</div>

							<div class="form-group">
                        <label for="mapel">Jabatan :</label>
                        <select class="form-control" name="id_jabatan" required autofocus>
                            <option value="">==PilihJabatan==</option>
                            <?php foreach($jabatan as $dm):?>
                                <option value="<?= $dm["id_jabatan"]?>"><?= $dm["nama_jabatan"]?></option>
                            <?php endforeach;?>
                        </select>
                        <small class="form-text text-danger"><?= form_error('id_jabatan');?></small>
                    </div>



							<div class="form-group">
								<label for="name">Kota</label>
								<input class="form-control" type="text" name="input_kota" value="<?= $ubah["kota"]; ?>" readonly>
								<small class="form-text text-danger"><?= form_error('input_kota');?></small>
							</div>

							<div class="form-group">
								<label for="name">Provinsi</label>
								<input class="form-control" type="text" name="input_provinsi" value="<?= $ubah["provinsi"]; ?>" readonly>
								
							</div>

							
							<div class="form-group">
								<label for="name">Keterangan Perusahaan</label>
								<input type="text" class="form-control" name="input_keterangan" value="<?= $ubah["keterangan"]; ?>">
								
							</div>

							<input class="btn btn-success" type="submit" name="submit" value="Ubah">
							      <a href="<?php echo base_url(); ?>">
							 <a href="<?php echo site_url('ceo/lowongan/') ?>">
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

		<?php $this->load->view("ceo/_partials/scrolltop.php") ?>

		<?php $this->load->view("ceo/_partials/js.php") ?>

</body>

</html>
