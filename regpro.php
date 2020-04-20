<?php
	
	require_once('connection.php');

	if(isset($_POST['btn-save']))
	{
		$user = mysqli_real_escape_string($con,$_POST['user']);
		$email = mysqli_real_escape_string($con,$_POST['email']);
		$password = mysqli_real_escape_string($con,$_POST['password']);
		$CPassword = mysqli_real_escape_string($con,$_POST['Cpass']);

		if (empty($user) || empty($email) || empty($password) || empty($CPassword))
		{
		   echo 'Please Fill in the Blanks';
		}
		if ($password!=$CPassword)
		{
			echo 'Password Not Matched';
		}
		else
		{
			$Pass = md5($password);
			$sqli = "insert into userinfodata(user, email, password) values('$user', '$email','$Pass')";
			$result = mysqli_query($con,$sqli);

			if ($result)
			{
				echo 'Your Record Has Been Saved in the Database';
				header("location:login.php");

			}
			else
			{
				echo 'Please Check Your Query';
			}
		}


	}

?>