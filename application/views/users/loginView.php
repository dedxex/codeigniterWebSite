<?php
		if($this->session->userdata('isLoggedIn') || $this->session->flashdata('hideLoginView'))
		{ ?>
		<?php  
		 }
		else
		{
		$attribute=array('id'=>'loginForm','class'=>'form-horizontal','role'=>'form'); 

		$inputData=array(
		'name'=>'username',
		'class'=>'form-control',
		'placeholder'=>'Enter Username',
		); 

		$inputPassword=array(
		'name'=>'password',
		'class'=>'form-control',
		'placeholder'=>'Enter Password',
		);

		$CPassword=array(
		'name'=>'Cpassword',
		'class'=>'form-control',
		'placeholder'=>'Again Enter your Password',
		);
		?>	<h2>Login Now</h2>

		<?php
				if($this->session->flashdata('error'))
				{
				echo $this->session->flashdata('error');
				}
				echo form_open('home/login',$attribute);	?>

				<div class="form-group">

				<?php
				echo form_label('UserName');

				echo form_input($inputData); ?>
				</div>
				<div class="form-group">

				<?php 
				echo form_label('Password');
				echo form_password($inputPassword);
				?>

				</div>

				<div class="form-group">
				<?php 
				$inputSubmit=array(
				'name'=>'submit',
				'class'=>'btn btn-primary',
				'value'=>'Login',
				);
				echo form_submit($inputSubmit);
				?>

				</div>
				<?php echo form_close(); 
			}
	?>
	
	