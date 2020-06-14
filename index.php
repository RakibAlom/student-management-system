<!DOCTYPE html>
<html>
<head>
	<title>Student Management System</title>
	<meta charset="utf-8">
</head>
<body>

	<h3 align="right" style="margin-right: 20px"><a href="login.php">Login</a></h3>
	<h1 align="center">Welcome to Student Management System</h1>
	<hr>
	<br><br>

	<form action="index.php" method="POST">
		<table width="40%" align="center" border="1"s>
			<tr>
				<td colspan="2" align="center">Student Information</td>
			</tr>
			<tr>
				<td>Student Standerd</td>
				<td>
					<select name="standerd">
						<option>1st Semester</option>
						<option>2nd Semester</option>
						<option>3rd Semester</option>
						<option>4th Semester</option>
						<option>5th Semester</option>
						<option>6th Semester</option>
						<option>7th Semester</option>
						<option>8th Semester</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Roll No</td>
				<td><input type="text" name="rollno"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><button name="submit" value="Show Info">Show Info</button></td>
			</tr>
		</table>
	</form>


</body>
</html>

<?php 
if (isset($_POST['submit'])) {
	$standerd = $_POST['standerd'];
	$rollno = $_POST['rollno'];

	include 'dbcon.php';
	include 'function.php';

	showdetails($standerd,$rollno);
}

 ?>