<?php $this->load->view("client/_partials/navbar.php") ?>
<?php $this->load->view("client/_partials/modal.php") ?>
<section class="site-section bg-light">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-8 text-center">
            <h2 class="text-black h1 site-section-heading text-center">Cv Status</h2>
            <p class="lead">Status</p>
          </div>
        </div>
      </div>
      <div class="categoriesx">
        <center>
        <div class="text-white bg-secondary" style="width: 1110px;">
 <center>
<div class="text-white" style="width: 1000px;">
  <div class="table-responsive">
							<table class="table table-hover text-white align-middle" id="dataTable" cellspacing="0">
								<thead>
									<tr>
										<th>Nama Perusahaan</th>
										<th>Nama</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($data_cv as $data): ?>
									<tr>
										<td class="align-middle"><?= $data["nama_perusahaan"]; ?></td>
            							<td class="align-middle"><?= $data["nama"]; ?></td>
            							<td class="align-middle text-white"><i><strong><?= $data["status"]; ?></strong></i></td>
            
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
</div></center>
</div>
</center>
</div>

    </section>






<?php $this->load->view("client/_partials/modal.php") ?>

<?php $this->load->view("client/_partials/js.php") ?>
<?php $this->load->view("client/_partials/head.php") ?>