<?php 
	include 'header.php';
	include 'title.php';

			$sid = $_GET['rakib'];

			include '../dbcon.php';
		
			$sql = "SELECT * FROM student WHERE id='$sid'";
			$run = mysqli_query($con,$sql);
			$data = mysqli_fetch_assoc($run);





 ?>

 <form action="updateform.php" method="post" enctype="multipart/form-data"> 
	<table width="60%" border="1" align="center" style="margin-top: 40px;">
		<tr>
			<td>Roll No</td>
			<td><input type="text" name="rollno" value="<?php echo $data['rollno']; ?>"></td>
		</tr>
		<tr>
			<td>Full Name</td>
			<td><input type="text" name="name" value="<?php echo $data['name']; ?>"></td>
		</tr>
		<tr>
			<td>City</td>
			<td><input type="text" name="city" value="<?php echo $data['city']; ?>" ></td>
		</tr>
		<tr>
			<td>Parents Contact Number</td>
			<td><input type="text" name="pcon" value="<?php echo $data['pcon']; ?>"></td>
		</tr>
		<tr>
			<td>Student Standerd</td>
			<td>
				<select name="std" value="<?php echo $data['standerd']; ?>">
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
			<td>Image</td>
			<td><input type="file" name="simg" value="<?php echo $data['image']; ?>"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><button name="submit">Submit</button></td>
		</tr>
	</table>
</form>
</body>
</html> 

<?php
	if(isset($_POST['submit'])){

		$f = $_POST['rollno'];
		$a = $_POST['name'];
		$b = $_POST['city'];
		$c = $_POST['pcon'];
		$d= $_POST['std'];


	$sql = "UPDATE `student` SET `rollno`='$f',`name`='a',`city`='b',`pcon`='c',`standerd`='$d' WHERE id = '$sid'";
	$run = mysqli_query($con,$sql);
	if($run == true){
		echo "<script>
		alert('Data Updated Succesfully');
		window.open('admindash.php','_self');
		</script>";
	}else{
		echo"data updated failed";
	}
}
?>