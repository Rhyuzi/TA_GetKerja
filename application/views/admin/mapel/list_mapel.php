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



				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						
						<a title="Download PDF untuk data ini." class="btn btn-success" style="margin-left: 1050px;" href="<?php echo site_url('Reportguru/') ?>">Download PDF</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr style="text-align: center;">
										<th>Username</th>
										<th>Nama</th>
										<th>Alamat</th>
										<th>Tanggal Lahir</th>
										<th>Tempat Lahir</th>
										<th>Email</th>
										<th>No Handphone</th>
										<th style="text-align: center;">Aksi</th>

									</tr>
								</thead>
								<tbody>
									<?php foreach ($client as $data): ?>
									<tr>
										<td>
											<?php echo $data->user_id ?>
										</td>
										<td>
											<?php echo $data->nama ?>
										</td>
									
										<td>
											<?php echo $data->alamat ?>
										</td>
										<td>
											<?php echo $data->tanggal_lahir ?>
										</td>
										<td>
											<?php echo $data->tempat_lahir ?>
										</td>
										<td>
											<?php echo $data->email ?>
										</td>
										<td>
											<?php echo $data->nohp ?>
										</td>
								
										<td width="250" style="text-align: center;">
											<a href="<?php echo site_url('admin/mapels/ubah/'.$data->noid) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('admin/mapels/hapus/'.$data->noid) ?>')"
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
