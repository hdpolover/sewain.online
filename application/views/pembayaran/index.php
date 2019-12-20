<table border="1" width="100%">
    <tr>
		<th>ID PEMBAYARAN</th>
		<th>ID TRAKSAKSI</th>
		<th>STATUS</th>
		<th>TGL BAYAR</th>
		<th>Actions</th>
    </tr>
	<?php foreach($pembayaran as $P){ ?>
    <tr>
		<td><?php echo $P['ID_PEMBAYARAN']; ?></td>
		<td><?php echo $P['ID_TRAKSAKSI']; ?></td>
		<td><?php echo $P['STATUS']; ?></td>
		<td><?php echo $P['TGL_BAYAR']; ?></td>
		<td>
            <a href="<?php echo site_url('pembayaran/edit/'.$P['ID_PEMBAYARAN']); ?>">Edit</a> | 
            <a href="<?php echo site_url('pembayaran/remove/'.$P['ID_PEMBAYARAN']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
