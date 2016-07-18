<html>
	<title>Add Member</title>
		<head></head>
			<body>
			<form method="post" name="add_member" action="<?php echo base_url();?>Cmember/add_member">
				<table>
					<tr>
						<td>name</td>
						<td></td>
						<td><input type="text" name="name_member"></td>
					</tr>
					<tr>
						<td>Sex</td>
						<td></td>
						<td><input type="radio" name="sex" value="M">Male<input type="radio" name="sex" value="F">Female</td>
					</tr>
					<tr>
						<td>Address</td>
						<td></td>
						<td><textarea name="address_member"></textarea></td>
					</tr>
					<tr>
						<td colspan="3"><input type="submit" name="submit" value="Save"></td>
					</tr>
				</table>
			</form>
			<a href="<?php echo base_url();?>Cmember">Member</a>
			</body>
</html>
