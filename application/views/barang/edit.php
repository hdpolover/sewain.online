<?php echo form_open('barang/edit/'.$barang['ID_BARANG']); ?>

	<div>
		NAMABARANG : 
		<input type="text" name="NAMABARANG" value="<?php echo ($this->input->post('NAMABARANG') ? $this->input->post('NAMABARANG') : $barang['NAMABARANG']); ?>" />
	</div>
	<div>
		JENIS : 
		<input type="text" name="JENIS" value="<?php echo ($this->input->post('JENIS') ? $this->input->post('JENIS') : $barang['JENIS']); ?>" />
	</div>
	<div>
		DESKRIPSI : 
		<input type="text" name="DESKRIPSI" value="<?php echo ($this->input->post('DESKRIPSI') ? $this->input->post('DESKRIPSI') : $barang['DESKRIPSI']); ?>" />
	</div>
	<div>
		STATUS : 
		<input type="text" name="STATUS" value="<?php echo ($this->input->post('STATUS') ? $this->input->post('STATUS') : $barang['STATUS']); ?>" />
	</div>
	<div>
		HARGA : 
		<input type="text" name="HARGA" value="<?php echo ($this->input->post('HARGA') ? $this->input->post('HARGA') : $barang['HARGA']); ?>" />
	</div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>