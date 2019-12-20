<?php echo form_open('barang/add'); ?>

	<div>
		NAMABARANG : 
		<input type="text" name="NAMABARANG" value="<?php echo $this->input->post('NAMABARANG'); ?>" />
	</div>
	<div>
		JENIS : 
		<input type="text" name="JENIS" value="<?php echo $this->input->post('JENIS'); ?>" />
	</div>
	<div>
		DESKRIPSI : 
		<input type="text" name="DESKRIPSI" value="<?php echo $this->input->post('DESKRIPSI'); ?>" />
	</div>
	<div>
		STATUS : 
		<input type="text" name="STATUS" value="<?php echo $this->input->post('STATUS'); ?>" />
	</div>
	<div>
		HARGA : 
		<input type="text" name="HARGA" value="<?php echo $this->input->post('HARGA'); ?>" />
	</div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>