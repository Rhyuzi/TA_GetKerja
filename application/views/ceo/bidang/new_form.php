<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("ceo/_partials/head.php") ?>
    <?php $this->load->view("ceo/_partials/navbar.php") ?>
</head>

<body id="page-top">




<div id="wrapper">

    <?php $this->load->view("ceo/_partials/sidebar.php") ?>

    <div id="content-wrapper">

        <div class="container-fluid">

        <!-- 
        karena ini halaman overview (home), kita matikan partial breadcrumb.
        Jika anda ingin mengampilkan breadcrumb di halaman overview,
        silahkan hilangkan komentar (//) di tag PHP di bawah.
        -->
        <?php $this->load->view("ceo/_partials/breadcrumb.php") ?>


        <div class="row" style="margin-top:20px;margin-bottom:20px;">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="card float-center bg-light">
            <div class="card-header">
                Tambah Data Perusahaan
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="nip">Nama Bidang :</label>
                        <input class="form-control" id="nip" type="text" name="nama_bidang" autocomplete="off">
                        <small class="form-text text-danger"><?= form_error('nama_bidang');?></small>
                    </div>
                    <div class="form-group">
                        <input class="btn btn-success btn-block" type="submit" name="submit" value="Simpan">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-3"></div>
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
