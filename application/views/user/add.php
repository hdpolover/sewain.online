<?php echo form_open('user/add'); ?>

	<div>
		USERNAME : 
		<input type="text" name="USERNAME" value="<?php echo $this->input->post('USERNAME'); ?>" />
	</div>
	<div>
		PASSWORD : 
		<input type="text" name="PASSWORD" value="<?php echo $this->input->post('PASSWORD'); ?>" />
	</div>
	<div>
		EMAIL : 
		<input type="text" name="EMAIL" value="<?php echo $this->input->post('EMAIL'); ?>" />
	</div>
	<div>
		ROLE : 
		<input type="text" name="ROLE" value="<?php echo $this->input->post('ROLE'); ?>" />
	</div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>