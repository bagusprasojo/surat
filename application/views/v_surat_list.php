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
			<?php $this->load->view("_partials/breadcrumb.php") ?>
		</div>
			
	  
      <!-- DataTables -->
				
					<div class="card-header">
						<a href="<?php echo site_url('surat/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<form action="<?php echo site_url('surat/index/'); ?>" method="post">
							<p>
								Nomor / Kepada / Keterangan <input value="<?php echo $nomor_transaksi?>" type="search" name="cari" placeholder="Search Keyword..."> <input type="submit" name="btn_submit" value="Search">
							</p>

							<table class="table table-sm table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>No</th>
										<th>Nomor</th>
										<th>Tanggal</th>
										<th>Kepada</th>
										<th>Keterangan</th>
										<th>User Input</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php 
										$no = $this->uri->segment('3') + 1;
										foreach ($surats as $surat): 
									?>
									<tr>
										<td>
											<?php echo $no++ ?>
										</td>
										
										<td width="110"> 
											<?php echo $surat->nomor ?>
										</td>
										<td width="100">
											<?php echo $surat->tanggal ?>
										</td>
										<td width="150">
											<?php echo $surat->kepada ?>
										</td>
										<td>
											<?php echo $surat->keterangan ?>
										</td>
										<td>
											<?php echo $surat->username ?>
										</td>
										<td width="150">
											<a href="<?php echo site_url('surat/edit/'.$surat->surat_id) ?> "
											class="btn btn-primary"> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('surat/delete/'.$surat->surat_id) ?>')"
												href="#!" class="btn btn-danger">Hapus</a>
											
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
							</form>
							<br/>
							<?php 
							echo $pagination;
							?>

							
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

  
  <script>
		function deleteConfirm(url){
			$('#btn-delete').attr('href', url);
			$('#deleteModal').modal();
		}
	</script>

</body>

</html>
