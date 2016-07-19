<html>
	<title>Add Member</title>
		<head></head>
			<body>
			<form method="post" name="add_member" action="<?php echo base_url();?>Cmember/add_member">
				<h2>Form Member</h2>
				<table>
					<tr>
						<td>Name</td>
						<td></td>
						<td><input type="text" name="name_member"></td>
					</tr>
					<tr>
						<td>Email</td>
						<td></td>
						<td><input type="email" name="email_member"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td></td>
						<td><input type="password" name="pass_member"></td>
					</tr>
					<tr>
						<td>Position</td>
						<td></td>
						<td>
							<select name="position_member">
								<option value="">Select</option>
								<option value="Senior Web Developer">Senior Web Developer</option>
								<option value="Junior Web Developer">Junior Web Developer</option>
								<option value="Senior Android Developer">Senior Android Developer</option>
								<option value="Junior Android Developer">Junior Android Developer</option>
								<option value="Senior IOs Developer">Senior IOs Developer</option>
								<option value="Junior IOs Developer">Junior IOs Developer</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Sex</td>
						<td></td>
						<td><input type="radio" name="sex_member" value="M">Male<input type="radio" name="sex" value="F">Female</td>
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
