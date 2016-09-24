<p class="bg-success">
			<?php if($this->session->flashdata('loginSuccess')) { ?>
			<?php echo $this->session->flashdata('loginSuccess'); } ?>
				
</p>
<p class="bg-danger">
	<?php if($this->session->flashdata('loginFailed')) {?>
	<?php echo $this->session->flashdata('loginFailed'); }?>
					</p>

<h2><?php 
echo 'Welcome admin <strong>Mr.'.$this->session->userdata('userName')."</strong>";
 ?></h2>