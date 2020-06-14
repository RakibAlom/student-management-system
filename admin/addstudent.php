<?php 
	include 'header.php';
	include 'title.php';
 ?>


<form action="addstudent.php" method="post" enctype="multipart/form-data"> 
	<table width="60%" border="1" align="center" style="margin-top: 40px;">
		<tr>
			<td>Roll No</td>
			<td><input type="text" name="rollno" placeholder="enter your roll"></td>
		</tr>
		<tr>
			<td>Full Name</td>
			<td><input type="text" name="name" placeholder="enter your name"></td>
		</tr>
		<tr>
			<td>City</td>
			<td><input type="text" name="city" placeholder=""></td>
		</tr>
		<tr>
			<td>Parents Contact Number</td>
			<td><input type="text" name="pcon"></td>
		</tr>
		<tr>
			<td>Student Standerd</td>
			<td>
				<select name="std">
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
			<td><input type="file" name="simg"></td>
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
		$rollno = $_POST['rollno'];
		$name = $_POST['name'];
		$city = $_POST['city'];
		$pcon = $_POST['pcon'];
		$std = $_POST['std'];
		$image = $_FILES['simg']['name'];
		$tmp = $_FILES['simg']['tmp_name'];

		$con =mysqli_connect('localhost','root','','sms');

		$upload_path = '../dataimg/';
		$upload_check = move_uploaded_file($tmp,$upload_path.$image);

		if($upload_check == true){

			$sql = "INSERT INTO student (rollno,name,city,pcon,standerd,image) VALUES ('$rollno','$name','$city','$pcon','$std','$image')";

			$run = mysqli_query($con,$sql);
			if($run == true){
				echo "<script>
					alert('Registration Successfully');
				</script>";
			}else{
				echo "<script>
					alert('Registration Failed');
					window.open('studentadd.php','_self');
				</script>";
			}

		}else{
			echo "<script>
					alert('Image Uploaded Failed');
					window.open('addstudent.php','_self');
				</script>";
		}
	}

 ?>