<?php echo form_open('user_detail/edit/'.$user_detail['ID_DETAIL_USER']); ?>

	<div>
		NAMA : 
		<input type="text" name="NAMA" value="<?php echo ($this->input->post('NAMA') ? $this->input->post('NAMA') : $user_detail['NAMA']); ?>" />
	</div>
	<div>
		ALAMAT : 
		<input type="text" name="ALAMAT" value="<?php echo ($this->input->post('ALAMAT') ? $this->input->post('ALAMAT') : $user_detail['ALAMAT']); ?>" />
	</div>
	<div>
		KOTA : 
		<input type="text" name="KOTA" value="<?php echo ($this->input->post('KOTA') ? $this->input->post('KOTA') : $user_detail['KOTA']); ?>" />
	</div>
	<div>
		STATUS : 
		<input type="text" name="STATUS" value="<?php echo ($this->input->post('STATUS') ? $this->input->post('STATUS') : $user_detail['STATUS']); ?>" />
	</div>
	<div>
		ID USER : 
		<input type="text" name="ID_USER" value="<?php echo ($this->input->post('ID_USER') ? $this->input->post('ID_USER') : $user_detail['ID_USER']); ?>" />
	</div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>