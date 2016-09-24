<?php
	

		$attribute=array('id'=>'signupForm','class'=>'form-vertical','role'=>'form'); 

		$inputUserName=array(
		'name'=>'Taskname',
		'class'=>'form-control',
		'placeholder'=>'Enter Name Of Task',
		); 

		$inputLastName=array(
		'name'=>'Taskbody',
		'class'=>'form-control',
		'placeholder'=>'Task Description',
		);		

		?>	<h2>Create Task</h2>
		<?php
			
				// if($this->session->flashdata('errors'))
				// {
				// echo $this->session->flashdata('errors');
				// }
				echo form_open('tasks/createTask/',$attribute);	?>

				<div class="form-group">

				<?php
				echo form_input($inputUserName); ?>
				</div>


				<div class="form-group">

				<?php
				echo form_textarea($inputLastName); ?>
				</div>

				<!-- <div class="form-group">

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
				</div> -->

				<div class="form-group">
				<?php 
				$inputSubmit=array(
				'name'=>'submit',
				'class'=>'btn btn-primary',
				'value'=>'save',
				);
				echo form_submit($inputSubmit);
				?>
				</div>
				<?php echo form_close(); 
	?>