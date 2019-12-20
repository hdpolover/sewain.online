<?php echo form_open('sewaan/edit/'.$sewaan['ID_SEWAAN']); ?>

	<div>
		ID BARANG : 
		<input type="text" name="ID_BARANG" value="<?php echo ($this->input->post('ID_BARANG') ? $this->input->post('ID_BARANG') : $sewaan['ID_BARANG']); ?>" />
	</div>
	<div>
		ID USER : 
		<input type="text" name="ID_USER" value="<?php echo ($this->input->post('ID_USER') ? $this->input->post('ID_USER') : $sewaan['ID_USER']); ?>" />
	</div>
	<div>
		TARIF : 
		<input type="text" name="TARIF" value="<?php echo ($this->input->post('TARIF') ? $this->input->post('TARIF') : $sewaan['TARIF']); ?>" />
	</div>
	<div>
		DURASI SEWA : 
		<input type="text" name="DURASI_SEWA" value="<?php echo ($this->input->post('DURASI_SEWA') ? $this->input->post('DURASI_SEWA') : $sewaan['DURASI_SEWA']); ?>" />
	</div>
	<div>
		STATUS : 
		<input type="text" name="STATUS" value="<?php echo ($this->input->post('STATUS') ? $this->input->post('STATUS') : $sewaan['STATUS']); ?>" />
	</div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>