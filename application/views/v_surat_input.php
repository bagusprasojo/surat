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
				
			<div class="card-body">
				<form action="<?php echo site_url('surat/add/') ?>" method="post" enctype="multipart/form-data" >
					<input type="hidden" name="surat_id" value="<?php echo $surat->surat_id?>" />
					<input type="hidden" name="username" value="<?php echo $surat->username?>" />
					
					<div class="form-group">
						<label for="nama">Nomor*</label>
						<input class="form-control <?php echo form_error('nomor') ? 'is-invalid':'' ?>"
							type="text" name="nomor" placeholder="Nomor" value="<?php echo $surat->nomor ?>"/>
						<div class="invalid-feedback">
							<?php echo form_error('nomor') ?>
						</div>
					</div>

					<div class="form-group">
						<label for="tanggal">Tanggal*</label>
						<input class="form-control <?php echo form_error('tanggal') ? 'is-invalid':'' ?>"
							type="date" name="tanggal" min="0" value="<?php echo $surat->tanggal ?>"/>
						<div class="invalid-feedback">
							<?php echo form_error('tanggal') ?>
						</div>
					</div>

					<div class="form-group">
						<label for="kepada">Kepada*</label>
						<input class="form-control <?php echo form_error('kepada') ? 'is-invalid':'' ?>"
							type="text" id="kepada" name="kepada" placeholder="Kepada" value="<?php echo $surat->kepada  ?>"/>
						<div class="invalid-feedback">
							<?php echo form_error('kepada') ?>
						</div>
					</div>				

					<div class="form-group">
						<label for="name">Keterangan*</label>
						<textarea rows="5" class="form-control <?php echo form_error('keterangan') ? 'is-invalid':'' ?>"
							name="keterangan" placeholder="Keterangan surat ..."><?php echo $surat->keterangan ?></textarea>
						<div class="invalid-feedback">
							<?php echo form_error('keterangan') ?>
						</div>
					</div>
					
					<input class="btn btn-success" type="submit" name="btn" value="Save" />
					<input class="btn btn-success" type="reset" name="btnreset" value="Reset" />
				</form>

			</div>

			<div class="card-footer small text-muted">
				* required fields
			</div>					
		
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <?php $this->load->view("_partials/footer.php") ?>
  <?php $this->load->view("_partials/modal.php") ?>
  <?php $this->load->view("_partials/js.php") ?>


    <script src="<?php echo base_url().'vendor/jquery-ui-1.12.1/jquery-ui.js'?>" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function(){
 
            $('#pembeli').autocomplete({
                source: "<?php echo site_url('surat/get_autocomplete');?>",
      
                select: function (event, ui) {
                    $('[name="pembeli"]').val(ui.item.label); 
                    $('[name="pembeli_id"]').val(ui.item.description); 
                }
            });
 
        });
    </script>

  


</body>

</html>
