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
                        <label for="nip">Nama Perusahaan :</label>
                        <input readonly class="form-control" id="nama_perusahaan" type="text" name="input_nama_perusahaan" autocomplete="off" value="<?= $edit["nama_perusahaan"]; ?>">
                        <small class="form-text text-danger"><?= form_error('nama_perusahaan');?></small>
                    </div>
							<div class="form-group">
								<label for="name">Nama</label>
								<input readonly class="form-control" type="text" name="input_nama" value="<?= $edit["nama"]; ?>">
								
							</div>


							<div class="form-group">
								<label for="name">Tempat</label>
								<input readonly class="form-control" type="text" name="input_tempat" value="<?= $edit["tempat"]; ?>">
								
							</div>

							<div class="form-group">
								<label for="name">Tanggal Lahir</label>
								<input readonly class="form-control" type="text" name="input_tanggal_lahir" value="<?= $edit["tanggal_lahir"]; ?>">
								
							</div>
								
							</div>


							<div class="form-group">
								<label for="name">Alamat Lengkap</label>
								<input readonly class="form-control" type="text" name="input_alamat_lengkap" value="<?= $edit["alamat_lengkap"]; ?>">
								
							</div>

							<div class="form-group">
								<label for="name">Jabatan</label>
								<input readonly class="form-control" type="text" name="id_jabatan" value="<?= $edit["id_jabatan"]; ?>">
								<input readonly class="form-control" type="text" value="<?= $edit["nama_jabatan"]; ?>">
								
							</div>
								

							<div class="form-group">
								<label for="name">Pengalaman Kerja</label>
								<textarea readonly class="form-control" name="input_pengalaman_kerja"><?= $edit["pengalaman_kerja"]; ?></textarea>
								
							</div>

							<div class="form-group">
                        <label for="mapel">Status :</label>
                        <select class="form-control" name="input_status">
                            <option value="">==PilihStatus==</option>
                            <?php foreach($status as $dm):?>
                                <option value="<?= $dm["id_status"]?>"><?= $dm["status"]?></option>
                            <?php endforeach;?>
                        </select>
                        <small class="form-text text-danger"><?= form_error('id_status');?></small>
                    </div>

							<input class="btn btn-success" type="submit" name="submit" value="Ubah">
							      <a href="<?php echo base_url(); ?>">
							 <a href="<?php echo site_url('ceo/products/') ?>">
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
		<?php $this->load->view("ceo/_partials/modal.php") ?>
		<?php $this->load->view("ceo/_partials/js.php") ?>

</body>

</html>
