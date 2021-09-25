<?php $this->load->view("client/_partials/navbar.php") ?>


<style>
	.data{
		min-height: 300px;
		text-decoration: none;
		background-color: rgba(130,130,130,0.5);
		margin-top: 50px;
	}
	label{
		color: white;
	}

</style>
		<div class="data">
		<form action="<?php base_url(" client/ubah_informasi/ubah" .$client->noid) ?>" method="post"
							enctype="multipart/form-data" >
								<label for="price" class="text-white">Nama</label>
								<input class="form-control" type="text" name="input_nama" value="<?php echo set_value('input_nama', $client->nama); ?>">
					
							<div class="form-group">
								<label for="price">Password</label>
								<input class="form-control" type="password" name="input_pass" value="<?php echo set_value('input_pass', $client->pass); ?>">
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

														
							<input class="btn btn-success" type="submit" name="submit" value="Ubah">
					
							
						</form>
			</div>
</div>
</div>
<?php $this->load->view("client/_partials/modal.php") ?>
<?php $this->load->view("client/_partials/js.php") ?>
<?php $this->load->view("client/_partials/head.php") ?>