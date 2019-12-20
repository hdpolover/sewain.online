<?php echo form_open('user_detail/add'); ?>

	<div>
		NAMA : 
		<input type="text" name="NAMA" value="<?php echo $this->input->post('NAMA'); ?>" />
	</div>
	<div>
		ALAMAT : 
		<input type="text" name="ALAMAT" value="<?php echo $this->input->post('ALAMAT'); ?>" />
	</div>
	<div>
		KOTA : 
		<input type="text" name="KOTA" value="<?php echo $this->input->post('KOTA'); ?>" />
	</div>
	<div>
		STATUS : 
		<input type="text" name="STATUS" value="<?php echo $this->input->post('STATUS'); ?>" />
	</div>
	<div>
		ID USER : 
		<input type="text" name="ID_USER" value="<?php echo $this->input->post('ID_USER'); ?>" />
	</div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>