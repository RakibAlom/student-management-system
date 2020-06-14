<?php 

	function showdetails($standerd,$rollno){
 	include 'dbcon.php';

 	$sql = "SELECT * FROM `student` WHERE `rollno` ='$rollno' AND `standerd` = '$standerd'";

 	$run = mysqli_query($con,$sql);

 	if(mysqli_num_rows($run) > 0){
 		$data = mysqli_fetch_assoc($run);
 		?>

 		<table border="1" width="80%" align="center" style="margin-top: 20px;">
 			<tr>
 				<th colspan="3">Studnet Details</th>
 			</tr>
 			<tr align="left">
 				<td rowspan="5" align="center"><img style="max-height: 150px; max-width: 120px;"> src="dataimg/<?php echo $data['image']; ?>"></td>
 				<th>Roll No</th>
 				<td><?php echo $data['rollno']; ?></td>
 			</tr>
 			<tr align="left">
 				<th>Name</th>
 				<td><?php echo $data['name']; ?></td>
 			</tr>
 			<tr align="left">
 				<th>Standerd</th>
 				<td><?php echo $data['standerd']; ?></td>
 			</tr>
 			<tr align="left">
 				<th>Parent's Contact No</th>
 				<td><?php echo $data['pcon']; ?></td>
 			</tr>
 			<tr align="left">
 				<th>City</th>
 				<td><?php echo $data['city']; ?></td>
 			</tr>
 		</table>

 		<?php
 	}
 	else{
 		echo "<script>alert('No Student Record');</script>";
 	}
 }

 ?>
