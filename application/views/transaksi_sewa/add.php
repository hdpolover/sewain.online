<?php echo form_open('transaksi_sewa/add'); ?>

	<div>
		ID SEWAAN : 
		<input type="text" name="ID_SEWAAN" value="<?php echo $this->input->post('ID_SEWAAN'); ?>" />
	</div>
	<div>
		ID USER : 
		<input type="text" name="ID_USER" value="<?php echo $this->input->post('ID_USER'); ?>" />
	</div>
	<div>
		TGL TRANSAKSI : 
		<input type="text" name="TGL_TRANSAKSI" value="<?php echo $this->input->post('TGL_TRANSAKSI'); ?>" />
	</div>
	<div>
		LAMA SEWA : 
		<input type="text" name="LAMA_SEWA" value="<?php echo $this->input->post('LAMA_SEWA'); ?>" />
	</div>
	<div>
		TOTAL TARIF : 
		<input type="text" name="TOTAL_TARIF" value="<?php echo $this->input->post('TOTAL_TARIF'); ?>" />
	</div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>