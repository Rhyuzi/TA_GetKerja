

	<?php $this->load->view("ceo/_partials/head.php") ?>

<title>Data Perusahaan</title>
<body id="page-top">

	<?php $this->load->view("ceo/_partials/navbar.php") ?>
	<div id="wrapper">



		<div id="content-wrapper">

			<div class="container-fluid">



				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('ceo/lowongan/tambah_lowongan') ?>"><i class="fas fa-plus"></i> Tambah</a>
						
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Nama Perusahaan</th>
										<th>Jabatan</th>
										<th>Kota</th>
										<th>Provinsi</th>
										<th>Keterangan</th>
										<th style="text-align: center;">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($lowongan as $data): ?>
									<tr>
										<td width="150">
											<?= $data["nama_perusahaan"]; ?>
										</td>
										<td>
											<?= $data["nama_jabatan"]; ?>
										</td>
										<td>
											<?= $data["kota"]; ?>
										</td>
										<td>
											<?= $data["provinsi"]; ?>
										</td>
										<td>
											<?= $data["keterangan"]; ?>
										</td>
										<td width="250" style="text-align: right;">
											<a href="<?= base_url(); ?>index.php/ceo/lowongan/ubah_guru/<?= $data["noid"]?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?= base_url(); ?>index.php/ceo/lowongan/hapus/<?= $data["noid"]?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>
			<!-- /.container-fluid -->
<br>
<br>
<br>
			

		</div>
		<!-- /.content-wrapper -->

	</div>
	<!-- /#wrapper -->

	<?php $this->load->view("ceo/_partials/scrolltop.php") ?>
	<?php $this->load->view("ceo/_partials/modal.php") ?>

	<?php $this->load->view("ceo/_partials/js.php") ?>

	<script>
	function deleteConfirm(url){
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
	}
	</script>
</body>

</html>
