<?php 
	include 'header.php';
	include 'title.php';
 ?>
 <table align="center"  style="margin-top: 10px;">

		 <form action="updatestudent.php" method="post">
		 	<tr>
		 		<td>Select Standard</td>
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
	 			<td>Student Name</td>
	 			<td>
	 				<input type="text" name="stuname" placeholder="enter student name" required="">
	 			</td>
	 			<td><button name="submit" value="search">Search</button></td>
	 		</tr>
	 </form>
</table>

<table align="center" width="80%" border="1" style="margin-top: 10px;">
	<tr style="background-color: black; color: white;">
		<th>No</th>
		<th>Image</th>
		<th>Name</th>
		<th>Roll No</th>
		<th>Edit</th>
	</tr>
	<?php 
		if (isset($_POST['submit'])) {
			include '../dbcon.php';

			$standerd = $_POST['standerd'];
			$name = $_POST['stuname'];

			$sql = "SELECT * FROM student WHERE standerd = '$standerd' AND name LIKE '%$name%'";
			$run = mysqli_query($con,$sql);
			if(mysqli_num_rows($run) == 0){
				echo "no records found";
			}
			else{ 

				$count=0;
				while ($data = mysqli_fetch_assoc($run)){
					$count++;
				?>
			
					<tr>
						<td><?php echo $count; ?></td>
						<td><img style="max-width:100px;" src="../dataimg/<?php echo $data['image']; ?>"></td>
						<td><?php echo $data['name']; ?></td>
						<td><?php echo $data['rollno']; ?></td>
						<td><a href="updateform.php?rakib=<?php echo $data['id']; ?>">Edit</a></td>
					</tr>
			
		<?php	
			} 
		}
			
		}
	?>
</table> 
</body>
</html>