

	<?php $this->load->view("admin/_partials/head.php") ?>

<title>Data Perusahaan</title>
<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">



		<div id="content-wrapper">

			<div class="container-fluid">



				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/akunperusahaan/tambah') ?>"><i class="fas fa-plus"></i> Tambah</a>
						<a title="Download PDF untuk data ini." class="btn btn-secondary" style="margin-left: 800px;" href="<?php echo site_url('ReportLowongan/') ?>">Download PDF</a>
					
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Username</th>
										<th>Nama</th>
										<th style="text-align: center;">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($akunperusahaan as $data): ?>
									<tr>
										<td width="150">
											<?= $data["user_id"]; ?>
										</td>
										<td>
											<?= $data["nama"]; ?>
										</td>
										</td>
										<td width="250" style="text-align: right;">
											<a href="<?= base_url(); ?>index.php/admin/akunperusahaan/ubah/<?= $data["user_id"]?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?= base_url(); ?>index.php/admin/akunperusahaan/Hapus/<?= $data["user_id"]?>')"
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

	<?php $this->load->view("admin/_partials/scrolltop.php") ?>
	<?php $this->load->view("admin/_partials/modal.php") ?>

	<?php $this->load->view("admin/_partials/js.php") ?>

	<script>
	function deleteConfirm(url){
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
	}
	</script>
</body>

</html>
