

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
						<a href="<?php echo site_url('admin/perusahaan/tambah_perusahaan') ?>"><i class="fas fa-plus"></i> Tambah</a>
						<a title="Download PDF untuk data ini." class="btn btn-secondary" style="margin-left: 800px;" href="<?php echo site_url('ReportPerusahaan/') ?>">Download PDF</a>
						
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Nama Perusahaan</th>
										<th>CEO</th>
										<th>Bidang</th>
										<th>Alamat</th>
										<th>Kota</th>
										<th>Keterangan Perusahaan</th>
										<th style="text-align: center;">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($data_guru as $data): ?>
									<tr>
										<td class="align-middle"><?= $data["nama_perusahaan"]; ?></td>
            							<td class="align-middle"><?= $data["ceo_perusahaan"]; ?></td>
            							<td class="align-middle"><?= $data["nama_bidang"]; ?></td>
            							<td class="align-middle"><?= $data["alamat"]; ?></td>
            							<td class="align-middle"><?= $data["kota"]; ?></td>
            							<td class="align-middle"><?= $data["keterangan"]; ?></td>
            
										<td width="250" style="text-align: right;">
											<a href="<?= base_url(); ?>index.php/admin/perusahaan/ubah_guru/<?= $data["noid"]?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?= base_url(); ?>index.php/admin/perusahaan/hapusDataGuru/<?= $data["noid"]?>')"
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
