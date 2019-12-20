<table border="1" width="100%">
    <tr>
		<th>ID BARANG</th>
		<th>NAMABARANG</th>
		<th>JENIS</th>
		<th>DESKRIPSI</th>
		<th>STATUS</th>
		<th>HARGA</th>
		<th>Actions</th>
    </tr>
	<?php foreach($barang as $B){ ?>
    <tr>
		<td><?php echo $B['ID_BARANG']; ?></td>
		<td><?php echo $B['NAMABARANG']; ?></td>
		<td><?php echo $B['JENIS']; ?></td>
		<td><?php echo $B['DESKRIPSI']; ?></td>
		<td><?php echo $B['STATUS']; ?></td>
		<td><?php echo $B['HARGA']; ?></td>
		<td>
            <a href="<?php echo site_url('barang/edit/'.$B['ID_BARANG']); ?>">Edit</a> | 
            <a href="<?php echo site_url('barang/remove/'.$B['ID_BARANG']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
