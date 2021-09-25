<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>


	


	
	<div class="row" style="margin-top:20px;margin-bottom:20px;">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="card float-center bg-light">
            <div class="card-header">
                Edit Data Guru
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="nip">Nama Perusahaan :</label>
                        <input class="form-control" id="nama_perusahaan" type="text" name="nama_perusahaan" autocomplete="off" value="<?= $edit["nama_perusahaan"]; ?>">
                        <small class="form-text text-danger"><?= form_error('nama_perusahaan');?></small>
                    </div>
                    <div class="form-group">
                        <label for="nama">CEO Perusahaan :</label>
                        <input class="form-control" id="ceo_perusahaan" type="text" name="ceo_perusahaan" autocomplete="off" value="<?= $edit["ceo_perusahaan"]; ?>" >
                        <small class="form-text text-danger"><?= form_error('ceo_perusahaan');?></small>
                    </div>

                    <div class="form-group">
                        <label for="nama">Bidang Perusahaan :</label>
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
                        <textarea class="form-control" id="alamat" type="text" name="alamat" autocomplete="off" value="<?= $edit["alamat"]; ?>" ></textarea><small class="form-text text-danger"><?= form_error('alamat');?></small>
                    </div>
                    <div class="form-group">
                        <label for="nama">Kota :</label>
                        <input class="form-control" id="kota" type="text" name="kota" autocomplete="off" value="<?= $edit["kota"]; ?>" >
                        <small class="form-text text-danger"><?= form_error('kota');?></small>
                    </div>
                    <div class="form-group">
                        <label for="nama">Keterangan :</label>
                        <input class="form-control" id="keterangan" type="text" name="keterangan" autocomplete="off" value="<?= $edit["keterangan"]; ?>" >
                        <small class="form-text text-danger"><?= form_error('keterangan');?></small>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary form-control" style="margin-top:5px;">Ubah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>


		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
