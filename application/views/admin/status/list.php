<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body id="page-top">

<?php $this->load->view("admin/_partials/navbar.php") ?>

<div id="wrapper">

	<?php $this->load->view("admin/_partials/sidebar.php") ?>

	<div id="content-wrapper">

		<div class="container-fluid">

        <!-- 
        karena ini halaman overview (home), kita matikan partial breadcrumb.
        Jika anda ingin mengampilkan breadcrumb di halaman overview,
        silahkan hilangkan komentar (//) di tag PHP di bawah.
        -->
		<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

		<div class="row" style="margin-left: 20px;">
							<table width="60%" cellspacing="0">
									<tr>
										<th>ID Bidang Perusahaan</th>
										<th>Nama Bidang</th>
										<th style="text-align: center;">Aksi</th>
									</tr>
									<?php foreach ($status as $data): ?>
									<tr>
										<td>
											<?php echo $data->id_status ?>
										</td>
										<td>
											<?php echo $data->status ?>
										</td>
            
										<td width="250" style="text-align: right;">
											<a href="<?php echo site_url('admin/status/ubah/'.$data->id_status) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('admin/status/hapus/'.$data->id_status) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>
									</tr>
									<?php endforeach; ?>

							</table>
		</div>


		</div>
		<!-- /.container-fluid -->




	</div>
	<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->


<?php $this->load->view("admin/_partials/scrolltop.php") ?>
<?php $this->load->view("admin/_partials/modal.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>
    
</body>
</html>
