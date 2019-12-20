<table border="1" width="100%">
    <tr>
		<th>ID USER</th>
		<th>USERNAME</th>
		<th>PASSWORD</th>
		<th>EMAIL</th>
		<th>ROLE</th>
		<th>Actions</th>
    </tr>
	<?php foreach($user as $U){ ?>
    <tr>
		<td><?php echo $U['ID_USER']; ?></td>
		<td><?php echo $U['USERNAME']; ?></td>
		<td><?php echo $U['PASSWORD']; ?></td>
		<td><?php echo $U['EMAIL']; ?></td>
		<td><?php echo $U['ROLE']; ?></td>
		<td>
            <a href="<?php echo site_url('user/edit/'.$U['ID_USER']); ?>">Edit</a> | 
            <a href="<?php echo site_url('user/remove/'.$U['ID_USER']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
