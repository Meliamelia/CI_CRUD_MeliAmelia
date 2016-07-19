<html>
	<title>Member</title>
	<head></head>
	<body>
		<h1>My Member</h1>
		<a href="<?php echo base_url();?>Cmember/form_member">Add Member</a>
		<table>
			<tr>
				<td>No</td>
				<td>Name</td>
				<td>Email</td>
				<td>Password</td>
				<td>Job Title</td>
				<td>Sex</td>
				<td>Address</td>
				<td>Action</td>
			</tr>
			<?php
				$no = 1;
				foreach($member as $record){
				$sex = $record->sex;
			?>
			<tr>
				<td><?php echo $no;?></td>
				<td><?php echo $record->name;?></td>
				<td><?php echo $record->email;?></td>
				<td><?php echo $record->pass;?></td>
				<td><?php echo $record->position;?></td>
				<td>
					<?php
						switch($sex){
						case 'M' : echo "Male";break;
						case 'F' : echo "Female";break;
						}
					?>
				</td>
				
				<td><?php echo $record->address;?></td>
				<td>
					<a href="<?php echo base_url();?>Cmember/edit_member/<?php echo $record->id;?>">Edit</a>
					<a href="<?php echo base_url();?>Cmember/delete_member/<?php echo $record->id;?>">Delete</a>
				</td>
			</tr>
			<?php $no++; }?>
		</table>
	</body>
</html>
