<html>
	<title>Add Member</title>
		<head></head>
			<body>
			<form method="post" name="edit_member" action="<?php echo base_url();?>Cmember/edit_memberOne">
				<table>
					<?php foreach($member_edit as $record){ ?>
					<tr>
						<td>name</td>
						<td></td>
						<td><input type="hidden" name="id" value="<?php echo $record->id;?>"><input type="text" name="name_member" value="<?php echo $record->name; ?>"></td>
					</tr>
					<tr>
						<td>Sex</td>
						<td></td>
						<td>
							<input type="radio" id="M" name="sex" value="M" <?php echo set_radio('sex', 'M', $record->sex == 'M'); ?>  />Male</label>
							<input type="radio" id="F" name="sex" value="F" <?php echo set_radio('sex', 'F', $record->sex == 'F'); ?>  />Female</label>
						</td>
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
