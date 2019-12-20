<?php echo form_open('pembayaran/edit/'.$pembayaran['ID_PEMBAYARAN']); ?>

	<div>
		ID TRAKSAKSI : 
		<input type="text" name="ID_TRAKSAKSI" value="<?php echo ($this->input->post('ID_TRAKSAKSI') ? $this->input->post('ID_TRAKSAKSI') : $pembayaran['ID_TRAKSAKSI']); ?>" />
	</div>
	<div>
		STATUS : 
		<input type="text" name="STATUS" value="<?php echo ($this->input->post('STATUS') ? $this->input->post('STATUS') : $pembayaran['STATUS']); ?>" />
	</div>
	<div>
		TGL BAYAR : 
		<input type="text" name="TGL_BAYAR" value="<?php echo ($this->input->post('TGL_BAYAR') ? $this->input->post('TGL_BAYAR') : $pembayaran['TGL_BAYAR']); ?>" />
	</div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>