<div class="container">  
	<div class="row"> 
		<h1>Example: Form Validation in CodeIgniter</h1>
		<div class="col-xs-4">
			<?php echo form_open();?>
			<div class="form-group">
				<label for="name">Name:</label>
				<input type="text" name="name" class="form-control" value="<?php echo $this->input->post('name'); ?>" />
				<?php echo form_error('name');  ?>
			</div>
			<div class="form-group">
				<label for="email">Email:</label>
				<input type="text" name="email" class="form-control" value="<?php echo $this->input->post('email'); ?>" />
				<?php echo form_error('email');  ?>
			</div>
			<div class="form-group">
				<label for="password">Password:</label>
				<input type="password" name="password" class="form-control" value="<?php echo $this->input->post('password'); ?>" />
				<?php echo form_error('password');  ?>
			</div>
			<div class="form-group">
				<label for="cpassword">Confirm Password:</label>
				<input type="password" name="cpassword" class="form-control" value="<?php echo $this->input->post('cpassword'); ?>" />
				<?php echo form_error('cpassword');  ?>
			</div>
			<div class="form-group">
				<label for="website">Website:</label>
				<input type="text" name="website_url" class="form-control" value="<?php echo $this->input->post('website_url'); ?>" />
				<?php echo form_error('website_url');  ?>
			</div>
			<div class="form-group"><input class="btn btn-success" type="submit"/> </div>
			<?php echo  form_close();?>
		</div>
	</div>
</div>