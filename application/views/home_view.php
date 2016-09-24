<p class="bg-success">
			<?php if($this->session->flashdata('loginSuccess')) { ?>
			<?php echo $this->session->flashdata('loginSuccess'); } ?>
				
</p>
<p class="bg-danger">
	<?php if($this->session->flashdata('loginFailed')) {?>
	<?php echo $this->session->flashdata('loginFailed'); }?>
	<?php 
	if($this->session->flashdata('noAccess')){
		echo $this->session->flashdata('noAccess');
		} ?>
					</p>
<h2>Welcome to Home Page</h2>