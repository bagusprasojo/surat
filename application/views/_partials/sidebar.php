<div class="bg-light border-right" id="sidebar-wrapper">
    <div class="sidebar-heading">Sekretariat Pengwil<br>IPPAT Jateng</div>
    

	<div class="list-group">
		<a href="<?php echo site_url('/') ?>" class="list-group-item active">Home</a>
			
		<?php
			if (isset($_SESSION['user_logged'])){ 
		?>
			<a href="<?php echo site_url('user/logout') ?>" class="list-group-item ">Logout</a>
			<a href="<?php echo site_url('user') ?>" class="list-group-item">Data User</a>
			<a href="<?php echo site_url('surat') ?>" class="list-group-item">Data Surat</a>
			
		<?php
			} else {
		?>
			<a href="<?php echo site_url('user/login') ?>" class="list-group-item ">Login</a>
		<?php }?>
		
	</div>
	
</div>