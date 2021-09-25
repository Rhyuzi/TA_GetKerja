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

        <div class="row" style="margin-top:20px;margin-bottom:20px;">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="card float-center bg-light">
            <div class="card-header">
                Edit Data Bidang
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="nip">Nama Bidang :</label>
                        <input class="form-control" id="nama_perusahaan" type="text" name="nama_bidang" autocomplete="off" value="<?php echo set_value('nama_bidang', $bidang->nama_bidang); ?>">
                        <small class="form-text text-danger"><?= form_error('nama_bidang');?></small>
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
<?php $this->load->view("admin/_partials/modal.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>
    
</body>
</html>
