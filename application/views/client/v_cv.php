<!DOCTYPE html>
<html lang="en">

<head>
	
</head>

<body id="page-top">

	<?php $this->load->view("client/_partials/navbar.php") ?>
	<div id="wrapper">

		<div id="content-wrapper">

			<div class="container-fluid">


				
				<div class="card mb-3">
					
		
					<div class="card-body">

						 <?php echo form_open_multipart('client/cv/tambah'); ?>

						<div class="form-group">

								<?php foreach ($data_lowongan as $data): ?>
									<div class="form-group">
								<label>Nama Perusahaan</label>
								<div>
									<input class="form-control" type="text" name="input_nama_perusahaan" required autofocus value="<?= $data["nama_perusahaan"]; ?>"
								 type="text"  placeholder="Masukan Nama" readonly/>
								</div>
								
								
							</div>
							<?php endforeach; ?>  

							<div class="form-group">
								<label>Nama</label>
								<div>
									<input class="form-control" type="text" name="input_nama" required autofocus value="<?php echo $this->session->userdata('ses_nama'); ?>"
								 type="text"  placeholder="Masukan Nama" readonly/>
								</div>
								
								
							</div>

							
							<?php foreach ($data_client_cv as $data): ?>
							<div class="form-group">
								<label>Tempat Lahir</label>
								<div>
									<input class="form-control" type="text" name="input_tempat" required autofocus value="<?= $data["tempat_lahir"]; ?>"
								 type="text"  placeholder="Masukan Tempat Lahir" readonly />
								</div>
								
								
							</div>
							 


							<div class="form-group">
								<label>Tanggal Lahir</label>
								<div>
									<input class="form-control" type="text" name="input_tanggal_lahir" required autofocus value="<?= $data["tanggal_lahir"]; ?>"
								 type="text"  placeholder="Masukan Tanggal Lahir" readonly/>
								</div>
								
								
							</div>
							
							


							<div class="form-group">
								<label>Alamat</label>
								<div>
									<input class="form-control" type="text" name="input_alamat_lengkap" required autofocus value="<?= $data["alamat"]; ?>"
								 type="text"  placeholder="Masukan Tanggal Lahir" readonly/>
								</div>
								
								
							</div>
							<?php endforeach; ?> 

							<?php foreach ($data_lowongan as $data): ?>
									<div class="form-group">
								<label>Jabatan</label>
								<div>
									<input class="form-control" type="text" name="id_jabatan" required autofocus value="<?= $data["id_jabatan"]; ?>"
								 type="text"  placeholder="Masukan Nama" readonly/>
								 <input class="form-control" type="text" required autofocus value="<?= $data["nama_jabatan"]; ?>"
								 type="text"  placeholder="Masukan Nama" readonly/>
								</div>
								
								
							</div>
							<?php endforeach; ?>
							


							<div class="form-group">
								<label for="name">Deskripsi</label>
								
								<textarea class="form-control" placeholder="Deskripsikan Tentang anda" required autofocus name="input_pengalaman_kerja"
										value="<?php echo set_value('input_pengalaman_kerja'); ?>"></textarea>
							
							</div>

							<input class="btn btn-primary btn-block" type="submit" name="submit" value="Kirim CV" id="submitBtn">
      						
						<?php echo form_close() ?>
					</div>

					
				</div>
				<!-- /.container-fluid -->

			

		</div>
		<!-- /#wrapper -->


		<?php $this->load->view("client/_partials/modal.php") ?>
<?php $this->load->view("client/_partials/js.php") ?>
<?php $this->load->view("client/_partials/head.php") ?>

</body>

</html>


