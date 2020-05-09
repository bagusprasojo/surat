<?php $this->load->view("_partials/head.php") ?>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view("_partials/sidebar.php") ?>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <?php $this->load->view("_partials/navigation.php") ?>
	  <div class="card-header">
			<?php //$this->load->view("_partials/breadcrumb.php") ?>
		</div>
			
	  
      <!-- DataTables -->
				
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-sm table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th width="180">Qr Code</th>
										<th width="150">Hal</th>
                    <th>Keterangan</th>
									</tr>
								</thead>
								<tbody>
                                    <tr><td rowspan="4"><img src="<?php echo base_url('photo/' . $surat->surat_id . '.png')?>"></td><td>Nomor</td><td><?php echo $surat->nomor?></td></tr>
                                    <tr><td>Tanggal</td><td><?php echo $surat->tanggal?></td></tr>
                                    <tr><td>Kepada</td><td><?php echo $surat->kepada?></td></tr>
                                    <tr><td>Keterangan</td><td><?php echo $surat->keterangan?></td></tr>
                                </tbody>
							</table>

              <table class="table table-sm table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th width="180">File 1</th>
										<th width="180">File 2</th>
										<th width="180">File 3</th>
										<th width="180">File 4</th>
										<th width="180">File 5</th>										
									</tr>
								</thead>
								<tbody>
                  <tr>
                    
                    <td><a href="<?php echo base_url("photo/surat/") . $surat->photo1 ?>"><img  class="img-thumbnail" src="<?php echo base_url("photo/surat/") . $surat->photo1 ?>"></a></td>
                    <td><a href="<?php echo base_url("photo/surat/") . $surat->photo2 ?>"><img  class="img-thumbnail" src="<?php echo base_url("photo/surat/") . $surat->photo2 ?>"></a></td>
                    <td><a href="<?php echo base_url("photo/surat/") . $surat->photo3 ?>"><img  class="img-thumbnail" src="<?php echo base_url("photo/surat/") . $surat->photo3 ?>"></a></td>
                    <td><a href="<?php echo base_url("photo/surat/") . $surat->photo4 ?>"><img  class="img-thumbnail" src="<?php echo base_url("photo/surat/") . $surat->photo4 ?>"></a></td>
                    <td><a href="<?php echo base_url("photo/surat/") . $surat->photo5 ?>"><img  class="img-thumbnail" src="<?php echo base_url("photo/surat/") . $surat->photo5 ?>"></a></td>                    
                  </tr>                    
                </tbody>
							</table>
							
							
						</div>
				</div>

			</div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <?php $this->load->view("_partials/scrolltop.php") ?>
  <?php $this->load->view("_partials/footer.php") ?>
  <?php $this->load->view("_partials/modal.php") ?>
  <?php $this->load->view("_partials/js.php") ?>
  
</body>

</html>
