<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
    <?php $this->load->view("admin/_partials/navbar.php") ?>
</head>

<body id="page-top">




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
                        <label for="nip">Nama Perusahaan :</label>
                        <input class="form-control" id="nip" type="text" name="nama_perusahaan" autocomplete="off">
                        <small class="form-text text-danger"><?= form_error('nama_perusahaan');?></small>
                    </div>
                    <div class="form-group">
                        <label for="nama">Ceo Perusahaan :</label>
                        <input class="form-control" id="nama" type="text" name="ceo_perusahaan" autocomplete="off">
                        <small class="form-text text-danger"><?= form_error('ceo_perusahaan');?></small>
                    </div>
                   <div class="form-group">
                        <label for="mapel">Nama Bidang :</label>
                        <select class="form-control" name="id_bidang">
                            <option value="">Bidang</option>
                            <?php foreach($data_mapel as $dm):?>
                                <option value="<?= $dm["id_bidang"]?>"><?= $dm["nama_bidang"]?></option>
                            <?php endforeach;?>
                        </select>
                        <small class="form-text text-danger"><?= form_error('id_bidang');?></small>
                    </div>
                    <div class="form-group">
                        <label for="nama">Alamat :</label>
                        <textarea class="form-control" id="alamat" name="alamat" autocomplete="off"></textarea>
                    </div>
                        <div class="form-group">
                        <label for="nama">Kota :</label>
                        <input class="form-control" id="nama" type="text" name="kota" autocomplete="off">
                        <small class="form-text text-danger"><?= form_error('kota');?></small>
                    </div>
                    
                    <div class="form-group">
                        <label for="nama">Keterangan :</label>
                        <textarea class="form-control" id="alamat" name="keterangan" autocomplete="off"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary form-control" style="margin-top:5px;">Tambah</button>
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


		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
