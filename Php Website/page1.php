<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Demo</title>
	<link rel="icon" type="Image/png" href="favicon.png">
	<link rel="stylesheet" type="text/css" href="page1.css">
</head>
<body>
	<div>
	<header>Welcome User!</header>
	<form action="page2.php" method="POST">
		<fieldset>
			<legend align="right">Registration form</legend>
		<table>
			<tr>
				<td>First Name:</td>
				<td><input type="text" name="fname" ></td>
			</tr><tr>
				<td>Last Name:</td>
				<td><input type="text" name="lname"></td>
			</tr><tr>
				<td>mobile:</td>
				<td><input type="number" name="mno"></td>
			</tr><tr>
				<td>Email:</td>
				<td><input type="text" name="email"></td>
			</tr><tr>
				<td>Gender:</td>
				<td><input type="radio" name="gender" value="female" checked ><label>Female</label><br>
					<input type="radio" name="gender" value="male"><label>Male</label><br>
					<input type="radio" name="gender" value="other"><label>Other</label><br>
				</td>
			</tr>
			</table>
		<!--<select name= "state">
		<optgroup label="India"></optgroup>
			<option>Gujarat</option>
			<option>MP</option>
			<option>Up</option>
		<optgroup label="Us"></optgroup>
			<option>New Yourk</option>
			<option>LA</option>
		</select>-->
		<input class="a1" type="Submit" name="submit">
		<input class="a1" type="reset"  name="reset"><br>
		</fieldset><br>
	</form>
	</div>
</body>
</html>