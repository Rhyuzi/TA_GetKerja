<?php $this->load->view("client/_partials/navbar.php") ?>
<?php $this->load->view("client/_partials/body.php") ?>
<body>

<section class="site-section bg-light">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-8 text-center">
            <h2 class="text-black h1 site-section-heading text-center">Lowongan</h2>
            <p class="lead">Lowongan</p>
            <h3 class="text-danger" ><strong><?php echo $this->session->flashdata('cv');?></strong></h3>
          </div>
        </div>
      </div>
      <div class="categoriesx">
        <center>
        <div class="text-white bg-secondary" style="width: 1110px;">
  <div style="width: 1110px;margin-top: 20px;border: 2px solid #3498db;">
         <?php foreach ($lowongan as $data): ?>
      <div style="border: 2px solid #3498db;">
      <h5><?= $data["nama_perusahaan"]; ?></h5>
      <h5>Jabatan : <?= $data["nama_jabatan"]; ?></h5>
        <h6><?= $data["kota"]; ?> <?= $data["provinsi"]; ?></h6>
        <h6></h6>
        <h6><?= $data["keterangan"]; ?></h6> 
        <a href="<?= base_url(); ?>index.php/client/cv/tambah_cv/<?= $data["noid"]?>" class="btn btn-primary btn-outline-success text-white" style="margin-left: 90%;">Kirim CV</a> 
        </div>
      <?php endforeach; ?>  
  </div>
</div>
</center>
</div>

    </section>


</body>

 
<?php $this->load->view("client/_partials/modal.php") ?>
<?php $this->load->view("client/_partials/js.php") ?>
<?php $this->load->view("client/_partials/head.php") ?>
