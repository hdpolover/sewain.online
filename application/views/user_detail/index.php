<table border="1" width="100%">
    <tr>
		<th>ID DETAIL USER</th>
		<th>NAMA</th>
		<th>ALAMAT</th>
		<th>KOTA</th>
		<th>STATUS</th>
		<th>ID USER</th>
		<th>Actions</th>
    </tr>
	<?php foreach($user_detail as $U){ ?>
    <tr>
		<td><?php echo $U['ID_DETAIL_USER']; ?></td>
		<td><?php echo $U['NAMA']; ?></td>
		<td><?php echo $U['ALAMAT']; ?></td>
		<td><?php echo $U['KOTA']; ?></td>
		<td><?php echo $U['STATUS']; ?></td>
		<td><?php echo $U['ID_USER']; ?></td>
		<td>
            <a href="<?php echo site_url('user_detail/edit/'.$U['ID_DETAIL_USER']); ?>">Edit</a> | 
            <a href="<?php echo site_url('user_detail/remove/'.$U['ID_DETAIL_USER']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
