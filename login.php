 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Admin Login</title>
 </head>
 <body>
 	<h1 align="center">Admin Login</h1>

 	<form action="login.php" method="POST">
		<table align="center">
			<tr>
				<td>Username</td>
				<td><input type="text" name="uname" required=""></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="pass" required=""></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><button name="login" value="Login">Login</button></td>
			</tr>
		</table>
 	</form>
 </body>
 </html>

 <?php
 	if(isset($_POST['login'])){

 		$username = $_POST['uname'];
 		$password = $_POST['pass'];

 		include 'dbcon.php';

 		$sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";

 		$run = mysqli_query($con,$sql);
 		$row = mysqli_num_rows($run);
 		if($row == 0){
 			echo "<script>
 			alert('Username or Password not match!!');
 			window.open('login.php','_self');
 			</script>";
 		}
 		else{
 			$data = mysqli_fetch_assoc($run);

 			$id = $data['id'];

 			session_start();

 			$_SESSION['uid'] = $id;

 			echo "<script>
 				window.open('admin/admindash.php','_self');
 			</script>";

 		}

 	}

 ?>