<table border="1" width="100%">
    <tr>
		<th>ID TRAKSAKSI</th>
		<th>ID SEWAAN</th>
		<th>ID USER</th>
		<th>TGL TRANSAKSI</th>
		<th>LAMA SEWA</th>
		<th>TOTAL TARIF</th>
		<th>Actions</th>
    </tr>
	<?php foreach($transaksi_sewa as $T){ ?>
    <tr>
		<td><?php echo $T['ID_TRAKSAKSI']; ?></td>
		<td><?php echo $T['ID_SEWAAN']; ?></td>
		<td><?php echo $T['ID_USER']; ?></td>
		<td><?php echo $T['TGL_TRANSAKSI']; ?></td>
		<td><?php echo $T['LAMA_SEWA']; ?></td>
		<td><?php echo $T['TOTAL_TARIF']; ?></td>
		<td>
            <a href="<?php echo site_url('transaksi_sewa/edit/'.$T['ID_TRAKSAKSI']); ?>">Edit</a> | 
            <a href="<?php echo site_url('transaksi_sewa/remove/'.$T['ID_TRAKSAKSI']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
