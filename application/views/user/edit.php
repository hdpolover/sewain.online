<?php echo form_open('user/edit/'.$user['ID_USER']); ?>

	<div>
		USERNAME : 
		<input type="text" name="USERNAME" value="<?php echo ($this->input->post('USERNAME') ? $this->input->post('USERNAME') : $user['USERNAME']); ?>" />
	</div>
	<div>
		PASSWORD : 
		<input type="text" name="PASSWORD" value="<?php echo ($this->input->post('PASSWORD') ? $this->input->post('PASSWORD') : $user['PASSWORD']); ?>" />
	</div>
	<div>
		EMAIL : 
		<input type="text" name="EMAIL" value="<?php echo ($this->input->post('EMAIL') ? $this->input->post('EMAIL') : $user['EMAIL']); ?>" />
	</div>
	<div>
		ROLE : 
		<input type="text" name="ROLE" value="<?php echo ($this->input->post('ROLE') ? $this->input->post('ROLE') : $user['ROLE']); ?>" />
	</div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>