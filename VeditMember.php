<html>
	<title>Add Member</title>
		<head></head>
			<body>
			<form method="post" name="add_member" action="<?php echo base_url();?>Cmember/add_member">
				<table>
					<?php foreach($member_edit as $record){ ?>
					<tr>
						<td>name</td>
						<td></td>
						<td><input type="text" name="name_member" value="<?php echo $record->name; ?>"></td>
					</tr>
					<tr>
						<td>Address</td>
						<td></td>
						<td><textarea name="address_member"><?php echo $record->address; ?></textarea></td>
					</tr>
					<tr>
						<td colspan="3"><input type="submit" name="submit" value="Save"></td>
					</tr>
					<?php } ?>
				</table>
			</form>
			
			<a href="<?php echo base_url();?>Cmember">Member</a>
			</body>
</html>