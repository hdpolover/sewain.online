<?php echo form_open('sewaan/add'); ?>

	<div>
		ID BARANG : 
		<input type="text" name="ID_BARANG" value="<?php echo $this->input->post('ID_BARANG'); ?>" />
	</div>
	<div>
		ID USER : 
		<input type="text" name="ID_USER" value="<?php echo $this->input->post('ID_USER'); ?>" />
	</div>
	<div>
		TARIF : 
		<input type="text" name="TARIF" value="<?php echo $this->input->post('TARIF'); ?>" />
	</div>
	<div>
		DURASI SEWA : 
		<input type="text" name="DURASI_SEWA" value="<?php echo $this->input->post('DURASI_SEWA'); ?>" />
	</div>
	<div>
		STATUS : 
		<input type="text" name="STATUS" value="<?php echo $this->input->post('STATUS'); ?>" />
	</div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>