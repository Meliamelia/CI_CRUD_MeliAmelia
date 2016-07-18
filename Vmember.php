<html>
	<title>Member</title>
	<head></head>
	<body>
		<h1>My Member</h1>
		<a href="<?php echo base_url();?>Cmember/member">Add Member</a>
		<table>
			<tr>
				<td>No</td>
				<td>Name</td>
				<td>Address</td>
				<td>Action</td>
			</tr>
			<?php
				$no = 1;
				foreach($member as $record){
			?>
			<tr>
				<td><?php echo $no;?></td>
				<td><?php echo $record->name;?></td>
				<td><?php echo $record->address;?></td>
				<td>
					<a href="<?php echo base_url();?>Cmember/edit_member">Edit</a>
					<a href="<?php echo base_url();?>Cmember/delete_member ">Delete</a>
				</td>
			</tr>
			<?php $no++; }?>
		</table>
	</body>
</html>