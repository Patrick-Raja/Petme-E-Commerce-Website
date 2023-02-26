<?php
session_start();

include('includes/dbconn.php');

	$myuser = mysqli_real_escape_string($con,$_POST['username']);
	$mypass = mysqli_real_escape_string($con,$_POST['password']);
		
		$sql = ("SELECT * FROM custinfo where username = '$myuser' AND password='$mypass'");
		
		$result=mysqli_query($con, $sql);
			if (mysqli_num_rows($result)>0){
				 while ($row = mysqli_fetch_assoc($result))
					 {
						$_SESSION['proprietor_id'] = $row['id'];
						$_SESSION['proprietor_name'] = $row['name'];
						$_SESSION['email'] = $row['email'];
						$_SESSION['phone'] = $row['contact'];
						$_SESSION['cusername'] = $row['username']; //get username
						$_SESSION['cpassword'] = $row['password']; //get password
					 }
					 header("location:index.php");
			}else{
				
			echo '<script>
					window.alert("Your not registered user!")
				</script>';
			}
		mysqli_close($con);
?>