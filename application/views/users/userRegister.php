<?php
	

		$attribute=array('id'=>'signupForm','class'=>'form-vertical','role'=>'form'); 

		$inputUserName=array(
		'name'=>'username',
		'class'=>'form-control',
		'placeholder'=>'Enter Username',
		); 

		$inputUserPassword=array(
		'name'=>'password',
		'class'=>'form-control',
		'placeholder'=>'Enter Password',
		);

		$inputPassword=array(
		'name'=>'cPassword',
		'class'=>'form-control',
		'placeholder'=>'Confirm your Password',
		);

		$inputFirstName=array(
		'name'=>'firstname',
		'class'=>'form-control',
		'placeholder'=>'Firstname',
		);
		
		$inputLastName=array(
		'name'=>'lastname',
		'class'=>'form-control',
		'placeholder'=>'Lastname',
		);

		$inputEmail=array(
		'name'=>'email',
		'class'=>'form-control',
		'placeholder'=>'Email Address',
		);		

		?>	<h2>Register here</h2>
		<?php
			
				// if($this->session->flashdata('errors'))
				// {
				// echo $this->session->flashdata('errors');
				// }
				echo form_open('home/register',$attribute);	?>

				<div class="form-group">

				<?php
				echo form_input($inputUserName); ?>
				</div>


				<div class="form-group">

				<?php
				echo form_input($inputLastName); ?>
				</div>

				<div class="form-group">

				<?php
				echo form_input($inputFirstName); ?>
				</div>

				<div class="form-group">

				<?php
				echo form_input($inputEmail); ?>
				</div>
				
				<div class="form-group">
				<?php 
				echo form_password($inputUserPassword);
				?>
				</div>

				<div class="form-group">
				<?php 
				echo form_password($inputPassword);
				?>
				</div>

				<div class="form-group">
				<?php 
				$inputSubmit=array(
				'name'=>'submit',
				'class'=>'btn btn-primary',
				'value'=>'Signup',
				);
				echo form_submit($inputSubmit);
				?>
				</div>
				<?php echo form_close(); 
	?>