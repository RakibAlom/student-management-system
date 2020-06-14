<?php

	$con = mysqli_connect('localhost','root','','sms');

	if(!$con){
		echo "<script>
			alert('Database not Connected');
		</script>";
	}

?>